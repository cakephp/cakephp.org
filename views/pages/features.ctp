<?php /* SVN FILE: $Id: features.ctp 682 2009-01-12 16:37:23Z gwoo $ */?>
<?php $javascript->link(array('jquery', 'interface', 'common'), false);?>
<div id="features" class="tab-container">
	<div style="overflow: visible; display: block; left: 0px;" class="panels">
		<div id="basic" class="panel">
			<h2>Basic Features</h2>
			<ul class="features">
				<?php echo $html->image('hot-features.png', array('class' => 'image'))?>
				<li><a href="http://wikipedia.com/wiki/Model-view-controller" target="_new">Model, View, Controller Architecture</a></li>
				<li>Application Scaffolding</li>
		      	<li>Code generation via Bake</li>
				<li>Helpers for HTML, Forms, Pagination, AJAX, Javascript, XML, RSS and more</li>
		      	<li>Access Control Lists and Authentication</li>
		      	<li>Simple yet extensive validation of model data</li>
				<li>Router for mapping urls and handling extensions</li>
		      	<li>Security, Session, and RequestHandler Components</li>
		      	<li>Utility classes for working with Files, Folders, Arrays and more</li>
			</ul>
		</div>

		<div id="advanced" class="panel">
			<?php echo $html->image('hot-features.png', array('class' => 'image'))?>
			<h2>There's More</h2>
			<ul class="features">
				<li>Internationalization and Localization with static translations in gettext style or dynamic translations of model data.</li>
				<li>Full Console environment with support for multiple tasks. Included shells: bake, schema, acl, i18 extractor, api</li>
		      	<li><a href="http://wikipedia.com/wiki/Cross-site_request_forgery" target="_new">CSRF protection via Security Component</a></li>
		      	<li>HTTP Authentication via Security Component</li>
		      	<li>Flexible Caching: use memcache, apc, xcache, the file system, or a model to speed up your application</li>
				<li>Configure class to provide dynamic handling of configuration settings and App class to handle importing required classes</li>
			</ul>
		</div>
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
		</div><!--	panel -->
		<div id="learn" class="panel">
			<h2>Learn</h2>
			<?php echo $html->image('learn.png', array('class' => 'image'))?>
			<ul class="features">
			     <li><a href="http://cakephp.org/screencasts">Screencasts</a></li>
			     <li><a href="http://cakephp.org/files/Resources/CakePHP-1.2-Cheatsheet.pdf">CakePHP cheatsheet</a></li>
			     <li><a href="http://manual.cakephp.org/appendix/blog_tutorial">15 min Blog Tutorial</a></li>
				 <li><a href="http://www-128.ibm.com/developerworks/edu/os-dw-os-php-cake1.html">IBM: Cook Up Websites Fast (5 part series)</a></li>
				 <li><a href="http://www-128.ibm.com/developerworks/edu/os-dw-os-php-wiki1.html">IBM: Build A Production Wiki (5 part series)</a></li>
				 <li><a href="http://astore.amazon.com/cakesoftwaref-20">CakePHP Book Store</a></li>
			</ul>
			<h4 style="margin-top: 30px">for more goodies, <a href="http://bakery.cakephp.org">check out the Bakery</a></h4>
		</div><!--	panel -->
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
	</div>
</div>

<?php echo $this->element('footer');?>
