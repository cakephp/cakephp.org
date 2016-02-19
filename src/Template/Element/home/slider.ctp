<?php
use Cake\Core\Configure;
?>
<div class="slider">
    <ul id="carousel" class="photo-carousel">
    <?php
    $sites = Configure::read('Sites.JustBaked');
    shuffle($sites);
    ?>
    <?php foreach ($sites as $site): ?>
        <li>
            <span class="polaroid">
                <?php echo $this->Html->image('featured-sites/' . $site['image'], array('url' => $site['url'])) ?>
            </span>
            <?php echo $this->Html->link($site['name'], $site['url']); ?>
        </li>
    <?php endforeach; ?>

    </ul>
</div>
