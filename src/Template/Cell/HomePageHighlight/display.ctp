<?php if ($highlight): ?>
	<?= $this->element('Showcase.Showcase/highlight_carousel', [
		'givenHighlight' => $highlight,
		'imageVersion' => 'slider'
	]) ?>
<?php endif; ?>
