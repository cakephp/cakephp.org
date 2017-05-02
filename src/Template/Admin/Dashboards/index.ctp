<div class="container ptb-120">
	<div class="row">
		<div class="col-sm-12">
			<?= $this->Html->link(__('Projects'), [
				'controller' => 'Projects',
				'action' => 'index'], [
				'class' => 'btn-sm btn-primary'
			]) ?>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-12 projects">
			<h3><?= __('Welcome to your Dashboard') ?></h3>
		</div>
	</div>
</div>
