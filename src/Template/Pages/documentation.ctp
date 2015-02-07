<div class="row section">
	<div class="columns twelve">
		<h1><?php echo __('Documentation'); ?></h1>

		<p>
			<?php echo __('There are two official sources of documentation for CakePHP, the book and the api.') ?>
		</p>
	</div>
</div>

<div class="row section">
	<div class="columns four">
		<h3><?php echo __('3.0'); ?></h3>

		<ul>
			<li><a href="http://api.cakephp.org/3.0"><?php echo __('The api') ?></a></li>
			<li><a href="http://book.cakephp.org/3.0/en/"><?php echo __('The book') ?></a></li>
		</ul>
	</div>

	<div class="columns four">
		<h3><?php echo __('2.0'); ?></h3>

		<ul>
			<li><a href="http://api.cakephp.org/2.5"><?php echo __('The api') ?></a></li>
			<li><a href="http://book.cakephp.org/2.0/en/"><?php echo __('The book') ?></a></li>
		</ul>
	</div>

	<div class="columns four">
		<h3><?php echo __('1.3'); ?></h3>

		<ul>
			<li><a href="http://api.cakephp.org/1.3"><?php echo __('The api') ?></a></li>
			<li><a href="http://book.cakephp.org/1.3/en/"><?php echo __('The book') ?></a></li>
		</ul>
	</div>
</div>

<div class="row section">
	<div class="columns twelve">
		<h2><?php echo __('Contributing'); ?></h2>

		<p>
			<?php echo implode("\n", array(
				__('The source for the CakePHP book is hosted on %s.', '<a href="http://github.com/cakephp/docs">github</a>'),
				__(
					'If you\'d like to help out improving the documentation, checkout the guide on %s.',
					'<a href="http://book.cakephp.org/2.0/en/contributing/documentation.html">' . __('contributing to the docs') . '</a>'
				)
			)) ?>
		</p>
	</div>
</div>
