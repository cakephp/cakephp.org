<div class="screencasts index page">
<h2><?php __('Screencasts');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('title');?></th>
	<th><?php echo $paginator->sort('producer');?></th>
	<th><?php echo $paginator->sort('size');?></th>
	<th><?php echo $paginator->sort('modified');?></th>
	<th><?php echo $paginator->sort('downloads');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($screencasts as $screencast):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $screencast['Screencast']['id']; ?>
		</td>
		<td>
			<?php echo $screencast['Screencast']['title']; ?>
		</td>
		<td>
			<?php echo $screencast['Screencast']['producer']; ?>
		</td>
		<td>
			<?php echo $screencast['Screencast']['size']; ?>
		</td>
		<td>
			<?php echo $screencast['Screencast']['modified']; ?>
		</td>
		<td>
			<?php echo $screencast['Screencast']['downloads']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $screencast['Screencast']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $screencast['Screencast']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $screencast['Screencast']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $screencast['Screencast']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>
<div class="paging">
	<?php echo $paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
 | 	<?php echo $paginator->numbers();?>
	<?php echo $paginator->next(__('next', true).' >>', array(), null, array('class'=>'disabled'));?>
</div>
</div>

