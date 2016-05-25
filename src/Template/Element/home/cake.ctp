<?php
	$title = 'CakePHP - Build fast, grow solid | PHP Framework | Home';
	$description = 'CakePHP is an open-source web, rapid development framework that makes building web applications simpler, faster and require less code. It follows the model–view–controller (MVC) . Manual for beginners now available and links towards the last version.';
	$this->assign('title', __($title));
	$this->assign('meta', $this->Html->meta('description', __($description)));
	$this->assign('socialMeta', $this->Meta->socialTags(['title' => __($title), 'description' => __($description)]));
?>
<section class="hero">
    <div class="container-fluid text-center">
        <div class="col-sm-12">
            <div class="title-home">
                <h1><?= __('New CakePHP 3.2 Red Velvet.')?></h1>
                <h3><?= __('Faster. Stronger. Tastier.')?></h3>
            </div>
        </div>
    </div>
</section>