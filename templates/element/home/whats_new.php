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
                <h2><?= __("What's new in 5.2") ?></h2>
                <p><?= __("The migration guide has a complete list of {0}. We recommend you give that page a read when upgrading. A few highlights from 5.2 are:",
                    $this->Html->link(__("what's new in 5.2"), 'https://book.cakephp.org/5/en/appendices/5-2-migration-guide.html')
                    ) ?>
                </p>
                <ul>
                    <li><?= __('New "counter_cache" command') ?></li>
                    <li><?= __('New "nativeuuid" database type') ?></li>
                    <li><?= __('Error handling customization using methods in "ErrorController"') ?></li>
                    <li><?= __('Helper method for generation importmap for JavaScript files') ?></li>
                    <li><?= __('Support for PHPUnit 12') ?></li>
                </ul>
                <div>
                    <a href="https://book.cakephp.org/5/en/appendices/5-2-migration-guide.html" class="btn btn-home">Learn more</a>
                </div>
            </div>
        </div>
    </div>
</section>
