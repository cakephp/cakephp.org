<?php
use Cake\Core\Configure;
$title = __('CakePHP | Rapid Development PHP Framework | Core team profiles');
$description = __('Meet the CakePHP Core development team');
$this->assign('title', $title);
$this->assign('meta', $this->Html->meta('description', $description));
$this->assign('socialMeta', $this->Meta->socialTags(['title' => $title, 'description' => $description]));
$team = Configure::read('Team');
$i = 0;
$elementsByRow = 3;
?>

<section id="team-cake">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center t-team">
				<h1><span class="glyph_range">V</span><em>The</em><strong>Bakers</strong><span class="glyph_range">V</span></h1>
				<h3><?= __('Meet the team behind CakePHP')?></h3>
			</div>
			<div class="col-sm-12">
				<?php foreach($team as $member):
					$i++;?>
					<div class="col-sm-6 col-md-4 padd-team">
						<div class="portfolio-el view view-team text-center">
							<?= $this->Html->image($member['image-url'], ['alt' => $member['name']])?>
							<a class="mask" data-target="#<?= $member['target'] ?>" data-toggle="modal">
								<div class="t-team-read">
									<h6><?= __('read more')?></h6>
								</div>
							</a>
						</div>
						<div class="text-team">
							<div class="d-team"></div>
							<h3><?= $member['name'] ?></h3>
							<h5><?= $member['role'] ?></h5>
						</div>
					</div>
					<?php if ($i % $elementsByRow == 0):?>
						<div class="clearfix hidden-xs hidden-sm"></div>
					<?php endif;?>
					<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel" id="<?= $member['target'] ?>">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<h4 class="modal-title title-modal-team" id="gridSystemModalLabel"><?= $member['name'] ?></h4>
								</div>
								<div class="modal-body">
									<div class="row t-modal-team">
										<div class="col-sm-12">
											<p><?= $member['description'] ?></p>
										</div>
									</div>
									<div class="row">
										<?= $this->Form->hidden('country', ['id' => $member['target'] . '-country', 'class' => 'country', 'value'=> $member['country']]) ?>
										<div class="col-sm-12">
											<div id="<?= $member['target'] ?>-map" class="img-responsive"></div>
										</div>
									</div>
								</div>
								<div class="modal-team">
									<a href="http://twitter.com/<?= $member['twitter'] ?>" data-toggle="tooltip" title="Twitter"><i class="fa icon-social fa-twitter"></i></a>
									<a href="https://github.com/<?= $member['github'] ?>" data-toggle="tooltip" title="Github"><i class="fa icon-social fa-github"></i></a>
									<a href="http://my.cakephp.org/user/<?= $member['mycake'] ?>" data-toggle="tooltip" title="My CakePHP"><span class="glyph_range icon-social">a</span></a>
								</div>
							</div>
						</div>
					</div>
				<?php endforeach;?>
			</div>
		</div>
	</div>
</section>

<?= $this->element('home/share')?>

<?= $this->element('home/newsletter')?>
