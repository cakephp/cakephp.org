<?php if (new \DateTime() <= (new \DateTime('2022-09-30 20:00:00'))):?>
<section class="hero">
    <?= $this->Html->link(
            $this->Html->image('cakefest-banner-2022.png'),
            'https://cakefest.org', 
            ['target' => '_blank', 'escape' => false]
        ); ?>
</section>
<?php endif;?>
