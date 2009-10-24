<?php
$ohlohSources = array(
	'gwoo' => strtotime('01 October 2009'),
	'Nate Abele' => strtotime('01 October 2009'),
	'mariano.iglesias' => true,
	'PhpNut' => true,
	'Mark Story' => true,
);
?>
<div class="page">
<h2><?php __('Planet CakePHP')?></h2>

<div style="padding-left: 20px;"><?php echo $this->element('ads/728x90'); ?></div>

<?php
if (!empty($data)):
	$j = 0;
	foreach ($data as $site => $feed):
	if (!empty($feed['Rss'])):
		$channel = $feed['Rss']['Channel'];
		if (!empty($feed['Rss']['Channel'])):
			if ($j++ == 2) {
			 	echo '<div class="clear"><!----></div>';
			}
			echo '<div class="channel">';

				echo '<h3>' . $html->link($channel['title'], $channel['link'], array('escape' => false));
				if ($site === 'Ohloh') {
					echo '<script type="text/javascript" src="http://www.ohloh.net/projects/3176/widgets/project_thin_badge"></script>';
				}
				echo '</h3>';

				echo '<ul class="items">';
					$i = 0;
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
						
						$class = null;
						if ($i++ % 2 == 0) {
							$class = ' class="zebra"';
						}

						echo '<li'.$class.'>' . $html->link($item['title'], $item['link'], array('escape' => false)); 
						if ($site == 'Ohloh') {
							echo ' <em>(<a href="' . $item['source']['url'] . '">' . $item['source']['value'] . '</a>)</em>';
						}
						
						echo '</li>';

					endforeach;
				echo '</ul>';

			echo '</div>';
		endif;
	endif;
	endforeach;

endif;
?>

<div style="padding-left: 20px;"><?php echo $this->element('ads/728x90'); ?></div>

<div class="channel">
	<h3>submit a feed</h3>
	<?php echo $form->create('Feed', array('action' => 'submit'))?>
	<?php
		echo $form->input('url', array('label' => false, 'rows'=>'2', 'cols'=>'40',
			'error' => array(
				'valid' => __('Please specify a valid url', true),
				'required' => __('Please specify a valid url', true)
				)
			)
		);
	?>
	<div class="clear">
		<?php echo $form->input('Other.name');?>
		<?php echo $form->input('Other.email');?>
	</div>
	<?php echo $form->end('Send')?>

</div>
<div class="clear"><!----></div>

<div style="padding-left: 20px;"><?php echo $this->element('ads/728x90'); ?></div>

</div>