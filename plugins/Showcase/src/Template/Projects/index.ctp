<h1 class="text-center"><?= __d('Showcase', 'CakePHP Success Stories') ?></h1>
<h2 class="text-center"><?= __d('Showcase', "Here's is how CakePHP has helped others companies to succeed.") ?></h2>

<?php if ($highlighted): ?>
	<div class="row">
		<div class="col-sm-12 text-center">
			<?= $this->Image->display($highlighted->project_images[0]); ?>
		</div>
		<div class="col-sm-12">
			<div class="row">
				<div class="col-sm-6 text-right">
					<p class="title"><?= $highlighted->title ?></p>
					<p class="brief_description"><?= $highlighted->brief_description ?></p>
				</div>

				<div class="col-sm-6 description">
					<?= $highlighted->description ?>
				</div>
			</div>
		</div>
	</div>
<?php endif ?>

<div class="row">
	<div class="s12">
		<h3 class="text-center"><?= __d('Showcase', 'More Stories') ?></h3>

		<?php foreach ($projects as $i => $project): ?>
			<div class="row">
				<div class="col-sm-4 <?= $i%2 == 0 ? 'pull-left' : 'pull-right'; ?>">
					<?= $this->Image->display($project->project_images[0], null, ['class' => 'img-responsive']) ?>
				</div>
				<div class="col-sm-8 <?= $i%2 == 0 ? 'text-left' : 'text-right'; ?>">
					<p class="title"><?= $project->title ?></p>
					<?= $project->description ?>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
</div>
