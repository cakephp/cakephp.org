<?php
$title = __('CakePHP Rapid Development PHP Framework | Success story showcases');
$description = __(' CakePHP making building web applications simpler, faster and require less code. Success stories - how CakePHP has helped other companies to succeed.');
$this->assign('title', $title);
$this->assign('meta', $this->Html->meta('description', $description));
$this->assign('socialMeta', $this->Meta->socialTags(['title' => $title, 'description' => $description]));
?>

<section class="show-title">
	<div class="container">
		<div class="row">
			<div class="col-md-12 title-showcase">
				<h1><?= __("CakePHP Success Stories") ?></h1>
				<h3><?= __("Here’s how CakePHP has helped other companies to succeed.") ?></h3>
			</div>
		</div>
	</div>
</section>