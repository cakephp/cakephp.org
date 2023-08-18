<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Project $project
 */
?>
<div class="container ptb-120">
	<div class="row">
		<div class="col-sm-12 crud-actions">
			<?= $this->Html->link(__('Edit'), ['action' => 'edit', $project->id], [
				'class' => 'btn-sm btn-primary'
			]) ?>
			<?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $project->id], [
				'class' => 'btn-sm btn-danger',
				'confirm' => __('Are you sure you?')
			]) ?>
			<?= $this->Html->link(__('List Projects'), ['action' => 'index'], [
				'class' => 'btn-sm btn-primary'
			]) ?>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-12">
			<h3><?= h($project->title) ?></h3>

			<div class="well back-red view">
				<div class="row">
					<div class="col-sm-12 col-md-8 col-lg-6">
						<?php if (!empty($project->project_images)): ?>
							<div class="col-sm-8 col-md-6 col-lg-6">
								<div class="row">
									<?= $this->Image->display($project->project_images[0], null, [
										'style' => 'width:100%;margin-bottom:15px'
									]) ?>
								</div>
							</div>
						<?php endif; ?>

						<table class="vertical-table table">
							<tr>
								<th><?= __('Title') ?></th>
								<td><?= h($project->title) ?></td>
							</tr>
							<tr>
								<th><?= __('Website') ?></th>
								<td><?= h($project->website) ?></td>
							</tr>
							<tr>
								<th><?= __('Is Highlighted') ?></th>
								<td><?= $this->Showcase->boolean($project->is_highlighted) ?></td>
							</tr>
							<tr>
								<th><?= __('Is Showcase') ?></th>
								<td><?= $this->Showcase->boolean($project->is_showcase) ?></td>
							</tr>
							<tr>
								<th><?= __('Created') ?></th>
								<td><?= h($project->created) ?></td>
							</tr>
							<tr>
								<th><?= __('Modified') ?></th>
								<td><?= h($project->modified) ?></td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
