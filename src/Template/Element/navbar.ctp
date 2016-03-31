<nav class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">CakePHP</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?= __('Documentation')?> <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><?= __('Book')?></a></li>
                        <li><a href="#"><?= __('API')?></a></li>
                        <li><a href="#"><?= __('Videos')?></a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?= __('Community')?><span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><?= __('Stackoverflow')?></a></li>
                        <li><a href="#"><?= __('Issues')?></a></li>
                        <li><a href="#"><?= __('Calendar')?></a></li>
                        <li><a href="#"><?= __('Help & Support')?></a></li>
                        <li role="separator" class="divider"></li>
                        <li class="dropdown-header"><?= __('Social')?></li>
                        <li><a href="#"><?= __('Facebook')?></a></li>
                        <li><a href="#"><?= __('Google+')?></a></li>
                        <li><a href="#"><?= __('Twitter')?></a></li>
                    </ul>
                </li>
                <li><a href="#contact"><?= __('Forum')?></a></li>
                <li><a href="#contact"><?= __('Marketplace')?></a></li>
                <li class="<?= $this->App->active('projects'); ?>">
                	<a href="#contact"><?= __('Showcase')?></a>
               	</li>
                <li><a href="#contact"><?= __('Job Board')?></a></li>
            </ul>
        </div>
    </div>
</nav>
