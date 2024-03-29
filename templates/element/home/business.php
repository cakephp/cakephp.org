<?php
/**
 * @var \App\View\AppView
 * @var \App\View\AppView $this
 */
?>
<section class="business-solution">
    <div class="container">
        <div class="mb50 mt50 description">
            <div>
                <h2><?= __('Business Solutions') ?></h2>
                <p><?= __('CakeDC, the commercial entity behind the CakePHP framework, was established by Larry Masters, the
                   founder of CakePHP. CakeDC offers CakePHP development, consultancy, CakePHP training and code review Services.
                    From startups and social networks, to e-commerce and enterprise level applications, CakeDC provides
                   the highest quality CakePHP development available.') ?>
                </p>
                <div>
                    <a href="https://www.cakedc.com" class="btn btn-home"><?= __('Learn more') ?></a>
                </div>
            </div>
        </div>
        <div class="mt50 mb50 image visible-md-block visible-lg-block artwork">
            <?= $this->Html->image('business_solution_chiffon.svg', ['alt' => 'Business Solution']) ?>
        </div>
    </div>
</section>
