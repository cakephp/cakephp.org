<div class="slider">
	<ul id="carousel" class="photo-carousel">
	<?php foreach (Configure::read('Sites.JustBaked') as $site): ?>
		<li>
			<span class="polaroid">
				<?php echo $this->Html->image('featured-sites/' . $site['image'], array('url' => $site['url'])) ?>
			</span>
			<?php echo $this->Html->link($site['name'], $site['url']); ?>
		</li>
	<?php endforeach; ?>

	</ul>
</div>
<?php
$js = <<<TEXT
var visible = \$(window).width() < 560 ? 1 : 3;
\$('#carousel').jcarousel({
	visible: visible,
	scroll: visible,
	reloadCallback: function (car) {
		var vis = 3;
		if (\$(window).width() < 560) {
			vis = 1;
		}
		car.options.visible = vis;
		car.options.scroll = vis;
	}
});
TEXT;
$this->Js->buffer($js);
