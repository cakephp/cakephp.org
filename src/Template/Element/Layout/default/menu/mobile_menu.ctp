<?php
/**
 * The mobile menu element
 */
if (!isset($selectedLanguage)) {
	$selectedLanguage = 'en';
}
if (!isset($availableLanguages)) {
	$availableLanguages = ['en'];
}
?><div class="modal fade" id="menumodal" tabindex="-1" aria-labelledby="modal-label-3" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content modal-content-menu">
			<div class="modal-header modal-header-menu">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<div class="row mb20">
					<div class="col-xs-10 col-xs-offset-1">
						<div class="panel-group" id="toggle">

							<div class="panel">
								<div class="panel-heading p0">
									<h4 class="panel-title title-responsivo-menu">
										<a data-toggle="collapse" href="#Documentationmodal">
											<i class="fa fa-caret-down upside-down"></i><?= __('Documentation') ?>
										</a>
									</h4>
								</div>
								<div id="Documentationmodal" class="panel-collapse collapse">
									<div class="panel-body sidebar-menu-body">
										<ul>
											<?= $this->App->menuItems($this->Menu->documentationItems()); ?>
										</ul>
									</div>
								</div>
							</div>

							<div class="panel">
								<div class="panel-heading p0">
									<h4 class="panel-title title-responsivo-menu">
										<?= $this->Html->link(
											__('Business Solutions'),
											['controller' => 'pages', 'action' => 'display', 'business-solutions'],
											['escape' => false]
										) ?>
									</h4>
								</div>
							</div>

						   <div class="panel">
								<div class="panel-heading p0">
									<h4 class="panel-title title-responsivo-menu">
                                        <?= $this->Html->link(
                                            __('Swag'),
                                            'https://swag.cakephp.org/',
                                            ['escape' => false, 'target' => '_blank']
                                        );?>
									</h4>
								</div>
							</div>

							<div class="panel">
								<div class="panel-heading p0">
									<h4 class="panel-title title-responsivo-menu">
										<?= $this->Html->link(
											__('Team'),
											['controller' => 'pages', 'action' => 'display', 'team'],
											['escape' => false]
										) ?>
									</h4>
								</div>
							</div>

							<div class="panel">
								<div class="panel-heading p0">
									<h4 class="panel-title title-responsivo-menu">
										<a data-toggle="collapse" href="#communitymodal">
											<i class="fa fa-caret-down upside-down"></i><?= __('Community') ?>
										</a>
									</h4>
								</div>
								<div id="communitymodal" class="panel-collapse collapse">
									<div class="panel-body sidebar-menu-body tarja-menu">
										<ul>
											<li class="menu-title"><i class="fa fa-menu-title fa-comments-o"></i><?= __('Help &
												Support') ?>
											</li>
											<?= $this->App->menuItems($this->Menu->helpAndSupportItems()); ?>
	  									</ul>
										<ul>
											<li class="menu-title"><i class="fa fa-menu-title fa-users"></i><?= __('Community') ?>
											</li>
											<?= $this->App->menuItems($this->Menu->communityItems()); ?>
										</ul>
									</div>
								</div>
							</div>

							<div class="panel">
								<div class="panel-heading p0">
									<h4 class="panel-title title-responsivo-menu">
										<a data-toggle="collapse" href="#language-modal">
											<i class="fa fa-caret-down upside-down"></i><?= __('Language: {0}', $selectedLanguage) ?>
										</a>
									</h4>
								</div>
								<div id="language-modal" class="panel-collapse collapse">
									<div class="panel-body sidebar-menu-body tarja-menu">
										<ul class="">
											<li></li>
											<?php foreach($availableLanguages as $lang => $alias): ?>
												<?php if ($alias === $selectedLanguage) continue; ?>
												<?php $pass = $this->request->getParam('pass') ?>
												<li>
													<?= $this->Html->link($alias, [
															'language' => $lang,
															'controller' => $this->request->getParam('controller'),
															'action' => $this->request->getParam('action'),
															isset($pass[0]) ? $pass[0] : null
														]) ?>
												</li>
											<?php endforeach; ?>
										</ul>
									</div>
								</div>
							</div>
                            <div class="panel">
                                <div class="panel-heading p0">
                                    <h4 class="panel-title title-responsivo-menu bg-white">
                                        <?=
                                            $this->Html->link(
                                                $this->Html->image('https://cakefest.org/cakefest/img/cakefest-logo.svg', ['width' => 93]),
                                                'https://cakefest.org/tickets',
                                                ['escape' => false, 'class' => 'new-tag', 'target' => '_blank', 'style' => "background-color: white;", 'aria-label' => 'cakefest']
                                            );?>
                                    </h4>
                                </div>
                            </div>

                            <div class="panel">
								<div class="panel-heading p0">
									<h4 class="panel-title title-responsivo-menu donate-background">
										<?= $this->Html->link(
											__('DONATE'),
											'https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=WXKS8CBVMNFZC',
											['escape' => false]
										) ?>
									</h4>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
