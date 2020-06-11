<?php

use Cake\Core\Configure;

$quotes = Configure::read('Site.quotes');
?>

<section class="showcase mt100">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-6">
                <div>
                    <h2><?= __("Companies using CakePHP") ?></h2>
                    <h3><?= __('Here are some of the companies trusting our framework.') ?></h3>
                    <?= $this->Html->link(
                        __("View Showcase"),
                        ['controller' => 'projects', 'action' => 'index'],
                        ['class' => 'btn btn-home mb40 mt10']
                    ) ?>
                </div>

                <?= $this->element('home/quotes') ?>

                <?= $this->element('home/company_logos') ?>
            </div>
            <div class="col-xs-12 col-md-6">
                <?= $this->cell('HomePageHighlight') ?>
            </div>
        </div>
    </div>
</section>
