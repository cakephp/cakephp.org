<?php
/**
 * @var \App\View\AppView $this
 */
?>
<section id="recipe" class="mb0 pt-90">
	<div class="container">
		<div class="text-center">
			<h1><?= __('A recipe to succeed.') ?></h1>
			<h2><?= __('Prototype faster, Validate faster, Grow consistently.') ?></h2>
		</div>

		<div class="service-boxes recipe">
			<div class="box-services-c">
				<?= $this->Html->image('build_quickly_chiffon.svg', ['alt' => 'Build Quickly']) ?>
				<h4 class="title-small"><?= __('Build Quickly') ?></h4>
				<p>
					<?= __('Use code generation and scaffolding features to {0}.',
						$this->Html->tag('strong', __('rapidly build prototypes'))) ?>
				</p>
			</div>

			<div class="box-services-c">
				<?= $this->Html->image('no_config_chiffon.svg', ['alt' => 'No Configuration']) ?>

				<h4 class="title-small"><?= __('No Configuration') ?></h4>

				<p><?= __('No complicated XML or YAML files. Just setup your database and you\'re {0}.',
						$this->Html->tag('strong', __('ready to
								bake'))) ?></p>
			</div>

			<div class="box-services-c">
				<?= $this->Html->image('license_chiffon.svg', ['alt' => 'Friendly License']) ?>

				<h4 class="title-small"><?= __('Friendly License') ?></h4>
				<p>
					<?= __('CakePHP is licensed under the MIT license which makes it perfect for use in {0}.',
						$this->Html->tag('strong', __('Commercial applications'))) ?>
				</p>
			</div>

			<div class="box-services-c">
				<?= $this->Html->image('batteries_included_chiffon.svg', ['alt' => 'Batteries Included']) ?>

				<h4 class="title-small"><?= __('Batteries Included') ?></h4>

				<p><?= __('{0}. Translations, database access, caching,
							validation, authentication, and much more are all built into one of the original PHP MVC
							frameworks.', $this->Html->tag('strong', __('The things you need are built-in'))) ?></p>
			</div>

			<div class="box-services-c">
				<?= $this->Html->image('mvc_chiffon.svg', ['alt' => 'Clean MVC Conventions']) ?>

				<h4 class="title-small"><?= __('Clean MVC Conventions') ?></h4>

				<p>
					<?= __('Instead of having to plan where things go, CakePHP comes with a {0} to guide you in developing your application.',
						$this->Html->tag('strong', __('set of
								conventions'))) ?>
				</p>
			</div>

			<div class="box-services-c">
				<?= $this->Html->image('secure_chiffon.svg', ['alt' => 'Secure']) ?>
				<h4 class="title-small"><?= __('Secure') ?></h4>
				<p><?= __('CakePHP comes with built-in tools for input validation, CSRF protection, Form tampering protection, SQL injection prevention. CakePHP codebase itself has been audited through the {0} program.', $this->Html->link('Mozilla Secure Open Source',
                        'https://bakery.cakephp.org/2017/11/22/mozilla_sos_audit_published.html')) ?></p>
			</div>
		</div>
	</div>
</section>
