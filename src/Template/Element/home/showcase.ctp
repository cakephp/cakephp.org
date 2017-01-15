<section>
	<?=  $this->cell('HomePageHighlight') ?>
</section>

<section id="companies">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h3><?= __("Companies using CakePHP") ?></h3>
                <?= $this->Html->link(
                	__("View the Showcase"),
                	['controller' => 'projects', 'action' => 'index'],
                	['class' => 'btn btn-red mt40']
                ) ?>
            </div>
        </div>
    </div>
</section>
