<section class="pt-120 pb-50">
	<div class="container">
		<div class="row">
			<div class="col-md-12 title-more">
				<h3><?= __("CakePHP More Stories") ?></h3>
			</div>
			<div class="col-md-8 col-md-offset-2 mt50">
				<?php foreach (array_slice($projects->toArray(), 0, 3) as $index => $project): ?>
					<?= $this->element('Showcase/cases/case', ['index' => $index, 'project' => $project]) ?>
				<?php endforeach ?>
			</div>
		</div>

		<?php if ($projects->count() > 3): ?>
			<div class="row">
				<div class="col-md-8 col-md-offset-2 col-sm-12 sm-box3">
					<div class="panel-group" id="accordion">
						<div class="panel more-cases">
							<div id="viewmoreshowcase" class="panel-collapse collapse">
								<div class="panel-body">
									<?php foreach (array_slice($projects->toArray(), 3) as $index => $project): ?>
										<?= $this->element('Showcase/cases/case', ['index' => $index+1, 'project' => $project]) ?>
									<?php endforeach; ?>
								</div>
							</div>
							<div class="panel-heading">
								<h4 class="panel-title view-more text-center">
								<a data-toggle="collapse"
								   href="#viewmoreshowcase"
								   data-parent="#accordion"
								   class="show-more-button">
									<i class="fa fa-view-more fa-chevron-down"></i>
									<h5><?= __("View more projects") ?></h5>
									<i class="fa fa-view-more fa-chevron-down"></i>
								</a>
								</h4>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php endif; ?>
	</div>
</section>

<?php $this->append('script'); ?>
	<script>
		$(document).ready(function () {
			$('.show-more-button').on('click', function () {
				$(this).hide();
			});
		});
	</script>
<?php $this->end('script'); ?>
