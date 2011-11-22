<div id="interact" class="panel">
	<h2><?php echo __('Interact'); ?></h2>
	<?php echo $this->Html->image('interact.png', array('class' => 'image png'))?>
	<p style="margin-bottom: 8px">
		<?php echo __('The CakePHP community is vast and interacts in numerous ways.'); ?>
		<?php echo sprintf(
			__('The %s is a great forum for posting questions and comments.'),
			sprintf(
				'<strong><a href="http://groups.google.com/group/cake-php">%s</a></strong>',
				__('Google Group'))); ?>
		<?php echo sprintf(__('There are also many in the irc channel, %s, including the core developers and long time community members.'), '<strong><a href="irc://irc.freenode.net/cakephp">#cakephp on irc.freenode.net</a></strong>'); ?>
	</p>
	<?php
		echo $this->element('channel', array(
			'site' => 'GoogleGroup',
			'title' => __('Latest posts on the google group'),
			'count' => 2,
			'cache' => array('key' => 'cache_google_group', 'time' => '+20 minutes')
		));
	?>
</div>