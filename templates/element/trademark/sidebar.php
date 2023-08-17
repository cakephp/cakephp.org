<?php
/**
 * @var \App\View\AppView $this
 */
?>
<aside class="page-content-list page-content-trad hidden-xs hidden-sm">
	<div class="mb30"><strong><?= __('Contents')?></strong></div>
	<ol>
		<li><?= $this->Html->link(__('Introduction'), '#introduction')?></li>
		<li><?= $this->Html->link(__('Our commitment to open source principles'), '#commitment')?></li>
		<li>
			<?= $this->Html->link(__('Trademarks subject to the guidelines'), '#guidelines')?>
			<ol>
				<li><?= $this->Html->link( __('Our trademarks'), '#our-guidelines')?></li>
				<li><?= $this->Html->link(__('The trademarks we are licensing in this Policy'), '#policy')?></li>
			</ol>
		</li>
		<li><?= $this->Html->link(__('Universal considerations for all uses'), '#universal-considerations')?></li>
		<li class="hide">
			<?= $this->Html->link(__('Use for software'), '#software')?>
			<ol>
				<li>
					<?= $this->Html->link(__('Uses we consider non-infringing'), '#sofware-users')?>
					<ol>
						<li><?= $this->Html->link(__('Distribution of unmodified source code or unmodified executable
								code we have compiled'), '#unmodified-uses')?></li>
						<li><?= $this->Html->link(__('Distribution of executable code that you have compiled, or
								modified code'), '#executable-uses')?></li>
						<li><?= $this->Html->link(__('Statements about compatibility, interoperability or
								derivation'), '#compatibility-uses')?></li>
						<li><?= $this->Html->link(__('Use of trademarks to show community affiliation'), '#affiliation-uses')?></li>
					</ol>
				</li>
				<li class="hide">
					<?= $this->Html->link(__('Uses for which we are granting a license'), '#license')?>
					<ol>
						<li><?= $this->Html->link(__('Distribution of modified software'), '#shotware-license')?></li>
						<li><?= $this->Html->link(__('Distribution of software preloaded on hardware'), '#hardware-license')?></li>
					</ol>
				</li>
				<li><?= $this->Html->link(__('Uses we consider infringing without seeking further permission from
						us'), '#permission')?></li>
			</ol>
		</li>
		<li class="hide">
			<?= $this->Html->link(__('Use for non-software goods and services'), '#non-software')?>
			<ol>
				<li>
					<?= $this->Html->link(__('>Uses we consider non-infringing'), '#non-infringing')?>
					<ol>
						<li><?= $this->Html->link(__('Websites'), '#websites')?></li>
						<li><?= $this->Html->link(__('Publications and presentations'), '#publications')?></li>
						<li><?= $this->Html->link(__('Events'),'#events')?></li>
					</ol>
				</li>
				<li>
					<?= $this->Html->link(__('Uses for which we are granting a license'), '#granting')?>
					<ol>
						<li><?= $this->Html->link(__('User groups'), '#granting-groups')?></li>
						<li><?= $this->Html->link(__('Promotional goods'), '#granting-promotional')?></li>
					</ol>
				</li>
				<li><?= $this->Html->link(__('Uses we consider infringing without seeking further permission from
						us'), '#infringing')?></li>
			</ol>
		</li>
		<li>
			<?= $this->Html->link(__('General Information'), '#general')?>
			<ol>
				<li><?= $this->Html->link(__('Trademark marking and legends'), '#legends')?></li>
				<li><?= $this->Html->link(__('What to do when you see abuse'), '#abuse')?></li>
				<li><?= $this->Html->link(__('Where to get further information'), '#general-information', ['class' => 't-blue'])?></li>
			</ol>
		</li>
		<li>
			<?= $this->Html->link(__('General considerations about trademarks and their use'), '#considerations')?>
			<ol>
				<li>
					<?= $this->Html->link(__('What trademark law is about'), '#considerations-about')?>
					<ol>
						<li><?= $this->Html->link(__('What is a trademark?'), '#considerations-trademark')?></li>
						<li><?= $this->Html->link(__('What is "likelihood of confusion"?'), '#considerations-confusion')?></li>
						<li><?= $this->Html->link(__('What is "nominative" use?'), '#considerations-nominative')?></li>
					</ol>
				</li>
				<li>
					<?= $this->Html->link(__('Proper trademark use'), '#proper-use')?>
					<ol>
						<li><?= $this->Html->link(__('Use of trademarks in text'), '#proper-text')?></li>
						<li><?= $this->Html->link(__('Use of Logos'), '#proper-logo')?></li>
					</ol>
				</li>
			</ol>
		</li>
		<li><a href="#trad-footnotes"><?= __('Footnotes')?></a></li>
	</ol>
</aside>
