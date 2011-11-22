<?php $this->Html->script(array('jquery', 'interface', 'common', 'services-switcher'), false);?>
<div id="features" class="tab-container">
	<div style="overflow: visible; display: block; left: 0px;" class="panels">
		<?php
		echo $this->element('services/support');
		echo $this->element('services/training');
		echo $this->element('services/consultation');
		echo $this->element('services/certification');
		?>
	</div>
</div>