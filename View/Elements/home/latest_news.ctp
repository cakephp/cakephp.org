<div class="row">
	<div class="columns three center-align tab-image">
	<?php
	echo $this->Html->image('news-cake.png', array(
		'alt' => 'Hot and new',
	));
	?>
	</div>

	<div class="news columns nine">
	<?php
		$feed = $this->requestAction('/news/index');
		if (isset($feed['rss']['channel']['item'])) {
			$items = $feed['rss']['channel']['item'];
			for ($i = 0; $i < 3; $i++) {
				echo $this->element('news/item', array('article' => $items[$i]));
			}
			echo $this->Html->link('more news', array('controller' => 'news', 'action' => 'index')); 
		} else {
			echo '<p class="error">' . __('Could not fetch news') . '</p>';
		}
	?>
	</div>
</div>

<div class="row">
	<div class="columns twelve">
		<h4>Upcoming Events</h4>
		<?php
		// ---- OSDC 2011
		echo $this->Html->image(
			'http://2011.osdc.com.au/ribbon_bg.png', array(
				'url' => 'http://2011.osdc.com.au',
				'class' => 'image png',
				'width' => 196
		));

		// ---- PHP Matsuri 2011
		// echo $this->Html->link(
		// 	$this->Html->image('http://2011.phpmatsuri.net/uploads/banner_03.gif', array(
		// 		'class' => 'image png',
		// 		'width' => 196)),
		// 	'http://2011.phpmatsuri.net/page/what-is-php-matsuri', array('escape' => false));

		// ---- OSDC 2010
		// echo $this->Html->link(
		// 	$this->Html->image('http://2010.osdc.com.au/sites/default/files/imagecache/wysiwyg_imageupload_preview/wysiwyg_imageupload/1/osdc2010.png', array(
		// 		'class' => 'image png',
		// 		'width' => 196)),
		// 	'http://2010.osdc.com.au/proposal/31/re-imagining-cakephp-path-20', array('escape' => false));
		?>
	</div>
</div>
