<?php
/**
 * @var \App\View\AppView $this
 * @var mixed $_version
 */
?>
<section class="hero">
	<div class="container">
		<div class="col-sm-12 col-md-12 col-lg-12">
			<div class="title-home">
				<h1><span><?= __('New CakePHP {0} Chiffon.', $_version)?></span></h1>
                <h3><span class="subtitle-home"><?= __('Faster. Simple. Delicious.') ?></span></h3>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-12">
			<div class="cta-home">
				<a href="https://book.cakephp.org/5.x/installation.html" class="btn btn-home">
					<span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span>
					<?= __('DOWNLOAD') ?>
				</a>
				<a href="https://book.cakephp.org" class="btn btn-home btn-inverted">
					<span class="glyphicon glyphicon-book" aria-hidden="true"></span>
					Docs
				</a>
				<a href="https://api.cakephp.org/" class="btn btn-home btn-inverted">
					<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
					API
				</a>
			</div>
		</div>
	</div>
</section>
