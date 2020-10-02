<?php
$title = __('CakePHP - Build fast, grow solid | PHP Framework | Home');
$description = __('CakePHP is an open-source web, rapid development framework that makes building web applications simpler,
 faster and require less code. It follows the model–view–controller (MVC) . Manual for beginners now available and links
  towards the last version.');
$this->assign('title', $title);
$this->assign('meta', $this->Html->meta('description', $description));
$this->assign('socialMeta', $this->Meta->socialTags(['title' => $title, 'description' => $description]));
?>

<?= $this->element('home/banner')?>

<?= $this->element('home/cake')?>

<?= $this->element('home/whats_new')?>

<?= $this->element('home/summary')?>

<?= $this->element('home/share') ?>

<?= $this->element('home/support') ?>

<?= $this->element('home/showcase')?>

<?= $this->element('home/cakefest_sponsors')?>

<?= $this->element('home/newsletter')?>
