<?php
/**
 * The main menu element
 */

if (!isset($selectedLanguage)) {
	$selectedLanguage = 'en';
}

if (!isset($availableLanguages)) {
	$availableLanguages = ['en'];
}

?>
<ul class="menu">
    <li class="toggle-menu"><i class="fa icon_menu"></i></li>
    <li class="first">
        <?=
            $this->Html->link(
                $this->Html->tag('i', '', ['class' => 'fa fa-menu fa-chevron-down']) . __('Documentation'),
                '#',
                ['escape' => false]
            );
        ?>
        <ul class="submenu">
            <?= $this->App->menuItems($this->Menu->documentationItems()); ?>
        </ul>
    </li>
    <li>
        <?=
            $this->Html->link(
                __('Business Solutions'),
                ['prefix' => false, 'plugin' => false, 'controller' => 'Pages', 'action' => 'display', 'business-solutions'],
                ['escape' => false]
            );?>
    </li>
    <li>
        <?=
            $this->Html->link(
                __('Swag'),
                'https://swag.cakephp.org/',
                ['escape' => false, 'target' => '_blank']
            );?>
    </li>
    <li>
        <?=
            $this->Html->link(
                __('Showcase'),
                ['prefix' => false, 'plugin' => false, 'controller' => 'Projects', 'action' => 'index'],
                ['escape' => false, 'class' => 'hide']
            );?>
    </li>
    <li>
        <?=
            $this->Html->link(
                __('Team'),
                ['plugin' => false, 'controller' => 'Pages', 'action' => 'display', 'team', 'prefix' => false],
                ['escape' => false]
            );?>
    </li>
    <li>
        <?=
            $this->Html->link(
                $this->Html->tag('i', '', ['class' => 'fa fa-menu fa-chevron-down']) . __('Community'),
                '#',
                ['escape' => false]
            );
        ?>
        <div class="megamenu full megamenu2 full2">
            <div class="row">
                <div class="col-6 pl30">
                    <ul class="megamenu-list">
                        <li class="menu-title main-title">
                            <?= $this->Html->link(
                                $this->Html->tag('i', '', ['class' => 'fa fa-menu-title fa-users']) . __('Community'),
                                '#',
                                ['escape' => false]
                            ) ?>
                        </li>
                        <?= $this->App->menuItems($this->Menu->communityItems()); ?>
                    </ul>
                </div>
                <div class="col-6 pl50">
                    <ul class="megamenu-list">
                        <li class="menu-title main-title">
                            <?=
                                $this->Html->link(
                                    $this->Html->tag('i', '', ['class' => 'fa fa-menu-title fa-comments-o']) . __('Help & Support'),
                                    '#',
                                    ['escape' => false]
                                ) ?>
                        </li>
                        <?= $this->App->menuItems($this->Menu->helpAndSupportItems()); ?>
                    </ul>
                </div>
            </div>
        </div>
    </li>
    <li class="language">
        <?= $this->Html->link(
            $this->Html->tag('i', '', ['class' => 'fa fa-menu fa-menu-en fa-chevron-down']) . $selectedLanguage,
            '#',
            ['escape' => false]
        ) ?>
        <ul class="submenu">
            <li></li>
            <?php foreach($availableLanguages as $lang => $alias): ?>
                <?php if ($alias === $selectedLanguage) continue; ?>
                <?php $pass = $this->request->getParam('pass') ?>
                <li>
                    <?= $this->Html->link($alias, [
                        'language' => $lang,
                        'controller' => $this->request->getParam('controller'),
                        'action' => $this->request->getParam('action'),
                        isset($pass[0]) ? $pass[0] : null
                    ]) ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </li>
    <?php if ($this->request->getSession()->check('Auth')) : ?>
        <li>
            <?= $this->Html->link(
                $this->Html->tag('i', '', ['class' => 'fa fa-logout']) . __('Logout'),
                ['prefix' => false, 'plugin' => 'CakeDC/Users', 'controller' => 'Users', 'action' => 'logout'],
                ['escape' => false]
            );
            ?>
        </li>
    <?php endif; ?>
    <li>
        <?=
            $this->Html->link(
                __('DONATE'),
                'https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=WXKS8CBVMNFZC',
                ['escape' => false, 'class' => 'donate']
            );?>
    </li>
</ul>
