<?php

use Cake\Core\Configure;

$title = __('CakePHP - Build fast, grow solid | Meetups');
$description = __('Online CakePHP Meetups');
$this->assign('title', $title);
$this->assign('meta', $this->Html->meta('description', $description));
$this->assign('socialMeta', $this->Meta->socialTags(['title' => $title, 'description' => $description]));
?>
<section class="dark-gray-stripe">
    <div class="container">
        <div class="row">
            <div class="col-md-12 title-calendar ">
                <?= $this->Html->tag(
    'h1',
    __(
                        'Next CakePHP {0}',
                        $this->Html->tag('strong', __('Online Meetups'))
                    )
) ?>
            </div>
        </div>
    </div>
</section>
<section class="ptb-80">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <div class="row">
                    <?= $this->Meetups->meetups() ?>
                </div>
            </div>
        </div>
    </div>
</section>
