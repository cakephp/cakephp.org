<div class="row">
    <div class="section">
        <div class="columns nine news">

        <h1><?php echo __('CakePHP News'); ?></h1>
        <?php $showDescription = true; ?>
        <?php foreach ($data['rss']['channel']['item'] as $article): ?>
            <?php echo $this->element('news/item', compact('article', 'showDescription')); ?>
        <?php endforeach; ?>
        </div>

    </div>
</div>
