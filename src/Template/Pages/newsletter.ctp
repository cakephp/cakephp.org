<?php
	$title = 'CakePHP - Build fast, grow solid | CakePHP latest news';
	$description = 'Latest CakePHP News.';
	$this->assign('title', __($title));
	$this->assign('meta', $this->Html->meta('description', __($description)));
	$this->assign('socialMeta', $this->Meta->socialTags(['title' => __($title), 'description' => __($description)]));
?>
<div class="section newsletter">
	<div class="main dev">
		<div class="container-fluid docs newsletter">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<h1 class="title-red"><?= __('Newsletter Archive') ?></h1>
				<script language="javascript" src="http://us9.campaign-archive1.com/generate-js/?u=f380de581acd576e7d802552a&fid=13717&show=10" type="text/javascript"></script>
					<div class="clearfix"></div>
			</div>
		</div>
	</div>
</div>
<?= $this->element('home/newsletter')?>
