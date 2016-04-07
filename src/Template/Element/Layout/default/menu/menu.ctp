<ul class="menu">
    <li class="toggle-menu"><i class="fa icon_menu"></i></li>

    <li class="first">
        <?= $this->Html->link(__('{0}Documentation', $this->Html->tag('i', '', ['class' => 'fa fa-menu fa-chevron-down'])), '#', ['escape' => false]) ?>
        <ul class="submenu">
            <li>
                <?= $this->Html->link(
                    __('{0}Book', $this->Html->tag('i', '', ['class' => 'fa fa-menu fa-chevron-right'])),
                    'http://book.cakephp.org/',
                    ['escape' => false]
                );?>
            </li>
            <li>
                <?= $this->Html->link(
                    __('{0}Api', $this->Html->tag('i', '', ['class' => 'fa fa-menu fa-chevron-right'])),
                    'http://api.cakephp.org/',
                    ['escape' => false]
                );?>
            </li>
            <li>
                <?= $this->Html->link(
                    __('{0}Videos', $this->Html->tag('i', '', ['class' => 'fa fa-menu fa-chevron-right'])),
                    ['controller' => 'Pages', 'action' => 'display', 'videos'],
                    ['escape' => false]
                );?>
            </li>
            <li>
                <?= $this->Html->link(
                    __('{0}Privacy Policy', $this->Html->tag('i', '', ['class' => 'fa fa-menu fa-chevron-right'])),
                    ['controller' => 'Pages', 'action' => 'display', 'privacy'],
                    ['escape' => false]
                );?>
            </li>
            <li>
                <?= $this->Html->link(
                    __('{0}Logos & Trademarks', $this->Html->tag('i', '', ['class' => 'fa fa-menu fa-chevron-right'])),
                    ['controller' => 'Pages', 'action' => 'display', 'trademark'],
                    ['escape' => false]
                );?>
            </li>
        </ul>
    </li>
    <li>
        <?= $this->Html->link(
            __('Business Solutions'),
            '#',
            ['escape' => false]
        );?>
    </li>
    <li>
        <?= $this->Html->link(
            __('Showcase'),
            '#',
            ['escape' => false]
        );?>
    </li>

    <li>
        <?= $this->Html->link(__('{0}Community', $this->Html->tag('i', '', ['class' => 'fa fa-menu fa-chevron-down'])), '#', ['escape' => false]) ?>
        <div class="megamenu full">
            <div class="row">
                <div class="col-3">
                    <ul class="megamenu-list">
                        <li class="menu-title">
                           <?= __('{0}Calendar', $this->Html->tag('i', '', ['class' => 'fa fa-menu-title fa-calendar-o']))?>
                        </li>
                        <li>
                            <?= $this->Html->link(
                                __('{0}Meetups', $this->Html->tag('i', '', ['class' => 'fa fa-menu fa-chevron-right'])),
                                '#',
                                ['escape' => false]
                            );?>
                        </li>
                        <li>
                            <?= $this->Html->link(
                                __('{0}Events', $this->Html->tag('i', '', ['class' => 'fa fa-menu fa-chevron-right'])),
                                '#',
                                ['escape' => false]
                            );?>
                        </li>
                    </ul>
                </div>
                <div class="col-3">
                    <ul class="megamenu-list">
                        <li class="menu-title">
                            <?= $this->Html->link(__('{0}Marketplace', $this->Html->tag('i', '', ['class' => 'fa fa-menu fa-tags'])), '#', ['escape' => false]) ?>
                        </li>
                        <li class="menu-sub"><?= __('Service Providers')?></li>
                        <li>
                            <?= $this->Html->link(
                                __('{0}Cakedc', $this->Html->tag('i', '', ['class' => 'fa fa-menu fa-chevron-right'])),
                                'http://www.cakedc.com/',
                                ['escape' => false]
                            );?>
                        </li>
                        <li>
                            <?= $this->Html->link(
                                __('{0}Cakedc', $this->Html->tag('i', '', ['class' => 'fa fa-menu fa-chevron-right'])),
                                'https://www.jetbrains.com/phpstorm/',
                                ['escape' => false]
                            );?>
                        </li>
                        <li>
                            <?= $this->Html->link(
                                __('{0}Rackspace', $this->Html->tag('i', '', ['class' => 'fa fa-menu fa-chevron-right'])),
                                'https://www.rackspace.com/',
                                ['escape' => false]
                            );?>
                        </li>
                        <li class="menu-sub"><?= __('Jobs')?></li>
                        <li><a href="#"><i class="fa fa-menu fa-chevron-right"></i><?= __('Freelance App')?></a>
                        </li>
                        <li>
                            <?= $this->Html->link(
                                __('{0}Cake Jobs', $this->Html->tag('i', '', ['class' => 'fa fa-menu fa-chevron-right'])),
                                'http://cakephpjobs.com/',
                                ['escape' => false, 'target' => '_blank']
                            );?>
                        </li>
                        <li><a href="#"><i class="fa fa-menu fa-chevron-right"></i><?= __('Job Board')?></a>
                        </li>
                        <li>
                            <?= $this->Html->link(
                                __('{0}Linkedin', $this->Html->tag('i', '', ['class' => 'fa fa-menu fa-chevron-right'])),
                                'https://www.linkedin.com/groups/4623165',
                                ['escape' => false, 'target' => '_blank']
                            );?>
                        </li>
                        <li><a href="#"><i class="fa fa-menu fa-chevron-right"></i><?= __('Freelancer')?></a>
                        </li>
                        <li><a href="#"><i class="fa fa-menu fa-chevron-right"></i><?= __('Upwork')?></a></li>
                    </ul>
                </div>
                <div class="col-3">
                    <ul class="megamenu-list">
                        <li class="menu-title">
                            <?= $this->Html->link(__('{0}Help &
                            Support', $this->Html->tag('i', '', ['class' => 'fa fa-menu-title fa-comments-o'])), '#', ['escape' => false]) ?>
                        </li>
                        <li>
                            <?= $this->Html->link(
                                __('{0}Issues (Github)', $this->Html->tag('i', '', ['class' => 'fa fa-menu fa-chevron-right'])),
                                'https://github.com/cakephp/cakephp/issues',
                                ['escape' => false, 'target' => '_blank']
                            );?>
                        </li>
                        <li>
                            <?= $this->Html->link(
                                __('{0}Youtube Channel', $this->Html->tag('i', '', ['class' => 'fa fa-menu fa-chevron-right'])),
                                'https://www.youtube.com/user/CakePHP',
                                ['escape' => false, 'target' => '_blank']
                            );?>

                        </li>
                        <li>
                            <?= $this->Html->link(
                                __('{0}Google Groups', $this->Html->tag('i', '', ['class' => 'fa fa-menu fa-chevron-right'])),
                                'https://plus.google.com/communities/108328920558088369819',
                                ['escape' => false, 'target' => '_blank']
                            );?>
                        </li>
                        <li>
                            <?= $this->Html->link(
                                __('{0}Stack Overflow', $this->Html->tag('i', '', ['class' => 'fa fa-menu fa-chevron-right'])),
                                'http://stackoverflow.com/tags/cakephp',
                                ['escape' => false, 'target' => '_blank']
                            );?>
                        </li>
                        <li>
                            <?= $this->Html->link(
                                __('{0}Commercial', $this->Html->tag('i', '', ['class' => 'fa fa-menu fa-chevron-right'])),
                                'http://www.cakedc.com/',
                                ['escape' => false, 'target' => '_blank']
                            );?>
                        </li>
                        <li>
                            <?= $this->Html->link(
                                __('{0}Irc', $this->Html->tag('i', '', ['class' => 'fa fa-menu fa-chevron-right'])),
                                'https://kiwiirc.com/client/irc.freenode.net#cakephp',
                                ['escape' => false, 'target' => '_blank']
                            );?>
                        </li>
                        <li>
                            <?= $this->Html->link(
                                __('{0}Slack', $this->Html->tag('i', '', ['class' => 'fa fa-menu fa-chevron-right'])),
                                'http://cakesf.herokuapp.com/',
                                ['escape' => false, 'target' => '_blank']
                            );?>
                        </li>

                        <li>
                            <?= $this->Html->link(
                                __('{0}Facebook', $this->Html->tag('i', '', ['class' => 'fa fa-menu fa-chevron-right'])),
                                'https://www.facebook.com/CakePHP/',
                                ['escape' => false, 'target' => '_blank']
                            );?>
                        </li>
                    </ul>
                </div>
                <div class="col-3">
                    <ul class="megamenu-list">
                        <li class="menu-title">
                            <?= $this->Html->link(__('{0}Community', $this->Html->tag('i', '', ['class' => 'fa fa-menu-title fa-users'])), '#', ['escape' => false]) ?>
                        </li>
                        <li>
                            <?= $this->Html->link(
                                __('{0}Get Involved', $this->Html->tag('i', '', ['class' => 'fa fa-menu fa-chevron-right'])),
                                'http://community.cakephp.org/get-involved',
                                ['escape' => false, 'target' => '_blank']
                            );?>
                        </li>
                        <li><a href="#"><i class="fa fa-menu fa-chevron-right"></i><?= __('Blog')?></a></li>
                        <li><a href="#"><i class="fa fa-menu fa-chevron-right"></i><?= __('Newsletter')?></a>
                        </li>
                        <li>
                            <?= $this->Html->link(
                                __('{0}Certification', $this->Html->tag('i', '', ['class' => 'fa fa-menu fa-chevron-right'])),
                                'http://community.cakephp.org/get-involved',
                                ['escape' => false, 'target' => '_blank']
                            );?>
                        </li>
                        <li><a href="#"><i class="fa fa-menu fa-chevron-right"></i><?= __('Calendar')?></a></li>
                        <li>
                            <?= $this->Html->link(
                                __('{0}My CakePHP', $this->Html->tag('i', '', ['class' => 'fa fa-menu fa-chevron-right'])),
                                'http://my.cakephp.org/login',
                                ['escape' => false]
                            );?>
                        </li>
                        <li>
                            <?= $this->Html->link(
                                __('{0}Cakefest', $this->Html->tag('i', '', ['class' => 'fa fa-menu fa-chevron-right'])),
                                'http://cakefest.org',
                                ['escape' => false]
                            );?>
                        </li>
                        <li><a href="#"><i class="fa fa-menu fa-chevron-right"></i><?= __('Oss Bounty')?></a>
                        </li>
                        <li><a href="#"><i class="fa fa-menu fa-chevron-right"></i><?= __('Forum')?></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </li>

    <li>
        <div id="wrap">
            <?= $this->element('Layout/default/menu/search')?>
        </div>
    </li>
</ul>
