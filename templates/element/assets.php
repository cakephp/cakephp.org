<?php
$wallpapers = [
    'CakePHP-1.1-iPad01-light',
    'CakePHP-1.1-iPad01',
    'CakePHP-1.1-iPad02-light',
    'CakePHP-1.1-iPad02',
    'CakePHP-1.2-iPad01-light',
    'CakePHP-1.2-iPad01',
    'CakePHP-1.2-iPad02-light',
    'CakePHP-1.2-iPad02',
    'CakePHP-1.2-iPad03-light',
    'CakePHP-1.2-iPad03',
];
?>
<div class="main">
    <div class="gray narrowbox newred gray-pattern logos">
        <div class="container-fluid text-center">
            <div class="col-lg-8 col-md-8 col-lg-push-2 col-md-push-2">
                <h3 id="#logos"><?= __('Logos'); ?></h3>
                <div class="col-xs-6 col-sm-4 col-lg-3">
                    <?= $this->Html->image('default/cake-logo.png') ?>
                </div>
                <div class="col-xs-6 col-sm-4 col-lg-3 smaller">
                    <?= $this->Html->image('default/cake-logo-smaller.png') ?>
                    <div class="clearfix"></div>
                    <?= $this->Html->image('default/cake-logo-smaller2.png') ?>
                    <div class="clearfix"></div>
                    <?= $this->Html->image('default/cake-logo-smaller3.png') ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="main no-padding">
    <div class="container-fluid">
        <div class="col-lg-8 col-md-8 col-lg-push-2 col-md-push-2 text-left logos">
            <h3 id="#wallpapers"><?= __('Wallpapers'); ?></h3>
            <p><?= __('These wallpapers are designed as 1024 pixels wide, and square. This makes them appropriate for devices that allow orientation switching while maintaining the design of the wallpaper within the bounds of your device. They\'re also great for desktop backgrounds, or any other place you want a giant sexy CakePHP wallpaper.'); ?></p>
        </div>
    </div>
    <div class="container-fluid walls">
        <div class="col-lg-8 col-md-8 col-lg-push-2 col-md-push-2 text-left logos">
            <?php foreach ($wallpapers as $wallpaper) : ?>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                    <div class="book-cover">
                        <div class="polygon-button-shadow"></div>
                        <?= $this->Html->link(
                            '',
                            '/img/ipad-wallpaper/' . $wallpaper . '.png',
                            [
                                'target' => '_blank',
                                'escape' => false,
                                'class' => 'polygon-button wallpaper',
                                'style' => 'background-image: url(/img/ipad-wallpaper/' . $wallpaper . '-thumb.png);',
                            ]
                        ) ?>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</div>
