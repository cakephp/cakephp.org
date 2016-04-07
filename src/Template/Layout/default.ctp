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

    <?= $this->AssetCompress->css('fonts', ['raw' => true]) ?>
    <?= $this->AssetCompress->css('public') ?>


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

<?= $this->AssetCompress->script('public'); ?>
<?= $this->AssetCompress->script('not_compiled', ['raw' => true]); ?>
</body>
</html>

