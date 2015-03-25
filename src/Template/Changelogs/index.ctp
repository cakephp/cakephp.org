<?php
use Cake\Utility\String;

$this->extend('/Common/secondary_sidebar');
$this->assign('title', __('Development'));
?>

<h3><?= __('Github') ?></h3>
<p>
    <?= __(
        'CakePHP\'s code repositories are hosted at {0}',
        '<a href="http://github.com/cakephp/cakephp">github.com</a>'
    ) ?>
</p>

<h3><?= __('Security Issues'); ?></h3>
<p>
    <?= implode("\n", array(
        __('Found a security exploit in CakePHP? Please don\'t message the mailing list, or open an issue on Github.'),
        __('Instead, please email {0}.', '<strong>security [at] cakephp.org</strong>'),
        __('Email sent to this address are forwarded to the maintainers of CakePHP.')
    )) ?>
</p>
<p>
    <?= implode("\n", array(
        __('When a security issue is reported, we first try to confirm the vulnerability.'),
        __('Once confirmed, we\'ll do the following:')
    )) ?>
</p>
<ul>
    <li><?= __('Send acknowledgement to the reporter, that we received and confirmed the issue.'); ?></li>
    <li><?= __('Work on a patch to fix the issue.'); ?></li>
    <li><?= __('Write a post describing the vulnerability, possible exploits and provide instructions on how to apply the patch / upgrade.'); ?></li>
    <li><?= __('Apply the patch to all maintained and affected versions of CakePHP'); ?></li>
    <li><?= __('Create new packaged releases for each affected version.'); ?></li>
    <li><?= __('Publish the post on the CakePHP blog/Bakery'); ?></li>
</ul>

<h3><?= __('Continuous Integration'); ?></h3>
<p>
    <?= __(
        'CakePHP is {0} check the status of the {1} on Travis CI.',
        '<a href="https://en.wikipedia.org/wiki/Continuous_Integration">' . __('continuously integrated') . '</a>',
        '<a href="https://travis-ci.org/cakephp/cakephp">' . __('various builds') . '</a>'
    ) ?>
</p>

<h3><?= __('Github Issues'); ?></h3>
<p>
    <?= __(
        'Found a bug? Suggest an improvement? Issue tracking for CakePHP can be found at {0}.',
        '<a href="https://github.com/cakephp/cakephp/issues">Github</a>'
    ) ?>
</p>

<h3><?= __('General Mailing list'); ?></h3>
<p>
    <?= implode("\n", array(
        __('Discuss a problem you\'re having, or learn from other CakePHP developers around the globe.'),
        String::insert(__('Join the :mailing-list.'), array(
            'mailing-list' => '<a href="http://groups.google.com/group/cake-php">' . __('CakePHP mailing list') . '</a>'
        ))
    )) ?>
</p>

<?= $this->element('channel', array(
    'site' => 'GoogleGroup',
    'title' => __('Latest posts on the google group'),
    'count' => 4,
    'cache' => array('key' => 'cache_google_group', 'time' => '+20 minutes')
)) ?>

<h3><?= __('Core Mailing list'); ?></h3>
<p>
    <?= implode("\n", array(
        __('Discuss new features or get involved with CakePHP\'s development.'),
        String::insert(__('Join the :mailing-list.'), array(
            'mailing-list' => '<a href="http://groups.google.com/group/cakephp-core">' . __('Core mailing list') . '</a>'
        ))
    )) ?>
</p>

<?= $this->element('channel', array(
    'site' => 'CoreGoogleGroup',
    'title' => __('Latest posts on the cakephp-core google group'),
    'count' => 4,
    'cache' => array('key' => 'cache_core_google_group', 'time' => '+20 minutes')
)) ?>

<h3><?= __('Contributing'); ?></h3>
<p>
    <?= implode("\n", array(
        __('Contributing to CakePHP is easy.'),
        __(
            'Checkout the {0} for how you can get started contributing to CakePHP',
            '<a href="http://book.cakephp.org/2.0/en/contributing/code.html">' . __('guide on contributing') . '</a>'
        )
    )) ?>
</p>

<?php $this->start('sidebar') ?>

    <?php
    $sidebar = [];
    $previous = null;
    foreach ($tags as $tag):
        preg_match('/^(?<series>\d+\.\d+).*/', $tag, $matches);
        if (!$previous || version_compare($previous, $matches['series'], '>')):
            $previous = $matches['series'];
            $sidebar[] = '<li class="show-me click-me">' . __('{0} series', $matches['series']) . '</li>';
        endif;
        $sidebar[] = '<li class="hide-me">' . $this->Html->link($tag, array('action' => 'view', $tag)) . '</li>';
    endforeach;
    ?>

    <h3>Changelogs</h3>
    <ul><?= implode('', $sidebar); ?></ul>

<?php $this->end() ?>
