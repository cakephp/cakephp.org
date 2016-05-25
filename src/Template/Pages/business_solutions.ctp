<?php
	$title = 'CakePHP Rapid Development PHP Framework | Business solutions';
	$description = 'CakePHP Business solutions by CakeDC, the commercial entity behind the framework.';
	$this->assign('title', __($title));
	$this->assign('meta', $this->Html->meta('description', __($description)));
	$this->assign('socialMeta', $this->Meta->socialTags(['title' => __($title), 'description' => __($description)]));
?>
<section  class="gray-stripe business-blue-back">
	<div class="container">
		<div class="row">
			<div class="col-md-8 title-calendar th1-business">
				<h1>CakePHP <strong><?= __('Business Solutions') ?></strong></h1>
			</div>
			<div class="col-md-4 title-business-dc">
				<h5><em>by:</em> <span class="glyph_range icon-business">O</span></h5>
			</div>
		</div>
	</div>
</section>

<section class="pb-80">
	<div class="container">
		<div class="row">
			<?= $this->element('business-solutions/sidebar') ?>
			<div class="col-sm-12 col-md-9 space-left">
				<div class="row blog-list business-solution-t">
					<?= $this->element('business-solutions/development') ?>

					<?= $this->element('business-solutions/consultancy') ?>

					<?= $this->element('business-solutions/code-review') ?>

					<?= $this->element('business-solutions/professional-training') ?>

					<?= $this->element('business-solutions/contact') ?>
				</div>
			</div>
		</div>
	</div>
</section>
<div>
	<?= $this->element('home/newsletter')?>
</div>