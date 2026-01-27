<?php
$title = __('CakePHP - Build fast, grow solid | Versions - Support');
$description = __('versions - support');
$this->assign('title', $title);
$this->assign('meta', $this->Html->meta('description', $description));
$this->assign('socialMeta', $this->Meta->socialTags(['title' => $title, 'description' => $description]));
?>
<section id="team-cake">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center">
				<h3><?= __('Versions - Support CakePHP')?></h3>
			</div>
		</div>
	</div>
</section>
