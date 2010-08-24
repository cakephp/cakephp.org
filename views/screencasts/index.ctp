<div class="page">
<h2>
<em style="float:right; margin-top: 6px;">
<a href="http://www.apple.com/quicktime/download/">
    <?php echo $this->Html->image('qt.jpg',array('alt'=>'download quicktime'))?>
    download the latest quicktime
</a>
</em>
Screencasts are here!
</h2>

<div style="padding-left: 20px;"><?php echo $this->element('ads/728x90'); ?></div>
<?php $adCount = 0; ?>
<?php foreach($screencasts as $screencast): ?>
	<?php $adCount++; ?>
	<div style="float:left; width: 190px; margin: 40px 0;">
		<?php if(!empty($screencast['Screencast']['image'])): ?>
			<?php echo $this->Html->link(
				$this->Html->image($screencast['Screencast']['image'], array('alt'=>$screencast['Screencast']['title'])),
				'/screencasts/view/' . $screencast['Screencast']['id'],
				null, null, false); ?>
		<?php endif; ?>
	</div>

	<div style="float:left; width:550px; margin: 32px 0;">
		<h2><?php echo $this->Html->link($screencast['Screencast']['title'], '/screencasts/view/'.$screencast['Screencast']['id']);?></h2>
		<p><i>produced by:</i> <?php echo $screencast['Screencast']['producer'];?></p>
		<p>
			<i>size:</i> <?php echo $screencast['Screencast']['size'];?>
		    &nbsp;&nbsp;&nbsp;&nbsp;
			<i>downloads:</i> <?php echo $screencast['Screencast']['downloads'];?>
		</p>
		<p style="padding: 10px 0"><?php echo $screencast['Screencast']['description'];?></p>

		<p style="font-size: 10px">
			license: <a href="http://creativecommons.org/licenses/by-nc-nd/2.5/">Creative Commons Attribution-NonCommercial-NoDerivs</a>
		</p>
	</div>
	<div style="clear:both;"></div>
	<?php if ($adCount == round(count($screencasts) / 2)): ?>
		<div style="padding-left: 20px;"><?php echo $this->element('ads/728x90'); ?></div>
	<?php endif; ?>
<?php endforeach;?>

<div class="paging">
	<?php echo $this->Paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
 | 	<?php echo $this->Paginator->numbers();?>
	<?php echo $this->Paginator->next(__('next', true).' >>', array(), null, array('class'=>'disabled'));?>
</div>

<div style="padding-left: 20px;"><?php echo $this->element('ads/728x90'); ?></div>

</div>