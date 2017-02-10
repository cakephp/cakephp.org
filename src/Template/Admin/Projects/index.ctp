<div class="container ptb-120">
	<div class="row">
		<div class="col-sm-12">
			<?= $this->Html->link(__d('Showcase', 'New Project'), ['action' => 'add'], [
				'class' => 'btn-sm btn-primary'
			]) ?>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-12 projects">
			<h3><?= __d('Showcase', 'Projects') ?></h3>
			<table class="table">
				<thead>
					<tr>
						<th><?= $this->Paginator->sort('id') ?></th>
						<th><?= $this->Paginator->sort('title') ?></th>
						<th><?= $this->Paginator->sort('website') ?></th>
						<th><?= $this->Paginator->sort('is_highlighted') ?></th>
						<th><?= $this->Paginator->sort('is_showcase') ?></th>
						<th class="actions"></th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($projects as $project): ?>
					<tr>
						<td><?= $this->Number->format($project->id) ?></td>
						<td><?= h($project->title) ?></td>
						<td><?= h($project->website) ?></td>
						<td><?= $this->Showcase->boolean($project->is_highlighted) ?></td>
						<td><?= $this->Showcase->boolean($project->is_showcase) ?></td>
						<td class="actions text-right">
							<?= $this->Html->link(
								$this->Html->tag('i', '', ['class' => 'fa fa-eye']),
								['action' => 'view', $project->id],
								['escape' => false]
							) ?>

							<?= $this->Html->link(
								$this->Html->tag('i', '', ['class' => 'fa fa-edit']),
								['action' => 'edit', $project->id],
								['escape' => false]
							) ?>

							<?= $this->Form->postLink(
								$this->Html->tag('i', '', ['class' => 'fa fa-trash']),
								['action' => 'delete', $project->id],
								[
									'confirm' => __('Are you sure you want to delete # {0}?', $project->id),
									'escape' => false
								]
							) ?>
						</td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
			<div class="paginator">
				<ul class="pagination">
					<?= $this->Paginator->prev('< ' . __('previous')) ?>
					<?= $this->Paginator->numbers() ?>
					<?= $this->Paginator->next(__('next') . ' >') ?>
				</ul>
				<p><?= $this->Paginator->counter() ?></p>
			</div>
		</div>
	</div>
</div>
