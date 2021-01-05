<?php

use Cake\Core\Configure;

?>

<?php if (!$this->App->isCakeFestDone()) : ?>
    <section class="hero-2 section-fest">
        <div class="container text-center">
            <div class="row">
                <div class="col-sm-10 col-md-4 col-sm-offset-1 col-md-offset-4">
                    <a href="http://cakefest.org/tickets" target="_blank">
                        <div class="box-cakefest text-center">
                            <span class="glyph_range icon-fest">N</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="cakefest" class="pt-90 fundo-w">
        <div class="container">
            <div class="row col-p30 mt20">
                <div class="col-md-12 text-center">
                    <h3><?= Configure::read('Site.cakefest.title') . ' ' . Configure::read('Site.cakefest.location') ?></h3>
                    <h5 class="sub-fest"><?= $this->App->cakeFestDates() ?></h5>
                </div>

                <div class="col-md-6 col-md-offset-1">
                    <p><?= __('Don\'t have a ticket yet? Only a limited amount are available, so purchase yours today! From
					 a wide range of talks, interactive workshops to prizes, giveaways and fun social activities all planned
					 over 4 exciting days!') ?></p>
                    <div class="text-center">
                        <?= $this->Html->link(
                            __('Buy Your Tickets'),
                            'http://cakefest.org/tickets',
                            [
                                'style' => 'color:white;',
                                'target' => '_blank',
                                'class' => 'btn btn-fest mt40',
                            ]
                        ) ?>
                        </button>
                    </div>
                </div>
                <div class="col-md-3 col-md-offset-1">
                    <a href='http://cakefest.org/tickets' title="<?= __('Get your ticket!') ?>">
                        <?php if ($this->App->isCakeFestInFuture()) : ?>
                            <div class="box-data">
                                <h6>Only</h6>
                                <h6><span><?= $this->App->cakeFestDaysLeft() ?><span></h6>
                                <h5>days left to</h5>
                                <h4><?= Configure::read('Site.cakefest.title') ?></h4>
                            </div>
                        <?php else : ?>
                            <div class="box-data">
                                <h6>STREAMING</h6>
                                <h6><span style="font-size:75px">NOW<span></h6>
                                <h4><?= Configure::read('Site.cakefest.title') ?></h4>
                            </div>
                        <?php endif; ?>
                    </a>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
