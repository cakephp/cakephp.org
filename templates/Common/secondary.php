<div class="hero narrowbox second">
	<div class="wrap">
		<div class="container-fluid text-center">
			<div class="col-md-3 col-lg-3 col-sm-3 col-xs-12 logo-container">
				<?= $this->Html->image('default/cake-logo2.png') ?>
			</div>
			<div class="col-md-9 col-lg-9 col-sm-9 col-xs-12 text-left">
				<p>
					<?= __('CakePHP makes building web applications') ?>
					<br/>
					<?= __('simpler, faster and require less code.') ?>
				</p>
				<?= $this->element('layout/default/links/main') ?>
				<div class="clearfix"></div>
				<span>
					<iframe src="https://ghbtns.com/github-btn.html?user=cakephp&amp;repo=cakephp&amp;type=star&amp;count=true&amp;size=small" frameborder="0" scrolling="0" width="120px" height="30px"></iframe>
					<iframe src="https://ghbtns.com/github-btn.html?user=cakephp&amp;repo=cakephp&amp;type=fork&amp;count=true&amp;size=small" frameborder="0" scrolling="0" width="120px" height="30px"></iframe>
					<div class="hidden-xs fb-like" data-href="https://www.facebook.com/cakephp" data-width="200" data-layout="button_count" data-action="like" data-show-faces="true" data-share="false"></div>
				</span>
			</div>
		</div>
	</div>
</div>
<div class="main">
	<div class="red narrowbox newred">
		<div class="container-fluid text-center">
			<h1><?= $this->fetch('title') ?></h1>
		</div>
	</div>
</div>

<?= $this->fetch('content') ?>
