<?php $menu = [
    'Get Involved' => '#',
    'Blog' => '#',
    'Newsletter' => '#',
    'Certification' => '#',
    'Calendar' => '#',
    'My CakePHP' => '#',
    'Cakefest' => '#',
    'OSS Bounty' => '#',
    'Forum' => '#',
] ?>

<ul class="footer-menu">
    <li class="menu-title"><i class="fa fa-menu-title fa-users"></i><?= __('Community')?></li>

    <?= $this->App->footerMenuItems($menu) ?>
</ul>
