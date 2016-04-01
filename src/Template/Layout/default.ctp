<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __('CakePHP - Build fast, grow solid.');
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <meta charset="utf-8" >

    <title></title>
    <link rel="shortcut icon" href="images/favicon.png">

    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:100,300,400,600,700,900,400italic|Montserrat:400,700' rel='stylesheet'>
    <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="plugins/cake/stylesheet.css">
    <link rel="stylesheet" href="plugins/elegant_font/html_css/style.css">


    <link rel="stylesheet" href="plugins/rs-plugin/css/settings.css" media="screen">
    <link rel="stylesheet" href="plugins/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">


    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
<?= $this->element('navbar')?>
<?= $this->Flash->render() ?>
<section class="clearfix">
    <?= $this->fetch('content') ?>
</section>
<?= $this->element('footer')?>


<script src="plugins/jquery/jquery-2.1.0.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.min.js"></script>

<script src="plugins/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script src="plugins/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

<script src="plugins/jquery.appear.js"></script>
<script src="plugins/retina.min.js"></script>
<script src="plugins/stellar.min.js"></script>
<script src="plugins/sticky.min.js"></script>
<script src="plugins/owl-carousel/owl.carousel.min.js"></script>
<script src="plugins/nav/down.js"></script>

<script src="js/script.js"></script>
</body>
</html>
