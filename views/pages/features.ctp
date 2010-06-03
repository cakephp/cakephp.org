<?php $javascript->link(array('jquery', 'interface', 'common'), false); ?>
<div id="features" class="tab-container">
	<div style="overflow: visible; display: block; left: 0px;" class="panels">
		<?php
		echo $this->element('features/basic');
		echo $this->element('features/advanced');
		echo $this->element('home/download');
		echo $this->element('home/learn');
		echo $this->element('home/interact');
		?>
	</div>
</div>
<div style="padding-left: 20px;"><?php echo $this->element('ads/728x90'); ?></div>
<?php echo $this->element('footer');?>
<div style="padding-left: 20px; padding-top: 20px;"><?php echo $this->element('ads/728x90'); ?></div>
