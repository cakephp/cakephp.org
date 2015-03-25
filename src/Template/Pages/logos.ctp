<?php
$this->extend('/Common/secondary');
$this->assign('title', __('CakePHP Logos and Assets'));

$emailLegal = $this->Html->tag('strong', 'legal [at] cakefoundation.org');
$wallpapers = array(
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
);
?>
<div class="main dev">
    <div class="container-fluid docs">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <p>
                <?= __(
                    'The logos linked below are licensed as {0}; please link to {1} as the attribution when using them (either as a hyperlink or simply the text).',
                    '<a href="http://creativecommons.org/licenses/by-nc-nd/3.0/">Creative Commons Attribution-NonCommercial-NoDerivs 3.0 Unported</a>',
                    '<a href="http://cakephp.org">http://cakephp.org</a>'
                ) ?>
            </p>
            <p>
                <?= __('If you intend on making money or promoting a commercial service by using these logos, you must first contact {0} for licensing information before using the logo or any associated assets.', $emailLegal) ?>
            </p>
            <h3><?= __('Where can I use it?'); ?></h3>
            <p>
                <?= __('If you run, own or operate a personal blog, you may use the logo to discuss CakePHP, or place the logo to show your support and that you use the framework.'); ?>
            </p>
            <p>
                <?= __('If you intend to use the CakePHP logo to promote a service or product you must first obtain written permission from the Cake Software Foundation.'); ?>
                <?= __('You may use the "powered by" logos to let the world know that your site or product is built with CakePHP.'); ?>
            </p>
            <h3><?= __('Where can\'t I use it?'); ?></h3>
            <p>
                <?= __('For the publication or promotion of commercial services related to CakePHP development, use of the logos is not permitted without permission from the Cake Software Foundation. For more information regarding the licensing options and capabilities, please contact {0}.', $emailLegal) ?>
            </p>
        </div>
    </div>
</div>
<div class="main">
    <div class="gray narrowbox newred gray-pattern logos">
        <div class="container-fluid text-center">
            <div class="col-lg-8 col-md-8 col-lg-push-2 col-md-push-2">
                <h3><?= __('Logos'); ?></h3>
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
            <h3><?= __('Wallpapers'); ?></h3>
            <p><?= __('These wallpapers are designed as 1024 pixels wide, and square. This makes them appropriate for devices that allow orientation switching while maintaining the design of the wallpaper within the bounds of your device. They\'re also great for desktop backgrounds, or any other place you want a giant sexy CakePHP wallpaper.'); ?></p>
        </div>
        </div>
        <div class="container-fluid walls">
        <div class="col-lg-8 col-md-8 col-lg-push-2 col-md-push-2 text-left logos">
            <?php foreach ($wallpapers as $wallpaper): ?>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                    <div class="book-cover">
                        <div class="polygon-button-shadow"></div>
                        <?= $this->Html->link(
                            '',
                            '/img/ipad-wallpaper/' . $wallpaper . '.png',
                            [
                                'target' => '_blank',
                                'escape' => false,
                                'class' => 'polygon-button',
                                'style' => implode('; ', [
                                    'padding: 5px 5px 5px 0',
                                    'background-image: url(/img/ipad-wallpaper/' . $wallpaper . '-thumb.png)',
                                    'background-size: cover',
                                    'background-position: center center',
                                ])
                            ]
                        ) ?>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</div>
