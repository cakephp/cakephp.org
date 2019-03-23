<?php
/**
 * The Find (CakePHP) Job or Developer section of the Get Involved Page
 *
 * @var \App\View\AppView $this
 */

use Cake\Core\Configure;

$jobSites = Configure::read('Site.menu.items.jobSites');
$developerSites = Configure::read('Site.menu.items.developerSites');
?>

<div id="findjobdeveloper" class="col-sm-12 get-developer pt-100">
	<h2><?= __('Find Job or Developer') ?><?= $this->Html->link('¶', '#findjobdeveloper',
			['class' => 'headerlink', 'title' => __('Permalink to this headline')]) ?></h2>
	<p><?= __('Whether you are looking for skilled CakePHP developers, or are a developer yourself and seeking a freelance project or
		position at a company, there are plenty resources available.')?></p>

	<div id="findJob" class="box-get">
		<h3><?= __('Find Job') ?><?= $this->Html->link('¶', '#findJob',
				['class' => 'headerlink', 'title' => __('Permalink to this headline')]) ?></h3>
		<p><?= __('If you are a developer yourself and seeking a freelance project or
			position at a company, there are many resources available:') ?></p>

		<?php
		foreach ($jobSites as $jobSite):
			$jobSiteTitle = \Cake\Utility\Hash::get($jobSite, 'title');
			$jobSiteUrl = \Cake\Utility\Hash::get($jobSite, 'url');
			$jobSiteDesc = \Cake\Utility\Hash::get($jobSite, 'description');
			?>
			<h4><?= $this->Html->link($jobSiteTitle, $jobSiteUrl, ['target' => '_blank']) ?></h4>
			<p><?= $jobSiteDesc ?></p>
		<?php endforeach; ?>
	</div>

	<div id="findDeveloper" class="box-get">
		<h3><?= __('Find Developer') ?><?= $this->Html->link('¶', '#findDeveloper',
				['class' => 'headerlink', 'title' => __('Permalink to this headline')]) ?></h3>
		<p><?= __('If you are looking for skilled CakePHP developers, there are many resources available:') ?></p>

		<?php
		foreach ($developerSites as $developerSite):
			$devSiteTitle = \Cake\Utility\Hash::get($developerSite, 'title');
			$devSiteUrl = \Cake\Utility\Hash::get($developerSite, 'url');
			$devSiteDesc = \Cake\Utility\Hash::get($developerSite, 'description');
			?>
			<h4><?= $this->Html->link($devSiteTitle, $devSiteUrl, ['target' => '_blank']) ?></h4>
			<p><?= $devSiteDesc ?></p>
		<?php endforeach; ?>
	</div>
</div>
