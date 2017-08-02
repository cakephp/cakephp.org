<?php
/**
 * @var \App\View\AppView $this
 */

$this->assign('title', __('CakePHP is coming to your town!'));
?>
<section class="clearfix">
    <div class="container-fluid">
        <div class="row roadtrip-hero">
            <?= $this->Html->image('roadtrip-hero.svg') ?>
        </div>
    </div>
</section>
<section>
    <div class="container roadtrip-body">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <h1><?= __('CakePHP is coming to your town!') ?></h1>
                <p><?= __('Cake Road Trip is an opportunity for members of CakePHP core team come visit you at a local PHP meetup! The Team is keen to meet community members from around the world, bringing Cake Road Trip to you! Keen to have us come visit your meetup? Well, this is the opportunity to let us know! We are trying our best to come to as many locations as possible.') ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <?= $this->Html->image('plaque2.svg', ['class' => 'plaque2svg']) ?>
                <h2><?= __('We’re just waiting for your invitation') ?></h2>
                <p><?= __('If you have a PHP or CakePHP meetup group and are excited to have us come visit, let us know soon! We will go to as many places as we can fit into our Cake Road Trip. And will be asking the community to vote for the top places to visit!') ?></p>
            </div>
        </div>
        <?php if (!$flash = $this->Flash->render('contact')): ?>
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <?= $this->Form->create(null, ['url' => ['controller' => 'Contacts', 'action' => 'roadTrip'], 'class' => 'road-form']) ?>
                        <?= $this->Form->input('name', ['label' => __('Name {0}', $this->Html->tag('span', __('(Required)'))), 'escape' => false, 'class' => 'form-control']) ?>
                        <?= $this->Form->input('email', ['label' => __('Email {0}', $this->Html->tag('span', __('(Required)'))), 'escape' => false, 'class' => 'form-control']) ?>
                        <?= $this->Form->input('where', ['label' => __('Tell us where would you’d like us to go next {0}', $this->Html->tag('span', __('(Required)'))), 'escape' => false, 'class' => 'form-control']) ?>
                        <?= $this->Form->button(__('Notify me!')) ?>
                    <?= $this->Form->end() ?>
                </div>
            </div>
        <?php else: ?>
            <?= $flash ?>
        <?php endif; ?>
    </div>
    <div class="roadtrip-bottom">
        <?= $this->Html->image('roadtrip-footer-img.svg') ?>
    </div>
</section>
