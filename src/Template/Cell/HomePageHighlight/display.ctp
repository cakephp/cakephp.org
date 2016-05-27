<?php if ($highlights): ?>
	<?= $this->element('Showcase.Showcase/highlight_carousel', [
		'givenHighlight' => $highlights,
		'imageVersion' => 'slider'
	]) ?>
<?php endif; ?>
