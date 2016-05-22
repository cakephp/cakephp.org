<?php
$title = __('CakePHP Rapid Development PHP Framework | Rebranding');
$description = __('CakePHP Rebranding');
$this->assign('title', $title);
$this->assign('meta', $this->Html->meta('description', $description));
$this->assign('socialMeta', $this->Meta->socialTags(['title' => $title, 'description' => $description]));
?>
<section class="stripe-rebra">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 title-rebranding">
				<h1>CakePHP.<br> <?= __('A new brand. {0} The same {1}.', $this->Html->tag('br'), $this->Html->tag('em', __('vision')))?></h1>
				<div class="rebra-detail hidden-xs hidden-sm">
					<?= $this->Html->image('rebranding/logo-detail.png', ['class' => 'img-responsive center-block'])?>
				</div>
			</div>
		</div>
	</div>
</section>
<?= $this->element('rebranding/summary')?>
<?= $this->element('rebranding/changes')?>
<?= $this->element('rebranding/cake_variations')?>
<?= $this->element('rebranding/guide')?>
<?= $this->element('home/newsletter')?>





