<div class="page">
<h2><?php __('Downloads');?></h2>

<div style="padding-left: 20px;"><?php echo $this->element('ads/728x90'); ?></div>

<h3>
	<?php echo $html->link('..', array('action' => 'index'))?>
	<?php
	$path = '/';
	foreach ((array)$args as $part):
		$path .= $part . '/';
		echo '/' . $html->link($part, array($path));
	endforeach;
	echo '/' . $current;
	?>
</h3>

<table class="downloads">
	<tr>
		<th><?php __('Name');?></th>
		<th><?php __('MD5');?></th>
		<th><?php __('Size');?></th>
	</tr>

	<?php
	$i = 0;
	foreach ($data['Folder'] as $download):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="zebra"';
		}
		?>
		<tr<?php echo $class?>>
			<td><?php echo $html->link($download['name'], array($download['path']), array('class' => 'dir'));?></td>
			<td>&nbsp;</td>
			<td><?php echo $download['size']['num'];?> <?php echo $download['size']['ext'];?></td>
		</tr>
		<?php
	endforeach;


	foreach ($data['File'] as $download):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="zebra"';
		}
		?>
		<tr<?php echo $class?>>
			<td><?php echo $html->link($download['name'], $download['path']);?></td>
			<td><?php echo $download['md5'];?></td>
			<td><?php echo $download['size']['num'];?> <?php echo $download['size']['ext'];?></td>
		</tr>
		<?php
	endforeach;
	?>

</table>
<?php /*
<h4 class="title">
	<a href="<?php echo $one['link']?>"><?php echo $one['version']?></a>
	<em>(<?php echo $one['date']?>)</em>
	<em><a href="<?php echo $one['changelog']?>" target="_new">view the changelog</a></em>
</h4>
*/
?>

<h4 class="title">
	<a href="<?php echo $three['link']?>"><?php echo $three['version']?></a>
	<em>(<?php echo $three['date']?>)</em>
	<em><a href="<?php echo $three['announcement']?>" target="_new"><?php __('read the announcement'); ?></a></em>
	<em><a href="<?php echo $three['changelog']?>" target="_new"><?php __('view the changelog'); ?></a></em>
</h4>

<div style="padding-left: 20px; padding-top: 20px;"><?php echo $this->element('ads/728x90'); ?></div>

</div>