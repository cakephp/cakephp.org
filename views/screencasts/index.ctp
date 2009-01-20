<div class="page">
<h2>
<em style="float:right; margin-top: 6px;">
<a href="http://www.apple.com/quicktime/download/">
    <?php echo $html->image('qt.jpg',array('alt'=>'download quicktime'))?>
    download the latest quicktime
</a>
</em>
Screencasts are here!
</h2>

<?php foreach($screencasts as $screencast): ?>
			<div style="float:left; width: 190px; margin: 40px 0;">
			   <?php if(!empty($screencast['Screencast']['image']))
            	 	echo $html->link($html->image($screencast['Screencast']['image'], array('alt'=>$screencast['Screencast']['title'])),'/screencasts/view/'.$screencast['Screencast']['id'], null, null, false);
			   ?>

			</div>

			<div style="float:left; width:550px; margin: 32px 0;">

				<h2>
	                <?php echo $html->link($screencast['Screencast']['title'], '/screencasts/view/'.$screencast['Screencast']['id']);?></h2>

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
<?php endforeach;?>
<div class="paging">
	<?php echo $paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
 | 	<?php echo $paginator->numbers();?>
	<?php echo $paginator->next(__('next', true).' >>', array(), null, array('class'=>'disabled'));?>
</div>
</div>