<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
		<?php foreach ($givenHighlight->screen_monitor_images as $index => $image): ?>
		<li data-target="#carousel-example-generic"
			data-slide-to="<?= $index ?>"
		class="<?= ($index === 0) ? 'active' : '' ?>"></li>
		<?php endforeach ?>
	</ol>
	<div class="carousel-inner" role="listbox">
		<?php foreach ($givenHighlight->screen_monitor_images as $index => $image): ?>
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
	<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
		<i class="fa icon-carousel fa-angle-left"></i>
		<span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
		<i class="fa icon-carousel fa-angle-right"></i>
		<span class="sr-only">Next</span>
	</a>
</div>
