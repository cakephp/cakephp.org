    <footer>
        <div class="container-fluid">
            <div class="col-lg-3 col-md-3">
                <h4>Downloads</h4>
                <?= $this->Html->link('Releases', 'https://github.com/cakephp/cakephp/tags') ?>
                <h4>Documentation</h4>
                <?= $this->Html->link('API', 'http://api.cakephp.org/') ?>
                <?= $this->Html->link('Book', 'http://book.cakephp.org/') ?>
            </div>
            <div class="col-lg-4 col-md-4">
                <h4>Community</h4>
                <div class="col-lg-6 col-md-6 col-xs-6 no-left-padding">
                    <?= $this->Html->link('Help & Support', 'http://webchat.freenode.net/?channels=cakephp&uio=MT1mYWxzZSY5PXRydWUmMTE9MjQ2b8') ?>
                    <?= $this->Html->link('Issues', 'https://github.com/cakephp/cakephp/issues') ?>
                    <?= $this->Html->link('The Bakery', 'http://bakery.cakephp.org/') ?>
                    <?= $this->Html->link('Stack Overflow', 'http://stackoverflow.com/tags/cakephp') ?>
                    <?= $this->Html->link('Facebook Group', 'http://www.facebook.com/groups/cake.community') ?>
                    <?= $this->Html->link('Google+ Community', 'http://goo.gl/mSC0s') ?>
                    <?= $this->Html->link('YouTube Channel', 'http://www.youtube.com/user/CakePHP') ?>
                    <?= $this->Html->link('Follow us on Twitter', 'http://twitter.com/CakePHP') ?>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-6">
                    <?= $this->Html->link('Google Group', 'http://groups.google.com/group/cake-php') ?>
                    <?= $this->Html->link('Contributors', 'http://github.com/cakephp/cakephp/contributors') ?>
                    <?= $this->Html->link('Plugins & Packages', 'http://plugins.cakephp.org/') ?>
                    <?= $this->Html->link('Get Involved', 'http://community.cakephp.org/get-involved') ?>
                    <?= $this->Html->link('Guidelines', 'http://community.cakephp.org/guidelines') ?>
                    <?= $this->Html->link('CakeFest', 'http://cakefest.org/') ?>
                    <?= $this->Html->link('Logos', ['controller' => 'pages', 'action' => 'display', 'logos']) ?>
                </div>

            </div>
            <div class="col-lg-2 col-md-2">
                <h4>Services</h4>
                <?= $this->Html->link('Certifications', ['controller' => 'services', 'action' => 'certifications']) ?>
                <?= $this->Html->link('Consultation', ['controller' => 'services', 'action' => 'consultation']) ?>
                <?= $this->Html->link('Support', ['controller' => 'services', 'action' => 'support']) ?>
                <?= $this->Html->link('Training', 'http://training.cakephp.org/') ?>
                <?= $this->Html->link('Development', ['controller' => 'services', 'action' => 'development']) ?>
            </div>
            <div class="col-lg-3 col-md-3">
                <p class="pull-left">CakePHP makes building web applications simpler, faster and require less code.<br/><br/>
                    The Official CakePHP Group is an open group for community discussions, sharing plugins and framework
                    related trends, as well as updates and announcements from the project.<br/><br/></p>

                <div class="pull-left">
                    <a href="#" class="pull-left clearnone">
                        <div class="social-holder">
                            <div class="social-shadow"></div>
                            <div class="social"><?= $this->Html->image('default/social-1.png') ?></div>
                        </div>
                    </a>
                    <a href="#"  class="pull-left clearnone">
                        <div class="social-holder">
                            <div class="social-shadow"></div>
                            <div class="social"><?= $this->Html->image('default/social-2.png') ?></div>
                        </div>
                    </a>
                    <a href="#" class="pull-left clearnone">
                        <div class="social-holder">
                            <div class="social-shadow"></div>
                            <div class="social"><?= $this->Html->image('default/social-3.png') ?></div>
                        </div>
                    </a>
                    <a href="#" class="pull-left clearnone">
                        <div class="social-holder">
                            <div class="social-shadow"></div>
                            <div class="social"><?= $this->Html->image('default/social-4.png') ?></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="col-lg-9 col-md-9 border-top">
                <?= $this->Html->link('News', ['controller' => 'news']) ?>
                <?= $this->Html->link('Development', ['controller' => 'development']) ?>
                <?= $this->Html->link('Documenation', ['controller' => 'documentation']) ?>
                <?= $this->Html->link('Download', ['controller' => 'download']) ?>
                <div class="copyright">
                    © 2005-2015 Cake Software Foundation, Inc.
                </div>
            </div>
            <div class="col-lg-3 col-md-3">
                <br>
                <?= $this->Html->image('default/rackspace.png', ['class' => 'pull-right lastlogos']) ?>
                <?= $this->Html->image('default/widget.png', ['class' => 'pull-right lastlogos']) ?>
                <?= $this->Html->link(
                    'Privacy Policy',
                    ['controller' => 'pages', 'action' => 'display', 'privacy'],
                    ['class' => 'pull-right lastlogos']
                ) ?>
            </div>
        </div>
    </footer>
