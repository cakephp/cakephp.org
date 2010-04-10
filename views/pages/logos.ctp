<div class="page">
	<h2><?php __('CakePHP Logos and Assets')?></h2>
	<p>The logos linked below are licensed as <a href="http://creativecommons.org/licenses/by-nc/3.0/">Creative Commons Attribution-NonCommercial</a>; please link to <a href="http://cakephp.org">http://cakephp.org</a> as the attribution when using them (either as a hyperlink or simply the text).</p>

	<br/>
	<p>If you intend on making money or promoting a commercial service by using these logos, you must first contact <a href="mailto:legal@cakefoundation.org">legal@cakefoundation.org</a> for licensing information before using the logo or any associated assets.</p>

	<br/>
	<h4>Where can I use it?</h4>
	<p>If you run, own or operate a personal blog, you may use the logo to discuss CakePHP, or place the logo to show your support and that you use the framework.</p>
	<p>If you have built a product and wish to identify that the product or site is powered by CakePHP, you may also use the assets for this purpose.</p>
	
	<br/>
	<h4>Where can't I use it?</h4>
	<p>For the publication or promotion of commercial services related to CakePHP development, use of the logos is not permitted without permission from the Cake Software Foundation. For more information regarding the licensing options and capabilities, please contact <a href="mailto:legal@cakefoundation.org">legal@cakefoundation.org</a>.</p>

	<br/>
	<h2><?php __('iPad Wallpapers'); ?></h2>
	<p>Got a fancy new iPad but stuck with that <strong>boring</strong> Apple background? Spruce up your iPad with one of these CakePHP backgrounds specifically designed for the iPad.</p>
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
		echo $html->link(
			$html->image('ipad-wallpaper/' . $image . '-thumb.png'),
			'/img/ipad-wallpaper/' . $image . '.png',
			array('escape' => false, 'style' => 'padding: 5px 5px 5px 0'));
		$count++;
	endforeach;
	?>
</div>