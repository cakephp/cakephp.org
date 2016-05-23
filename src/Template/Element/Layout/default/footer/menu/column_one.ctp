<?php $menu = [
    'business' => [
        'class' => 'menu-title menu-title-m',
        'icon' => 'fa fa-menu-title fa-briefcase',
        'url' => '/pages/business-solutions',
		'title' => __('Business Solutions')
    ],
    'showcase' => [
        'class' => 'menu-title mt30',
        'icon' => 'fa fa-menu-title fa-desktop',
        'url' => ['plugin' => 'showcase', 'controller' => 'projects'],
		'title' => __('Showcase')
    ]
];
?>
<ul class="footer-menu business-solution">
    <?= $this->App->menuItems($menu); ?>
</ul>
