<?php $menu = [
    'CookBook' => '#',
    'Api' => '#',
    'Videos' => '#',
    'Privacy Policy' => '#',
    'Logos & Trademarks' => '#',
    'Business Solutions' => [
        'class' => 'menu-title mt30',
        'icon' => 'fa fa-menu-title fa-briefcase',
        'url' => '#'
    ],
    'Showcase' => [
        'class' => 'menu-title mt30',
        'icon' => 'fa fa-menu-title fa-desktop',
        'url' => '#'
    ]
] ?>

<ul class="footer-menu">
    <li class="menu-title menu-title-m"><i class="fa fa-menu-title fa-book"></i><?= __('Documentation')?></li>

    <?= $this->App->footerMenuItems($menu); ?>
</ul>
