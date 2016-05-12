<?php $menu = [
    'business' => [
        'class' => 'menu-title mt30',
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
$menu = array_merge($this->Menu->documentationItems(), $menu);
?>
<ul class="footer-menu">
    <li class="menu-title menu-title-m"><i class="fa fa-menu-title fa-book"></i><?= __('Documentation')?></li>
    <?= $this->App->menuItems($menu); ?>
</ul>
