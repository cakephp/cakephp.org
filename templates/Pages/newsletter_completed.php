<?php
    /**
     * @var \App\View\AppView $this
     */

    $title = __('CakePHP - Build fast, grow solid | CakePHP Newsletter');
    $description = __('CakePHP Newsletter subscription completed confirmation page');
    $this->assign('title', $title);
    $this->assign('meta', $this->Html->meta('description', $description));
    $this->assign('socialMeta', $this->Meta->socialTags(['title' => $title, 'description' => $description]));

?>
<div class="section newsletter">
    <div class="main dev">
        <div class="container-fluid docs newsletter">
            <div class="col-md-12 text-center mt100 mb100">
                <h1 class="title-red"><?= __('Your subscription has been completed.') ?></h1>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
