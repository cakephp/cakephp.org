<?php
/**
 * @var \App\View\AppView $this
 */
use Cake\Core\Configure;
?>

<div id="findjobdeveloper" class="col-sm-12 get-developer pt-100">
	<h2><?= __('Find Jobs or Developers')?><?= $this->Html->link('¶', '#findjobdeveloper', ['class' => 'headerlink', 'title' => __('Permalink to this headline')]) ?></h2>

	<p><?= __('If you\'re looking for skilled CakePHP developers, or are a developer yourself and seeking a freelance project or
		position at a company, there are many resources available:')?></p>

	<h4><?= $this->Html->link(__('LinkedIn'), Configure::read('Site.menu.items.jobs.linkedin.url'), ['target' => '_blank'])?></h4>
	<p><?= __('Official career group for CakePHP related opportunities')?></p>

	<h4><?= $this->Html->link(__('Freelancer'), Configure::read('Site.menu.items.jobs.freelancer.url'), ['target' => '_blank'])?></h4>
	<p><?= __('Jobs available for freelance developers')?></p>

	<h4><?= $this->Html->link(__('CakePHPJobs'), Configure::read('Site.menu.items.jobs.cakeJobs.url'), ['target' => '_blank'])?></h4>
	<p><?= __('CakePHP related job postings')?></p>

	<h4><?= $this->Html->link(__('CakeDC'), Configure::read('Site.menu.items.serviceProvider.cakedc.url'))?></h4>
	<p><?= __('Development and consultancy from the experts')?></p>
</div>
