<?php
/**
 * Authorized Ohloh sources
 *
 */
$ohlohSources = array(
	'gwoo' => strtotime('01 October 2009'),
	'nate' => strtotime('01 October 2009'),
	//'mariano.iglesias' => true,
	'phpnut' => true,
	'mark_story' => true,
	'predominant' => true,
);

if (empty($data) && !empty($site)) {
	$Feed = ClassRegistry::init('Feed');
	$data = $Feed->read($site);
}

if (empty($data['Rss'])) {
	return false;
}

$feed = $data['Rss'];
if (!empty($feed['Channel'])):
	$channel = $feed['Channel'];

	if (empty($site)) {
		$site = null;
	}

	if (empty($title)) {
		$title = $channel['title'];
	}

	if (empty($count)) {
		$count = 50;
	}

	if ($site == 'Bakery') {
		$channelLink = $channel['Link'][0];
	} else {
		$channelLink = $channel['link'];
	}

	echo '<h3>' . $this->Html->link($title, $channelLink) . '</h3>';

	echo '<div class="channel">';

		echo '<ul class="items">';
			$i = 0;
			$escape = true;
			if (isset($channel['Item'][0])):
				foreach ($channel['Item'] as $key => $item):
					if ($site == 'Ohloh') {
						if (!in_array($item['author'], array_keys($ohlohSources))) {
							continue;
						}
						if (is_numeric($ohlohSources[$item['author']]) &&
							strtotime($item['pubDate']) > $ohlohSources[$item['author']]) {
							continue;
						}
						$psuedo = trim($item['title']['pseudo']);
						if (!empty($psuedo)) {
							$item['title'] = $item['description'];
						}
						$escape = false;
					}
					if ($i++ > $count) {
						break;
					}
					echo '<li>' . $this->Html->link($item['title'], $item['link'], compact('escape'));

					if ($site == 'Ohloh') {
						echo ' <em>(<a href="' . $item['source']['url'] . '">' .h($item['source']['value']) . ')</a></em>';
					}

					echo '</li>';

				endforeach;
			else:
				if ($site == 'Ohloh') {
					if (!in_array($item['author'], array_keys($ohlohSources))) {
						continue;
					}
					if (is_numeric($ohlohSources[$item['author']]) &&
						strtotime($item['pubDate']) > $ohlohSources[$item['author']]) {
						continue;
					}
					$psuedo = trim($item['title']['pseudo']);
					if (!empty($psuedo)) {
						$item['title'] = $item['description'];
					}
				}
			
				echo '<li>' . $this->Html->link($item['title'], $item['link'], array('escape' => false));

				if ($site == 'Ohloh') {
					echo ' <em>(<a href="' . $item['source']['url'] . '">' . $item['source']['value'] . ')</a></em>';
				}

				echo '</li>';
			endif;
		echo '</ul>';

	echo '</div>';
endif;
?>