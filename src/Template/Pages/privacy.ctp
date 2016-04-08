<?php
$this->assign('title', __('Privacy Policy for cakephp.org'));
?>
<div class="main dev">
    <div class="container-fluid docs news">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <p><?php echo __('The privacy of our visitors to cakephp.org is important to us.'); ?></p>

            <p>
                <?php echo __('At cakephp.org, we recognize that privacy of your personal information is important.'); ?>
                <?php echo __('Here is information on what types of personal information we receive and collect when you use and visit cakephp.org, and how we safeguard your information.'); ?>
                <?php echo __('We never sell your personal information to third parties.'); ?>
            </p>

            <br/>
            <h3><?php echo __('Log Files:'); ?></h3>
            <p>
                <?php echo __('As with most other websites, we collect and use the data contained in log files.'); ?>
                <?php echo __('The information in the log files include your IP (internet protocol) address, your ISP (internet service provider, such as AOL or Shaw Cable), the browser you used to visit our site (such as Internet Explorer or Firefox), the time you visited our site and which pages you visited throughout our site.'); ?>
            </p>

            <br/>
            <h3><?php echo __('Cookies:'); ?></h3>
            <p><?php echo __('We do use cookies to store information, such as your personal preferences when you visit our site.'); ?></p>

            <br/>
            <h3><?php echo __('Advertising:'); ?></h3>
            <p>
                <?php echo __('We use third-party advertising companies to serve ads when you visit our website.'); ?>
                <?php echo __('These companies may use information (not including your name, address, email address, or telephone number) about your visits to this and other websites in order to provide advertisements about goods and services of interest to you.'); ?>
                <?php echo sprintf(
                    __('If you would like more information about this practice and to know your choices about not having this information used by these companies, %s.'),
                    '<a href="http://www.google.com/privacy_ads.html">' . __('click here') . '</a>'); ?>
            </p>

            <div style="padding-left: 20px; padding-top:20px;"><?php echo $this->element('ads/728x90'); ?></div>
        </div>
    </div>
</div>
