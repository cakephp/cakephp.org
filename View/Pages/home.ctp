<?php
$this->Html->script(array('jquery', 'interface', 'common'), false);

echo $this->element('home/banner');
echo $this->element('home/breaking-news');
?>

<div id="features" class="tab-container">
	<div style="overflow: visible; display: block; left: 0px;" class="panels">
		<?php
		echo $this->element('home/download');
		echo $this->element('home/hot-features');
		echo $this->element('home/learn');
		echo $this->element('home/interact');
		echo $this->element('home/read');
		?>
	</div>
	<?php echo $this->element('home/tabs'); ?>
</div>
<?php echo $this->element('footer'); ?>
