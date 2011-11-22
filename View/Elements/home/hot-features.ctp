<div id="hot_features" class="panel">
	<p class="right" style="margin: 10px 6px"><?php echo $this->Html->link(
		__('read about all the features'),
		array('controller' => 'pages', 'action' => 'display', 'features')); ?></p>
	<h2><?php echo __('Hot Features'); ?></h2>
	<?php echo $this->Html->image('hot-features.png', array('class' => 'image png')); ?>
	<ul class="features">
		<li><strong><?php echo __('No Configuration'); ?></strong> - <?php echo __('Set-up the database and let the magic begin'); ?></li>
		<li><strong><?php echo __('Extremely Simple'); ?></strong> - <?php echo __('Just look at the name...It\'s Cake'); ?></li>
		<li><strong><?php echo __('Active, Friendly Community'); ?></strong> - <?php echo __('Join us #cakephp on IRC. We\'d love to help you get started'); ?></li>
		<li><strong><?php echo __('Flexible License'); ?></strong> - <?php echo __('Distributed under the MIT License'); ?></li>
		<li><strong><?php echo __('Clean IP'); ?></strong> - <?php echo __('Every line of code was written by the CakePHP development team'); ?></li>
		<li><strong><?php echo __('Best Practices'); ?></strong> - <?php echo __('covering security, authentication, and session handling, among the many other features'); ?></li>
		<li><strong><?php echo __('Object Oriented'); ?></strong> - <?php echo __('Whether you are a seasoned object-oriented programmer or a beginner, you\'ll feel comfortable'); ?></li>
	</ul>
</div>