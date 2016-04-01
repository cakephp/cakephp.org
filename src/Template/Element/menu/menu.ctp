<ul class="menu">
    <li class="toggle-menu"><i class="fa icon_menu"></i></li>

    <li class="first">
        <a href="#"><i class="fa fa-menu fa-chevron-down"></i><?= __('Documentation')?></a>
        <ul class="submenu">
            <li><a href="#"><i class="fa fa-menu fa-chevron-right"></i><?= __('Book')?></a></li>
            <li><a href="#"><i class="fa fa-menu fa-chevron-right"></i><?= __('Api')?></a></li>
            <li><a href="#"><i class="fa fa-menu fa-chevron-right"></i><?= __('Videos')?></a></li>
            <li><a href="#"><i class="fa fa-menu fa-chevron-right"></i><?= __('Pirvacy Policy')?></a></li>
            <li><a href="#"><i class="fa fa-menu fa-chevron-right"></i><?= __('Logos & Trademarks')?></a></li>
        </ul>
    </li>

    <li><a href="shortcodes.html"><?= __('Business Solutions')?></a></li>

    <li><a href="shortcodes.html"><?= __('Showcase')?></a></li>

    <li>
        <a href="#"><i class="fa fa-menu fa-chevron-down"></i><?= __('Community')?></a>

        <div class="megamenu full">
            <div class="row">
                <div class="col-3">
                    <ul class="megamenu-list">
                        <li class="menu-title"><i class="fa fa-menu-title fa-calendar-o"></i><?= __('Calendar')?>
                        </li>
                        <li><a href="#"><i class="fa fa-menu fa-chevron-right"></i><?= __('Meetups')?></a></li>
                        <li><a href="#"><i class="fa fa-menu fa-chevron-right"></i><?= __('Events')?></a></li>
                    </ul>
                </div>
                <div class="col-3">
                    <ul class="megamenu-list">
                        <li class="menu-title"><i class="fa fa-menu-title fa-tags"></i><?= __('Marketplace')?>
                        </li>
                        <li class="menu-sub"><?= __('Service Providers')?></li>
                        <li><a href="#"><i class="fa fa-menu fa-chevron-right"></i><?= __('Cakedc')?></a></li>
                        <li><a href="#"><i class="fa fa-menu fa-chevron-right"></i><?= __('Phpstorm')?></a></li>
                        <li><a href="#"><i class="fa fa-menu fa-chevron-right"></i><?= __('Rackspace')?></a>
                        </li>
                        <li class="menu-sub">Jobs</li>
                        <li><a href="#"><i class="fa fa-menu fa-chevron-right"></i><?= __('Freelance App')?></a>
                        </li>
                        <li><a href="#"><i class="fa fa-menu fa-chevron-right"></i><?= __('Cakephp Jobs')?></a>
                        </li>
                        <li><a href="#"><i class="fa fa-menu fa-chevron-right"></i><?= __('Cakexperts')?></a>
                        </li>
                        <li><a href="#"><i class="fa fa-menu fa-chevron-right"></i><?= __('Job Board')?></a>
                        </li>
                        <li><a href="#"><i class="fa fa-menu fa-chevron-right"></i><?= __('Linkedin')?></a></li>
                        <li><a href="#"><i class="fa fa-menu fa-chevron-right"></i><?= __('Freelancer')?></a>
                        </li>
                        <li><a href="#"><i class="fa fa-menu fa-chevron-right"></i><?= __('Upwork')?></a></li>
                    </ul>
                </div>
                <div class="col-3">
                    <ul class="megamenu-list">
                        <li class="menu-title"><i class="fa fa-menu-title fa-comments-o"></i>Help &
                            Support
                        </li>
                        <li><a href="#"><i class="fa fa-menu fa-chevron-right"></i><?= __('Issues
                                (Github)')?></a></li>
                        <li><a href="#"><i class="fa fa-menu fa-chevron-right"></i><?= __('Youtube
                                Channel')?></a></li>
                        <li><a href="#"><i class="fa fa-menu fa-chevron-right"></i><?= __('Google Groups')?></a>
                        </li>
                        <li><a href="#"><i class="fa fa-menu fa-chevron-right"></i><?= __('Stack
                                Overflow')?></a></li>
                        <li><a href="#"><i class="fa fa-menu fa-chevron-right"></i><?= __('Commercial')?></a>
                        </li>
                        <li><a href="#"><i class="fa fa-menu fa-chevron-right"></i><?= __('Irc')?></a></li>
                        <li><a href="#"><i class="fa fa-menu fa-chevron-right"></i><?= __('Quora')?></a></li>
                        <li><a href="#"><i class="fa fa-menu fa-chevron-right"></i><?= __('Facebook')?></a></li>
                    </ul>
                </div>
                <div class="col-3">
                    <ul class="megamenu-list">
                        <li class="menu-title"><i class="fa fa-menu-title fa-users"></i><?= __('Community')?>
                        </li>
                        <li><a href="#"><i class="fa fa-menu fa-chevron-right"></i><?= __('Get Involved')?></a>
                        </li>
                        <li><a href="#"><i class="fa fa-menu fa-chevron-right"></i><?= __('Blog')?></a></li>
                        <li><a href="#"><i class="fa fa-menu fa-chevron-right"></i><?= __('Newsletter')?></a>
                        </li>
                        <li><a href="#"><i class="fa fa-menu fa-chevron-right"></i><?= __('Certification')?></a>
                        </li>
                        <li><a href="#"><i class="fa fa-menu fa-chevron-right"></i><?= __('Calendar')?></a></li>
                        <li><a href="#"><i class="fa fa-menu fa-chevron-right"></i><?= __('My Cakephp')?></a>
                        </li>
                        <li><a href="#"><i class="fa fa-menu fa-chevron-right"></i><?= __('Cakefest')?></a></li>
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
            <?= $this->element('menu/search')?>
        </div>
    </li>
</ul>
