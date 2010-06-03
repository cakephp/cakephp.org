<div id="hot_features" class="panel">
	<p class="right" style="margin: 10px 6px"><?php echo $html->link(
		__('read about all the features', true),
		array('controller' => 'pages', 'action' => 'display', 'features')); ?></p>
	<h2><?php __('Hot Features'); ?></h2>
	<?php echo $html->image('hot-features.png', array('class' => 'image png')); ?>
	<ul class="features">
		<li><strong><?php __('No Configuration'); ?></strong> - <?php __('Set-up the database and let the magic begin'); ?></li>
		<li><strong><?php __('Extremely Simple'); ?></strong> - <?php __('Just look at the name...It\'s Cake'); ?></li>
		<li><strong><?php __('Active, Friendly Community'); ?></strong> - <?php __('Join us #cakephp on IRC. We\'d love to help you get started'); ?></li>
		<li><strong><?php __('Flexible License'); ?></strong> - <?php __('Distributed under the MIT License'); ?></li>
		<li><strong><?php __('Clean IP'); ?></strong> - <?php __('Every line of code was written by the CakePHP development team'); ?></li>
		<li><strong><?php __('Best Practices'); ?></strong> - <?php __('covering security, authentication, and session handling, among the many other features'); ?></li>
		<li><strong><?php __('Object Oriented'); ?></strong> - <?php __('Whether you are a seasoned object-oriented programmer or a beginner, you\'ll feel comfortable'); ?></li>
	</ul>
</div>