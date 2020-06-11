<?php
use Cake\Core\Configure;
use Cake\Error\Debugger;

$this->layout = 'error';

if (Configure::read('debug')) :
    $this->layout = 'dev_error';

    $this->assign('title', $message);
    $this->assign('templateName', 'error500.ctp');

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
    <?php if ($error instanceof Error) : ?>
    <strong>Error in: </strong>
        <?= sprintf('%s, line %s', str_replace(ROOT, 'ROOT', $error->getFile()), $error->getLine()) ?>
    <?php endif; ?>
    <?php
    echo $this->element('auto_table_warning');

    if (extension_loaded('xdebug')) :
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
                    <span class="glyph_range">h</span>
                </div>
                <h3 class="title-2 c-cake"><?= __('ERROR!')?></h3>
                <p><?= __('An Internal Error Has Occurred.')?></p>
            </div>
        </div>
    </div>
</section>
