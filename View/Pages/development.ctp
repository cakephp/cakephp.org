<div class="row">
	<div class="section">
		<div class="columns nine">
			<h1><?php echo __('Development'); ?></h1>

			<h2><?php echo __('Github'); ?></h2>
			<p>
				CakePHP's code repositories are hosted at
				<a href="http://github.com/cakephp/cakephp">github.com</a>
			</p>

			<h2><?php echo __('Lighthouse Issues'); ?></h2>
			<p>
				Found a bug? Suggest an improvement? Issue tracking for
				CakePHP can be found at 
				<a href="http://cakephp.lighthouseapp.com">lighthouse</a>
			</p>

			<h2><?php echo __('General Mailing list'); ?></h2>
			<p>
				Have a problem? Learn more about CakePHP from the fantastic 
				community. Show off a newly launched application. 
				Join the <a href="http://groups.google.com/group/cakephp">CakePHP mailing list</a>.
			</p>

			<?php
				echo $this->element('channel', array(
					'site' => 'GoogleGroup',
					'title' => __('Latest posts on the google group'),
					'count' => 4,
					'cache' => array('key' => 'cache_google_group', 'time' => '+20 minutes')
				));
			?>

			<h2><?php echo __('Core Mailing list'); ?></h2>
			<p>
				Discuss new features or get involved with
				CakePHP's development. Join the 
				<a href="http://groups.google.com/group/cakephp-core">Core mailing list</a>
			</p>
			<?php
				echo $this->element('channel', array(
					'site' => 'CoreGoogleGroup',
					'title' => __('Latest posts on the cakephp-core google group'),
					'count' => 4,
					'cache' => array('key' => 'cache_core_google_group', 'time' => '+20 minutes')
				));
			?>

			<h2><?php echo __('Contributing'); ?></h2>

			<p>Contributing to CakePHP is easy.  
			Checkout the <a href="http://book.cakephp.org/2.0/en/contributing/code.html">guide on contributing</a>
			for how you can get started contributing to CakePHP
			</p>

		</div>
		
		<div class="columns three">
			<h2><?php echo __('Changelogs'); ?></h2>
			<?php echo $this->element('versions'); ?>
		</div>

	</div>
</div>
