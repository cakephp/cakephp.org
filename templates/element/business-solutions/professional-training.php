<?php
/**
 * @var \App\View\AppView $this
 */
?>
<div id="professional-busi" class="col-sm-12 padd-certification">
	<div class="col-sm-6 p0">
		<span class="glyph_range icon-business-dev">r</span>
	</div>
	<div class="col-sm-6 p0">
		<h2><?= __('Professional Training') ?></h2>
		<p><?= __('Without a fundamental knowledge of CakePHP conventions and the reasons they are used, even good programmers may write poor code. Learn the insights and reasoning behind the CakePHP framework straight from the minds behind the framework: the developers at CakeDC') ?></p>
	</div>
	<div class="clearfix"></div>

	<div class="col-sm-12 p0">
		<h3><?= __('Training') ?></h3>
		<p><?= __('Our comprehensive training sessions teach the tools, knowledge, concepts and best-practices of CakePHP, helping your developers create code that is:') ?></p>
		<div class="col-sm-4">
			<span class="glyph_range icon-sub-business buss-icon-6">s</span>
		</div>
		<div class="col-sm-8 business-list-2">
			<ul>
				<li><?= __('Readable') ?></li>
				<li><?= __('Maintainable') ?></li>
				<li><?= __('Extendable') ?></li>
				<li><?= __('Object oriented') ?></li>
			</ul>
		</div>
		<p><?= __('Our standard CakePHP training course is around 4-5 hours in duration, with a short pause mid-session. The course is accompanied by a live example application, and is conducted via video streaming and chat, where you\'ll have direct access to ask any questions necessary. So why not join us, and start enjoying the measurable, long-lasting benefits of expert code training today.') ?></p>
	</div>

	<div class="col-sm-12 p0">
		<h3><?= __('Schedule') ?></h3>
		<p><?= __('Visit the {0} site to view the scheduled courses which are currently available. Some sessions may already
		be at maximum capacity, and no longer have positions available for additional attendees. Sign ups are only valid for
		a session until 24 hours previous to the scheduled time.', $this->Html->link(__('CakePHP Training'), 'https://www.cakedc.com/cakephp-training', ['class' => 't-blue']))?></p>
	</div>

	<div class="col-sm-12 p0">
		<h3><?= __('Workshops and Custom Training') ?></h3>
		<p>
			<?= __('Don\'t forget to look out for {0} the annual CakePHP conference, where you can attend in person a live workshop presented by a
		 core framework developer. Highly recommended for those who want to network with other CakePHP developers and meet the people behind the
		 project.', $this->Html->link(__('CakeFest'), 'https://cakefest.org/', ['class' => 't-blue'])) ?>
		</p>
		<p><?= __('Additionally, if you\'d prefer to have a more tailored training session for you or your team we can provide
		specific training sessions as part of our consultancy services, {0} us for more information.', $this->Html->link(__('contact'), '#', ['class' => 't-blue'])) ?></p>
	</div>

	<div class="col-sm-12 p0">
		<h3><?= __('Course  Topics')?></h3>
		<div class="col-sm-6 business-list">
			<ul>
				<li><?= __('Setting up for development') ?></li>
				<li><?= __('CakePHP project file structure') ?></li>
				<li><?= __('Framework configuration') ?></li>
				<li><?= __('CakePHP conventions') ?></li>
				<li><?= __('Baking your first project') ?></li>
				<li><?= __('The ORM') ?></li>
				<li><?= __('Tables') ?></li>
				<li><?= __('Associations') ?></li>
				<li><?= __('Entity validation') ?></li>
				<li><?= __('Reading data') ?></li>
				<li><?= __('Saving your data') ?></li>
			</ul>
		</div>
		<div class="col-sm-6 business-list">
			<ul>
				<li><?= __('Creating controllers') ?></li>
				<li><?= __('Implementing callbacks') ?></li>
				<li><?= __('Request and Response objects') ?></li>
				<li><?= __('Components') ?></li>
				<li><?= __('Building views') ?></li>
				<li><?= __('Page layouts') ?></li>
				<li><?= __('Handling elements') ?></li>
				<li><?= __('View blocks') ?></li>
				<li><?= __('Helpers (Html, Form)') ?></li>
				<li><?= __('Debugging code') ?></li>
				<li><?= __('Unit testing') ?></li>
			</ul>
		</div>
	</div>
</div>
