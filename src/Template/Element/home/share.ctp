<section id="sharing" class="ptb-80 fundo-w">
    <div class="container-fluid">
        <div class="row">
            <span class="glyph_range icon-sharing">S</span>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center mb50">
                <h3 class="title-red"><?= __('Sharing the cake.')?></h3>
                <h4 class="subtitle-black"><?= __('Get involved and support the community.')?></h4>
            </div>
            <div class="col-md-8 col-md-offset-2 text-center">
                <p><?= __('If you\'re interested in contributing to CakePHP and supporting the community then we\'d love for you to join us, there are a variety of ways to get involved and help out.')?> </p>
                <?= $this->Html->link(
                    __('Learn more.'),
                    ['controller' => 'pages', 'action' => 'display', 'get-involved'],
                    ['class' => "btn btn-red mt40"]
                ) ?>
            </div>
        </div>
    </div>
</section>
