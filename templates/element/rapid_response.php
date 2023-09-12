<?php
/**
 * @var \App\View\AppView $this
 * @var string $description
 * @var string $firstTitle
 * @var string $modalId
 * @var string $secondTitle
 */
?>
<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel" id="<?= $modalId ?>">
	<div class="modal-dialog" role="document">
		<div class="modal-content modal-showcase">
			<?= $this->Form->create(null, ['url' => [
				'plugin' => false,
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
								<h4><strong><?= $firstTitle ?></strong></h4>
								<h4><?= $secondTitle ?></h4>
								<p><?= $description ?></p>
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<label class="col-sm-2 control-label-rapid"><?= __('Name') ?></label>
								<div class="col-sm-10">
									<?= $this->Form->control('name', [
										'label' => false,
										'div' => false,
										'class' => 'form-control form-plugin-rapid',
										'placeholder' => __('Name'),
										'required' => true
									]) ?>
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-2 control-label-rapid"><?= __('Email') ?></label>
								<div class="col-sm-10">
									<?= $this->Form->control('email', [
										'label' => false,
										'div' => false,
										'class' => 'form-control form-plugin-rapid',
										'placeholder' => __('Email'),
										'required' => true
									]) ?>
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-2 control-label-rapid"><?= __('Type') ?></label>
								<div class="col-sm-10">
									<?= $this->Form->control('type', [
										'div' => false,
										'label' => false,
										'class' => 'form-plugin-rapid type-select',
										'type' => 'select',
										'options' => [
											'email' => __('Email me'),
											'call' => __('Call me'),
											'skype' => __('Skype me')
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
									<?= $this->Form->control('phone', [
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
									<?= $this->Form->control('skype', [
										'div' => false,
										'label' => false,
										'class' => 'form-plugin-rapid form-control',
									]) ?>
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-2 control-label-rapid"><?= __('Subject') ?></label>
								<div class="col-sm-10">
									<?= $this->Form->control('subject', [
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
					<?= $this->Form->submit(__('Send'), [
						'class' => 'btn btn-primary btn-modal-show',
						'onclick' => "goog_report_conversion ()",
					]) ?>
				</div>
			</div>
			<?= $this->Form->end(); ?>
		</div>
	</div>
</div>
