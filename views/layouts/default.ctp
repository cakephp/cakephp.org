<?php
/* SVN FILE: $Id: default.ctp 608 2008-09-22 23:45:29Z gwoo $ */
/**
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) :  Rapid Development Framework <http://www.cakephp.org/>
 * Copyright 2005-2007, Cake Software Foundation, Inc.
 *								1785 E. Sahara Avenue, Suite 490-204
 *								Las Vegas, Nevada 89104
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @filesource
 * @copyright		Copyright 2005-2007, Cake Software Foundation, Inc.
 * @link				http://www.cakefoundation.org/projects/info/cakephp CakePHP(tm) Project
 * @package			cake
 * @subpackage		cake.cake.libs.view.templates.pages
 * @since			CakePHP(tm) v 0.10.0.1076
 * @version			$Revision: 608 $
 * @modifiedby		$LastChangedBy: gwoo $
 * @lastmodified	$Date: 2008-09-22 16:45:29 -0700 (Mon, 22 Sep 2008) $
 * @license			http://www.opensource.org/licenses/mit-license.php The MIT License
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>
		<?php __('CakePHP: the rapid development php framework. '); ?>
		<?php echo $title_for_layout;?>
	</title>

	<?php
		echo $html->charset();

		echo $html->meta('icon');

		echo $html->css('styles');

		echo '<!--[if lte IE 7]>' . $html->css('ieold') . '<![endif]-->';
	?>
</head>
<body class="js">
	<div id="container">
		<div id="header">
			<h1><?php
				$image = $html->image('cake-logo.png',  array('alt' => "CakePHP : the rapid development php framework", 'class' => 'png'));
				echo $html->link($image, '/', null, null, false);
			?></h1>
			<p class="copy">
				<?php __('CakePHP enables PHP users at all levels to rapidly develop robust web applications.');?>
			</p>
		</div>
		<div id="main_nav">
			<ul class="navigation">
				<li><?php echo $html->link('Jobs', array('controller' => 'jobs'));?></li>
				<li><?php echo $html->link('Planet', array('controller' => 'feeds'));?></li>
				<li><?php echo $html->link('Downloads', array('controller' => 'downloads'));?></li>
				<li><?php echo $html->link('Screencasts', array('controller' => 'screencasts'));?></li>
			</ul>
		</div>
		<div id="secondary_nav">
			<ul class="navigation">
				<li><?php echo $html->link('About CakePHP', array('controller' => 'pages', 'action' => 'display', 'features'));?></li>
				<li><a href="https://trac.cakephp.org/wiki/Contributors">Developers</a></li>
			</ul>
		</div>
		<div id="sites_nav">
			<ul class="navigation">
				<li class="current"><a href="http://cakephp.org/">CakePHP</a></li>
				<li><a href="http://api.cakephp.org/">API</a></li>
				<li><a href="http://book.cakephp.org/">Docs</a></li>
				<li><a href="http://bakery.cakephp.org/">Bakery</a></li>
				<li><a href="http://live.cakephp.org/">Live</a></li>
				<li><a href="http://cakeforge.org/">Forge</a></li>
				<li><a href="http://code.cakephp.org/">Code</a></li>
			</ul>
		</div>

		<!-- Google CSE Search Box Begins  searchbox_009885676942928220334%3Azpzwk0qnnsk-->
		<form action="<?php echo $html->url('/pages/search', true)?>" id="search">
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
				if ($session->check('Message.flash')):
						$session->flash();
				endif;
			?>
			<?php echo $content_for_layout;?>

		</div>
		<div id="footer">
			<p>&copy; 2005-<?php echo date('Y'); ?> Cake Software Foundation, Inc.</p>
			<?php
				echo '<script type="text/javascript" src="http://www.ohloh.net/projects/3176/widgets/project_thin_badge"></script>';
			?>

			<?php echo $html->link(
							$html->image('cake.power.gif', array('alt'=> __("CakePHP: the rapid development php framework", true), 'border'=>"0")),
							'http://www.cakephp.org/',
							array('target'=>'_new'), null, false
						);
			?>
			<p><a href="http://www.nolimit-studio.com/">design by armando sosa</a></p>
		</div>
	</div>
	<?php echo $cakeDebug; ?>
	<?php echo $scripts_for_layout; ?>
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