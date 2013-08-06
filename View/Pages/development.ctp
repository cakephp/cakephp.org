<div class="row">
	<div class="section">
		<div class="columns nine">
			<h1><?php echo __('Development'); ?></h1>

			<h2><?php echo __('Github'); ?></h2>
			<p>
				<?php echo __(
					'CakePHP\'s code repositories are hosted at %s',
					'<a href="http://github.com/cakephp/cakephp">github.com</a>'
				) ?>
			</p>

			<h2><?php echo __('Security Issues'); ?></h2>
			<p>
				<?php
					echo implode("\n", array(
						__('Found a security exploit in CakePHP? Please don\'t message the mailing list, or open an issue on lighthouse.'),
						__('Instead, please email %s.', '<strong>security [at] cakephp.org </strong>'),
						__('Email sent to this address are forwarded to the maintainers of CakePHP.')
					))
				?>
			</p>
			<p>
				<?php echo implode("\n", array(
					__('When a security issue is reported, we first try to confirm the vulnerability.'),
					__('Once confirmed, we\'ll do the following:')
				)); ?>
			</p>
			<ol>
				<li><?php echo __('Send acknowledgement to the reporter, that we received and confirmed the issue.'); ?></li>
				<li><?php echo __('Work on a patch to fix the issue.'); ?></li>
				<li><?php echo __('Write a post describing the vulnerability, possible exploits and provide instructions on how to apply the patch / upgrade.'); ?></li>
				<li><?php echo __('Apply the patch to all maintained and affected versions of CakePHP'); ?></li>
				<li><?php echo __('Create new packaged releases for each affected version.'); ?></li>
				<li><?php echo __('Publish the post on the CakePHP blog/Bakery'); ?></li>
			</ol>

			<h2><?php echo __('Continuous Integration'); ?></h2>
			<p>
				<?php echo __(
					'CakePHP is %s check the status of the %s on CakePHP\'s Jenkins server.',
					'<a href="https://en.wikipedia.org/wiki/Continuous_Integration">' . __('continuously integrated') . '</a>',
					'<a href="http://ci.cakephp.org">' . __('various builds') . '</a>'
				); ?>
			</p>

			<h2><?php echo __('Lighthouse Issues'); ?></h2>
			<p>
				<?php echo __(
					'Found a bug? Suggest an improvement? Issue tracking for CakePHP can be found at %s.',
					'<a href="http://cakephp.lighthouseapp.com">lighthouse</a>'
				) ?>
			</p>

			<h2><?php echo __('General Mailing list'); ?></h2>
			<p>
				<?php echo implode("\n", array(
					__('Discuss a problem you\'re having, or learn from other CakePHP developers around the globe.'),
					String::insert(__('Join the :mailing-list.'), array(
						'mailing-list' => '<a href="http://groups.google.com/group/cake-php">' . __('CakePHP mailing list') . '</a>'
					))
				)) ?>
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
				<?php echo implode("\n", array(
					__('Discuss new features or get involved with CakePHP\'s development.'),
					String::insert(__('Join the :mailing-list.'), array(
						'mailing-list' => '<a href="http://groups.google.com/group/cakephp-core">' . __('Core mailing list') . '</a>'
					))
				)) ?>
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

			<p>
				<?php echo implode("\n", array(
					__('Contributing to CakePHP is easy.'),
					__(
						'Checkout the %s for how you can get started contributing to CakePHP',
						'<a href="http://book.cakephp.org/2.0/en/contributing/code.html">' . __('guide on contributing') . '</a>'
					)
				)) ?>
			</p>

		</div>

		<div class="columns three">
			<h2><?php echo __('Changelogs'); ?></h2>
			<?php echo $this->element('versions'); ?>
		</div>

	</div>
</div>
