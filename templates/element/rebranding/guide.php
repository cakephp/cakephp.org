<section class="rebranding ptb-120">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">

                <div class="col-sm-7 mb80">
                    <h3><?= __('A vision for growth') ?></h3>
                    <p><?= __('To help foster the values that brought us here, we clarified our key messaging. We wanted to
					focus on what we believe CakePHP enables our community to do best and what we as project maintainers believe,
					and work for.') ?></p>
                </div>
                <div class="clearfix"></div>
                <div class="col-sm-12 mb80">
                    <div>
                        <?= $this->Html->image('rebranding/logo-cake-complete.jpg', ['class' => 'img-responsive center-block', 'title' => __('CakeUniversity')]) ?>
                    </div>
                </div>
                <div class="col-sm-7">
                    <h3><?= __('A brand for everyone') ?></h3>
                    <p><?= __('CakePHP has always been free and open source. We attribute the framework success due to
					the participation of the community of developers that embraced our ideas and constantly contributed
					to our growth and development. Thinking about our community, we created a system of signatures to be
					used by CakePHP developers, applications, individual and group supporters. These are the CakePHP
					Community Flags. We invite you to use the flags to show support') ?></p>
                </div>
                <div class="clearfix"></div>

                <div class="col-sm-12">
                    <?= $this->element('trademark/flags') ?>
                </div>

                <div class="col-sm-7">
                    <p>
                        <?= __('Access our {0} page to learn more.', $this->Html->link(__('Trademarks and Logo Policy'), ['controller' => 'Pages', 'action' => 'display', 'trademark'])) ?>
                    </p>
                    <p>
                        <?= __('CakePHP Rebranding Project was a partnership with brand designer {0}', $this->Html->link('Henrique Ibaldo', 'http://www.ibaldo.co/', ['target' => '_blank'])) ?>
                    </p>
                </div>
                <div class="clearfix"></div>

                <div class="col-md-12">
                    <?= $this->Html->link(
                        $this->Html->image('rebranding/ibaldo.jpg', ['class' => 'img-responsive center-block', 'title' => __('Henrique Ibaldo')]),
                        'http://www.ibaldo.co/',
                        ['target' => '_blank', 'escape' => false]
)
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
