<?php
use Cake\Core\Configure;

$logos = Configure::read('Sites.Logos');
$html = '';
$i = 1;
foreach ($logos as $logo):
    $width = isset($logo['width']) ? 'width: ' . $logo['width'] . 'px' : '';
    $html .= $this->Html->image($logo['image'][0], [
        'url' => $logo['url'],
        'alt' => $logo['name'],
        'onmouseover' => 'this.src=\'' . $logo['image'][1] . '\';',
        'onmouseout' => 'this.src=\'' . $logo['image'][0] . '\';',
        'style' => $width . '; margin-right: 22px; margin-bottom: 20px;',
        'target' => '_blank',
    ]);
    if ($i === 12) continue;
    $breakpoints = ['visible-xs-block'];
    if ($i % 3 === 0) $breakpoints[] = 'visible-sm-block';
    if ($i % 4 === 0) $breakpoints[] = 'visible-md-block';
    if ($i % 6 === 0) $breakpoints[] = 'visible-lg-block';
    $html .= $this->Html->tag('br', null, ['class' => $breakpoints]);
    $i++;
endforeach;
?>

<div class="container-fluid text-center" style="margin-top: 50px;">
    <?= $html ?>
</div>
