<?php /* SVN FILE: $Id: home.ctp 685 2009-01-16 21:35:58Z gwoo $ */?>
<?php $javascript->link(array('jquery', 'interface', 'common'), false);?>

<div id="breakingnews">
	<strong>Extra Hot:</strong>
	<?php echo $html->link(
		'Release: 1.3.0 Stable',
		'http://bakery.cakephp.org/articles/view/announcing-cakephp-1-3-0-stable'
	); ?>
	&amp;
	<?php echo $html->link(
		'1.2.7 Stable',
		'http://bakery.cakephp.org/articles/view/cakephp-1-2-7-released'
	); ?>
</div>

<div id="features" class="tab-container">
	<div style="overflow: visible; display: block; left: 0px;" class="panels">
		<div id="get-it" class="panel">

			<h2>Get it now!</h2>
			<a href="<?php echo htmlentities($two['link'])?>">
				<?php echo $html->image('new.png', array('class' => 'image png'))?>
			</a>
			<p class="left">
				CakePHP is a rapid development framework for PHP that provides an extensible
				architecture for developing, maintaining, and deploying
				applications. Using commonly known design patterns like
				<a href="http://wikipedia.org/wiki/Model-view-controller" target="_new">MVC</a> and
				<a href="http://wikipedia.org/wiki/Object-relational_mapping" target="_new">ORM</a>
				within the convention over configuration paradigm, CakePHP reduces development costs
				and helps developers write less code.
			</p>
			<ul class="actions">
				<li class="download_stable">
					<a href="<?php echo htmlentities($three['link'])?>"><?php echo $three['version']?></a>
				</li>
				<li><a href="<?php echo $three['announcement']?>" target="_new">read the announcement</a></li>
				<li><a href="<?php echo $three['changelog']?>" target="_new">view the changelog</a></li>
				<li><a href="<?php echo htmlentities($two['link'])?>">download: <?php echo $two['version']?></a></li>
				<li><?php echo $html->link('discover more hot features', array('features'));?></li>
				<p style="padding-left: 14px">
					<script type="text/javascript" src="http://www.ohloh.net/projects/3176/widgets/project_users_logo"></script>
				</p>

			</ul>
		</div>
		<!--	panel -->
		<div id="hot_features" class="panel">
			<p class="right" style="margin: 10px 6px"><?php echo $html->link('read about all the features', array('controller' => 'pages', 'action' => 'display', 'features'));?></p>
			<h2>Hot Features</h2>
			<?php echo $html->image('hot-features.png', array('class' => 'image png'))?>
			<ul class="features">
			   	<li>
					<strong>No Configuration</strong> - Set-up the database and let the magic
					begin
				</li><li>
					<strong>Extremely Simple</strong> - Just look at the name...It's Cake
				</li><li>
					<strong>Active, Friendly Community</strong> - Join us #cakephp on IRC. We'd love
					to help you get started
				</li><li>
					<strong>Flexible License</strong> - Distributed under the MIT License
				</li><li>
					<strong>Clean IP</strong> - Every line of code was written by the CakePHP
					development team
				</li><li>
					<strong>Best Practices</strong> - covering security, authentication, and session
					handling, among the many other features
				</li><li>
					<strong>OO</strong> - Whether you are a seasoned object-oriented programmer or a
					beginner, you'll feel comfortable
				</li>
			</ul>
		</div><!--	panel -->
		<div id="learn" class="panel">
			<h2>Learn</h2>
			<?php echo $html->image('learn.png', array('class' => 'image png'))?>
			<ul class="features">
			    <li><a href="http://book.cakephp.org/">The Cookbook</a> (official docs)</li>
			    <li><a href="http://cakephp.org/screencasts">Screencasts</a></li>
				<li>
					<a href="http://cakephp.org/files/Resources/CakePHP-1.2-Cheatsheet.pdf">
						CakePHP cheatsheet
					</a>
				</li>
				<li>
					<a href="http://book.cakephp.org/view/219/the-cakephp-blog-tutorial">
						1.2 Blog Tutorial
					</a>
				</li>
				<li>
					<a href="http://www.ibm.com/developerworks/opensource/tutorials/os-php-cake1/index.html">
						IBM: Cook Up Websites Fast (5 part series)
					</a>
				</li>
				<li>
					<a href="http://www.ibm.com/developerworks/edu/os-dw-os-php-wiki1.html">
						IBM: Build A Production Wiki (5 part series)
					</a>
				</li>
				<li><a href="http://astore.amazon.com/cakesoftwaref-20">CakePHP Book Store</a></li>
			</ul>
			<h4 style="margin-top: 20px">
				for more goodies, <a href="http://bakery.cakephp.org">check out the Bakery</a>
			</h4>
		</div><!--	panel -->
		<div id="interact" class="panel">
			<h2>Interact</h2>
			<?php echo $html->image('interact.png', array('class' => 'image png'))?>
			<p style="margin-bottom: 8px">
				The CakePHP community is vast and interacts in numerous ways. The
				<strong><a href="http://groups.google.com/group/cake-php">Google Group</a></strong>
				is a great forum for posting questions and comments. There are also many in the irc
				channel, <strong><a href="irc://irc.freenode.net/cakephp">#cakephp on
				irc.freenode.net</a></strong>, including the core developers and long time community
				members.
			</p>
			<?php
				echo $this->element('channel', array(
					'site' => 'GoogleGroup',
					'title' => 'Latest posts on the google group',
					'count' => 2,
					'cache' => array('key' => 'cache_google_group', 'time' => '+20 minutes')
				));
			?>
		</div><!--	panel -->
		<div id="read" class="panel">
			<h2>Read</h2>
			<?php echo $html->image('read.png', array('class' => 'image png'))?>
			<h4>just a few of the blogs</h4>
			<span style="float:left;margin-right: 30px">
				<ul class="features">
			        <li><a href="http://bakery.cakephp.org/">The Bakery</a></li>
					<li><a href="http://mark-story.com/">Mark Story</a></li>
			        <li><a href="http://www.ad7six.com/">Ad7six</a></li>
					<li><a href="http://teknoid.wordpress.com/">Teknoid</a></li>
					<li><a href="http://cricava.com/blogs/mariano.php">Mariano</a></li>
				</ul>
			</span>
			<span style="float:left">
				<ul class="features">
					<li><a href="http://www.cakedc.com">CakeDC Team</a></li>
			        <li><a href="http://debuggable.com/">Felix and Tim...(and nate?)</a></li>
					<li><a href="http://www.littlehart.net/atthekeyboard/">GrumpyCanuck</a></li>
					<li><a href="http://snook.ca/">Snook.ca</a></li>
				</ul>
			</span>
		</div><!--	panel -->

	</div> <!-- panels -->
	<div class="tabs"><ul><li style="position: static; top: auto; display: block; opacity: 1; left: auto;" class="active"><a href="#get-it">Get it now!</a></li><li style="position: static; top: auto; display: block; opacity: 1; left: auto;" class=""><a href="#hot_features">Hot Features</a></li><li style="position: static; top: auto; display: block; opacity: 1; left: auto;" class=""><a href="#learn">Learn</a></li><li style="position: static; top: auto; display: block; opacity: 1; left: auto;" class=""><a href="#interact">Interact</a></li><li style="position: static; top: auto; display: block; opacity: 1; left: auto;" class=""><a href="#read">Read</a></li></ul><a href="#" class="next">»</a><a href="#" class="previous">«</a></div>
</div><!-- #features.tabs_container -->
<?php echo $this->element('footer');?>
