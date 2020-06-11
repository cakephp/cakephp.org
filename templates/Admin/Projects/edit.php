<div class="container ptb-120">
	<div class="row">
		<div class="col-sm-12 crud-actions">
			<?= $this->Html->link(__('View'), ['action' => 'view', $project->id], [
				'class' => 'btn-sm btn-primary',
			]) ?>

			<?= $this->Form->postLink(
				__('Delete'),
				['action' => 'delete', $project->id],
				[
					'confirm' => __('Are you sure you want to delete # {0}?', $project->id),
					'class' => 'btn-sm btn-danger',
				]
			)?>

			<?= $this->Html->link(__('List Projects'), ['action' => 'index'], [
				'class' => 'btn-sm btn-primary',
			]) ?>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-12 projects">
			<h3><?= __('Edit Project') ?></h3>

			<?= $this->element('Projects/form') ?>
		</div>
	</div>
</div>
