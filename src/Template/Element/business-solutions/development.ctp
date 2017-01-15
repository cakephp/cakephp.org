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
                <li><?= __('CakePHP Development') ?></li>
                <li><?= __('Plugin Development') ?></li>
                <li><?= __('Mobile & Tablet Sites') ?></li>
                <li><?= __('JavaScript, Ajax & Node.js') ?></li>
                <li><?= __('Single Page Applications') ?></li>
                <li><?= __('API Development') ?></li>
                <li><?= __('Web Services') ?></li>
                <li><?= __('Internationalization (i18n)') ?></li>
                <li><?= __('Imports & Migrations') ?></li>
                <li><?= __('Third-Party Integrations') ?></li>
                <li><?= __('Project Management') ?></li>
                <li><?= __('Issue & Bug Tracking') ?></li>
                <li><?= __('Backups & Version Control') ?></li>
                <li><?= __('Database Modeling') ?></li>
                <li><?= __('UML/ER/Flow Diagrams') ?></li>
			</ul>
		</div>
		<div class="col-sm-6 business-list">
			<ul>
                <li><?= __('In-Depth Code Review') ?></li>
                <li><?= __('Wire-Frames & Mock-ups') ?></li>
                <li><?= __('Responsive Web Design') ?></li>
                <li><?= __('Payment Gateways') ?></li>
                <li><?= __('PCI Compliance') ?></li>
                <li><?= __('Technical Specifications') ?></li>
                <li><?= __('Functional Analysis') ?></li>
                <li><?= __('Performance & Scalability') ?></li>
                <li><?= __('Security & Integrity Checks') ?></li>
                <li><?= __('Domain Level Analysis') ?></li>
                <li><?= __('Source Code Refactoring') ?></li>
                <li><?= __('Technical Documentation') ?></li>
                <li><?= __('Web Standards Compliance') ?></li>
                <li><?= __('Usability Testing (UI & UX)') ?></li>
                <li><?= __('A/B Testing & Smoke Tests') ?></li>
			</ul>
		</div>

	</div>
</div>

<?= $this->element('rapid_response', [
	'modalId' => 'findoutmore',
	'firstTitle' => __('Find out'),
	'secondTitle' => __('More'),
	'description' => __('Looking to learn more about what CakeDC has to offer? Share your details with us below, and we\'ll contact you within {0}', $this->Html->tag('strong', __('24 hours!')))
]) ?>
