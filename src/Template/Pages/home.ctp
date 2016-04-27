<?php
use Cake\Core\Configure;

$this->assign('title', __("CakePHP v{0} - the rapid development php framework.", [$_version]));
$sites = Configure::read('Sites.JustBaked');
?>
    <div class="hero">
        <div class="container-fluid text-center main-head">
            <?= $this->Html->image("default/hero-$_version.png") ?>

            <div class="clearfix"></div>
            <div class="button-holder">
                <div class="polygon-button-shadow"></div>
                <?= $this->Html->link(
                    "Download v$_version",
                    'http://book.cakephp.org/3.0/en/installation.html',
                    ['class' => 'polygon-button']
                ) ?>
            </div>
            <?= $this->element('Layout/default/links/main') ?>
        </div>
    </div>

    <div class="main">
        <div class="container-fluid text-center">
            <h1><?= __('Benefits') ?></h1>

            <div class="col-lg-4 col-md-4">
                <?= $this->Html->image('default/icon-1.png') ?>

                <h3><?= __('Build Quickly') ?></h3>

                <p><?= __('Use code generation and scaffolding features to rapidly build prototypes.') ?></p>
            </div>
            <div class="col-lg-4 col-md-4">
                <?= $this->Html->image('default/icon-2.png') ?>

                <h3><?= __('No Configuration') ?></h3>

                <p><?= __('No complicated XML or YAML files. Just setup your database and you\'re ready to bake.') ?></p>
            </div>
            <div class="col-lg-4 col-md-4">
                <?= $this->Html->image('default/icon-3.png') ?>

                <h3><?= __('Friendly License') ?></h3>

                <p><?= __('CakePHP is licensed under the MIT license which makes it perfect for use in commercial applications.') ?></p>
            </div>
            <div class="clearfix"></div>
            <div class="col-lg-4 col-md-4">
                <?= $this->Html->image('default/icon-4.png') ?>

                <h3><?= __('Batteries Included') ?></h3>

                <p><?= __('The things you need are built-in. Translations, database access, caching, validation, authentication, and much more are all built into one of the original PHP MVC frameworks.') ?></p>
            </div>
            <div class="col-lg-4 col-md-4">
                <?= $this->Html->image('default/icon-5.png') ?>

                <h3><?= __('Clean MVC Conventions') ?></h3>

                <p><?= __('Instead of having to plan where things go, CakePHP comes with a set of conventions to guide you in developing your application.') ?></p>
            </div>
            <div class="col-lg-4 col-md-4">
                <?= $this->Html->image('default/icon-6.png') ?>

                <h3><?= __('Secure') ?></h3>

                <p><?= __('CakePHP comes with built-in tools for input validation, CSRF protection, Form tampering protection, SQL injection prevention, and XSS prevention, helping you keep your application safe & secure.') ?></p>
            </div>
        </div>
        <?php /*
        <div class="red narrowbox">
            <h1>Example Recipe</h1>

            <div class="code-holder">
                <ul id="codeSlider">
                    <li>
                <div class="code-holder-shadow"></div>
                <div class="code-holder-div">
                    <pre>    &lt;?php
class RecipesController extends Controller
{
    public function cake()
    {
        $ingredients = TableRegistry::get('Ingredients');

        $cake = $ingredients-&gt;select(['name'])
            -&gt;find('yummy')
            -&gt;find('healthy');
        $topping = $ingredients-&gt;select(['name'])
            -&gt;where(['has_cherry' => true])
            -&gt;first();

        $this-&gt;set(compact('cake', 'topping'));
    }
}</pre>
                </div>
                <div class="code-explanation">
                    <p>Lorem ipsum dolor sit amet, me qui ipsum dolor sit amet, me qui ipsum dolor sit amet, me qui ipsum dolor sit amet, me qui ipsum dolor sit amet, me qui </p>
                    <p>Lorem ipsum dolor sit amet, me qui ipsum dolor sit amet, me qui ipsum dolor sit amet, me qui ipsum dolor sit amet, me qui ipsum dolor sit amet, me qui </p>
                    <p>Lorem ipsum dolor sit amet, me qui ipsum dolor sit amet, me qui ipsum dolor sit amet, me qui ipsum dolor sit amet, me qui ipsum dolor sit amet, me qui </p>
                    <p>Lorem ipsum dolor sit amet, me qui ipsum dolor sit amet, me qui ipsum dolor sit amet, me qui ipsum dolor sit amet, me qui ipsum dolor sit amet, me qui </p>
                </div>
                </li>



                    <li>
                <div class="code-holder-shadow"></div>
                <div class="code-holder-div">
                    <pre></pre>
                </div>
                  <div class="code-explanation">
                    <p>Lorem ipsum dolor sit amet, me qui ipsum dolor sit amet, me qui ipsum dolor sit amet, me qui ipsum dolor sit amet, me qui ipsum dolor sit amet, me qui </p>
                    <p>Lorem ipsum dolor sit amet, me qui ipsum dolor sit amet, me qui ipsum dolor sit amet, me qui ipsum dolor sit amet, me qui ipsum dolor sit amet, me qui </p>
                </div>
                </li>
                </ul>
            </div>
        </div>
        <div class="container-fluid">
        */ ?>
        <div class="container-fluid <?php // beyond this comment added for quick launch ?> gray narrowbox" style="text-align: left">

            <div class="col-lg-6 col-md-6 <?php //border-right ?> <?php // beyond this comment added for quick launch ?> col-lg-offset-3 col-md-offset-3">
                <?= $this->cell('News::recent', [], ['cache' => true]) ?>
            </div>

        <?php /*
            <div class="col-lg-6 col-md-6 border-right">
                <?= $this->cell('News::recent', [], ['cache' => true]) ?>
            </div>
            <div class="visible-sm visible-xs clearfix"></div>
            <div class="col-lg-6 col-md-6 books">
                <h1>Books</h1>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="col-lg-4 col-lg-push-1 col-md-push-1 col-sm-push-1 col-xs-push-1 col-md-4 col-sm-4 col-xs-4">
                        <div class="book-cover">
                            <div class="polygon-button-shadow"></div>
                            <a href="#" class="polygon-button"></a>
                        </div>
                        <h3>Book title</h3>
                    </div>
                    <div class="col-lg-4 col-lg-push-1 col-md-push-1 col-sm-push-1 col-xs-push-1 col-md-4 col-sm-4 col-xs-4">
                        <div class="book-cover">
                            <div class="polygon-button-shadow"></div>
                            <a href="#" class="polygon-button"></a>
                        </div>
                        <h3>Book title</h3>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="col-lg-4 col-lg-push-1 col-md-push-1 col-sm-push-1 col-xs-push-1 col-md-4 col-sm-4 col-xs-4">
                        <div class="book-cover">
                            <div class="polygon-button-shadow"></div>
                            <a href="#" class="polygon-button"></a>
                        </div>
                        <h3>Book title</h3>
                    </div>
                    <div class="col-lg-4 col-lg-push-1 col-md-push-1 col-sm-push-1 col-xs-push-1 col-md-4 col-sm-4 col-xs-4">
                        <div class="book-cover">
                            <div class="polygon-button-shadow"></div>
                            <a href="#" class="polygon-button"></a>
                        </div>
                        <h3>Book title</h3>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="col-lg-4 col-lg-push-3 col-md-push-3 col-sm-push-3 col-xs-push-3 col-md-4 col-sm-4 col-xs-4">
                        <div class="button-holder">
                            <div class="polygon-button-shadow"></div>
                            <a href="#" class="polygon-button">More Books</a>
                        </div>
                    </div>

                </div>
            </div>
            */ ?>
        </div>

        <?php /*
        <div class="gray narrowbox">

            <h1>It is Simple as CakePHP</h1>

            <div id="anything">
                <div class="code-holder">
                    <div class="code-holder-shadow"></div>
                    <div class="code-holder-div">
                        <iframe src="//player.vimeo.com/video/120562699" width="500" height="281" frameborder="0"
                                webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>
                </div>
                <div class="code-holder">
                    <div class="code-holder-shadow"></div>
                    <div class="code-holder-div">
                        <iframe src="//player.vimeo.com/video/68322131" width="500" height="281" frameborder="0"
                                webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <div class="button-holder">
                <div class="polygon-button-shadow"></div>
                <a href="#" class="polygon-button">More Videos</a>
            </div>
        </div>
        */ ?>

        <div class="narrowbox last special">
            <h1><?= __('Companies using CakePHP') ?></h1>

            <div class="relative">
                <div id="owl" style="padding-left: 10%; width: 90%">
                    <?php foreach ($sites as $site): ?>
                    <div class="item">
                        <a href="<?= $site['url'] ?>" target="_blank">
                            <div class="code-holder">
                                <div class="code-holder-shadow"></div>
                                <div class="code-holder-div" style="background: url('/img/featured-sites/<?= $site['image'] ?>'); ">
                                </div>
                            </div>
                            <h3><?= $site['name'] ?></h3>
                        </a>
                    </div>
                    <?php endforeach; ?>
                </div>
                <div class="owl-prev"></div>
                <div class="owl-next"></div>
            </div>

            <div class="clearfix"></div>

            <?= $this->element('Layout/default/logos') ?>
        </div>
    </div>
