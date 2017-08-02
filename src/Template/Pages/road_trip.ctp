<?php
/**
 * @var \App\View\AppView $this
 */

$this->assign('title', 'CakePHP is coming to your town!');
?>
<section class="clearfix">
    <div class="container-fluid">
        <div class="row roadtrip-hero">
            <?= $this->Html->image('roadtrip-hero.svg') ?>
        </div>
    </div>
</section>
<section>
    <div class="container roadtrip-body">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <h1>CakePHP is coming to your town!</h1>
                <p>Cake Road Trip is an opportunity for members of CakePHP core team come visit you at a local PHP meetup! The Team is keen to meet community members from around the world, bringing Cake Road Trip to you! Keen to have us come visit your meetup? Well, this is the opportunity to let us know! We are trying our best to come to as many locations as possible.</p>
            </div>
        </div>
        <?php /*
        <div class="row">
            <div class="col-md-6 col-md-offset-3 road-hosts">

                <img class="plaque1svg" src="img/plaque1.svg">

                <h2>What other hosts are saying</h2>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nos.</p>

                <img class="road-cloud1" src="img/cloud1.svg">
                <img class="road-cloud2" src="img/cloud2.svg">
            </div>
        </div>
        <div class="row">
            <div class="col-md-5 col-md-offset-1">
                <div class="road-quote">
                    <div class="road-quote-photo">
                        <img src="img/placeholder001.jpg">
                    </div>
                    <p>“Lorem ipsum dolor sit ame t, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nos.”</p>
                    <p><span>- Influential Dude</span></p>
                </div>
            </div>
            <div class="col-md-5">
                <div class="road-quote">
                    <div class="road-quote-photo">
                        <img src="img/placeholder002.jpg">
                    </div>
                    <p>“Lorem ipsum dolor sit ame t, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nos.”</p>
                    <p><span>- Another Influential Developer</span></p>
                </div>
            </div>
        </div>
 */ ?>
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <?= $this->Html->image('plaque2.svg', ['class' => 'plaque2svg']) ?>
                <h2>We’re just waiting for your invitation</h2>
                <p>If you have a PHP or CakePHP meetup group and are excited to have us come visit, let us know soon! We will go to as many places as we can fit into our Cake Road Trip. And will be asking the community to vote for the top places to visit!</p>
            </div>
        </div>
        <?php if (!$flash = $this->Flash->render('contact')): ?>
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <?= $this->Form->create(null, ['url' => ['controller' => 'Contacts', 'action' => 'roadTrip'], 'class' => 'road-form']) ?>
                        <?= $this->Form->input('name', ['label' => __('Name {0}', $this->Html->tag('span', __('(Required)'))), 'escape' => false, 'class' => 'form-control']) ?>
                        <?= $this->Form->input('email', ['label' => __('Email {0}', $this->Html->tag('span', __('(Required)'))), 'escape' => false, 'class' => 'form-control']) ?>
                        <?= $this->Form->input('where', ['label' => __('Tell us where would you’d like us to go next {0}', $this->Html->tag('span', __('(Required)'))), 'escape' => false, 'class' => 'form-control']) ?>
                        <?= $this->Form->button(__('Notify me!')) ?>
                    <?= $this->Form->end() ?>
                </div>
            </div>
        <?php else: ?>
            <?= $flash ?>
        <?php endif; ?>
        <?php /*
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h2>News from the road</h2>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nos.</p>

                <p class="pt-30"><strong>Select an edition:</strong></p>

                <div class="roadtrip-select">
                    <select>
                        <option value="volvo">01.02.2018 Nashville Edition</option>
                        <option value="saab">02.02.2018 Nashville Edition</option>
                        <option value="mercedes">03.02.2018 Nashville Edition</option>
                        <option value="audi">04.02.2018 Nashville Edition</option>
                    </select>
                </div>

                <div class="roadtrip-update">
                    <p><strong>01.02.2018</strong></p>
                    <h3>Nashville Edition</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
                    <p>Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                    <img src="img/placeholder003.jpg">
                </div>

            </div>
        </div>
 */?>
    </div>
    <div class="roadtrip-bottom">
        <?= $this->Html->image('roadtrip-footer-img.svg') ?>
    </div>
</section>
