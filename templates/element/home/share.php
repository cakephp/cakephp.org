<section id="sharing" class="sharing mt80">
    <div class="container">
        <div class="visible-md-block visible-lg-block artwork">
            <?= $this->Html->image('share_cake_bg.svg') ?>
        </div>
        <div>
            <div>
                <h2><?= __('Sharing the cake.') ?></h2>
                <h4><?= __('Get involved and support the community.') ?></h4>
            </div>
            <div>
                <p><?= __('If you\'re interested in contributing to CakePHP and supporting the community then we\'d love for you to join us, there are a variety of ways to get involved and help out.') ?> </p>
                <?= $this->Html->link(
                    __('Learn more.'),
                    ['controller' => 'pages', 'action' => 'display', 'get-involved'],
                    ['class' => "btn btn-home mt40"]
) ?>
            </div>
        </div>
    </div>
</section>
