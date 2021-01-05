<?php

namespace App\Model\Table;

use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\ORM\Table;
use Cake\Utility\Hash;

/**
 * Changelogs table
 */
class ChangelogsTable extends Table
{

    /**
     * Table to use
     *
     * @var mixed
     */
    public $useTable = false;

    /**
     * Model Settings
     *
     * @var array
     */
    protected static $_settings = [
        'repo' => null,
        'path' => null,
        'git' => '/opt/local/bin/git',
        'cacheEngine' => 'changelog',
        'sort' => [
            'regex' => '/(?<version>[\d\.]+)(?:-(?<title>[a-zA-Z]+)(?:(?<iteration>\d)?))?/',
            'titleOrder' => ['dev', 'alpha', 'beta', 'rc'],
        ],
    ];

    /**
     * Override constructor to provide customisation for settings
     *
     * @param string $id Id
     * @param string $table Table
     * @param string $ds Datasource
     */
    public function __construct($id = false, $table = null, $ds = null)
    {
        parent::__construct($id, $table, $ds);

        $git = Configure::read('Changelog.Git');
        if (!empty($git)) {
            self::$_settings['git'] = $git;
        }
    }

    /**
     * Get and Set the repository name
     *
     * @param string $repo Repository name
     * @return string
     */
    public function repository($repo = null)
    {
        if (!$repo) {
            return self::$_settings['repo'];
        }
        if (basename($repo) == $repo) {
            $repo = dirname(ROOT) . DS . $repo;
        }
        self::$_settings['repo'] = basename($repo);
        self::$_settings['path'] = dirname($repo) . DS;
    }

    /**
     * Get tags for the current repository
     *
     * @return array Tags
     */
    public function tags()
    {
        // Check the cache first
        $cached = Cache::read('changelog_tags', self::$_settings['cacheEngine']);
        if ($cached !== false) {
            return $cached;
        }

        $gitdir = escapeshellcmd($this->_gitDirectory(self::$_settings['path'], self::$_settings['repo']));
        $git = escapeshellcmd(self::$_settings['git']);
        $tags = explode("\n", trim(`$git --git-dir=$gitdir tag`));
        usort($tags, [$this, 'sort']);
        if (empty($tags)) {
            return false;
        }
        $tags = array_reverse($tags);
        Cache::write('changelog_tags', $tags);

        return $tags;
    }

    /**
     * Sort with respect to CakePHP tag naming
     *
     * @param string $from Comparison From
     * @param string $to Comparison To
     * @return string Result
     */
    public static function sort($from, $to)
    {
        $options = self::$_settings['sort'];
        preg_match($options['regex'], $from, $fromMatches);
        preg_match($options['regex'], $to, $toMatches);

        $version = version_compare($fromMatches['version'], $toMatches['version']);
        if ($version !== 0) {
            return $version;
        }

        if (!isset($fromMatches['title'])) {
            return 1;
        }
        if (!isset($toMatches['title'])) {
            return -1;
        }

        $title = array_search(strtolower($fromMatches['title']), $options['titleOrder']) - array_search(strtolower($toMatches['title']), $options['titleOrder']);
        if ($title !== 0) {
            return $title;
        }

        return version_compare(Hash::get($fromMatches, 'iteration'), Hash::get($toMatches, 'iteration'));
    }

    /**
     * Get changes for the specified tag
     *
     * @param string $tag The name of the tag.
     * @return array List of changes.
     */
    public function changes($tag)
    {
        $tags = $this->tags();
        $index = array_search($tag, $tags);
        if ($index === false) {
            return false;
        }

        // Check the cache first.
        $cached = Cache::read('commits_' . $tag, self::$_settings['cacheEngine']);
        if ($cached !== false) {
            return $cached;
        }

        $gitdir = escapeshellcmd($this->_gitDirectory(self::$_settings['path'], self::$_settings['repo']));
        $git = escapeshellcmd(self::$_settings['git']);
        $tag = escapeshellcmd($tag);
        $previous = escapeshellcmd($tags[$index + 1]);
        $commits = explode("\n", trim(`$git --git-dir=$gitdir rev-list --no-merges --oneline $tag ^$previous`));
        $changes = [];
        foreach ($commits as $commit) {
            preg_match('/^([^ ]+) (.*)$/', $commit, $matches);
            $changes[$matches[1]] = $matches[2];
        }
        Cache::write('commits_' . $tag, $changes, self::$_settings['cacheEngine']);

        return $changes;
    }

    /**
     * Construct the path to the git directory
     *
     * @param string $path Path
     * @param string $repo Repository name
     * @return string Git directory
     */
    protected function _gitDirectory($path, $repo)
    {
        $gitdir = $path . $repo;

        // If the repo name ends with '.git' we're going to assume its a bare repository.
        if (preg_match('/^.*\.git$/', $repo)) {
            return $gitdir;
        }

        return $gitdir . DS . '.git';
    }
}
