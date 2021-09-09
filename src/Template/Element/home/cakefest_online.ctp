<?php if (new \DateTime() <= (new \DateTime('2021-10-08 20:00:00'))):?>
<section class="hero">
    <?= $this->Html->link(
            $this->Html->image('cakefest-banner-online.png'), 
            'http://cakefest.org', 
            ['target' => '_blank', 'escape' => false]
        ); ?>
</section>
<?php endif;?>
