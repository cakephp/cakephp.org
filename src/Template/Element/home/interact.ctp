<div class="columns four tab-image center-align">
<?php
echo $this->Html->image('interact.png', array(
    'alt' => 'Interact',
));
?>
</div>
<div class="columns eight">
    <h3><?php echo __('Mailing List') ?></h3>
    <p>
        <?php echo __(
            'Got a question, or need some help? Post on the %s',
            $this->Html->link(__('Google group'), 'http://groups.google.com/group/cake-php')
        ); ?>
    </p>
    <?php
        echo $this->element('channel', array(
            'site' => 'GoogleGroup',
            'title' => __('Latest posts on the google group'),
            'count' => 2,
            'cache' => array('key' => 'cache_google_group', 'time' => '+20 minutes')
        ));
    ?>

    <h3><?php echo __('IRC') ?></h3>
    <p>
        <?php echo __(
            'Stop by %s on %s and chat with other bakers.',
            $this->Html->link(__('#cakephp'), __('irc://irc.freenode.net/cakephp')),
            $this->Html->link(__('freenode.net'), __('http://freenode.net'))
        ) ?>
    </p>

    <h3><?php echo __('Screencasts and Tutorials'); ?></h3>
    <p>
        <?php echo __(
            'View talks from previous CakeFests, screencasts and tutorials on %s',
            $this->Html->link('tv.cakephp.org', 'http://tv.cakephp.org')
        ) ?>
    </p>
</div>
