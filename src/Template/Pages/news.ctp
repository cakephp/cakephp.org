<?php
$this->extend('/Common/secondary');
$this->assign('title', __('News'));
?>
<div class="main dev">
    <div class="container-fluid docs news">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <?= $this->cell('News::index', [], ['cache' => false]) ?>
            <div class="clearfix"></div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6 col-lg-push-5 col-md-push-4 col-sm-push-4 col-xs-push-3">
                <div class="button-holder">
                    <div class="polygon-button-shadow"></div>
                    <a href="http://bakery.cakephp.org/articles/category/news" class="polygon-button"><?= __('Load more') ?></a>
                </div>
            </div>
        </div>
    </div>
</div>
