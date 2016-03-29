<div class="row">
    <div class="col-sm-12">
		<?= $this->Html->link(__d('Showcase', 'View'), ['action' => 'view', $project->id], [
			'class' => 'btn btn-primary'
		]) ?>

        <?= $this->Form->postLink(
            __d('Showcase', 'Delete'),
            ['action' => 'delete', $project->id],
            [
                'confirm' => __('Are you sure you want to delete # {0}?', $project->id),
                'class' => 'btn btn-danger'
            ]
        )?>

        <?= $this->Html->link(__d('Showcase', 'List Projects'), ['action' => 'index'], [
            'class' => 'btn btn-primary'
        ]) ?>
    </div>
</div>

<div class="row">
    <div class="col-sm-12 projects">
        <h3><?= __d('Showcase', 'Edit Project') ?></h3>

        <?= $this->element('Projects/form') ?>
    </div>
</div>

