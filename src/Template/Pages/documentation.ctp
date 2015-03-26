<?php
$this->extend('/Common/secondary');
$this->assign('title', __('Documentation'));
?>
<div class="main dev">
    <div class="container-fluid docs special">
        <div class="col-md-8 col-md-offset-2">
            <p><?= __('There are two official sources of documentation for CakePHP, the Book and the API.') ?></p>
        </div>
    </div>
</div>
<div class="main">
    <div class="gray narrowbox newred gray-pattern special">
        <div class="container-fluid text-center">
            <div class="col-xs-4 col-md-2 col-lg-push-2 col-md-push-2">
                <h3>3.0</h3><br/>
                <ul class="doc-list">
                    <li><?= $this->Html->link(__('The API'), 'http://api.cakephp.org/3.0/') ?></li>
                    <li><?= $this->Html->link(__('The Book'), 'http://book.cakephp.org/3.0/') ?></li>
                </ul>
            </div>
             <div class="col-xs-4 col-lg-2 col-md-2 col-lg-push-2 col-md-push-2">
                <h3>2.6</h3><br/>
                <ul class="doc-list">
                    <li><?= $this->Html->link(__('The API'), 'http://api.cakephp.org/2.6/') ?></li>
                    <li><?= $this->Html->link(__('The Book'), 'http://book.cakephp.org/2.0/') ?></li>
                </ul>
            </div>
             <div class="col-xs-4 col-lg-2 col-md-2 col-lg-push-2 col-md-push-2">
                <h3>1.3</h3><br/>
                <ul class="doc-list">
                    <li><?= $this->Html->link(__('The API'), 'http://api.cakephp.org/1.3/') ?></li>
                    <li><?= $this->Html->link(__('The Book'), 'http://book.cakephp.org/1.3/') ?></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="main no-padding">
    <div class="container-fluid">
        <div class="col-md-8 col-lg-8 col-lg-push-2 col-md-push-2 text-left">
            <h3><?= __('Contributing'); ?></h3>
            <p>
                <?= __(
                    'The source for the CakePHP book is hosted on {0}. If you\'d like to help out improving the documentation, checkout the guide on {1}contributing to the docs{2}.',
                    '<a href="https://github.com/cakephp/cakephp">GitHub</a>',
                    '<a href="https://github.com/cakephp/docs#contributing">',
                    '</a>'
                ); ?>
            </p>
        </div>
    </div>
</div>
