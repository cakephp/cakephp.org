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
                <h2><?= __("What's new in 5.4") ?></h2>
                <p><?= __("The migration guide has a complete list of {0}. We recommend you give that page a read when upgrading. A few highlights from 5.4 are:",
                    $this->Html->link(__("what's new in 5.4"), 'https://book.cakephp.org/5.x/appendices/5-4-migration-guide.html')
                    ) ?>
                </p>
                <ul>
                    <li><?= __('New "Lock" facade for distributed locking with Redis, Memcached and file engines') ?></li>
                    <li><?= __('New "#[RequestToDto]" attribute for mapping request data to DTOs') ?></li>
                    <li><?= __('"hasMany" and "belongsToMany" now eager load with a subquery by default.') ?></li>
                    <li><?= __('New built-in DI container, as an alternative to "league/container"') ?></li>
                    <li><?= __('New "Table::unhydratedFind()" for type-safe array results.') ?></li>
                    <li><?= __('New "JsonStreamResponse" for streaming large JSON datasets') ?></li>
                    <li><?= __('Added "Connection::afterCommit()" and a "Connection.afterCommit" event to run code once the outermost transaction commits.') ?></li>
                    <li><?= __('Added "notBetween()" and "inOrNull()" to the query builder.') ?></li>
                </ul>
                <div>
                    <a href="https://book.cakephp.org/5.x/appendices/5-4-migration-guide.html" class="btn btn-home">Learn more</a>
                </div>
            </div>
        </div>
    </div>
</section>
