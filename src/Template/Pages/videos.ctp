<section id="videos-full" class="p0 m0">
	<div class="container-fluid p0 m0">
		<div class="col-md-12 p0 m0">
			<div class="embed-responsive embed-responsive-16by9">
				<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/tkOpGEb1MNw" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
	</div>
</section>



<section class="ptb-80-40 back-light-gray">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 title-videos mb50">
				<h1><?= __("CakePHP Videos") ?></h1>
				<h3><?= __("Checkout our videos from youtube channel.") ?></h3>
			</div>
		</div>
	</div>
</section>

<div class="portfolio-filter-wrapper">
	<div class="container">
		<div class="row">
			<!-- <div class="col-sm-12">
				<div class="submenu-videos">
					<nav class="portfolio-filter">
						<ul>
							<li><a href="#" data-filter="*" class="active"><i class="fa fa-bars"></i></a></li>
							<li><a href="#" data-filter=".news_">News</a></li>
							<li><a href="#" data-filter=".tutorials_">Tutorials</a></li>
							<li><a href="#" data-filter=".talks_">Talks</a></li>
							<li><a href="#" data-filter=".courses_">Courses</a></li>
						</ul>
					</nav>
				</div>
			</div> -->
		</div>
	</div>
</div>

<section class="section-page">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div id="portfolio-isotope">
					<div class="row">
						<div class="portfolio portfolio-animation-off">
						</div>
					</div>
				</div>

			</div>
		</div>
		<div class="col-md-12 text-center">
			<div class="clearfix mb10 text-center">
				<?= $this->Html->link(__('Load More'), 'javascript:;', [
					'class' => 'load-more-youtube'
				]) ?>
			</div>
		</div>
	</div>
</section>

<?= $this->element('home/newsletter') ?>
