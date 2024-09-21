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
                <h2><?= __("What's new in 5.1") ?></h2>
                <p><?= __("The migration guide has a complete list of {0}. We recommend you give that page a read when upgrading. A few highlights from 5.1 are:",
                    $this->Html->link(__("what's new in 5.1", 'https://book.cakephp.org/5/en/appendices/5-1-migration-guide.html'))
                    ) ?>
                </p>
                <ul>
                    <li><?= __('new plugin commands') ?></li>
                    <li><?= __('Components can now have dependencies injected by the container') ?></li>
                    <li><?= __('Upgraded to support PHPUnit 11.1+') ?></li>
                    <li><?= __('Improved enum validation') ?></li>
                    <li><?= __('More events, so you can observe your application more easily') ?></li>
                    <li><?= __('Geospatial type support') ?></li>
                    <li><?= __('INTERSECT operation support in Database queries') ?></li>
                </ul>
                <div>
                    <a href="https://book.cakephp.org/5/en/appendices/5-1-migration-guide.html" class="btn btn-home">Learn more</a>
                </div>
            </div>
        </div>
    </div>
</section>
