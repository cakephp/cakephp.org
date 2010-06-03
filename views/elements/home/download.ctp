<div id="get-it" class="panel">
	<h2><?php __('Get it now!'); ?></h2>
	<a href="<?php echo htmlentities($two['link'])?>"><?php echo $html->image('new.png', array('class' => 'image png'))?></a>
	<p class="left">
		<?php __('CakePHP is a rapid development framework for PHP that provides an extensible architecture for developing, maintaining, and deploying applications.'); ?>
		<?php echo sprintf(__('Using commonly known design patterns like %s and %s within the convention over configuration paradigm, CakePHP reduces development costs and helps developers write less code.', true),
		'<a href="http://wikipedia.org/wiki/Model-view-controller" target="_new">' . __('MVC', true) . '</a>',
		'<a href="http://wikipedia.org/wiki/Object-relational_mapping" target="_new">' . __('ORM', true) . '</a>'); ?>
	</p>

	<ul class="actions">
		<li class="download_stable"><a href="<?php echo htmlentities($three['link'])?>"><?php echo $three['version']?></a></li>
		<li><a href="<?php echo $three['announcement']?>" target="_new"><?php __('read the announcement'); ?></a></li>
		<li><a href="<?php echo $three['changelog']?>" target="_new"><?php __('view the changelog'); ?></a></li>
		<li><a href="<?php echo htmlentities($two['link'])?>"><?php __('download'); ?>: <?php echo $two['version']?></a></li>
		<li><?php echo $html->link(__('discover more hot features', true), array('features'));?></li>
		<p style="padding-left: 14px">
			<script type="text/javascript" src="http://www.ohloh.net/projects/3176/widgets/project_users_logo"></script>
		</p>
	</ul>
</div>
