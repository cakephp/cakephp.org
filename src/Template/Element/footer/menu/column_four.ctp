<?php $one = [
    'CakeDC' => '#',
    'PHPStorm' => '#',
    'Rackspace' => '#',
] ?>

<?php $two = [
    'Freelance App' => '#',
    'CakePHP Jobs' => '#',
    'CakeXperts' => '#',
    'Job Board' => '#',
    'Linkedin' => '#',
    'Freelancer' => '#',
    'Upwork' => '#'
] ?>


<ul class="footer-menu">
    <li class="menu-title"><i class="fa fa-menu-title fa-tags"></i><?= __('Marketplace')?></li>
    <li class="menu-sub"><?= __('Service Providers')?></li>
    <?= $this->App->footerMenuItems($one); ?>
    <li class="menu-sub">Jobs</li>
    <?= $this->App->footerMenuItems($two); ?>
</ul>
