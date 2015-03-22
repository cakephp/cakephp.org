<?php
// if (isset($feed['rss']['channel']['item'])) {
//     $items = $feed['rss']['channel']['item'];
//     for ($i = 0; $i < 3; $i++) {
//         echo $this->element('news/item', array('article' => $items[$i]));
//     }
//     echo $this->Html->link(__('more news'), array('controller' => 'news', 'action' => 'index'));
// } else {
//     echo '<p class="error">' . __('Could not fetch news') . '</p>';
// }
?>
<h1>News and Releases</h1>

<?php $i = 1; foreach ($articles as $article): ?>
    <div class="one-news col-lg-12">
        <?php /*<div class="news-left pull-left col-lg-5 col-md-5 col-xs-5">*/ ?>
        <div class="news-left pull-left col-lg-3 col-md-3 col-xs-3">
            <?php if ($i === 1): ?>
                <?= $this->Html->image('default/news-image.png') ?>
            <?php else: ?>
                &nbsp;
            <?php endif; ?>
        </div>
        <?php /*<div class="news-right pull-right col-lg-7 col-md-7 col-xs-7">*/ ?>
        <div class="news-right pull-right col-lg-9 col-md-9 col-xs-9">
            <h3><?= $article['name'] ?></h3>
            <span>published on <?= $article['date'] ?></span>

            <?= $article['body'] ?>
            <?= $this->Html->link('Read more', $article['link']) ?>

            <?php /*
            <?php if ($i === 3): ?>
                <div class="button-holder">
                    <div class="polygon-button-shadow"></div>
                    <?= $this->Html->link('More news', '', ['class' => 'polygon-button']) ?>
                </div>
            <?php endif; ?>
            */ ?>
        </div>
    </div>
<?php $i++; $image = '&nbsp'; endforeach; ?>


