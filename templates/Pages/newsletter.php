<?php

    $title = __('CakePHP - Build fast, grow solid | CakePHP latest news');
    $description = __('Latest CakePHP News.');
    $this->assign('title', $title);
    $this->assign('meta', $this->Html->meta('description', $description));
    $this->assign('socialMeta', $this->Meta->socialTags(['title' => $title, 'description' => $description]));

?>
<div class="section newsletter">
    <div class="main dev">
        <div class="container-fluid docs newsletter">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <h1 class="title-red"><?= __('Newsletter Archive') ?></h1>
                <script type="text/javascript"><?= $this->App->newsletterArchive() ?></script>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
<?= $this->element('home/newsletter')?>
