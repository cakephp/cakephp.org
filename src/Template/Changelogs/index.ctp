<?php
use Cake\Utility\String;

	$title = __('CakePHP - Build fast, grow solid | Privacy policy');
	$description = __('CakePHP Privacy Policy.');
	$this->assign('title', $title);
	$this->assign('meta', $this->Html->meta('description', $description));
	$this->assign('socialMeta', $this->Meta->socialTags(['title' => $title, 'description' => $description]));
?>

<section class="gray-stripe">
    <div class="container">
        <div class="row">
            <div class="col-md-12 title-calendar">
                <?= $this->Html->tag(
                    'h1', __(
                        'CakePHP {0}',
                        $this->Html->tag('strong', __('Changelogs'))
                    )
                )?>
            </div>
        </div>
    </div>
</section>
<section class="ptb-80">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 t-privacy">
<h3><?= __('Github') ?></h3>
<p>
    <?= __(
        'CakePHP\'s code repositories are hosted at {0}.',
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

<h3><?= __('Issues'); ?></h3>
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


<h3><?= __('Core Mailing list'); ?></h3>
<p>
    <?= implode("\n", array(
        __('Discuss new features or get involved with CakePHP\'s development.'),
        String::insert(__('Join the :mailing-list.'), array(
            'mailing-list' => '<a href="http://groups.google.com/group/cakephp-core">' . __('Core mailing list') . '</a>'
        ))
    )) ?>
</p>



<h3><?= __('Contributing'); ?></h3>
<p>
    <?= implode("\n", array(
        __('Contributing to CakePHP is easy.'),
        __(
            'Checkout the {0} for how you can get started contributing to CakePHP.',
            '<a href="http://book.cakephp.org/2.0/en/contributing/code.html">' . __('guide on contributing') . '</a>'
        )
    )) ?>
</p>

    <?php
    $sidebar = [];
    $previous = null;
    foreach ($tags as $tag) {
        preg_match('/^(?<series>\d+\.\d+).*/', $tag, $matches);
        if ((!$previous || version_compare($previous, $matches['series'], '>'))) {
            if (!empty($matches['series'])) {
                $previous = $matches['series'];
                $sidebar[] = '<li class="show-me click-me">' . __('{0} series ', $matches['series']) . '<i class="fa fa-menu fa-chevron-right"></i></li>';
            }
        }
        $sidebar[] = '<li class="hide-me">' . $this->Html->link($tag, array('action' => 'view', $tag)) . '</li>';
    }
    ?>
    <h3>Changelogs</h3>
    <ul class="changelogs"><?= implode('', $sidebar); ?></ul>

</div>
        </div>
    </div>
    </section>

<?= $this->Html->scriptBlock("
$(document).ready(function (jQuery) {
        $('.hide-me').hide();
        $('.click-me').click(function () {
            $('.hide-me').hide();
            $('.fa-chevron-down').removeClass('fa-chevron-down').addClass('fa-chevron-right');
            $('.click-me').removeClass('clicked');
            $(this).addClass('clicked');
            $(this).nextUntil('li.click-me').fadeToggle(500);
            $(this).find('.fa-chevron-right').removeClass('fa-chevron-right').addClass('fa-chevron-down');
        });
    });
", ['block' => true]);