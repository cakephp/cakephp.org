<div class="columns three">
<?php
	echo $this->Html->image('news-cake.png', array('alt' => 'Hot and new'));
?>
</div>

<div class="news columns five">
	<?php
	$feed = $this->requestAction('/news/index');
	for ($i = 0; $i < 3; $i++) {
		$items = $feed['rss']['channel']['item'];
		echo $this->element('news/item', array('article' => $items[$i]));
	}
	echo $this->Html->link('all news', array('controller' => 'news', 'action' => 'index')); 
	?>
</div>

<div class="columns four">
	<h4>Upcoming Events</h4>
	
</div>
