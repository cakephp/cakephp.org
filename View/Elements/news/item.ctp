<article>
	<h4><?php echo $this->Html->link(
		$article['title'],
		$article['link']
	); ?></h4>
	<span class="published">
		<?php echo __('published on '); ?>
		<time datetime="<?php date('c', strtotime($article['pubDate'])); ?>">
			<?php echo date('Y-m-d', strtotime($article['pubDate'])); ?>
		</time>
	</span>
	<?php if (!empty($showDescription)): ?>
	<p><?php echo h(strip_tags($article['description'])); ?></p>
	<?php endif; ?>
	<?php echo $this->Html->link(__('Read more'), $article['link'], array('class' => 'read-more')); ?>
</article>
