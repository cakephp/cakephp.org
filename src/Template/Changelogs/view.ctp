<?php
$this->extend('/Common/secondary_sidebar');
$this->assign('title', 'Development');

$items = [];
foreach ($changes as $hash => $change):
    $url = 'http://github.com/cakephp/cakephp/commit/' . $hash;
    $link = $this->Html->link($hash, $url, ['target' => '_blank']);
    $items[] = $link . ' ' . h($change);
endforeach;
?>

<h3><?= __('Version {0}', $tag) ?></h3>
<?= $this->Html->nestedList($items, [], ['style' => 'list-style: inherit']) ?>

<?php $this->start('sidebar') ?>

    <?php
    $sidebar = [];
    $previous = null;
    foreach ($tags as $tag):
        preg_match('/^(?<series>\d+\.\d+).*/', $tag, $matches);
        if (!$previous || version_compare($previous, $matches['series'], '>')):
            $previous = $matches['series'];
            $sidebar[] = '<li class="show-me click-me">' . __('{0} series', $matches['series']) . '</li>';
        endif;
        $sidebar[] = '<li class="hide-me">' . $this->Html->link($tag, array('action' => 'view', $tag)) . '</li>';
    endforeach;
    ?>

    <h3>Changelogs</h3>
    <ul><?= implode('', $sidebar); ?></ul>

<?php $this->end() ?>
