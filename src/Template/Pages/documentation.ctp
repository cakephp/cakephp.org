<?php
$this->extend('/Common/secondary');
$this->assign('title', 'Documentation');
?>
<div class="main dev">
    <div class="container-fluid docs">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <p>There are two official sources of documentation for CakePHP, the book and the api. </p>
        </div>
    </div>
</div>
<div class="main">
    <div class="gray narrowbox newred gray-pattern">
        <div class="container-fluid text-center">
            <div class=" col-lg-2 col-md-2 col-lg-push-2 col-md-push-2">
                <h3>3.0</h3><br/>
                <ul>
                    <li><?= $this->Html->link('The API', 'http://api.cakephp.org/3.0/') ?></li>
                    <li><?= $this->Html->link('The Book', 'http://book.cakephp.org/3.0/') ?></li>
                </ul>
            </div>
             <div class=" col-lg-2 col-md-2 col-lg-push-2 col-md-push-2">
                <h3>2.0</h3><br/>
                <ul>
                    <li><?= $this->Html->link('The API', 'http://api.cakephp.org/2.0/') ?></li>
                    <li><?= $this->Html->link('The Book', 'http://book.cakephp.org/2.0/') ?></li>
                </ul>
            </div>
             <div class=" col-lg-2 col-md-2 col-lg-push-2 col-md-push-2">
                <h3>1.3</h3><br/>
                <ul>
                    <li><?= $this->Html->link('The API', 'http://api.cakephp.org/1.3/') ?></li>
                    <li><?= $this->Html->link('The Book', 'http://book.cakephp.org/1.3/') ?></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="main no-padding">
    <div class="container-fluid">
        <div class="col-md-8 col-lg-8 col-lg-push-2 col-md-push-2 text-left">
            <h3>Contributing</h3>
            <p>The source for the CakePHP book is hosted on <a href="https://github.com/cakephp/cakephp">GitHub</a>. If you'd like to help out improving the documentation, checkout the guide on <a href="https://github.com/cakephp/docs#contributing">contributing to the docs.</a></p>
        </div>
    </div>
</div>
