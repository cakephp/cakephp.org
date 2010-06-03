<?php $javascript->link(array('jquery', 'interface', 'common'), false); ?>

<a href="http://cakefest.org" target="_blank"><img style="margin-left: 20px; margin-bottom: 10px;" src="http://cakefest.org/img/banners/cakefest2010-820x140.png" alt="<?php __('CakeFest: The CakePHP Conference'); ?>"></a>

<div id="breakingnews">
	<strong><?php __('Extra Hot'); ?>:</strong>
	<?php echo $html->link(
		__('Release:', true) . ' 1.3.1 ' . __('Stable', true),
		'http://bakery.cakephp.org/articles/view/cakephp-1-3-1-now-with-delicious-sprinkles'); ?>
	&amp;
	<?php echo $html->link(
		'1.2.7 ' . __('Stable', true),
		'http://bakery.cakephp.org/articles/view/cakephp-1-2-7-released'); ?>
</div>

<div id="features" class="tab-container">
	<div style="overflow: visible; display: block; left: 0px;" class="panels">

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

		<?php
		echo $this->element('home/hot-features');
		echo $this->element('home/learn');
		echo $this->element('home/interact');
		echo $this->element('home/read');
		?>
	</div>
	<?php echo $this->element('home/tabs'); ?>
</div>
<?php echo $this->element('footer');?>
