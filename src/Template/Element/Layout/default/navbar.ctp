    <div class="yamm navbar">
        <div class="container">
            <ul class="nav">
                <a class="navbar-brand" href="/"><?= $this->Html->image('default/logo.png') ?> CakePHP</a>
                <li class="dropdown pull-right">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">MENU</a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="yamm-content">
                                <div class="container-fluid">
                                    <div class="col-lg-2 col-md-2  padding-none"><?= $this->Html->image('default/cake-logo.png') ?></div>
                                    <div class="col-lg-10 col-md-10 padding-none">
                                        <div class="col-lg-12 col-md-12 padding-none">
                                            <div class="col-lg-3 col-md-3">
                                                <p>
                                                    CakePHP makes building web applications simpler, faster and require less code.
                                                    <br/><br/>
                                                    CakePHP is a modern PHP 5.4+ framework with a flexible Database access layer
                                                    and a powerful scaffolding system that makes building both small and complex
                                                    systems a breeze.
                                                    <br/><br/>
                                                </p>
                                                <div class="social-fix">
                                                    <?= $this->element('Layout/default/links/social') ?>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3" style="line-height: 2em">
                                                <?= $this->element('Layout/default/links/primary') ?>
                                            </div>
                                            <div class="col-lg-4 col-md-4" style="line-height: 2em">
                                                <h4>Community</h4>
                                                <div class="col-lg-6 col-md-6 padding-none">
                                                    <?= $this->element('Layout/default/links/community_col1') ?>
                                                </div>
                                                <div class="col-lg-6 col-md-6 padding-none">
                                                    <?= $this->element('Layout/default/links/community_col2') ?>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-2" style="line-height: 2em">
                                                <?= $this->element('Layout/default/links/services') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
