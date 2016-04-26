<section id="expertise" class="pt-90 mt0 back-2">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center mb50 t-support">
                <h3><?= $this->Html->tag('span', __('Premium')) . __('Support')?></h3>
                <h5><?= __('Give "The experts behind CakePHP" a call:')?></h5>

                <div class="col-md-12">
                    <div class="btn-group" role="group" aria-label="...">
                        <button type="button" class="btn btn-default phone-support-i"><i class="fa fa-phone"></i></button>
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-default phone-support-number" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                +1 702 425 5085
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mt20">
                    <div class="btn-group" role="group" aria-label="...">
                        <button type="button" class="btn btn-default phone-support-i"><i class="fa fa-skype"></i></button>
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-default phone-support-number" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                CakeDC
                            </button>
                        </div>
                    </div>
                </div>
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
					<?= $this->Html->link(__('Rapid Response'), 'javascript:;', [
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
                            <h4 class="title-expertise"><?= __('Training')?><?= $this->Html->link(__('Read more'), 'http://training.cakephp.org/', ['class' => 'link-read-more'])?></h4>
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
                            <p class="mb0"><?= __('We can help with the areas which need special attention and a trained eye, allowing you to rest assured that you\'ve got all bases covered.')?>s </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel" id="rapidresponse">
	<div class="modal-dialog" role="document">
		<div class="modal-content modal-showcase">
        	<?= $this->Form->create(null, ['url' => [
        		'controller' => 'contacts',
        		'action' => 'rapid'
        	], 'class' => 'support-form']); ?>
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>

				<div class="modal-body">
				    <div class="row">
				        <div class="col-md-12">
				        	<div class="col-sm-4 icon-modal-show">
				        		<span class="glyph_range">P</span>
				        	</div>
				        	<div class="col-sm-8 t-modal-show">
				        		<h4><strong><?= __('Rapid') ?></strong></h4>
				        		<h4><?= __('Response') ?></h4>
				        		<p><?= __('Request a rapid response from us now, and we\'ll contact you within <strong>24 hours!</strong>') ?></p>
				        	</div>
				        </div>
				        <div class="col-md-12">
			        		<div class="form-group">
								<label class="col-sm-2 control-label-rapid"><?= __('Name') ?></label>
								<div class="col-sm-10">
									<?= $this->Form->input('name', [
										'label' => false,
										'div' => false,
										'class' => 'form-control form-plugin-rapid',
										'placeholder' => 'Name',
										'required' => true
									]) ?>
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-2 control-label-rapid"><?= __('Email') ?></label>
								<div class="col-sm-10">
									<?= $this->Form->input('email', [
										'label' => false,
										'div' => false,
										'class' => 'form-control form-plugin-rapid',
										'placeholder' => 'Email',
										'required' => true
									]) ?>
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-2 control-label-rapid"><?= __('Type') ?></label>
								<div class="col-sm-10">
									<?= $this->Form->input('type', [
										'div' => false,
										'label' => false,
										'class' => 'form-plugin-rapid type-select',
										'type' => 'select',
										'options' => [
											'email' => 'Email me',
											'call' => 'Call me',
											'skype' => 'Skype me'
										],
										'templates' => [
											'inputContainer' => '{{content}}'
										]
									]) ?>
								</div>
							</div>

							<div class="form-group phone-field hidden-fields" style="display:none">
								<label class="col-sm-2 control-label-rapid"><?= __('Phone') ?></label>
								<div class="col-sm-10">
									<?= $this->Form->input('phone', [
										'div' => false,
										'label' => false,
										'class' => 'form-plugin-rapid form-control',
										'id' => 'intl-phone-number'
									]) ?>
								</div>
							</div>

							<div class="form-group skype-field hidden-fields" style="display:none">
								<label class="col-sm-2 control-label-rapid"><?= __('Skype') ?></label>
								<div class="col-sm-10">
									<?= $this->Form->input('skype', [
										'div' => false,
										'label' => false,
										'class' => 'form-plugin-rapid form-control',
									]) ?>
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-2 control-label-rapid"><?= __('Subject') ?></label>
								<div class="col-sm-10">
									<?= $this->Form->input('subject', [
										'div' => false,
										'label' => false,
										'class' => 'form-plugin-rapid',
										'type' => 'select',
										'options' => [
											'other' => "Let's talk",
											'dev' => 'Development',
											'consultancy' => 'Consultancy',
											'review' => 'Code Review',
											'migration' => 'Migration',
											'training' => 'Training'
										],
										'templates' => [
											'inputContainer' => '{{content}}'
										]
									]) ?>
								</div>
							</div>
				        </div>
				    </div>
			</div>

			<div class="modal-footer back-modal-footer-show">
				<div class="col-xs-6 icon-dc-modal">
					<span class="glyph_range">O</span>
				</div>
				<div class="col-xs-6">
					<?= $this->Form->submit('Send', [
						'class' => 'btn btn-primary btn-modal-show'
					]) ?>
				</div>
			</div>
			<?= $this->Form->end(); ?>
		</div>
	</div>
</div>
