<?= $this->element('adwords/rapid-response-click')?>
<section id="expertise" class="mt100">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h2 class="mb20"><?= __('Premium CakePHP Support')?></h2>
				<h4><?= __('Let the experts behind CakePHP show you how it\'s done.')?></h4>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="text-center">
					<?= $this->Html->image('cakedc.svg', ['class' => 'logo']) ?>
				</div>
				<p>
					<?= __('CakeDC offers you access to the leading CakePHP developers from around the world.
					Faster CakePHP development that will have your application growth ready and stable.') ?>
				</p>
			</div>
		</div>
		<div class="service-boxes">
			<div class="box-services-c">
				<?= $this->Html->image('cakedc_expert.png') ?>
				<h4 class="title-small"><?= __('Expert Consultancy') ?></h4>
				<p class="flex-grow-1">
					<?= __('We can help with the areas which need special
attention and a trained eye, allowing you to
rest assured that you\'ve got all bases covered.') ?>
				</p>
				<div>
                    <?= $this->Html->link(__('+1 702 425 5085'), 'tel:+17024255085', [
                        'class' => 'btn btn-home pull-left',
                    ]) ?>

				</div>
			</div>
			<div class="box-services-c">
				<?= $this->Html->image('cakedc_training.png') ?>
				<h4 class="title-small"><?= __('CakePHP Training') ?></h4>
				<p class="mb0 flex-grow-1">
					<?= __('Learn the insights and reasoning behind the
CakePHP framework straight from the minds
behind the framework: the developers at
CakeDC.') ?>
				</p>
				<p class="rapid-contact-feedback"></p>
				<div>
					<?= $this->Html->link(__('Rapid Response'), '#', [
                        'class' => 'btn btn-home pull-left',
                        'data-toggle' => 'modal',
                        'data-target' => '#rapidresponse',
                    ]) ?>
				</div>
			</div>
			<div class="box-services-c">
				<?= $this->Html->image('cakedc_support.png') ?>
				<h4 class="title-small"><?= __('CakePHP Support') ?></h4>
				<p class="flex-grow-1">
					<?= __('Professional support for CakePHP is provided
by our professional services partner, the Cake
Development Corporation.') ?>
				</p>
				<div>
					<a href="skype:CakeDC" class="btn btn-home pull-left">
						<i class="fa fa-skype"></i> CakeDC
					</a>
				</div>
			</div>
		</div>
	</div>
</section>

<?= $this->element('rapid_response', [
    'modalId' => 'rapidresponse',
    'firstTitle' => __('Rapid'),
    'secondTitle' => __('Response'),
    'description' => __('Request a rapid response from us now, and we\'ll contact you within {0}', $this->Html->tag('strong', __('24 hours!'))),
]) ?>
