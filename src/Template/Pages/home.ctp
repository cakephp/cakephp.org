<?php
$title = 'CakePHP - Build fast, grow solid | PHP Framework | Home';
$description = 'CakePHP is an open-source web, rapid development framework that makes building web applications simpler, faster and require less code. It follows the model–view–controller (MVC) . Manual for beginners now available and links towards the last version.';
$this->assign('title', __($title));
$this->assign('meta', $this->Html->meta('description', __($description)));
$this->assign('socialMeta', $this->Meta->socialTags(['title' => __($title), 'description' => __($description)]));
?>

<?= $this->element('Layout/default/menu/top_bar') ?>

<?= $this->element('home/cake')?>

<?= $this->element('home/summary')?>

<?= $this->element('home/cakefest')?>

<?= $this->element('home/support')?>

<?= $this->element('home/showcase')?>

<?= $this->element('home/company_logos')?>

<?= $this->element('home/quotes')?>

<?= $this->element('home/share')?>

<?= $this->element('home/newsletter')?>
