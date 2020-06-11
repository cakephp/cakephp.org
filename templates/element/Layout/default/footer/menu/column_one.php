<?php $menu = [
    'business' => [
        'class' => 'menu-title',
        'icon' => 'fa fa-menu-title fa-briefcase',
        'url' => [
            'prefix' => false,
            'plugin' => false,
            'controller' => 'Pages',
            'action' => 'display',
            'business-solutions'
        ],
        'title' => __('Business Solutions')
    ],
    'showcase' => [
        'class' => 'menu-title mt30',
        'icon' => 'fa fa-menu-title fa-desktop',
        'url' => [
            'prefix' => false,
            'plugin' => false,
            'controller' => 'Projects'
        ],
        'title' => __('Showcase')
    ]
];
?>
<ul class="footer-menu business-solution">
    <?= $this->App->menuItems($menu); ?>
</ul>
