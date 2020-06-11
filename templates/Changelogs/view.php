<?php

$title = __('CakePHP - Build fast, grow solid | Changelogs');
$description = __('CakePHP Changelogs.');
$this->assign('title', $title);
$this->assign('meta', $this->Html->meta('description', $description));
$this->assign('socialMeta', $this->Meta->socialTags(['title' => $title, 'description' => $description]));
?>

<section class="gray-stripe">
    <div class="container">
        <div class="row">
            <div class="col-md-12 title-calendar">
                <?= $this->Html->tag(
                    'h1',
                    __(
                        'CakePHP {0}',
                        $this->Html->tag('strong', __('Changelogs'))
                    )
)?>
            </div>
        </div>
    </div>
</section>
<section class="ptb-80">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-1 t-privacy">

<?php

$items = [];
foreach ($changes as $hash => $change) :
    $url = 'http://github.com/cakephp/cakephp/commit/' . $hash;
    $link = $this->Html->link($hash, $url, ['target' => '_blank']);
    $items[] = $link . ' ' . h($change);
endforeach;
?>

<h3><?= __('Version {0}', $tag) ?></h3>
<?= $this->Html->nestedList($items, [], ['style' => 'list-style: inherit']) ?>
<?= $this->Html->link(__('Back'), ['controller' => 'Changelogs', 'action' => 'index']) ?>
</div>
            <?= $this->element('changelogs'); ?>
            </div></div></section>
