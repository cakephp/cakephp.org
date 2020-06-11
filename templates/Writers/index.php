<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Writer $writer
 */
use Cake\Core\Configure;

$this->assign('title', __('CakePHP - Build fast, grow solid | PHP Framework | Become a Tech Writer'));
$this->append('meta', $this->Html->meta('description', __('CakePHP is always on the look-out for basic/simple tutorials, from set-up all the way to more advanced topics - all with the goal to make CakePHP more accessible!')));
$this->append('meta', $this->Html->meta('keywords', __('CakePHP, CakePHP Framework, CakePHP Tech writer')));

$flash = $this->Flash->render()
?>
<section>
    <div class="container-fluid">
        <div class="row writers-hero">
            <div class="col-md-10 col-md-offset-1">
                <?php if (!$flash) :?>
                    <h1><?= $this->Html->image('writers-hero.svg', ['alt' => __('GET PAID TO WRITE ABOUT CAKEPHP')]) ?></h1>
                    <h2><?= __('In-depth tutorials, simple tutorials and more.') ?></h2>
                    <p><?= __('Sponsored by:') ?><?= $this->Html->image('writers-cakedc-logo.svg', ['url' => 'http://www.cakedc.com/']) ?></p>
                <?php else :?>
                    <?= $flash?>
                <?php endif;?>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container writers-body">
        <div class="row">
            <div class="col-md-12">
                <h2><?= __('CakePHP wants to publish <br />your tech tutorial!') ?></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5 col-md-offset-2">
                <p><?= __('Are you a keen CakePHP community member and have an insatiable talent for explaining concepts, constructs and the intricacies of the CakePHP framework?') ?></p>
                <p><?= __('Our community is always on the look-out for basic/simple tutorials, from set-up all the way to more advanced topics - all with the goal to make CakePHP more accessible!') ?></p>
                <p><?= __('Are you perhaps a tad intrigued? - you don’t need to be a technical writer, you just need to know your CakePHP stuff -and, of course, be able to explain it! We will work with you  on the final editing and article completion.') ?></p>
                <p><?= __('And on top of becoming known as one of our tutorial writers within the CakePHP Community - as a bonus, CakeDC is sponsoring you to write! <strong>Earn up to $50 per article!</strong>') ?></p>
            </div>
            <div class="col-md-2">
                <div class="up-to">
                    <h3><?= __('Make') ?></h3>
                    <h3><?= __('up to') ?></h3>
                    <h3><span>$</span>50</h3>
                    <?= $this->Html->image('bill.svg') ?>
                </div>
            </div>
        </div>
        <div class="row writers-count">
            <h3><?= __('Unsure if you fit the bill?<br>We are looking for the following:') ?></h3>
            <div class="col-md-2 col-md-offset-2">
                <?= $this->Html->image('writers-count-1.svg') ?>
                <p><?= __('Technical<br>expertise and<br>best practices') ?></p>
            </div>
            <div class="col-md-2">
                <?= $this->Html->image('writers-count-2.svg') ?>
                <p><?= __('Correct and<br>comprehensive<br>commands') ?></p>
            </div>
            <div class="col-md-2">
                <?= $this->Html->image('writers-count-3.svg') ?>
                <p><?= __('Clear and concise<br>explanations') ?></p>
            </div>
            <div class="col-md-2">
                <?= $this->Html->image('writers-count-4.svg') ?>
                <p><?= __('Friendly and<br>informative<br>writing style') ?></p>
            </div>
        </div>
        <?php if (Configure::read('Site.writers_form_enabled')) : ?>
            <?php if (!$flash || strpos($flash, 'alert-success') === false) : ?>
                <?= $this->Form->create($writer) ?>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 writers-form">
                            <h3><?= __('Author Details') ?></h3>
                            <?= $this->Form->control('name', ['label' => ['text' => '<strong>' . __('Name') . '</strong> ' . __('(Required)'), 'escape' => false], 'class' => 'form-control']) ?>
                            <?= $this->Form->control('email', ['label' => ['text' => '<strong>' . __('Email') . '</strong> ' . __('(Required)'), 'escape' => false], 'class' => 'form-control']) ?>
                            <?= $this->Form->control('username', ['label' => ['text' => '<strong>' . __('MyCakePHP Community username') . '</strong> ' . __('(Optional)'), 'escape' => false], 'class' => 'form-control']) ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 writers-form">
                            <h3><?= __('Submit a writing sample to see if you qualify!') ?></h3>
                            <div class="form-group">
                                <label for="">
                                    <strong><?= __('Proposed article titles') ?></strong> <?= __('(Required)') ?><br><br>
                                    <?= __('Please submit 1-3 proposed article titles of topics that you would be comfortable covering and are interested in writing about. Topics should be related to CakePHP, and fall within the framework specific elements (such as Cake Bake).') ?>
                                </label>
                                <?= $this->Form->textarea('article_titles', ['rows' => 5, 'class' => 'form-control', 'id' => 'article_titles']) ?>
                                <p><small><?= __('Only original content can be considered, Unfortunately content already posted elsewhere cannot be used.') ?></small></p>
                            </div>
                            <div class="form-group">
                                <label for="writing_sample">
                                    <strong><?= __('Writing sample') ?></strong> <?= __('(Required)') ?><br><br>
                                    <?= __('This is where you share your writing sample with us - a short introduction as well as the first two steps to your tutorial. At this time, we are only accepting English tutorials.') ?>
                                </label>
                                <?= $this->Form->textarea('writing_sample', ['rows' => 5, 'class' => 'form-control', 'id' => 'writing_sample']) ?>
                            </div>
                            <div class="form-group">
                                <label for="extra_information">
                                    <strong><?= __('Extra information') ?></strong><br><br>
                                    <?= __('Do you have your own blog? Let us know! - also, share with us your GIthub, StackOverflow or Twitter handles, we would love to get to know you better before assessing your application!') ?>
                                </label>
                                <?= $this->Form->textarea('extra_information', ['rows' => 5, 'class' => 'form-control', 'id' => 'extra_information']) ?>
                            </div>
                            <div class="form-group">
                                <div class="g-recaptcha" data-sitekey="<?= Configure::read('ReCaptcha.site_key') ?>"></div>
                                <?php $this->Html->script('https://www.google.com/recaptcha/api.js', ['block' => true]); ?>
                                <?php $this->Form->unlockField('g-recaptcha-response'); ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <?= $this->Form->button(__('Submit!'), ['type' => 'submit', 'class' => 'writers-btn']) ?>
                            </div>
                        </div>
                </div>
                <?= $this->Form->end() ?>
            <?php endif; ?>
        <?php else : ?>
            <div class="row">
                <!-- Begin MailChimp Signup Form -->
                <link href="//cdn-images.mailchimp.com/embedcode/slim-10_7.css" rel="stylesheet" type="text/css">
                <div class="col-md-8 col-md-offset-2 writers-form">
                    <form action="//cakedc.us9.list-manage.com/subscribe/post?u=f380de581acd576e7d802552a&amp;id=cd597ea86c" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                        <p><strong><?= __('Thanks for sending us so many writing samples!') ?></strong></p>
                        <p><?= __('This form has been temporarily disabled while we review the backlog of submissions. <br>Please check back soon!') ?></p>
                        <div class="form-group">
                            <input type="email" value="" name="EMAIL" class="form-control email" id="mce-EMAIL" placeholder="Enter your Email." required>
                        </div>
                        <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_f380de581acd576e7d802552a_cd597ea86c" tabindex="-1" value=""></div>
                        <button class="writers-btn" type="submit" name="subscribe" id="mc-embedded-subscribe"><?= __('Notify me!') ?></button>
                    </form>
                </div>
                <!--End mc_embed_signup-->
            </div>
        <?php endif; ?>
        <div class="row">
            <div class="col-md-8 col-md-offset-2 writers-pay">
                <h3><?= __('Get paid with PayPal') ?></h3>
                <div class="row">
                    <div class="col-md-4 col-md-offset-2">
                        <div class="pay-box">
                            <div class="pay-box-top">
                                <h4><?= __('IN-DEPTH<br>TUTORIALS') ?></h4>
                            </div>
                            <div class="pay-box-bottom pd-1">
                                <p><?= __('1,500+ Words') ?><br><span><?= __('$50') ?></span></p>
                                <?= $this->Html->image('writers-pay-1.svg') ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="pay-box">
                            <div class="pay-box-top">
                                <h4><?= __('SIMPLE<br>TUTORIALS') ?></h4>
                            </div>
                            <div class="pay-box-bottom pd-2">
                                <p><?= __('800+ Words') ?><br><span><?= __('$25') ?></span></p>
                                <?= $this->Html->image('writers-pay-2.svg') ?>
                            </div>
                        </div>
                    </div>
                </div>
                <p><?= __('Most tutorials are paid out at $50. Short tutorials with only a few commands or a few paragraphs of explanation are paid out at $25.') ?></p>
            </div>
        </div>
</section>
