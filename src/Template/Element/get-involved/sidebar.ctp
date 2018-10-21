<ul id="sidebar-2" class="nav-pills nav-stacked affix-top">
	<li>
		<?= $this->Html->link(__('Get Involved'), '#getInvolved');?>
		<div class="br-bottom-sidebar-2"></div>
		<ul id="sub-sidebar-2">
			<?= $this->Html->tag('li', $this->Html->link(__('User Support'), '#userSupport'))?>
			<?= $this->Html->tag('li', $this->Html->link(__('Education and Training'), '#education'))?>
			<?= $this->Html->tag('li', $this->Html->link(__('Marketing and Evangelism'), '#marketing'))?>
			<?= $this->Html->tag('li', $this->Html->link(__('Contributing Code'), '#contributing'))?>
			<?= $this->Html->tag('li', $this->Html->link(__('Testing and Quality Assurance'), '#testing'))?>
			<?= $this->Html->tag('li', $this->Html->link(__('Documentation'), '#documentation'))?>
			<?= $this->Html->tag('li', $this->Html->link(__('Translation'), '#translation'))?>
		</ul>
	</li>
		<?= $this->Html->tag('li', $this->Html->link(__('Get Help'), '#getHelp'), ['class' => 'br-bottom-sidebar mt30'])?>
	<li>
		<?= $this->Html->link(__('Find Job or Developer'), '#findjobdeveloper') ?>
		<div class="br-bottom-sidebar-2"></div>
		<ul id="sub-sidebar-2">
			<?= $this->Html->tag('li', $this->Html->link(__('Find Job'), '#findJob'))?>
			<?= $this->Html->tag('li', $this->Html->link(__('Find Developer'), '#findDeveloper'))?>
		</ul>
	</li>
	<?= $this->Html->tag('li', $this->Html->link(__('Community Guidelines'), '#comunityguidelinesside'), ['class' => 'br-bottom-sidebar mt30'])?>
	<?= $this->Html->tag('li', $this->Html->link(__('CakeFest'), '#cakefest'), ['class' => 'br-bottom-sidebar'])?>
</ul>
