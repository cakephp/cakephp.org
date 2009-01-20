<div class="screencasts form">
<?php echo $form->create('Screencast');?>
	<fieldset>
 		<legend><?php __('Edit Screencast');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('title');
		echo $form->input('producer');
		echo $form->input('movie');
		echo $form->input('image');
		echo $form->input('size');
		echo $form->input('description');
		echo $form->input('downloads');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('Screencast.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Screencast.id'))); ?></li>
		<li><?php echo $html->link(__('List Screencasts', true), array('action'=>'index'));?></li>
	</ul>
</div>
