<?php $menu = [
    'Issues (Github)' => '#',
    'Youtube Channel' => '#',
    'Google Groups' => '#',
    'Stack Overflow' => '#',
    'Commercial' => '#',
    'IRC' => '#',
    'Quora' => '#',
    'Facebook' => '#',
    'Calendar' => [
        'class' => 'menu-title mt30',
        'icon' => 'fa fa-menu-title fa-calendar-o',
        'url' => '#'
    ],
    'Meetups' => '#',
    'Events' => '#',
] ?>

<ul class="footer-menu">
    <li class="menu-title"><i class="fa fa-menu-title fa-comments-o"></i><?= __('Help & Support')?></li>

    <?= $this->App->footerMenuItems($menu); ?>
</ul>
