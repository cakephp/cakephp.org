<?= $this->Form->create($project) ?>
    <?= $this->Form->hidden('id') ?>

    <div class="well">
        <div class="row">
            <div class="col-sm-12 col-md-8 col-lg-6 projects form">
                <?php
                    echo $this->Form->input('title', ['class' => 'form-control']);
                    echo $this->Form->input('website', ['class' => 'form-control']);
                    echo $this->Form->input('is_highlighted');
                    echo $this->Form->input('is_showcase');
                ?>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-success pull-right']) ?>
        </div>
    </div>
<?= $this->Form->end() ?>
