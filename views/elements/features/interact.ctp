<div id="interact" class="panel">
	<h2>Interact</h2>
	<?php echo $html->image('community.png', array('class' => 'image'))?>
	<p>
		The CakePHP community is vast and interacts in numerous ways. The <a href="http://groups.google.com/group/cake-php">Google Group</a>
		is a great forum for posting questions and comments. There are also many in the irc channel, <a href="irc://irc.freenode.net/cakephp">#cakephp on irc.freenode.net</a>,
		including the core developers and long time community members.
	</p>
	<h4 style="margin-top: 6px">Latest posts on the google group</h4>
	<?php
		$Feed = ClassRegistry::init('Feed');
		$data = $Feed->read('GoogleGroup');
		if (!empty($data)):
			foreach ($data as $feed):
			if (!empty($feed)):
				$channel = $feed['Channel'][0];

				if (!empty($feed['Channel'][0])):
					echo '<div class="channel">';

						echo '<ul class="items">';
							$i = 0;
							foreach ($channel['Item'] as $key => $item):
								if ($i++ > 2) {
									break;
								}
								echo '<li>' . $html->link($item['title'], $item['link']) . '</li>';

							endforeach;
						echo '</ul>';

					echo '</div>';
				endif;
			endif;
			endforeach;
		endif;
	?>
</div><!--	panel -->
