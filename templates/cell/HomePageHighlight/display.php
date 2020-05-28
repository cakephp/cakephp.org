<?php if ($highlights): ?>
	<?= $this->element('Showcase/highlight_carousel', [
		'givenHighlight' => $highlights,
		'imageVersion' => ''
	]) ?>
<?php endif; ?>
