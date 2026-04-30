<?php
    /**
     * @var \App\View\AppView $this
     */

    $title = __('CakePHP - Build fast, grow solid | CakePHP Newsletter');
    $description = __('CakePHP newsletter subscription registration confirmation page');
    $this->assign('title', $title);
    $this->assign('meta', $this->Html->meta('description', $description));
    $this->assign('socialMeta', $this->Meta->socialTags(['title' => $title, 'description' => $description]));

?>
<div class="section newsletter">
    <div class="main dev">
        <div class="container-fluid docs newsletter">
            <div class="col-md-4"></div>
            <div class="col-md-6 mt100">
                <h1 class="title-red mb50"><?= __('Confirm your subscription.') ?></h1>
                <p>
                    <?= __('We need to confirm your email address to complete the subscription process.') ?>
                </p>
                <p>
                    <?= __('Please click on the list in the email we have just sent you.') ?>
                </p>
                <p>
                    <?= __('Your subscription will not be completed unless you click the confirmation link.') ?>
                </p>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
