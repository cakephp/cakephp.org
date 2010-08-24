<div class="screencasts form">
<?php echo $this->Form->create('Screencast');?>
	<fieldset>
 		<legend><?php __('Edit Screencast');?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('title');
		echo $this->Form->input('producer');
		echo $this->Form->input('movie');
		echo $this->Form->input('image');
		echo $this->Form->input('size');
		echo $this->Form->input('description');
		echo $this->Form->input('downloads');
	?>
	</fieldset>
<?php echo $this->Form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $this->Html->link(__('Delete', true), array('action'=>'delete', $this->Form->value('Screencast.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Screencast.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Screencasts', true), array('action'=>'index'));?></li>
	</ul>
</div>
