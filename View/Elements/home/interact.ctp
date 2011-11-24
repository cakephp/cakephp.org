<div class="columns four">
	sexy image!
</div>
<div class="columns eight">
	<h3><?php echo __('Mailing List') ?></h3>
	<p>
		Got a question, or need some help?  Post on the [Google group]
	</p>
	<?php
		echo $this->element('channel', array(
			'site' => 'GoogleGroup',
			'title' => __('Latest posts on the google group'),
			'count' => 2,
			'cache' => array('key' => 'cache_google_group', 'time' => '+20 minutes')
		));
	?>

	<h3><?php echo __('IRC') ?></h3>
	<p>Stop by #cakephp on freenode.net and chat with other bakers.</p>

	<h3><?php echo __('Screencasts and Tutorials'); ?></h3>
	<p>View talks from previous CakeFests, screencasts and tutorials on [tv.cakephp.org]</p>
</div>
