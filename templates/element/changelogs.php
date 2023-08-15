
<?php
$sidebar = [];
$previous = null;
foreach ($tags as $tag) {
	preg_match('/^(?<series>\d+\.\d+).*/', $tag, $matches);
	if ((!$previous || version_compare($previous, $matches['series'], '>'))) {
		if (!empty($matches['series'])) {
			$previous = $matches['series'];
			$sidebar[] = '<li class="show-me click-me">' . __('{0} series ', $matches['series']) . '<i class="fa fa-menu fa-chevron-right"></i></li>';
		}
	}
	$sidebar[] = '<li class="hide-me">' . $this->Html->link($tag, array('action' => 'view', $tag)) . '</li>';
}
?>
<div class="col-md-2 mt30">
	<h3>Changelogs</h3>
	<ul class="changelogs"><?= implode('', $sidebar); ?></ul>
</div>
</div>
</div>
</section>

<?= $this->Html->scriptBlock("
$(document).ready(function (jQuery) {
		$('.hide-me').hide();
		$('.click-me').click(function () {
			$('.hide-me').hide();
			$('.fa-chevron-down').removeClass('fa-chevron-down').addClass('fa-chevron-right');
			$('.click-me').removeClass('clicked');
			$(this).addClass('clicked');
			$(this).nextUntil('li.click-me').fadeToggle(500);
			$(this).find('.fa-chevron-right').removeClass('fa-chevron-right').addClass('fa-chevron-down');
		});
	});
", ['block' => true]);