    <footer>
        <div class="container-fluid">
            <div class="col-lg-3 col-md-3" style="line-height: 2em">
                <?= $this->element('Layout/default/links/primary') ?>
            </div>
            <div class="col-lg-4 col-md-4" style="line-height: 2em">
                <h4>Community</h4>
                <div class="col-lg-6 col-md-6 col-xs-6 no-left-padding">
                    <?= $this->element('Layout/default/links/community_col1') ?>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-6">
                    <?= $this->element('Layout/default/links/community_col2') ?>
                </div>
            </div>
            <div class="col-lg-2 col-md-2" style="line-height: 2em">
                <?= $this->element('Layout/default/links/services') ?>
            </div>
            <div class="col-lg-3 col-md-3">
                <p class="pull-left">CakePHP makes building web applications simpler, faster and require less code.<br/><br/>
                    CakePHP is a modern PHP 5.4+ framework with a flexible Database access layer and a powerful scaffolding system that makes building both small and complex systems a breeze.<br/><br/></p>
                <div class="pull-left">
                    <?= $this->element('Layout/default/links/social') ?>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="col-lg-9 col-md-9 border-top">
                <?= $this->Html->link('News', ['controller' => 'Pages', 'action' => 'display', 'news']) ?>
                <?= $this->Html->link('Development', ['controller' => 'Changelogs', 'action' => 'index']) ?>
                <?= $this->Html->link('Documentation', ['controller' => 'Pages', 'action' => 'display', 'documentation']) ?>
                <?= $this->Html->link('Download', 'http://book.cakephp.org/3.0/en/installation.html') ?>
                <div class="copyright">
                    © 2005-2015 Cake Software Foundation, Inc.
                </div>
            </div>
            <div class="col-lg-3 col-md-3">
                <br>
                <?= $this->Html->link(
                    $this->Html->image('default/rackspace.png'),
                    'http://rackspace.com',
                    ['class' => 'pull-right lastlogos', 'escape' => false]
                ) ?>
                <?= $this->Html->link(
                    $this->Html->image('default/widget.png'),
                    'https://www.openhub.net/p/cakephp',
                    ['class' => 'pull-right lastlogos', 'escape' => false]
                ) ?>
                <?php /*= $this->Html->link(
                    'Privacy Policy',
                    ['controller' => 'Pages', 'action' => 'display', 'privacy'],
                    ['class' => 'pull-right lastlogos']
                ) */ ?>
            </div>
        </div>
    </footer>
