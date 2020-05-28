<div class="showcase-page">
    <?= $this->element('Showcase/title') ?>

    <?= $this->element('Showcase/first_highlight') ?>

    <?= $this->element('Showcase/highlight', ['index' => 1, 'class' => "back-dark data-height-fix featured-case-2"]) ?>

    <?= $this->element('Showcase/cases') ?>

    <?= $this->element('Showcase/highlight', ['index' => 2, 'class' => "back-medium-gray data-height-fix featured-case-3"]) ?>

    <?= $this->element('home/support')?>
    <div class="row">
        <div class="col-md-offset-3 col-md-6 col-xs-offset-1 col-xs-10">
            <?= $this->element('home/quotes')?>
        </div>
    </div>

	<?= $this->element('home/company_logos') ?>

    <?= $this->element('home/newsletter')?>
</div>
