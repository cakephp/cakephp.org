<div class="page">
	<h2><?php echo __('CakePHP Logos and Assets')?></h2>
	<p><?php echo sprintf(
			__('The logos linked below are licensed as %s; please link to %s as the attribution when using them (either as a hyperlink or simply the text).'),
			'<a href="http://creativecommons.org/licenses/by-nc-nd/3.0/">Creative Commons Attribution-NonCommercial-NoDerivs 3.0 Unported</a>',
			'<a href="http://cakephp.org">http://cakephp.org</a>'); ?></p>

	<br/>
	<p><?php echo sprintf(
		__('If you intend on making money or promoting a commercial service by using these logos, you must first contact %s for licensing information before using the logo or any associated assets.'),
		'<a href="mailto:legal@cakefoundation.org">legal@cakefoundation.org</a>'); ?></p>

	<br/>
	<h4><?php echo __('Where can I use it?'); ?></h4>
	<p><?php echo __('If you run, own or operate a personal blog, you may use the logo to discuss CakePHP, or place the logo to show your support and that you use the framework.'); ?></p>
	<p><?php echo __('If you intend to use the CakePHP logo to promote a service or product you must first obtain written permission from the Cake Software Foundation.'); ?> <?php echo __('You may use the "powered by" logos to let the world know that your site or product is built with CakePHP.'); ?></p>
	
	<br/>
	<h4><?php echo __('Where can\'t I use it?'); ?></h4>
	<p><?php echo sprintf(
		__('For the publication or promotion of commercial services related to CakePHP development, use of the logos is not permitted without permission from the Cake Software Foundation. For more information regarding the licensing options and capabilities, please contact %s.'),
		'<a href="mailto:legal@cakefoundation.org">legal@cakefoundation.org</a>'); ?></p>

	<br/>
	<h4><?php echo __('Logos'); ?></h4>
	<img src="/img/logo/cakephp_logo_250_trans.png" />&nbsp;&nbsp;
	<img src="/img/logo/cakephp_logo_125_trans.png" /><br/>
	
	<br/>
	<img src="/img/logo/powered_by_cake_logo_25.png" />&nbsp;&nbsp;
	<img src="/img/cake.power.gif" /><br/>



	<br/>
	<h2><?php echo __('Wallpapers'); ?></h2>
	<p><?php echo __('These wallpapers are designed as 1024 pixels wide, and square. This makes them appropriate for devices that allow orientation switching while maintaining the design of the wallpaper within the bounds of your device. They\'re also great for desktop backgrounds, or any other place you want a giant sexy CakePHP wallpaper.'); ?></p>
	<?php
	$images = array(
		'CakePHP-1.1-iPad01-light',
		'CakePHP-1.1-iPad01',
		'CakePHP-1.1-iPad02-light',
		'CakePHP-1.1-iPad02',
		'CakePHP-1.2-iPad01-light',
		'CakePHP-1.2-iPad01',
		'CakePHP-1.2-iPad02-light',
		'CakePHP-1.2-iPad02',
		'CakePHP-1.2-iPad03-light',
		'CakePHP-1.2-iPad03',
	);
	$count = 0;
	foreach ($images as $image):
		if ($count % 4 === 0):
			echo '<br/>';
		endif;
		echo $this->Html->link(
			$this->Html->image('ipad-wallpaper/' . $image . '-thumb.png'),
			'/img/ipad-wallpaper/' . $image . '.png',
			array('escape' => false, 'style' => 'padding: 5px 5px 5px 0'));
		$count++;
	endforeach;
	?>
</div>