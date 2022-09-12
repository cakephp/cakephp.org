<?php
use Cake\Core\Configure;
$title = __('CakePHP - Build fast, grow solid | Core Team Profiles');
$description = __('Meet the CakePHP Core development team');
$this->assign('title', $title);
$this->assign('meta', $this->Html->meta('description', $description));
$this->assign('socialMeta', $this->Meta->socialTags(['title' => $title, 'description' => $description]));
$team = Configure::read('Site.team');
$i = 0;
$elementsByRow = 3;
?>

<section id="team-cake">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center t-team">
				<h1><span class="glyph_range">V</span><?= __('{0} {1}', $this->Html->tag('em', __('The')), $this->Html->tag('strong', __('Bakers')))?><span class="glyph_range">V</span></h1>
				<h3><?= __('Meet the team behind CakePHP')?></h3>
			</div>
			<div class="col-sm-12">
				<?php foreach($team as $key => $member):
					$i++;?>
					<div class="col-sm-6 col-md-4 padd-team">
						<div class="portfolio-el view view-team text-center">
							<?= $this->Html->image($member['image-url'], ['alt' => $member['name']])?>
							<a class="mask" data-target="#<?= $key ?>" data-toggle="modal">
								<div class="t-team-read">
									<h6><?= __('read more')?></h6>
								</div>
							</a>
						</div>
						<div class="text-team">
							<div class="d-team"></div>
							<h3><?= $member['name'] ?></h3>
							<h5><?= __($member['role']) ?></h5>
						</div>
					</div>
					<?php if ($i % $elementsByRow == 0):?>
						<div class="clearfix hidden-xs hidden-sm"></div>
					<?php endif;?>
					<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel-<?= $key ?>" id="<?= $key ?>">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<h4 class="modal-title title-modal-team" id="gridSystemModalLabel-<?= $key ?>"><?= $member['name'] ?></h4>
								</div>
								<div class="modal-body">
									<div class="row t-modal-team">
										<div class="col-sm-12">
											<p><?= __($member['description']) ?></p>
										</div>
									</div>
									<div class="row">
										<?= $this->Form->hidden('country', ['id' => $key . '-country', 'class' => 'country', 'value'=> $member['country']]) ?>
										<div class="col-sm-12">
											<div id="<?= $key ?>-map" class="img-responsive"></div>
										</div>
									</div>
								</div>
								<div class="modal-team">
									<?php if (!empty($member['twitter'])):?>
										<a href="https://twitter.com/<?= $member['twitter'] ?>" target="_blank" data-toggle="tooltip" aria-label="Twitter" title="Twitter"><i class="fa icon-social fa-twitter"></i></a>
									<?php endif;?>
									<?php if (!empty($member['github'])):?>
										<a href="https://github.com/<?= $member['github'] ?>" target="_blank" data-toggle="tooltip" aria-label="Github" title="Github"><i class="fa icon-social fa-github"></i></a>
									<?php endif;?>
									<?php if (!empty($member['mycake'])):?>
										<a href="https://my.cakephp.org/user/<?= $member['mycake'] ?>" target="_blank" data-toggle="tooltip" title="My CakePHP"><span class="glyph_range icon-social">a</span></a>
									<?php endif;?>
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

<?php $this->append('script'); ?>
	<?= $this->Html->script('team-map_effect.js'); ?>
<?php $this->end('script'); ?>
