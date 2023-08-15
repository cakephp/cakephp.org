<?php
$this->extend('/common/secondary');
?>

<div class="main dev">
	<div class="container-fluid development vertical-bg" style="background-repeat: repeat-y; background-size: 40%">
		<div class="col-md-1"></div>
			<div class="col-md-6">
				<?= $this->fetch('content') ?>
			</div>
			<div class="col-md-1"></div>
			<div class="col-md-4 menu-right">
				<?= $this->fetch('sidebar') ?>
			</div>
		</div>
	</div>
