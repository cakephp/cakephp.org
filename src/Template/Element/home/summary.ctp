<section class="ptb-80 fundo-w">
	<div class="container">
		<div class="row">
			<div class="col-md-offset-2 col-md-8">
				<div class="box-services-c cake-introdution">
					<p><?= __('CakePHP makes building web applications simpler, faster, while requiring less code. A modern
					 PHP 7 framework offering a flexible database access layer and a powerful scaffolding system that makes
					 building both small and complex systems simpler, easier and, of course, tastier. Build fast, grow solid
					 with CakePHP.')?></p>

					<div class="col-md-12 mb70">
						<?= $this->Html->link(
							__('Download CakePHP {0}', $_version),
							'http://book.cakephp.org/3.0/en/installation.html',
							['class' => 'btn btn-red mt30']
						) ?>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 social text-center">
				<div class="col-md-3 col-sm-3 col-xs-12">
					<div id="fb-root"></div>
					<script>(function (d, s, id) {
							var js, fjs = d.getElementsByTagName(s)[0];
							if (d.getElementById(id)) return;
							js = d.createElement(s);
							js.id = id;
							js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
							fjs.parentNode.insertBefore(js, fjs);
						}(document, 'script', 'facebook-jssdk'));
					</script>
					<div id="fb-root-face" class="fb-like" data-href="https://www.facebook.com/CakePHP/"
						 data-layout="button_count" data-action="like" data-show-faces="true" data-share="false"></div>
				</div>

				<div class="col-md-3 col-sm-3 col-xs-12 git-frame">
					<iframe
						src="https://ghbtns.com/github-btn.html?user=cakephp&amp;repo=cakephp&amp;type=star&amp;count=true&amp;size=small"></iframe>
				</div>

				<div class="col-md-3 col-sm-3 col-xs-12 git-frame">
					<iframe
						src="https://ghbtns.com/github-btn.html?user=cakephp&amp;repo=cakephp&amp;type=fork&amp;count=true&amp;size=small"></iframe>
				</div>

				<div class="col-md-3 col-sm-3 col-xs-12">
					<a href="https://twitter.com/CakePHP" class="twitter-follow-button" data-show-count="true"
					   data-show-screen-name="false">Follow @CakePHP</a>
					<script>!function (d, s, id) {
							var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
							if (!d.getElementById(id)) {
								js = d.createElement(s);
								js.id = id;
								js.src = p + '://platform.twitter.com/widgets.js';
								fjs.parentNode.insertBefore(js, fjs);
							}
						}(document, 'script', 'twitter-wjs');</script>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="recipe" class="bg-img bg02 mb0 stellar pt-90" data-stellar-background-ratio="0.4">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h2><?= __('A recipe to succeed.')?></h2>
				<h4><?= __('Prototype faster, Validate faster, Grow consistently.')?></h4>
			</div>

			<div class="col-md-12">

				<div class="col-md-4 col-md-offset-1">
					<div class="box-services-c">
						<span class="glyph_range icon-recipe">G</span>
						<h3 class="title-small"><?= __('Build Quickly')?></h3>
						<p>
							<?= __('Use code generation and scaffolding features to {0}.', $this->Html->tag('strong', __('rapidly build prototypes')))?>
						</p>
					</div>
				</div>

				<div class="col-md-4 col-md-offset-2">
					<div class="box-services-c">
						<span class="glyph_range icon-recipe">H</span>

						<h3 class="title-small"><?= __('No Configuration')?></h3>

						<p><?= __('No complicated XML or YAML files. Just setup your database and you\'re {0}.', $this->Html->tag('strong', __('ready to
								bake')))?></p>
					</div>
				</div>

				<div class="col-md-4 col-md-offset-1">
					<div class="box-services-c">
						<span class="glyph_range icon-recipe">I</span>

						<h3 class="title-small"><?= __('Friendly License')?></h3>
						<p>
							<?= __('CakePHP is licensed under the MIT license which makes it perfect for use in {0}.', $this->Html->tag('strong', __('Commercial applications'))) ?>
						</p>
					</div>
				</div>

				<div class="col-md-4 col-md-offset-2">
					<div class="box-services-c">
						<span class="glyph_range icon-recipe">J</span>

						<h3 class="title-small"><?= __('Batteries Included')?></h3>

						<p><?= __('{0}. Translations, database access, caching,
							validation, authentication, and much more are all built into one of the original PHP MVC
							frameworks.', $this->Html->tag('strong', __('The things you need are built-in')))?></p>
					</div>
				</div>

				<div class="col-md-4 col-md-offset-1">
					<div class="box-services-c">
						<span class="glyph_range icon-recipe i-recipe-size">K</span>

						<h3 class="title-small"><?= __('Clean MVC Conventions')?></h3>

						<p>
							<?= __('Instead of having to plan where things go, CakePHP comes with a {0} to guide you in developing your application', $this->Html->tag('strong', __('set of
								conventions')))?>
						</p>
					</div>
				</div>

				<div class="col-md-4 col-md-offset-2">
					<div class="box-services-c">
						<span class="glyph_range icon-recipe i-recipe-size">L</span>
						<h3 class="title-small"><?= __('Secure')?></h3>
						<p><?= __('CakePHP comes with built-in tools for input validation, CSRF protection, Form tampering
							protection, SQL injection prevention, and XSS prevention. CakePHP codebase itself has been audited
							through the {0} program.', $this->Html->link('Mozilla Secure Open Source', 'https://bakery.cakephp.org/2017/11/22/mozilla_sos_audit_published.html'))?></p>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>
