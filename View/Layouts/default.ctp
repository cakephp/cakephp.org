<!DOCTYPE html>
<html lang="en">
<head>
	<title>
		<?php echo __('CakePHP: the rapid development php framework. '); ?>
		<?php echo $title_for_layout;?>
	</title>
	<?php
		echo $this->Html->charset();
		echo $this->Html->meta('icon');
		echo $this->element('ie9-jumplist');
		echo $this->Html->css('foundation');
		echo $this->Html->css('app');
		echo $this->Html->css('/csfnavbar/css/style');
		echo $this->Html->script('foundation');
		echo $this->Html->script('app');

		echo '<!--[if lt IE 9]>' . $this->Html->css('ie') . '<![endif]-->';
	?>
</head>
<body class="js">
	<?php echo $this->element('navbar', array(), array('plugin' => 'Csfnavbar')); ?>
	<div id="container">
		<header>
			<div class="row">
				<h1><?php
					echo $this->Html->image('cake-logo.png', array(
						'alt' => 'CakePHP : the rapid development php framework',
						'class' => 'png',
						'url' => '/'
					));
				?></h1>
				<h2>
					<?php echo __('CakePHP makes building web applications simpler, faster and require less code.');?>
				</h2>

				<nav id="main-nav" class="row">
					<ul class="navigation columns five offset-by-six">
						<li><?php echo $this->Html->link(__('News'), array('controller' => 'news')); ?></li>
						<li><?php echo $this->Html->link(__('Development'), array('controller' => 'pages', 'action' => 'display', 'development')); ?></li>
						<li><?php echo $this->Html->link(__('Documentation'), array('controller' => 'pages', 'action' => 'display', 'documentation')); ?></li>
					</ul>
				</nav>
			</div>
		</header>

		<div id="content">
			<?php $this->Session->flash(); ?>
			<?php echo $content_for_layout;?>
		</div>

		<footer class="row">
			<nav class="six columns centered">
				<ul class="footer-nav">
					<li><?php echo $this->Html->link(__('News'), array('controller' => 'news')); ?></li>
					<li><?php echo $this->Html->link(__('Development'), array('controller' => 'pages', 'action' => 'display', 'development')); ?></li>
					<li><?php echo $this->Html->link(__('Documentation'), array('controller' => 'pages', 'action' => 'display', 'documentation')); ?></li>
				</ul>
				<p class="copyright">&copy; 2005-<?php echo date('Y'); ?> <?php echo $this->Html->link('Cake Software Foundation, Inc.', 'http://cakefoundation.org'); ?></p>
			</nav>
			<div class="hosting">
				<?php echo $this->Html->link(
					$this->Html->image('rackspace-logo.png'),
					'http://rackspace.com',
					array('escape' => false)); ?>
			</div>
			<script type="text/javascript" src="http://www.ohloh.net/projects/3176/widgets/project_thin_badge"></script>
			<p><a href="http://www.mark-story.com" rel="nofollow"><?php echo __('design by'); ?> mark story</a> |
			<?php echo $this->Html->link(
				__('Privacy Policy'),
				array('admin' => false, 'prefix' => null, 'plugin' => null, 'controller' => 'pages', 'action' => 'privacy')); ?>
			</p>
		</footer>

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
