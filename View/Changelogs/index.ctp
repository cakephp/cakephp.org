<div class="row changelogs">
	<h2><?php echo __('Changelogs'); ?></h2>
	<p><?php echo __('Select a version below to view its changelog.'); ?></p>
</div>

<div class="row">
<?php
$previous = null;
foreach ($tags as $tag):
	preg_match('/^(?<series>\d+\.\d+).*/', $tag, $matches);
	if (!$previous || version_compare($previous, $matches['series'], '>')) {
		if ($previous) {
			echo '</ul></div>';
		}
		$previous = $matches['series'];
		?>
		<div class="columns three changelog-set">
		<h3><?php echo __('%s series', $matches['series']); ?></h3>
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
</div>
