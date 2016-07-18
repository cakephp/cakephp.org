<?= $this->element('adwords/find-out-more-click')?>
<div id="development-busi" class="col-sm-12">
	<div class="col-sm-6 p0">
		<h2><?= __('Custom Development') ?></h2>
		<p><?= __('As the commercial entity behind the framework, and established by Larry Masters, founder of CakePHP, we know your project like no one else. From startups and social networks, to e-commerce and enterprise level applications, we provide the highest quality CakePHP development available.') ?></p>
	</div>
	<div class="col-sm-6">
		<span class="glyph_range icon-business-dev">l</span>
	</div>
	<div class="clearfix"></div>

    <div class="text-center col-sm-6">
		<?= $this->Html->link(__('Find out more'), '#', [
			'class' => 'btn btn-expertise mt20',
			'data-toggle' => 'modal',
			'data-target' => '#findoutmore'
		])?>

		<p class="rapid-contact-feedback"></p>
	</div>

	<div class="col-sm-12 p0">
		<h3><?= __('Why Choose CakeDC') ?></h3>
		<h4><?= __('On-Demand Management') ?></h4>
		<p><?= __('We\'ve learned that transparency is key to successful collaborations, so all of our communication is out in the open, with evidence of our progress and results readily available.') ?></p>
		<h4><?= __('Milestone-Driven Development') ?></h4>
		<p><?= __('Our agile development cycles are based on milestones, which are designed to always be objective, focused and aim to provide a deliverable so you see your product in the making.') ?></p>
		<h4><?= __('Full QA Process') ?></h4>
		<p><?= __('We provide a QA process which is integrated directly into our development iterations, and that\'s based upon clear specifications and acceptance criteria which define our goals.') ?></p>
		<h4><?= __('Unit Testing') ?></h4>
		<p><?= __('All of our work is fully testable by default, meaning that everything we deliver is provided in-hand with unit tests to validate our efforts and guarantee it\'s functionality.') ?></p>
		<h4><?= __('Live Deployment') ?></h4>
		<p><?= __('During the development we offer a full continuous integration of your project to our private staging servers, which provides us essential insight into code quality, test coverage and impact areas.') ?></p>
	</div>
	<div class="col-sm-12 p0">
		<h3><?= __('Continuous Integration (CI) Environments') ?></h3>
		<div class="col-sm-3">
			<span class="glyph_range icon-sub-business buss-icon-1">t</span>
		</div>
		<div class="col-sm-9 p0">
			<p><?= __('We provide 3 managed environments to support our') ?> <?= $this->Html->link(__('git workflow'), 'http://www.cakedc.com/git-workflow', ['class' => 't-blue']) ?> <?= __('and ensure development, quality assurance and acceptance testing activities are isolated and visible to the client at all times. Deployment is automated, providing insight about the unit test coverage, code quality metrics and build status. Full automation and milestone based iterations provide a stable and predictable release cycle, reducing the overall time to market for the project and helping the Project Owners to successfully deliver their features as expected.') ?></p>
		</div>
	</div>
	<div class="col-md-12 p0">
		<h3><?= __('What We Provide') ?></h3>
		<p><?= __('We offer an array of development services, each covered by years of experience and our collective talent.') ?></p>
		<div class="col-sm-6 business-list">
			<ul>
				<li><?= __('Setting up for development') ?></li>
				<li><?= __('CakePHP 2 project file structure') ?></li>
				<li><?= __('Framework configuration') ?></li>
				<li><?= __('CakePHP 2 conventions') ?></li>
				<li><?= __('Baking your first project') ?></li>
				<li><?= __('Understanding scaffolding') ?></li>
				<li><?= __('Using models') ?></li>
				<li><?= __('Model properties') ?></li>
				<li><?= __('Model associations') ?></li>
				<li><?= __('Model validation') ?></li>
				<li><?= __('Retrieving data') ?></li>
				<li><?= __('Saving your data') ?></li>
			</ul>
		</div>
		<div class="col-sm-6 business-list">
			<ul>
				<li><?= __('Creating controllers') ?></li>
				<li><?= __('Implementing callbacks') ?></li>
				<li><?= __('Request and Response objects') ?></li>
				<li><?= __('Components (Session, Security)') ?></li>
				<li><?= __('Building views') ?></li>
				<li><?= __('Page layouts') ?></li>
				<li><?= __('Handling elements') ?></li>
				<li><?= __('View blocks') ?></li>
				<li><?= __('Helpers (Html, Form)') ?></li>
				<li><?= __('Using plugins') ?></li>
				<li><?= __('Debugging code') ?></li>
				<li><?= __('Unit testing') ?></li>
			</ul>
		</div>

	</div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel" id="findoutmore">
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
				        		<h4><strong><?= __('Find out') ?></strong></h4>
				        		<h4><?= __('More') ?></h4>

				        		<p><?= __('Looking to learn more about what CakeDC has to offer? Share your details with us below, and we\'ll contact you within {0}', $this->Html->tag('strong', __('24 hours!'))) ?></p>
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
						'onclick' => "goog_report_conversion ()"
					]) ?>
				</div>
			</div>
			<?= $this->Form->end(); ?>
		</div>
	</div>
</div>
