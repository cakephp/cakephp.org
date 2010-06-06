<?php $javascript->link(array('jquery', 'interface', 'common'), false); ?>

<a href="http://cakefest.org" target="_blank"><img style="margin-left: 20px; margin-bottom: 10px;" src="http://cakefest.org/img/banners/cakefest2010-820x140.png" alt="<?php __('CakeFest: The CakePHP Conference'); ?>"></a>

<?php echo $this->element('home/breaking-news'); ?>

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
