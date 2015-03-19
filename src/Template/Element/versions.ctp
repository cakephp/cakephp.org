<?php
$tags = $this->requestAction('/changelogs');

$previous = null;
foreach ($tags as $tag):
	preg_match('/^(?<series>\d+\.\d+).*/', $tag, $matches);
	if (!$previous || version_compare($previous, $matches['series'], '>')) {
		if ($previous) {
			echo '</ul></div>';
		}
		$previous = $matches['series'];
		?>
		<div class="row changelog-set">
		<h3><?php echo __('%s series', $matches['series']); ?></h3>
		<ul>
		<?php
	}
	?>
	<li><?php
		$url = array('controller' => 'changelogs', 'action' => 'view', $tag);
		echo $this->Html->link($tag, $url);
	?></li>
	<?php
endforeach;
