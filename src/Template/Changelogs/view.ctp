<div class="row changelogs">
	<div class="section">
	<h2><?php echo $this->Html->link(__('Changelogs'), array('action' => 'index')); ?></h2>
	<h3><?php echo __('Version %s.', $tag); ?></h3>
	
	<ul>
	<?php
	foreach ($changes as $hash => $change):
		?><li><?php
			echo $this->Html->link($hash, 'http://github.com/cakephp/cakephp/commit/' . $hash, array('target' => '_blank'));
			echo ' ' . h($change);
		?></li><?php
	endforeach;
	?>
	</ul>
	</div>
</div>
