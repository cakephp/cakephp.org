<?php
$this->extend('/Common/secondary_sidebar');
$this->assign('title', 'Development');
?>

<h3>Github</h3>
<p>CakePHP's code repositories are hosted at <a href="https://github.com/cakephp">github.com</a></p>

<h3>Security Issues</h3>
<p>Found a security exploit in CakePHP? Please don't message the mailing list, or open an issue on lighthouse. Instead, please email security [at] cakephp.org . Email sent to this address are forwarded to the maintainers of CakePHP.</p>
<p>When a security issue is reported, we first try to confirm the vulnerability. Once confirmed, we'll do the following: </p>
<ul>
    <li>Send acknowledgement to the reporter, that we received and confirmed the issue.</li>
    <li>Work on a patch to fix the issue.</li>
    <li>Write a post describing the vulnerability, possible exploits and provide instructions on how to apply the patch / upgrade.</li>
    <li>Apply the patch to all maintained and affected versions of CakePHP</li>
    <li>Create new packaged releases for each affected version. </li>
    <li>Publish the post on the CakePHP blog/Bakery</li>
</ul>
<h3>Continuous Integration</h3>
<p>CakePHP is <a href="http://en.wikipedia.org/wiki/Continuous_integration">continuously integrated</a> check the status of the <a href="http://ci.cakephp.org/">various builds</a> on CakePHP's Jenkins server. </p>
<h3>Github Issues</h3>
<p>Found a bug? Suggest an improvement? Issue tracking for CakePHP can be found at <a href="https://github.com/cakephp">Github</a>.</p>
<h3>General Mailing list</h3>
<p>Discuss a problem you're having, or learn from other CakePHP developers around the globe. Join the <a href="https://groups.google.com/forum/#!forum/cake-php">CakePHP mailing list</a>.</p>
<h3>Core Mailing list</h3>
<p>Discuss new features or get involved with CakePHP's development. Join the <a href="https://groups.google.com/forum/#!forum/cakephp-core">Core mailing list</a>.</p>
<h3>Contributing</h3>
<p>Contributing to CakePHP is easy. Checkout the <a href="https://github.com/cakephp/cakephp/blob/master/CONTRIBUTING.md#how-to-contribute">guide on contributing</a> for how you can get started contributing to CakePHP </p>

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
