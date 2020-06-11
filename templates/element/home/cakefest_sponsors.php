<?php
use Cake\Core\Configure;
use Cake\Utility\Hash;

$sponsors = Configure::read('Site.cakefest.sponsors');
?>
<section id="sponsors" class="pt-90">
    <?= $this->Html->image('sponsor_words.svg', ['class' => 'sponsor-icon']) ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2><?= __('A word from our sponsors:')?></h2>
            </div>
            <?php foreach ($sponsors as $sponsor) : ?>
            <div class="col-md-4 mb90">
                <div class="sponsor col-md-offset-1">

                    <div class="sponsor-logo" style="<?= Hash::get($sponsor, 'logo.style') ?>">
                        <?= $this->Html->image(Hash::get($sponsor, 'logo.img')); ?>
                    </div>
                        <?= $this->Html->tag('div', __($sponsor['copy']['text']), ['class' => 'sponsor-copy', 'style' => Hash::get($sponsor, 'copy.style')]) ?>
                </div>
            </div>
            <?php endforeach;?>
        </div>
    </div>
</section>
