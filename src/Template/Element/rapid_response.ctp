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
						'class' => 'btn btn-primary btn-modal-show',
						'onclick' => "goog_report_conversion ()",
					]) ?>
				</div>
			</div>
			<?= $this->Form->end(); ?>
		</div>
	</div>
</div>
