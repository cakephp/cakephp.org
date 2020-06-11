<?php if ($project->website) : ?>
    <div class="col-sm-12 showcase-cases ptb-30">
        <div class="col-sm-4 <?= $index % 2 === 1 ? 'col-sm-push-8' : '' ?>">
            <a href="<?= $this->App->externalLink($project->website); ?>" target="_blank">
                <?= $this->Showcase->image($project->screen_monitor_images[0], [
                    'class' => 'img-responsive',
                ], 'small'); ?>
            </a>
        </div>
        <div class="col-sm-8 <?= $index % 2 === 1 ? 'col-sm-pull-4' : '' ?>">
            <h4><?= $project->title ?></h4>
            <?= $project->description ?>
        </div>
    </div>
<?php endif; ?>
