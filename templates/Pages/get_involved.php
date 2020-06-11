<section class="gray-stripe">
    <div class="container">
        <div class="row">
            <div class="col-md-12 title-calendar ">
                <?= $this->Html->tag(
                    'h1',
                    __(
                        'CakePHP {0} {1}',
                        $this->Html->tag('strong', __('Community Center')),
                        $this->Html->tag('span', 'c', ['class' => 'glyph_range icon-getinvolved'])
                    )
                ) ?>
            </div>
        </div>
    </div>
</section>
<section class="ptb-80">
    <div class="container">
        <div class="row">
            <div class="col-md-3 hidden-xs hidden-sm">
                <aside class="sidebar-2">
                    <div class="content mb30">
                        <div class="row">
                            <?= $this->element('get-involved/sidebar') ?>
                        </div>
                    </div>
                </aside>
            </div>
            <div class="col-sm-12 col-md-9 space-left">
                <div class="row blog-list get-involved">
                    <?= $this->element('get-involved/get-involved') ?>
                    <?= $this->element('get-involved/get-help') ?>
                    <?= $this->element('get-involved/find-job-developer') ?>
                    <?= $this->element('get-involved/community-guidelines') ?>
                    <?= $this->element('get-involved/cakefest') ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->element('home/newsletter') ?>
