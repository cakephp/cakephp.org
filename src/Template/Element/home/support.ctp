<?= $this->element('adwords/rapid-response-click')?>
<section id="expertise" class="pt-90 mt0 back-2">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center mb50 t-support">
                <h3><?= $this->Html->tag('span', __('Premium ')) . __('Support')?></h3>
                <h5><?= __('Give "The Experts Behind CakePHP" a call:')?></h5>
				<?= $this->element('home/contact_info')?>
            </div>
            <div class="col-md-5">
                <h4 class="sub-expertise"><?= __('Meet CakeDC.')?></h4>
                <p><?= __('The commercial entity behind the framework, and established by Larry Masters, founder of CakePHP, we know your project like no one else. From startups and social networks, to e-commerce and enterprise level applications, we provide the highest quality CakePHP development available.')?> </p>
                <div class="text-center mt80 mb40">
                    <span class="glyph_range icon-expertise">O</span>
                </div>
                <p><?= __('Request a rapid response from us now, and we\'ll contact you within 24 hours:')?></p>
                <p class="rapid-contact-feedback"></p>
                <div class="text-center">
					<?= $this->Html->link(__('Rapid Response'), '#', [
						'class' => 'btn btn-expertise mt20',
						'data-toggle' => 'modal',
						'data-target' => '#rapidresponse'
					])?>
                </div>
            </div>
            <div class="col-md-6 col-md-offset-1">
                <div class="box-services-d">
                    <div class="row col-p0">
                        <div class="col-sm-3">
                            <span class="glyph_range icon-expertise-2">P</span>
                        </div>
                        <div class="col-md-8 col-md-offset-1">
                            <h4 class="title-expertise"><?= __('Support')?> <?= $this->Html->link(__('Read more'), 'http://www.cakedc.com', ['class' => 'link-read-more'])?></h4>
                            <p class="mb0 "><?= __('Professional support for CakePHP is provided by our professional services partner, the Cake Development Corporation.')?></p>
                        </div>
                    </div>
                </div>
                <div class="box-services-d">
                    <div class="row col-p0">
                        <div class="col-sm-3">
                            <span class="glyph_range icon-expertise-2">Q</span>
                        </div>
                        <div class="col-md-8 col-md-offset-1">
                            <h4 class="title-expertise"><?= __('Training')?><?= $this->Html->link(__('Read more'), 'http://www.cakedc.com/cakephp-training', ['class' => 'link-read-more'])?></h4>
                            <p class="mb0 "><?= __('Learn the insights and reasoning behind the CakePHP framework straight from the minds behind the framework: the developers at CakeDC')?></p>
                        </div>
                    </div>
                </div>
                <div class="box-services-d">
                    <div class="row col-p0">
                        <div class="col-sm-3">
                            <span class="glyph_range icon-expertise-2">R</span>
                        </div>
                        <div class="col-md-8 col-md-offset-1">
                            <h4 class="title-expertise"><?= __('Expert {0} Consultancy', $this->Html->tag('br'))?><?= $this->Html->link(__('Read more'), 'http://www.cakedc.com/cakephp-consultancy', ['class' => 'link-read-more'])?></h4>
                            <p class="mb0"><?= __('We can help with the areas which need special attention and a trained eye, allowing you to rest assured that you\'ve got all bases covered.')?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->element('rapid_response', [
	'modalId' => 'rapidresponse',
	'firstTitle' => __('Rapid'),
	'secondTitle' => __('Response'),
	'description' => __('Request a rapid response from us now, and we\'ll contact you within {0}', $this->Html->tag('strong', __('24 hours!')))
]) ?>
