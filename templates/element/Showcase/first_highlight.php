<?php
/**
 * @var \App\View\AppView $this
 * @var array $highlights
 */
?>
<?php if (isset($highlights[0])): ?>
<section>
	<?= $this->element('Showcase/highlight_carousel', ['givenHighlight' => $highlights[0]]) ?>
</section>

<section class="pb-80 back-white featured-case">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h3><?= $highlights[0]->title ?></h3>
				<h4><?= $highlights[0]->brief_description ?></h4>
			</div>
			<div class="col-md-6">
				<?= $highlights[0]->description ?>
			</div>
		</div>
	</div>
</section>
<?php endif; ?>
