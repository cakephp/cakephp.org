<?php
/**
 * @var \App\View\AppView $this
 */
?>
<section id="sharing" class="sharing">
	<div class="container">
		<div class="mb50 mt50 image visible-md-block visible-lg-block artwork">
			<?= $this->Html->image('share_cake_bg_chiffon.svg', ['alt' => 'Sharing the cake']) ?>
		</div>
		<div class="mb50 mt50 description">
			<div class="title-share">
				<h2><?= __('Sharing the cake.') ?></h2>
				<h4><?= __('Get involved and support the community.') ?></h4>
			</div>
			<div>
				<p class="mb50"><?= __('If you\'re interested in contributing to CakePHP and supporting the community then we\'d love for you to join us, there are a variety of ways to get involved and help out.')?> </p>
				<?= $this->Html->link(
					__('Learn more'),
					['prefix' => false, 'plugin' => false, 'controller' => 'Pages', 'action' => 'display', 'get-involved'],
					['class' => "btn btn-home"]
				) ?>
			</div>
		</div>
	</div>
</section>
