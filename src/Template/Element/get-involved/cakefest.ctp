<div id="cakefest" class="col-sm-12 get-conference pt-100">
	<h2><?= __('The Annual CakePHP Conference')?></h2>
	<?= $this->Html->image('cakefest/slide.jpg', ['class' => 'img-responsive', 'alt' => __('Cakefest')]) ?>
	<p><?= __('Every year we hold a conference dedicated to CakePHP, hosting live workshops and inviting a variety of great
		speakers, to give you the very best in presentations and talks on the latest from the community:')?></p>
	<ul>
		<li><?= __('The workshops are a great way to learn CakePHP, and get up-to-date with the latest versions and innovations,
			directly from the core developers of the framework!')?>
		</li>
		<li><?= __('The conference days are packed with presentations, discussions and talks on CakePHP and related
			technologies, an ideal moment to learn more from the community.')?>
		</li>
		<li><?= __('It\'s a great opportunity to network, meet friends old and new, and have some fun with the core members of
			the project. Plus, there\'s cake!')?>
		</li>
	</ul>
	<p><?= __('More information on the conference and ticket sales can be found on the {0}', $this->Html->link(
			__('CakeFest website'),
			'http://cakefest.org/',
			[
                'class' => 't-blue',
                'target' => '_blank'
            ]
		)) ?>
	</p>
</div>
