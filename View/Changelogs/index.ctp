<div class="page changelogs">
	<h2><?php echo __('Changelogs'); ?></h2>
	<p><?php echo __('Select a version below to view its changelog.'); ?></p>
	
	<div>
	<ul>
	<?php
	$previous = null;
	foreach ($tags as $tag):
		preg_match('/^(?<series>\d+\.\d+).*/', $tag, $matches);
		if (!$previous || version_compare($previous, $matches['series'], '>')) {
			$previous = $matches['series'];
			?>
			</ul>
			</div>
			<div class="series">
			<h3><?php echo sprintf(__('%s series'), $matches['series']); ?> </h3>
			<ul>
			<?php
		}
		?>
		<li><?php
			echo $this->Html->link($tag, array('action' => 'view', $tag));
		?></li>
		<?php
	endforeach;
	?>
	</ul>
	</div>
	<div class="clear"></div>
</div>