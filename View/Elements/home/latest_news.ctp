<div class="columns three center-align tab-image">
<?php
echo $this->Html->image('news-cake.png', array(
	'alt' => 'Hot and new',
));
?>
</div>

<div class="news columns five">
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

<div class="columns four">
	<h4>Upcoming Events</h4>
	
</div>
