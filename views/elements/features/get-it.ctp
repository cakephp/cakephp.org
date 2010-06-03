<div id="get-it" class="panel">
	<h2>Get it now!</h2>
	<a href="<?php echo htmlentities($two['link'])?>">
		<?php echo $html->image('new.png', array('class' => 'image'))?>
	</a>
	<p class="left">
		CakePHP is a rapid development framework for PHP that provides an extensible architecture for developing, maintaining, and deploying
		applications. Using commonly known design patterns like
		<a href="http://wikipedia.org/wiki/Model-view-controller" target="_new">MVC</a>
		and <a href="http://wikipedia.org/wiki/Object-relational_mapping" target="_new">ORM</a>
		within the convention over configuration paradigm, CakePHP reduces development costs and helps developers write less code.
	</p>
	<ul class="actions">
		<li class="download_stable">
			<a href="<?php echo htmlentities($one['link'])?>"><?php echo $one['version']?></a>
		</li>
		<li>
			<a href="<?php echo htmlentities($two['link'])?>"><?php echo $two['version']?></a>
		</li>
		<li><a href="<?php echo $two['announcement']?>" target="_new">read the announcement</a></li>
		<li><a href="<?php echo $two['changelog']?>" target="_new">view the changelog</a></li>
		<li><?php echo $html->link('discover the hot features', array('features'));?></li>
	</ul>
</div>
