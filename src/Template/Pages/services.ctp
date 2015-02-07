<?php $this->Html->script('services-switcher', array('inline' => false)); ?>
<div class="row">
	<div class="section">
		<h1><?php echo __('Services'); ?></h1>

		<dl class="tabs mobile">
			<dd><a href="#support" class="active"><?php echo __('Support'); ?></a></dd>
			<dd><a href="#training"><?php echo __('Training'); ?></a></dd>
			<dd><a href="#consultation"><?php echo __('Consultation'); ?></a></dd>
			<dd><a href="#certification"><?php echo __('Certification'); ?></a></dd>
		</dl>

		<ul class="tabs-content">
		<?php
		echo $this->element('services/support');
		echo $this->element('services/training');
		echo $this->element('services/consultation');
		echo $this->element('services/certification');
		?>
		</ul>
</div>
