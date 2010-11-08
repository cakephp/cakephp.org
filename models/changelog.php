<?php
/**
 * Changelog Model
 *
 * @package app
 * @subpackage app.models
 */
class Changelog extends AppModel {

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
	protected static $_settings = array(
		'repo' => null,
		'path' => null,
		'git' => '/opt/local/bin/git',
		'cacheEngine' => 'changelog',
		'sort' => array(
			'regex' => '/(?<version>[\d\.]+)(?:-(?<title>[a-zA-Z]+)(?:(?<iteration>\d)?))?/',
			'titleOrder' => array('dev', 'alpha', 'beta', 'rc'),
		)
	);

/**
 * Get and Set the repository name
 *
 * @param string $repo Repository name
 * @return string
 */
	public function repository($repo = null) {
		if (!$repo) {
			return self::$_settings['repo'];
		}
		if (basename($repo) == $repo) {
			$repo = TMP . $repo;
		}
		self::$_settings['repo'] = basename($repo);
		self::$_settings['path'] = dirname($repo) . DS;
	}

/**
 * Get tags for the current repository
 *
 * @return array Tags
 */
	public function tags() {
		extract(self::$_settings);

		// Check the cache first
		$cached = Cache::read('changelog_tags');
		if ($cached !== false) {
			return $cached;
		}
		
		$gitdir = escapeshellcmd($path . $repo . DS . '.git');
		$git = escapeshellcmd($git);
		$tags = explode("\n", trim(`${git} --git-dir=${gitdir} tag`));
		usort($tags, array('Changelog', 'sort'));
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
	public static function sort($from, $to) {
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

		return version_compare($fromMatches['iteration'], $toMatches['iteration']);
	}

/**
 * Get changes for the specified tag
 *
 * @param string $tag 
 * @return void
 * @author Graham Weldon
 */
	public function changes($tag) {
		$tags = $this->tags();
		$index = array_search($tag, $tags);
		if ($index === false) {
			return false;
		}
		extract(self::$_settings);

		// Check the cache first.
		$cached = Cache::read('commits_' . $tag, $cacheEngine);
		if ($cached !== false) {
			return $cached;
		}

		$gitdir = escapeshellcmd($path . $repo . DS . '.git');
		$git = escapeshellcmd($git);
		$tag = escapeshellcmd($tag);
		$previous = escapeshellcmd($tags[$index + 1]);
		$format = '';
		$commits = explode("\n", trim(`$git --git-dir=${gitdir} rev-list --no-merges --oneline ${tag} ^${previous} ${format}`));
		$changes = array();
		foreach ($commits as $commit) {
			preg_match('/^([^ ]+) (.*)$/', $commit, $matches);
			$changes[$matches[1]] = $matches[2];
		}
		Cache::write('commits_' . $tag, $changes, $cacheEngine);
		return $changes;
	}
}