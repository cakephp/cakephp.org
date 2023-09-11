<?php
/**
 * @var \App\View\AppView $this
 */
?>
<section class="whats-new">
    <div class="container">
        <div class="mb50 mt50 image visible-md-block visible-lg-block artwork">
            <?= $this->Html->image('whats_new_chiffon.svg', ['alt' => 'Whats new']) ?>
        </div>
        <div class="description">
            <div class="mb50 mt50">
                <h2><?= __("What's new in version") ?></h2>
                <p><?= __("The migration guide has a complete list of what's new in. We recommend you give that page a read when upgrading. A few highlights from 5.0 are:") ?>
                <ul>
                    <li><?= __('PHP 8.1 required.') ?></li>
                    <li><?= __('Improved typehints across the framework. CakePHP now leverages union types to formalize the types of many parameters across the framework.') ?></li>
                    <li><?= __('Upgraded to PHPUnit 10.x') ?></li>
                    <li><?= __('New enum type mapping support in the ORM enabling more expressive model layers with improved type checking.') ?></li>
                    <li><?= __('Table finders with named parameters, providing more expressive query building APIs.') ?></li>
                    <li><?= __('Added time-only Time type and greatly improved Date and DateTime support via chronos 3.x.') ?></li>
                    <li><?= __('Support for PSR17 HTTP factories was added.') ?></li>
                </ul>
                <p>
                    <?= __('While CakePHP 5 contains a number of breaking changes we have prepared an exhaustive migration guide
                    covering all the deprecated and removed features as well as highlighting the shiny new features.') ?>
                </p>
                <div>
                    <a href="https://book.cakephp.org/5/en/appendices/5-0-migration-guide.html" class="btn btn-home">Learn more</a>
                </div>
            </div>
        </div>
    </div>
</section>
