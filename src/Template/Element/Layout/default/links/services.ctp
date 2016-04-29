<h4>Services</h4>
<?= $this->Html->link('Certification', ['controller' => 'Pages', 'action' => 'display', 'services', '#' => 'certification']) ?>
<?= $this->Html->link('Consultation', ['controller' => 'Pages', 'action' => 'display', 'services', '#' => 'consultation']) ?>
<?= $this->Html->link('Support', ['controller' => 'Pages', 'action' => 'display', 'services', '#' => 'support']) ?>
<?= $this->Html->link('Training', ['controller' => 'Pages', 'action' => 'display', 'services', '#' => 'training']) ?>
<?= $this->Html->link('Development', 'http://www.cakedc.com/') ?>
<h4 style="margin-top: 2em">Languages</h4>
<?= $this->Html->link('English', ['_host' => 'cakephp.org'] + $this->passedArgs) ?>
<?= $this->Html->link('Japanese', ['_host' => 'cakephp.jp'] + $this->passedArgs) ?>
