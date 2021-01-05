<?php

use Cake\Core\Configure;
use Cake\Utility\Hash;

$quotes = Configure::read('Site.quotes');
?>
<div id="quotes-dots-container"></div>
<div class="owl-carousel owl-quotes owl-p10" id="quote">
    <?php foreach ($quotes as $quote) : ?>
        <div class="quote-block">
            <?= $this->Html->tag('blockquote', __($quote['text'])) ?>
            <div class="quote-client">
                <?= $this->Html->image($quote['image']) ?>
                <div class="quote-info">
                    <?= $this->Html->tag('h5', $quote['client']) ?>
                    <?= $this->Html->tag(
                        'h6',
                        !empty($quote['url']) ? $this->Html->link($quote['company'], $quote['url']) : $quote['company']
                    ) ?>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
