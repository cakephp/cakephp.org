<?php
$this->Html->script(array('jquery', 'google_maps', 'http://maps.google.com/maps?file=api&v=2&key='.$key), false);

?>
<div class="page">
	<h2><?php __('Where are all the bakers?');?></h2>
	<p>
		<?php
			echo $paginator->counter(array(
			'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
			));
		?>
	</p>
	<div id="map" style="width: 100%; height: 400px;"></div>
<?php if (!empty($markers)):?>
<span class="right"><a href="#markers" id="show">show grid</a></span>
<div id="markers">
<?php
	$i = 0;
	foreach ($markers as $mark):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' zebra';
	}
	?>
	<div class="geo<?php echo $class?>">
		<a href="#map" class="marker"><h4><?php echo $html->clean($mark['Map']['title']);?></h4></a>
		<span class="description"><?php echo $html->clean($mark['Map']['description']);?></span>
		<abbr class="latitude" title="<?php echo $mark['Map']['latitude'];?>"></abbr>
		<abbr class="longitude" title="<?php echo $mark['Map']['longitude'];?>"></abbr>
	</div>
<?php endforeach;
?>
</div>
<div class="paging">
	<?php echo $paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
 	<?php echo $paginator->numbers(array('modulus' => 12, 'first' => 3, 'last' => 3));?>
	<?php echo $paginator->next(__('next', true).' >>', array(), null, array('class'=>'disabled'));?>
</div>
<?php endif;?>

	<div class="form">
		<?php echo $form->create('Map', array('url' => $paginator->url(array('action' => 'index'), true)));?>
			<fieldset>
				<legend><?php __('Add your mark');?></legend>
				<?php
					echo $form->error('no_address_found', 'The latitude and longitude were not valid, or the address could not be found.');
				?>
				<div class="left" style="margin-right: 60px;">
				<?php
					echo $form->input('title');
					echo $form->input('description');
					echo $form->input('filter', array('label' => '2 + 9 = ?'));
				?>
				</div>
				<div class="right">
					<?php echo $form->input('address', array('cols' => 30, 'rows' => 2));?>

					<div id="message">enter your address or click the map to set your position</div>

					<?php
						echo $form->input('latitude', array('error' => 'invalid latitude'));
						echo $form->input('longitude', array('error' => 'invalid longitude'));
					?>
				</div>
				<div class="clear">
				<?php
					echo $form->hidden('Other.name');
					echo $form->hidden('Other.body');
				?>
				</div>
			</fieldset>

		<?php echo $form->end('Add');?>
	</div>
	<div class="clear"><!----></div>
</div>