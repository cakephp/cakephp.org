<div id="meta">
	<div class="box">
		<div id="conferences">
			<?php
			/*
			echo $this->Html->link(
				$this->Html->image('http://2010.osdc.com.au/sites/default/files/imagecache/wysiwyg_imageupload_preview/wysiwyg_imageupload/1/osdc2010.png', array(
					'class' => 'image png',
					'width' => 196)),
				'http://2010.osdc.com.au/proposal/31/re-imagining-cakephp-path-20', array('escape' => false));
			*/
			?>
		</div>

		<?php
		echo $this->element('donations');
		//echo $this->element('quotes');
		?>
	</div>

	<?php
	echo $this->element('just-baked');
	echo $this->element('bakery-latest');
	//echo $this->element('ohloh');
	
	?>
	<span class="clear:both"></span>
</div>