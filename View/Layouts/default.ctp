<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>
		<?php echo __('CakePHP: the rapid development php framework. '); ?>
		<?php echo $title_for_layout;?>
	</title>

	<?php
		echo $this->Html->charset();
		echo $this->Html->meta('icon');
		echo $this->element('ie9-jumplist');
		echo $this->Html->css('styles');
		echo $this->Html->css('/csfnavbar/css/style');
		echo '<!--[if lte IE 7]>' . $this->Html->css('ieold') . '<![endif]-->';
	?>
</head>
<body class="js">
	<?php echo $this->element('navbar', array('plugin' => 'csfnavbar')); ?>
	<div id="container">
		<div id="header">
			<h1><?php
<<<<<<< HEAD
				$image = $this->Html->image('cake-logo.png',  array('alt' => 'CakePHP : the rapid development php framework', 'class' => 'png'));
=======
				$image = $this->Html->image('cake-logo.png',  array('alt' => "CakePHP : the rapid development php framework", 'class' => 'png'));
>>>>>>> Updating files.
				echo $this->Html->link($image, '/', array('escape' => false));
			?></h1>
			<p class="copy">
				<?php echo __('CakePHP enables PHP users at all levels to rapidly develop robust web applications.');?>
			</p>
		</div>
		<div id="main_nav">
			<ul class="navigation">
				<?php /*
				<li><?php echo $this->Html->link('Jobs', array('controller' => 'jobs'));?></li>
				<li><?php echo $this->Html->link('Planet', array('controller' => 'feeds'));?></li>
				<li><?php echo $this->Html->link('Downloads', array('controller' => 'downloads'));?></li>
				<li><?php echo $this->Html->link('Screencasts', array('controller' => 'screencasts'));?></li>
				*/ ?>
			</ul>
		</div>
		<?php /*
		<div id="secondary_nav">
			<ul class="navigation">
				<li><?php echo $this->Html->link('About CakePHP', array('controller' => 'pages', 'action' => 'display', 'features'));?></li>
				<li><a href="https://trac.cakephp.org/wiki/Contributors">Developers</a></li>
			</ul>
		</div>
		*/ ?>
		<div id="sites_nav">
			<?php /*
			<ul class="navigation">
				<li class="current"><a href="http://cakephp.org/">CakePHP</a></li>
				<li><a href="http://api.cakephp.org/">API</a></li>
				<li><a href="http://book.cakephp.org/">Docs</a></li>
				<li><a href="http://bakery.cakephp.org/">Bakery</a></li>
				<li><a href="http://live.cakephp.org/">Live</a></li>
				<li><a href="http://cakeforge.org/">Forge</a></li>
				<li><a href="http://code.cakephp.org/">Code</a></li>
				<li><a href="http://cakeqs.org/">Questions</a></li>
			</ul>
			*/ ?>
		</div>

		<!-- Google CSE Search Box Begins  searchbox_009885676942928220334%3Azpzwk0qnnsk-->
		<form action="<?php echo $this->Html->url('/pages/search', true)?>" id="search">
		  <input type="hidden" name="cx" value="009885676942928220334:zpzwk0qnnsk" />
		  <input type="hidden" name="cof" value="FORID:11" />
		  <label for="search_term">Search</label>
		  <input type="text" name="q" size="25" id="search_term"/>
		  <input type="submit" name="sa" value="Search" id="search_submit_btn"/>
		</form>
		<script type="text/javascript" src="http://www.google.com/coop/cse/brand?form=search&amp;lang=en"></script>
		<!-- Google CSE Search Box Ends -->

		<div id="content">
			<?php
				if ($this->Session->check('Message.flash')):
						$this->Session->flash();
				endif;
			?>
			<?php echo $content_for_layout;?>

		</div>
		<div id="footer">
			<div class="hosting">
				<?php echo $this->Html->link(
					$this->Html->image('rackspace-logo.png'),
					'http://rackspace.com',
					array('escape' => false)); ?>
			</div>
			<script type="text/javascript" src="http://www.ohloh.net/projects/3176/widgets/project_thin_badge"></script>
			<?php echo $this->Html->link(
				$this->Html->image(
					'cake.power.gif',
					array(
						'alt'=> __("CakePHP: the rapid development php framework", true),
						'border' => '0'
					)),
				'http://www.cakephp.org/',
				array(
					'target' => '_new',
					'escape' => false)); ?>
			<p><a href="http://www.nolimit-studio.com/" rel="nofollow"><?php __('design by'); ?> armando sosa</a> |
			<?php echo $this->Html->link(
				__('Privacy Policy', true),
				array('admin' => false, 'prefix' => null, 'plugin' => null, 'controller' => 'pages', 'action' => 'privacy')); ?></p>
			<p>&copy; 2005-<?php echo date('Y'); ?> <?php echo $this->Html->link('Cake Software Foundation, Inc.', 'http://cakefoundation.org'); ?></p>
		</div>
		<div class="clear"></div>
	</div>
	<?php echo $scripts_for_layout; ?>
	<?php echo $this->Js->writeBuffer(); ?>
	<?php if(env('SERVER_ADDR') != '127.0.0.1'):?>
		<script type="text/javascript">
			var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
			document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
		</script>
		<script type="text/javascript">
			var pageTracker = _gat._getTracker("UA-743287-4");
			pageTracker._initData();
			pageTracker._trackPageview();
		</script>
	<?php endif;?>
</body>
</html>
