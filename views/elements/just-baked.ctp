<div id="just_baked">
	<h3>Just baked</h3>
	<ul>
		<?php foreach (Configure::read('Sites.JustBaked') as $s): ?>
			<li><a href="<?php echo $s['url']; ?>" target="_new" <?php if (isset($s['title'])) echo 'title="' . $s['title'] . '"'; ?>><?php echo $s['name']; ?></a></li>
		<?php endforeach; ?>
	</ul>		
	<h4><a href="http://book.cakephp.org/view/510/Sites-in-the-wild">They are using CakePHP</h4>
	<ul>			
		<?php foreach (Configure::read('Sites.Using') as $s): ?>
			<li><a href="<?php echo $s['url']; ?>" target="_new"><?php echo $s['name']; ?></a></li>
		<?php endforeach; ?>
	</ul>
</div>
