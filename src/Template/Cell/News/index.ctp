<h1>News and Releases</h1>

<?php foreach ($articles as $article): ?>
    <h3>
        <?= $this->Html->link(
            '<h3>' . $article['name'] . '</h3>',
            $article['link'],
            ['escape' => false, 'style' => 'text-transform: initial;']
        ) ?>
    </h3>
    <?= $article['body'] ?>
    <p class="bold">published on <?= $this->Time->nice($article['date']) ?></p>
    <?= $this->Html->link('Read more', $article['link']) ?>
<?php endforeach; ?>
