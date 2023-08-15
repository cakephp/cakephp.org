<?php
use Cake\Core\Configure;
use Cake\Error\Debugger;

$this->layout = 'error';

if (Configure::read('debug')):
	$this->layout = 'dev_error';

	$this->assign('title', $message);
	$this->assign('templateName', 'error400.ctp');

	$this->start('file');
	?>
	<?php if (!empty($error->queryString)) : ?>
	<p class="notice">
		<strong>SQL Query: </strong>
		<?= h($error->queryString) ?>
	</p>
<?php endif; ?>
	<?php if (!empty($error->params)) : ?>
	<strong>SQL Query Params: </strong>
	<?= Debugger::dump($error->params) ?>
<?php endif; ?>
	<?= $this->element('auto_table_warning') ?>
	<?php
	if (extension_loaded('xdebug')):
		xdebug_print_function_stack();
	endif;

	$this->end();
endif;
?>

<?php $this->layout = 'default'; ?>

<section class="notfound-padd">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 text-center p-cake">
				<div class="icon-error">
					<span class="glyph_range">f</span>
				</div>
				<h3 class="title-2 c-cake"><?= __('Sorry, There’s no Cake Here...')?></h3>
				<p><?= __('Unfortunately the page you were looking for could not be found. It may be temporarily unavailable, moved or no longer exist. Check the URL you entered for any mistakes and try again. Alternatively, you could take a look around the rest of our site.')?></p>
			</div>
		</div>
	</div>
</section>
