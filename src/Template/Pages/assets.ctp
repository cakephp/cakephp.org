<?php
/**
 * @todo New contact form needs to replace $emailLegal in the sections below
 */
$this->extend('/Common/secondary');
$this->assign('title', __('CakePHP Logos and Assets'));

echo __('See the following page for rules regarding usage of CakePHP assets:');
echo '<a href="http://cakephp.org/trademark">' . __('CakePHP Trademark and Logo Policy') . '</a>';

echo $this->element('assets');
?>
