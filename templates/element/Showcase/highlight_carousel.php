<?php if (is_array($givenHighlight)): ?>
	<?php $images = collection($givenHighlight)
		->filter(function ($p) {
			return isset($p->screen_monitor_images[0]);
		})
		->map(function ($p) {
			return $p->screen_monitor_images[0];
		})
		->toArray(); ?>
<?php else: ?>
	<?php $images = $givenHighlight->screen_monitor_images ?>
<?php endif; ?>

<div id="showcase-carousel" class="carousel slide" data-ride="carousel">
	<div class="carousel-inner" role="listbox">
		<?php foreach ($images as $index => $image): ?>
		<div class="item <?= ($index === 0) ? 'active' : '' ?>">
			<?= $this->Showcase->image(
				$image,
				['class' => 'img-responsive'],
				isset($imageVersion) ? $imageVersion : 'highlight'
			); ?>
			<div class="carousel-caption">
			</div>
		</div>
		<?php endforeach; ?>
	</div>
</div>
