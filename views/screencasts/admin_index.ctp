<div class="screencasts index page">
<h2><?php __('Screencasts');?></h2>
<p>
<?php
echo $this->Paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $this->Paginator->sort('id');?></th>
	<th><?php echo $this->Paginator->sort('title');?></th>
	<th><?php echo $this->Paginator->sort('producer');?></th>
	<th><?php echo $this->Paginator->sort('size');?></th>
	<th><?php echo $this->Paginator->sort('modified');?></th>
	<th><?php echo $this->Paginator->sort('downloads');?></th>
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
			<?php echo $this->Html->link(__('View', true), array('action'=>'view', $screencast['Screencast']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action'=>'edit', $screencast['Screencast']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action'=>'delete', $screencast['Screencast']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $screencast['Screencast']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>
<div class="paging">
	<?php echo $this->Paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
 | 	<?php echo $this->Paginator->numbers();?>
	<?php echo $this->Paginator->next(__('next', true).' >>', array(), null, array('class'=>'disabled'));?>
</div>
</div>

