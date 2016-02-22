<?php
$this->extend('/Common/secondary');
$this->assign('title', 'Services');
?>
<div class="main dev" id="support">
    <div class="gray narrowbox mirror gray-pattern">
        <div class="container-fluid docs services">
            <div class="col-lg-push-2 col-md-push-2 col-lg-3 col-md-3 col-xs-3 image-holder text-center">
                <?= $this->Html->image('default/service1.png') ?>
            </div>
            <div class="col-lg-5 col-md-5 col-xs-9 col-lg-push-2 col-md-push-2 text-left">
                <h3><?= __('Support') ?></h3>
                <p>
                    <?= __(
                        'Professional support for CakePHP is provided by our professional services partner, the {0}.',
                        '<a href="http://www.cakedc.com/">Cake Development Corporation</a>'
                    ) ?>
                </p>
                <p>
                    <?= __(
                        'For more information on professional support for CakePHP, see the {0}.',
                        '<a href="http://www.cakedc.com/">Cake Development Corporation website</a>'
                    ) ?>
                </p>
            </div>
        </div>
    </div>
</div>
<div class="main dev" id="training">
    <div class="container-fluid docs services margin-top-max">
        <div class="col-lg-5 col-md-5 col-xs-9 col-xs-push-0 col-lg-push-2 col-md-push-2">
            <h3><?= __('Training') ?></h3>
            <p>
                <?= __('Undertaking CakePHP work within your organization, and want to ensure your team has the best tools, skills and understanding of the CakePHP Framework and MVC approaches possible? Training for general development, application planning and design, as well as education for preparation before Certification are available.') ?>
            </p>
            <p>
                <?= __('Training is provided by the {0}.', '<a href="http://www.cakedc.com/">Cake Development Corporation</a>') ?>
            </p>
        </div>
        <div class="col-lg-3 col-md-3 col-xs-3 col-lg-push-2 col-md-push-2 image-holder text-center">
            <?= $this->Html->image('default/service2.png') ?>
        </div>
    </div>
</div>
  <div class="main dev" id="consultation">
    <div class="gray narrowbox mirror gray-pattern">
        <div class="container-fluid docs services">
            <div class="col-lg-push-2 col-md-push-2 col-lg-3 col-md-3 col-xs-3 image-holder text-center">
                <?= $this->Html->image('default/service3.png') ?>
            </div>
            <div class="col-lg-5 col-md-5 col-xs-9 col-lg-push-2 col-md-push-2 text-left">
                <h3><?= __('Consultation') ?></h3>
                <p>
                    <?= __('Through a variety of guided and custom consultation services, we can provide guidance for existing and planned PHP applications. This also includes deployment management, development workflow optimisation, test driven development and more.') ?>
                </p>
                <p>
                    <?= __('Code Review, performance analysis, security audits and standards reporting are also available.') ?>
                </p>
                <p>
                    <?= __(
                        'All these services and more are provided by our professional services provider, the {0}.',
                        '<a href="http://www.cakedc.com/">Cake Development Corporation</a>'
                    ) ?>
                </p>
            </div>
        </div>
    </div>
</div>
<div class="main dev" id="certification">
    <div class="narrowbox">
        <div class="container-fluid services">
            <div class="col-lg-5 col-md-5 col-xs-9 col-xs-push-0 col-lg-push-2 col-md-push-2 text-left">
                <h3><?= __('Certification') ?></h3>
                <p>
                    <?= __('CakePHP Certification involves an exam whereby a developers understanding of the CakePHP framework, MVC principles and standards used within CakePHP are tested. The certification examination is performed online, testing a set of real world scenarios and intimate CakePHP specifics.') ?>
                </p>
                <p>
                    <?= __('Certification ensures you\'ll stand out from the crowd when it comes to job applications. It can also boost your employment value for existing employers, and be a great asset when it comes to salary review.') ?>
                </p>
                <p>
                <p>
                    <?= $this->Html->link(__('Click here to be certified for CakePHP 2.0'), 'http://certification.cakephp.org/'); ?></p>
                </p>
            </div>
            <div class="col-lg-3 col-md-3 col-xs-3 col-lg-push-2 col-md-push-2 image-holder text-center">
                <?= $this->Html->image('default/service4.png') ?>
            </div>
        </div>
    </div>
</div>
