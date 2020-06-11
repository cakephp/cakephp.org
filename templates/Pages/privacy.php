<?php
$title = __('CakePHP - Build fast, grow solid | Privacy policy');
$description = __('CakePHP Privacy Policy.');
$this->assign('title', $title);
$this->assign('meta', $this->Html->meta('description', $description));
$this->assign('socialMeta', $this->Meta->socialTags(['title' => $title, 'description' => $description]));
?>

<section class="gray-stripe">
    <div class="container">
        <div class="row">
            <div class="col-md-12 title-calendar">
                <?= $this->Html->tag(
                    'h1',
                    __(
                        'CakePHP {0} {1}',
                        $this->Html->tag('strong', __('Privacy Policy')),
                        $this->Html->tag('span', 'd', ['class' => 'glyph_range icon-privacy'])
                    )
                ) ?>
            </div>
        </div>
    </div>
</section>
<section class="ptb-80">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 t-privacy">
                <p><?php echo __('The privacy of our visitors to cakephp.org is important to us.'); ?></p>
                <p>
                    <?php echo __('At cakephp.org, we recognize that privacy of your personal information is important.'); ?>
                    <?php echo __('Here is information on what types of personal information we receive and collect when
					 you use and visit cakephp.org, and how we safeguard your information.'); ?>
                    <?php echo __('We never sell your personal information to third parties.'); ?>
                </p>
                <p>
                    <?php echo __('We collect information that you provide to us directly when you use our services. What we collect:') ?>
                </p>
                <h3><?php echo __('Log Files:'); ?></h3>
                <p>
                    <?php echo __('As with most other websites, we collect and use the data contained in log files.'); ?>
                    <?php echo __('The information in the log files include your IP (internet protocol) address, your ISP
					 (internet service provider, such as AOL or Shaw Cable), the browser you used to visit our site
					 (such as Internet Explorer or Firefox), the time you visited our site and which pages you visited
					 throughout our site.'); ?>
                </p>
                <h3><?php echo __('Cookies:'); ?></h3>
                <p><?php echo __('We do use cookies to store information, such as your personal preferences when you
				visit our site.'); ?></p>
                <p><?php echo __('What are cookies'); ?></p>
                <p>
                    <?php echo __('Cookies are small pieces of text sent by your web browser by a website you visit.'); ?>
                    <?php echo __('A cookie file is stored in your web browser and allows the Service or a third-party
					to recognize you and make your next visit easier and the Service more useful to you.'); ?>
                </p>
                <p><?php echo __('Cookies can be "persistent" or "session" cookies.'); ?></p>
                <p><?php echo __('How CakePHP uses cookies'); ?></p>
                <p><?php echo __('When you use and access the Service, we may place a number of cookies files in your web browser.'); ?></p>
                <p>
                    <?php echo __('We use cookies for the following purposes: to enable certain functions of the Service, to provide
					analytics, to store your preferences, to enable advertisements delivery, including behavioral advertising.'); ?>
                </p>
                <p>
                    <?php echo __('We use both session and persistent cookies on the Service and we use different types of cookies
					to run the Service:'); ?>
                </p>
                <p>
                    <?php echo __('Essential cookies. We may use essential cookies to authenticate users and prevent fraudulent
					use of user accounts.'); ?>
                </p>
                <h3><?php echo __('My.cakephp.org account information (only specific to my.cakephp.org user sign up)'); ?></h3>
                <p>
                    <?php echo __('Account information: To create an account, you must provide a username and password.
					Your username is public, and it doesn’t have to be related to your real name.'); ?>
                    <?php echo __('You may also provide an email address. We also store your user account preferences and settings.'); ?>
                </p>
                <p>
                    <i><?php echo __('Content you submit.'); ?></i>
                    <?php echo __('We collect the content you submit to the Services.'); ?>
                    <?php echo __('This includes your posts and comments including saved drafts, your messages with other users
					(e.g., private messages, chats, and modmail).'); ?>
                    <?php echo __('Your content may include text, links, images, gifs, and videos.'); ?>
                </p>
                <p>
                    <i><?php echo __('Actions you take.'); ?></i>
                    <?php echo __('We collect information about the actions you take when using the Services.'); ?>
                    <?php echo __('This includes your interactions with content, like voting, saving, hiding, and reporting.'); ?>
                    <?php echo __('It also includes your interactions with other users, such as following, friending, and blocking.'); ?>
                    <?php echo __('We collect your interactions with communities, like your subscriptions or moderator status.'); ?>
                </p>
                <p>
                    <i><?php echo __('Transactional information.'); ?></i>
                    <?php echo __('If you purchase products or services from us (e.g., CakeFest, CakePHP training), we will
					collect certain information from you, including your name, address, email address, and information about
					the product or service you are purchasing.'); ?>
                    <?php echo __('Payments are processed by third-party payment processors (e.g., PayPal), so please refer
					to the applicable processor’s terms and privacy policy for more information about how payment information is
					processed and stored.'); ?>
                </p>
                <p>
                    <i><?php echo __('Other information.'); ?></i>
                    <?php echo __(' You may choose to provide other information directly to us. For example, filling out your
					personal information on your user profile.'); ?>
                </p>
                <h3><?php echo __('How We Use Information About You'); ?></h3>
                <p><?php echo __('We use information about you to:'); ?></p>
                <li><?php echo __('Provide, maintain, and improve the Services;'); ?></li>
                <li><?php echo __('Send you technical notices, updates, security alerts, invoices and other support and
				administrative messages;'); ?></li>
                <li><?php echo __('Provide customer service;'); ?></li>
                <li><?php echo __('Communicate with you about products, services, offers, promotions, and events, and
				provide other news and information we think will be of interest to you (for information about how to opt
				out of these communications, see “Your Choices” below);'); ?></li>
                <li><?php echo __('Monitor and analyze trends, usage, and activities in connection with our Services;'); ?></li>
                <h3><?php echo __('Advertising:'); ?></h3>
                <p>
                    <?php echo __('We use third-party advertising companies to serve ads when you visit our website.'); ?>
                    <?php echo __('These companies may use information (not including your name, address, email address,
					 or telephone number) about your visits to this and other websites in order to provide advertisements
					  about goods and services of interest to you.'); ?>
                    <?php echo sprintf(
                        __('If you would like more information about this practice and to know your choices about not
						having this information used by these companies, %s.'),
                        $this->Html->link(__('click here'), 'http://www.google.com/privacy_ads.html', [
                            'target' => '_blank',
                            'class' => 't-blue',
                        ])
                    );
                    ?>
                </p>
                <h3><?php echo __('Analytics Partners'); ?></h3>
                <p>
                    <?php echo sprintf(
                        __('We use %s to help analyze usage and traffic for our Services.'),
                        $this->Html->link(__('Google Analytics'), 'https://www.google.com/policies/privacy/partners/', [
                            'target' => '_blank',
                            'class' => 't-blue',
                        ])
                    );
                    ?>
                    <?php echo __('As an example, we may use analytics partners to analyze and measure, in the aggregate,
					the number of unique visitors to our Services.'); ?>
                </p>
                <h3><?php echo __('Deleting Your Account'); ?></h3>
                <p>
                    <?php echo __('You may delete your account information at any time from the user preferences page.'); ?>
                    <?php echo __('When you delete your account, your profile is no longer visible to other users and
					disassociated from content you posted under that account.'); ?>
                </p>
                <h3><?php echo __('Information Security'); ?></h3>
                <p>
                    <?php echo __('We take measures to help protect information about you from loss, theft, misuse and
					unauthorized access, disclosure, alteration, and destruction.'); ?>
                    <?php echo __('For example, we use HTTPS while information is being transmitted'); ?>
                    <?php echo __('We also enforce technical and administrative access controls to limit which of our
					employees have access to non-public personal information.'); ?>
                </p>
                <h3><?php echo __('Data Retention'); ?></h3>
                <p>
                    <?php echo __('We store the information we collect for as long as it is necessary for the purpose(s)
					for which we originally collected it.'); ?>
                    <?php echo __('We may retain certain information for legitimate business purposes or as required by law.'); ?>
                </p>
                <h3><?php echo __('Contact Us'); ?></h3>
                <p>
                    <?php echo __('If you have any questions about this Privacy Policy, please contact us at community@cakephp.org'); ?>
                </p>
                <div
                    style="padding-left: 20px; padding-top:20px;"><?php echo $this->element('ads/728x90'); ?></div>
            </div>
        </div>
    </div>
</section>
