<?php
/**
 * @todo New contact form needs to replace $emailLegal in the sections below
 */
$title = __('CakePHP - Build fast, grow solid | Logos and Trademarks');
$description = __('CakePHP Logos and Trademark policies.');
$this->assign('title', $title);
$this->assign('meta', $this->Html->meta('description', $description));
$emailLegal = $this->Html->tag('strong', 'legal [at] cakefoundation.org');
$this->assign('socialMeta', $this->Meta->socialTags(['title' => $title, 'description' => $description]));
?>

<section class="dark-gray-stripe">
    <div class="container">
        <div class="row">
            <div class="col-md-12 title-mycake">
                <h1><?= __('CakePHP Trademark and Logo Policy') ?></h1>
            </div>
        </div>
    </div>
</section>
<section class="pb-80">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 p0 t-trademark">
                <div id="introduction" class="col-md-12 trademark">
                    <?= $this->element('trademark/sidebar') ?>
                    <?= $this->element('trademark/introduction') ?>
                    <?= $this->element('trademark/commitment') ?>
                </div>

                <?= $this->element('trademark/guidelines') ?>
                <?= $this->element('trademark/universal-considerations') ?>

                <div class="hide">
                    <?= $this->element('trademark/software') ?>
                    <?= $this->element('trademark/non-software') ?>
                </div>

                <?= $this->element('trademark/general-information') ?>
                <?= $this->element('trademark/general-considerations') ?>
            </div>
        </div>
    </div>
</section>
<?= $this->element('home/newsletter') ?>

