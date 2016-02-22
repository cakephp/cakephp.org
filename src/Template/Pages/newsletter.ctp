<?php
$this->extend('/Common/secondary');
$this->assign('title', __('Newsletter'));
?>
<div class="main dev">
    <div class="container-fluid docs newsletter">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <h1><?= __('Newsletter Archive') ?>
                    (<?= $this->Html->link(__('Sign up'), ['controller' => 'Pages', 'action' => 'display', 'newsletter'], ['title' => __('Past Newsletters'), 'id' => 'mc-past-responses']); ?>)
            </h1>
            <h3>
            <script language="javascript" src="http://us9.campaign-archive1.com/generate-js/?u=f380de581acd576e7d802552a&fid=13717&show=10" type="text/javascript"></script><div class="clearfix"</div>
            </h3>
    </div>
    </div>
</div>
