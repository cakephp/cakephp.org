<section class="ptb-80 back-red">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 text-center">
				<h3 class="title-white mb50"><?=__('Sign up for our newsletter.')?></h3>

				<form class="form" method="post" action="//cakephp.us9.list-manage.com/subscribe/post?u=f380de581acd576e7d802552a&amp;id=539d7fcbd1">
					<div class="row col-p10">
						<div class="col-sm-6">
							<label class="mb10">
								<input type="text"
									   value=""
									   name="FNAME"
									   class="form-control"
									   id="mce-FNAME"
									   placeholder="Name"
									   required>
							</label>
						</div>
						<div class="col-sm-6">
							<label class="mb10">
								<input type="email"
									   value=""
									   name="EMAIL"
									   class="form-control"
									   id="mce-EMAIL"
									   placeholder="Email"
									   required>
							</label>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 mc-field-group">
						<strong>English Lists </strong>
						<ul>
							<li><input type="checkbox" value="1" name="group[19433][1]" id="mce-group[19433]-19433-0"><label
									for="mce-group[19433]-19433-0">Newsletter</label></li>
							<li><input type="checkbox" value="2" name="group[19433][2]" id="mce-group[19433]-19433-1"><label
									for="mce-group[19433]-19433-1">Events</label></li>
							<li><input type="checkbox" value="4" name="group[19433][4]" id="mce-group[19433]-19433-2"><label
									for="mce-group[19433]-19433-2">Security</label></li>
							<li><input type="checkbox" value="64" name="group[19433][64]" id="mce-group[19433]-19433-3"><label
									for="mce-group[19433]-19433-3">Freelancers</label></li>
						</ul>
					</div>
					<div class="col-lg-4 col-md-4 mc-field-group">
						<strong>Lista en Español </strong>
						<ul>
							<li><input type="checkbox" value="8" name="group[19445][8]" id="mce-group[19445]-19445-0"><label
									for="mce-group[19445]-19445-0">Boletín de Noticias</label></li>
							<li><input type="checkbox" value="16" name="group[19445][16]" id="mce-group[19445]-19445-1"><label
									for="mce-group[19445]-19445-1">Eventos</label></li>
							<li><input type="checkbox" value="32" name="group[19445][32]" id="mce-group[19445]-19445-2"><label
									for="mce-group[19445]-19445-2">Seguridad</label></li>
							<li><input type="checkbox" value="128" name="group[19445][128]" id="mce-group[19445]-19445-3"><label
									for="mce-group[19445]-19445-3">Freelancers</label></li>
						</ul>
					</div>
					<div class="col-lg-4 col-md-4 mc-field-group">
						<strong>Email Format </strong>
						<ul>
							<li><input type="radio" value="html" name="EMAILTYPE" id="mce-EMAILTYPE-0"><label
									for="mce-EMAILTYPE-0">html</label></li>
							<li><input type="radio" value="text" name="EMAILTYPE" id="mce-EMAILTYPE-1"><label
									for="mce-EMAILTYPE-1">text</label></li>
						</ul>
					</div>
					<p>
						<?= $this->Html->link(__('Past Newsletters'), [
							'controller' => 'Pages',
							'action' => 'display',
							'newsletter'], [
							'title' => __('Past Newsletters'), 'id' => 'mc-past-responses'
						]); ?>
					</p>

					<div id="mce-responses" class="clear">
						<div class="response" id="mce-error-response" style="display:none"></div>
						<div class="response" id="mce-success-response" style="display:none"></div>
					</div>
					<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
					<div style="position: absolute; left: -5000px;" aria-hidden="true">
						<input type="text"
							   name="b_f380de581acd576e7d802552a_539d7fcbd1"
							   tabindex="-1"
							   value="">
					</div>
					<div class="me20 clearfix">
						<input type="submit"
							   value="Subscribe"
							   name="subscribe"
							   id="mc-embedded-subscribe"
							   class="btn btn-white">
					</div>
				</form>
			</div>

		</div>
	</div>
</section>

<?php $this->start('css') ?>
	<style>
		.mc-field-group ul {
			list-style-type: none;
			padding:0;
			margin:0;
		}

		.mc-field-group strong {
			color: white;
		}

		.mc-field-group input[type="radio"]:checked:before {
			border: 2px solid white;
		}
	</style>
<?php $this->end('css') ?>
