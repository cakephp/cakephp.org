<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        <?= __('CakePHP: the rapid development php framework. ') ?>
        <?= $this->fetch('title') ?>
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?= $this->Html->charset(); ?>
    <?= $this->Html->meta('icon'); ?>
    <?= $this->element('ie9-jumplist'); ?>

    <?= $this->AssetCompress->css('app.css'); ?>

    <!--[if lt IE 9]><?= $this->Html->script('html5shiv'); ?><![endif]-->

    <?= $this->fetch('meta'); ?>
    <?= $this->fetch('css'); ?>
</head>
<body class="js">
    <div id="container">
        <?php echo $this->element('navbar', array(), array('plugin' => 'Csfnavbar')); ?>
        <header class="masthead">
            <div class="header-backing"></div>
            <div class="row">
                <h1 class="logo"><?php
                    echo $this->Html->image('cake-logo.png', array(
                        'alt' => 'CakePHP : the rapid development php framework',
                        'url' => '/'
                    ));
                ?></h1>
                <h2 class="tagline <?php echo (empty($headerButton)) ? 'no-button' : '' ?>">
                    <?php echo __('CakePHP makes building web applications simpler, faster and require less code.');?>
                </h2>

                <nav class="main-nav">
                    <ul class="navigation">
                        <li><?php echo $this->Html->link(__('News'), array('controller' => 'news')); ?></li>
                        <li><?php echo $this->Html->link(__('Development'), array('controller' => 'pages', 'action' => 'display', 'development')); ?></li>
                        <li><?php echo $this->Html->link(__('Documentation'), array('controller' => 'pages', 'action' => 'display', 'documentation')); ?></li>
                    </ul>
                </nav>
                <?php
                if (!empty($headerButton)):
                    echo $headerButton;
                endif;
                ?>
            </div>
        </header>

        <div id="content">
            <?= $this->Flash->render() ?>

            <?= $this->fetch('content') ?>
        </div>
        <div class="footer-push"></div>
    </div>

    <footer class="mastend clearfix">
        <div class="row">
            <nav class="seven columns">
                <ul class="footer-nav">
                    <li><?php echo $this->Html->link(__('News'), array('controller' => 'news')); ?></li>
                    <li><?php echo $this->Html->link(__('Development'), array('controller' => 'pages', 'action' => 'display', 'development')); ?></li>
                    <li><?php echo $this->Html->link(__('Documentation'), array('controller' => 'pages', 'action' => 'display', 'documentation')); ?></li>
                    <li class="download"><?php echo $this->Html->link(__('Download'), $three['link']); ?></li>
                </ul>
            </nav>
            <div class="columns three offset-by-two hosting">
                <?php echo $this->Html->link(
                    $this->Html->image('rackspace-logo.png'),
                    'http://rackspace.com',
                    array('escape' => false)); ?>

            </div>
        </div>

        <div class="row overlined">
            <div class="columns six mini">
                &copy; 2005-<?php echo date('Y'); ?> <?php echo $this->Html->link('Cake Software Foundation, Inc.', 'http://cakefoundation.org'); ?>
            </div>
            <div class="columns six mini right-align">
                <span style="display: inline-block; height: 13px;">
                    <script type="text/javascript" src="http://www.ohloh.net/projects/3176/widgets/project_thin_badge"></script>
                </span>
                <?php
                echo $this->Html->link(
                    __('Privacy Policy'),
                    array('admin' => false, 'prefix' => null, 'plugin' => null, 'controller' => 'pages', 'action' => 'privacy'));
                ?>
            </div>
        </div>
    </footer>

    <?= $this->AssetCompress->script('app.js') ?>
    <?= $this->fetch('script') ?>
    <?php //= $this->Js->writeBuffer() ?>
    <?php if(env('SERVER_ADDR') != '127.0.0.1'):?>
        <script type="text/javascript">
            var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
            document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
        </script>
        <script type="text/javascript">
            var pageTracker = _gat._getTracker("UA-743287-4");
            pageTracker._initData();
            pageTracker._trackPageview();
        </script>
    <?php endif;?>
</body>
</html>
