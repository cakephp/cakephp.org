<section id="sub">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 text-center back-book">
                <?= $this->Html->link(
                    $this->Html->tag('h2', __(
                        'CakePHP {0}{1}',
                        $this->Html->tag('strong', __('Cookbook')),
                        $this->Html->tag('span', 'B', ['class' => 'glyph_range icon-submenu'])
                    )),
                    "http://book.cakephp.org/4",
                    ['escape' => false]
); ?>
            </div>
            <div class="col-md-6 text-center back-api">
                <?= $this->Html->link(
                    $this->Html->tag('h2', __(
                        'CakePHP {0}{1}',
                        $this->Html->tag('strong', __('API')),
                        $this->Html->tag('span', 'C', ['class' => 'glyph_range icon-submenu'])
                    )),
                    "http://api.cakephp.org/",
                    ['escape' => false]
                ); ?>
            </div>
        </div>
    </div>
</section>
