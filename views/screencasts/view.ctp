<?php
	echo $javascript->link('qtobject');
?>
<div class="page">
<h2 style="text-align: center"><?php echo $screencast['Screencast']['title']?></h2>

	<div id="video">
		<script type="text/javascript">
		// <![CDATA[
			var myQTObject = new QTObject("<?php echo $screencast['Screencast']['movie']?>", "screencast", "800", "460");
			myQTObject.addParam("autostart", "false");
			myQTObject.write();
		// ]]>
		</script>
		<noscript>
			<p>You must enable Javascript to view this content.</p>
		</noscript>
	</div>
	<p>
		<?php echo $this->Html->link('more screencasts', array('action' => 'index'));?>
	</p>
</div>