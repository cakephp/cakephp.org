<?php
use Cake\Core\Configure;
?>

<div id="getHelp" class="col-sm-12 get-social pt-100">
	<h2><?= __('Get Help')?></h2>

	<p><?= __('Looking for help but don\'t know where to find it? Here are all the locations you can find community driven
		support and sources of information:')?></p>

	<div class="col-sm-12 p0 mt30">
		<div class="col-sm-1 p0">
			<i class="fa get-social-icon fa-slack"></i>
		</div>
		<div class="col-sm-11 p0">
			<?= $this->Html->tag(
					'p',
					__('{0}: Join our CakePHP Slack Channel',
					$this->Html->link('#Slack', Configure::read('Site.menu.items.help.slack.url'), ['target' => '_blank'])
				))
			?>
		</div>
	</div>
	<div class="col-sm-12 p0">
		<div class="col-sm-1 p0">
			<i class="get-social-icon icon-irc-2">#IRC</i>
		</div>
		<div class="col-sm-11 p0">
			<?= $this->Html->tag(
				'p',
				__('{0}: Join us in the #cakephp IRC channel',
					$this->Html->link('IRC', Configure::read('Site.menu.items.help.irc.url'), ['target' => '_blank'])
				))
			?>
		</div>
	</div>
	<div class="col-sm-12 p0">
		<div class="col-sm-1 p0">
			<i class="fa get-social-icon fa-git"></i>
		</div>
		<div class="col-sm-11 p0">
			<?= $this->Html->tag(
				'p',
				__('{0}: Report issues, help fix bugs or implement features',
					$this->Html->link(__('Issues'), Configure::read('Site.menu.items.community.issues.url'), ['target' => '_blank'])
				))
			?>
		</div>
	</div>
	<div class="col-sm-12 p0">
		<div class="col-sm-1 p0">
			<i class="fa get-social-icon fa-pencil-square-o"></i>
		</div>
		<div class="col-sm-11 p0">
			<?= $this->Html->tag(
				'p',
				__('{0}: Find news and articles on many topics regarding CakePHP',
					$this->Html->link(__('Blog'), Configure::read('Site.menu.items.community.blog.url'))
				))
			?>
		</div>
	</div>
	<div class="col-sm-12 p0">
		<div class="col-sm-1 p0">
			<i class="fa get-social-icon fa-stack-overflow"></i>
		</div>
		<div class="col-sm-11 p0">
			<?= $this->Html->tag(
				'p',
				__('{0}: Get your issues resolved by the open source community',
					$this->Html->link(__('StackOverflow'), Configure::read('Site.menu.items.help.stackOverflow.url'), ['target' => '_blank'])
				))
			?>
		</div>
	</div>
	<div class="col-sm-12 p0">
		<div class="col-sm-1 p0">
			<i class="fa get-social-icon fa-facebook"></i>
		</div>
		<div class="col-sm-11 p0">
			<?= $this->Html->tag(
				'p',
				__('{0}: Official announcements from the CakePHP community',
					$this->Html->link(__('Facebook'), Configure::read('Site.menu.items.community.facebook.url'), ['target' => '_blank'])
				))
			?>
		</div>
	</div>
	<div class="col-sm-12 p0">
		<div class="col-sm-1 p0">
			<i class="fa get-social-icon fa-youtube-play"></i>
		</div>
		<div class="col-sm-11 p0">
			<?= $this->Html->tag(
				'p',
				__('{0}: Tutorials and screencasts related to development and events',
					$this->Html->link(__('YouTube'), Configure::read('Site.menu.items.community.youtube.url'), ['target' => '_blank'])
				))
			?>
		</div>
	</div>
	<div class="col-sm-12 p0">
		<div class="col-sm-1 p0">
			<i class="fa get-social-icon fa-twitter"></i>
		</div>
		<div class="col-sm-11 p0">
			<?= $this->Html->tag(
				'p',
				__('{0}: Get the latest updates from around the world',
					$this->Html->link(__('Twitter'), Configure::read('Site.menu.items.community.twitter.url'), ['target' => '_blank'])
				))
			?>
		</div>
	</div>
	<div class="col-sm-12 p0">
		<div class="col-sm-1 p0">
			<i class="fa get-social-icon fa-reddit-alien"></i>
		</div>
		<div class="col-sm-11 p0">

			<?= $this->Html->tag(
				'p',
				__('{0}: Official Subreddit of CakePHP',
					$this->Html->link(__('CakePHP on Reddit'), 'https://www.reddit.com/r/cakephp/', ['target' => '_blank'])
				))
			?>
		</div>
	</div>
</div>
