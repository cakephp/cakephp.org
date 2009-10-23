<?php
/**
 * Authorized Ohloh sources
 *
 */
$ohlohSources = array(
	'gwoo' => strtotime('01 October 2009'),
	'Nate Abele' => strtotime('01 October 2009'),
	'mariano.iglesias' => true,
	'PhpNut' => true,
	'Mark Story' => true,
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

	echo '<h3>' . $html->link($title, $channel['link']).'</h3>';

	echo '<div class="channel">';

		echo '<ul class="items">';
			$i = 0;
			if (isset($channel['Item'][0])):
				foreach ($channel['Item'] as $key => $item):
					if ($site == 'Ohloh') {
						if (!in_array($item['source']['value'], array_keys($ohlohSources))) {
							continue;
						}
						if (is_numeric($ohlohSources[$item['source']['value']]) &&
							strtotime($item['pubDate']) > $ohlohSources[$item['source']['value']]) {
							continue;
						}
						$psuedo = trim($item['title']['pseudo']);
						if (!empty($psuedo)) {
							$item['title'] = $item['description'];
						}
					}
					if ($i++ > $count) {
						break;
					}
					echo '<li>' . $html->link($item['title'], $item['link'], array('escape' => false));

					if ($site == 'Ohloh') {
						echo ' <em>(<a href="' . $item['source']['url'] . '">' . $item['source']['value'] . ')</a></em>';
					}

					echo '</li>';

				endforeach;
			else:
				if ($site == 'Ohloh') {
					if (!in_array($item['source']['value'], array_keys($ohlohSources))) {
						continue;
					}
					if (is_numeric($ohlohSources[$item['source']['value']]) &&
						strtotime($item['pubDate']) > $ohlohSources[$item['source']['value']]) {
						continue;
					}
					$psuedo = trim($item['title']['pseudo']);
					if (!empty($psuedo)) {
						$item['title'] = $item['description'];
					}
				}
			
				echo '<li>' . $html->link($item['title'], $item['link'], array('escape' => false));

				if ($site == 'Ohloh') {
					echo ' <em>(<a href="' . $item['source']['url'] . '">' . $item['source']['value'] . ')</a></em>';
				}

				echo '</li>';
			endif;
		echo '</ul>';

	echo '</div>';
endif;
?>