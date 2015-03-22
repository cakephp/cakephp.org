<div id="features" class="tab-container error404">
<div style="overflow: visible; display: block; left: 0px;" class="panels">
<div id="read" class="panel">
    <h2><?php echo __('Page not found'); ?></h2>
    <?php echo $this->Html->image('read.png', array('class' => 'image png'))?>
    <h4><?php echo __('We couldn\'t find the page you requested.'); ?></h4>
    <br/>
    <p><?php echo sprintf(
        __('Don\'t fret, head back to the %s!'),
        $this->Html->link(
            __('CakePHP Homepage'),
            array('controller' => 'pages', 'action' => 'display', 'home'))
        ); ?></p>
</div>
</div>
</div>