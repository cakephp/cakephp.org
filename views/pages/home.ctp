<?php $javascript->link(array('jquery', 'interface', 'common'), false); ?>

<a href="http://cakefest.org" target="_blank"><img style="margin-left: 20px; margin-bottom: 10px;" src="http://cakefest.org/img/banners/cakefest2010-820x140.png" alt="<?php __('CakeFest: The CakePHP Conference'); ?>"></a>

<div id="breakingnews">
	<strong><?php __('Extra Hot'); ?>:</strong>
	<?php echo $html->link(
		__('Release:', true) . ' 1.3.1 ' . __('Stable', true),
		'http://bakery.cakephp.org/articles/view/cakephp-1-3-1-now-with-delicious-sprinkles'); ?>
	&amp;
	<?php echo $html->link(
		'1.2.7 ' . __('Stable', true),
		'http://bakery.cakephp.org/articles/view/cakephp-1-2-7-released'); ?>
</div>

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
