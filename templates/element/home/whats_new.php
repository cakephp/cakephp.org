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
                <h2><?= __("What's new in 5.3") ?></h2>
                <p><?= __("The migration guide has a complete list of {0}. We recommend you give that page a read when upgrading. A few highlights from 5.3 are:",
                    $this->Html->link(__("what's new in 5.3"), 'https://book.cakephp.org/5.x/appendices/5-3-migration-guide.html')
                    ) ?>
                </p>
                <ul>
                    <li><?= __('New "SelectQuery::projectAs()" for projecting query results into DTO') ?></li>
                    <li><?= __('New "#[Configure]" attribute and the "TableContainer" delegate for DIC') ?></li>
                    <li><?= __('New "RateLimitMiddleware"') ?></li>
                    <li><?= __('Added Redis Cluster support to "RedisEngine"') ?></li>
                    <li><?= __('Added support for additional column types in MySQL and Postgres.') ?></li>
                    <li><?= __('Added new events for the "Cache" package.') ?></li>
                    <li><?= __('Added new fluent builders for defining the "sortableFields" data of your pagination operations.') ?>
                </ul>
                <div>
                    <a href="https://book.cakephp.org/5.x/appendices/5-3-migration-guide.html" class="btn btn-home">Learn more</a>
                </div>
            </div>
        </div>
    </div>
</section>
