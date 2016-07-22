<ul class="menu">
    <li class="toggle-menu"><i class="fa icon_menu"></i></li>
    <li class="first">
        <?=
        $this->Html->link(
            $this->Html->tag('i', '', ['class' => 'fa fa-menu fa-chevron-down']) . __('Documentation'),
            '#',
            ['escape' => false]
        );
        ?>
        <ul class="submenu">
            <?= $this->App->menuItems($this->Menu->documentationItems()); ?>
        </ul>
    </li>
    <li>
        <?=
        $this->Html->link(
            __('Business Solutions'),
            ['controller' => 'pages', 'action' => 'display', 'business-solutions'],
            ['escape' => false]
        );?>
    </li>
    <li>
        <?=
        $this->Html->link(
            __('Showcase'),
            ['controller' => 'projects', 'action' => 'index'],
            ['escape' => false]
        );?>
    </li>
    <li>
        <?=
        $this->Html->link(
            $this->Html->tag('i', '', ['class' => 'fa fa-menu fa-chevron-down']) . __('Community'),
            '#',
            ['escape' => false]
        );
        ?>
		<div class="megamenu full megamenu2 full2">
            <div class="row">
				<div class="col-6 pl30">
                    <ul class="megamenu-list">
                        <li class="menu-title main-title">
                            <?= $this->Html->link(
                                $this->Html->tag('i', '', ['class' => 'fa fa-menu-title fa-users']) . __('Community'),
                                '#',
                                ['escape' => false]
                            ) ?>
                        </li>
                        <?= $this->App->menuItems($this->Menu->communityItems()); ?>
                    </ul>
                </div>
				<div class="col-6 pl50">
					<ul class="megamenu-list">
						<li class="menu-title main-title">
							<?=
							$this->Html->link(
								$this->Html->tag('i', '', ['class' => 'fa fa-menu-title fa-comments-o']) . __('Help & Support'),
								'#',
								['escape' => false]
							) ?>
						</li>
						<?= $this->App->menuItems($this->Menu->helpAndSupportItems()); ?>
					</ul>
				</div>
            </div>
        </div>
    </li>

    <?php if ($this->request->session()->check('Auth.User')) : ?>
        <li>
            <?= $this->Html->link(
                $this->Html->tag('i', '', ['class' => 'fa fa-logout']) . __('Logout'),
                ['prefix' => false, 'plugin' => 'CakeDC/Users', 'controller' => 'Users', 'action' => 'logout'],
                ['escape' => false]
            );
            ?>
        </li>
    <?php endif; ?>
</ul>

<ul class="nav navbar-nav">
	<li class="dropdown">
		<?= $this->Html->link(
			$selectedLanguage . $this->Html->tag('i', '', ['class' => 'fa fa-menu-en fa-chevron-down']),
			'#',
			[
				'class' => 'dropdown-toggle',
				'data-hover' => 'dropdown',
				'data-toggle' => 'dropdown',
				'role' => 'button',
				'aria-haspopup' => 'true',
				'aria-expanded' => 'false',
				'escape' => false
			]
		) ?>
		<ul class="dropdown-menu">
			<li></li>

			<?php foreach($availableLanguages as $lang => $alias): ?>
				<?php if ($alias === $selectedLanguage) continue; ?>
				<?php $pass = $this->request->param('pass') ?>
				<li>
					<?= $this->Html->link($alias, [
						'language' => $lang,
						'controller' => $this->request->param('controller'),
						'action' => $this->request->param('action'),
						isset($pass[0]) ? $pass[0] : null
					]) ?>
				</li>
			<?php endforeach; ?>
		</ul>
	</li>
</ul>
