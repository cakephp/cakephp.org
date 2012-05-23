<?php
	$this->set('headerButton', $this->element('home/download'));
?>
	<div class="row">
		<div class="twelve columns">
			<h2><?php echo __('Why use CakePHP'); ?></h2>
		</div>
	</div>

	<div class="row why">
		<div class="four columns">
			<h3 class="icon icon-build"><?php echo __('Build Quickly'); ?></h3>
			<p>Use code generation and scaffolding features to rapidly build prototypes.</p>
		</div>

		<div class="four columns">
			<h3 class="icon icon-configuration"><?php echo __('No Configuration'); ?></h3>
			<p>No complicated XML or YAML files.  Just setup your database and you're ready to bake.</p>
		</div>

		<div class="four columns">
			<h3 class="icon icon-license"><?php echo __('Friendly License'); ?></h3>
			<p>CakePHP is licensed under the MIT license which makes it perfect for use in commercial applications.</p>
		</div>
	</div>

	<div class="row why">
		<div class="four columns">
			<h3 class="icon icon-batteries"><?php echo __('Batteries Included'); ?></h3>
			<p>The things you need are built-in.  Translations, database access, caching, validation, authentication, and much more are all built into one of the original PHP MVC frameworks.</p>
		</div>

		<div class="four columns">
			<h3 class="icon icon-mvc"><?php echo __('Clean MVC Conventions'); ?></h3>
			<p>Instead of having to plan where things go, CakePHP comes with a set of conventions to guide you in developing your application.</p>
		</div>

		<div class="four columns">
			<h3 class="icon icon-secure"><?php echo __('Secure'); ?></h3>
			<p>CakePHP comes with built-in tools for input validation, CSRF protection, Form tampering protection, SQL injection prevention, and XSS prevention, helping you keep your application safe &amp; secure.</p>
		</div>
	</div>

</div>


<div class="row section news-section">
	<div class="eight columns">
		<dl class="tabs mobile">
			<dd><a href="#news" class="active"><?php echo __('News'); ?></a></dd>
			<dd><a href="#interact"><?php echo __('Interact'); ?></a></dd>
			<dd><a href="#read-learn"><?php echo __('Read + Learn'); ?></a></dd>
		</dl>
		<ul class="tabs-content">
			<li class="active" id="newsTab">
				<?php echo $this->element('home/latest_news'); ?>
			</li>
			<li id="interactTab">
				<?php echo $this->element('home/interact'); ?>
			</li>
			<li id="read-learnTab">
				<?php echo $this->element('home/read_learn'); ?>
			</li>
		</ul>
	</div>
	<div class="cakephp-love four columns">
		<?php echo $this->element('donations'); ?>
	</div>
</div>

<div class="row section">
	<div class="columns nine">
		<h2><?php echo __('Who uses CakePHP'); ?></h2>
		<?php echo $this->element('home/slider'); ?>
	</div>
	<div class="columns three">
		<h3><?php echo __('Other sites using CakePHP'); ?></h3>
		<ul>
			<?php
			$sites = Configure::read('Sites.Using');
			shuffle($sites);
			?>
			<?php foreach ($sites as $site): ?>
			<li>
			<a target="_new" href="<?php echo h($site['url']); ?>"><?php echo h($site['name']); ?></a>
			</li>
			<?php endforeach; ?>
		</ul>
	</div>
</div>