<?php

use Cake\Core\Configure;

?>

<div id="getHelp" class="col-sm-12 get-social pt-100">
    <a name="get-help"></a>
    <h2><?= __('Get Help') ?><?= $this->Html->link('¶', '#getHelp', ['class' => 'headerlink', 'title' => __('Permalink to this headline')]) ?></h2>

    <p><?= __('Looking for help but don\'t know where to find it? Here are all the locations you can find community driven
    support and sources of information:') ?></p>

    <div class="col-sm-12 p0 mt30">
        <div class="col-sm-1 p0">
            <i class="fa-brands get-social-icon fa-slack"></i>
        </div>
        <div class="col-sm-11 p0">
            <p>
                <?= __('{0}: Join our CakePHP Slack Channel',
                    $this->Html->link('#Slack', Configure::read('Site.menu.items.help.slack.url'), ['target' => '_blank'])
                ) ?>
            </p>
        </div>
    </div>
    <div class="col-sm-12 p0">
        <div class="col-sm-1 p0">
            <svg style="width: 40px; margin: 5px 0 0 5px;" xmlns="http://www.w3.org/2000/svg"
                 viewBox="0 0 256 256">
                <defs>
                    <style>.a {
                            fill: #BDBDB5;
                        }</style>
                </defs>
                <title>discord-icon</title>
                <path class="a"
                      d="M184.74,204.24s-7.43-8.76-13.55-16.69c26.93-7.6,37.18-24.45,37.18-24.45a110.2,110.2,0,0,1-23.63,12.06A127.88,127.88,0,0,1,155,183.92a146.82,146.82,0,0,1-53.19-.17A191.59,191.59,0,0,1,71.58,175a119.6,119.6,0,0,1-15-6.94c-.66-.33-1.15-.66-1.82-1a1.64,1.64,0,0,1-.82-.66c-3.64-2-5.78-3.47-5.78-3.47s9.91,16.35,36,24.28c-6.11,7.77-13.71,17-13.71,17C25,202.75,7.81,173,7.81,173c0-66.08,29.57-119.77,29.57-119.77C67,31.27,95,31.76,95,31.76l2,2.48C60,45,43,61.17,43,61.17s4.47-2.48,12.06-6c22-9.58,39.49-12.39,46.59-12.88a24.1,24.1,0,0,1,3.47-.33,172.18,172.18,0,0,1,41.47-.33,167.5,167.5,0,0,1,61.79,19.65S192.18,46,157.15,35.23l2.81-3.3s28.09-.66,57.66,21.64c0,0,29.57,53.53,29.57,119.77C247.52,173,230.17,202.92,184.74,204.24ZM89.25,108.42c-11.73,0-21,10.24-21,22.8s9.42,22.8,21,22.8c11.73,0,21-10.25,21-22.8C110.4,118.66,101,108.42,89.25,108.42Zm75,0c-11.73,0-21,10.24-21,22.8s9.42,22.8,21,22.8c11.73,0,21-10.25,21-22.8C185.07,118.66,176,108.42,164.26,108.42Z"/>
            </svg>
        </div>
        <div class="col-sm-11 p0">
            <p>
                <?= __('{0}: Join our CakePHP Discord Server',
                    $this->Html->link('Discord', Configure::read('Site.menu.items.help.discord.url'), ['target' => '_blank'])
                ) ?>
            </p>
        </div>
    </div>
    <div class="col-sm-12 p0">
        <div class="col-sm-1 p0">
            <i class="get-social-icon icon-irc-2">#IRC</i>
        </div>
        <div class="col-sm-11 p0">
            <p>
                <?= __('{0}: Join us in the #cakephp IRC channel',
                    $this->Html->link('IRC', Configure::read('Site.menu.items.help.irc.url'), ['target' => '_blank'])
                ) ?>
            </p>
        </div>
    </div>
    <div class="col-sm-12 p0">
        <div class="col-sm-1 p0">
            <i class="fa-brands get-social-icon fa-git"></i>
        </div>
        <div class="col-sm-11 p0">
            <p>
                <?= __('{0}: Report issues, help fix bugs or implement features',
                    $this->Html->link(__('Issues'), Configure::read('Site.menu.items.community.issues.url'), ['target' => '_blank'])
                ) ?>
            </p>
        </div>
    </div>
    <div class="col-sm-12 p0">
        <div class="col-sm-1 p0">
            <i class="fa get-social-icon fa-pen-to-square"></i>
        </div>
        <div class="col-sm-11 p0">
            <p>
                <?= __('{0}: Find news and articles on many topics regarding CakePHP',
                    $this->Html->link(__('The Bakery'), Configure::read('Site.menu.items.community.blog.url'))
                ) ?>
            </p>
        </div>
    </div>
    <div class="col-sm-12 p0">
        <div class="col-sm-1 p0">
            <i class="fa-brands get-social-icon fa-stack-overflow"></i>
        </div>
        <div class="col-sm-11 p0">
            <p>
                <?= __('{0}: Get your issues resolved by the open source community',
                    $this->Html->link(__('StackOverflow'), Configure::read('Site.menu.items.help.stackOverflow.url'), ['target' => '_blank'])
                ) ?>
            </p>
        </div>
    </div>
    <div class="col-sm-12 p0">
        <div class="col-sm-1 p0">
            <i class="fa-brands get-social-icon fa-facebook"></i>
        </div>
        <div class="col-sm-11 p0">
            <p>
                <?= __('{0}: Official announcements from the CakePHP community',
                    $this->Html->link(__('Facebook'), Configure::read('Site.menu.items.community.facebook.url'), ['target' => '_blank'])
                ) ?>
            </p>
        </div>
    </div>
    <div class="col-sm-12 p0">
        <div class="col-sm-1 p0">
            <i class="fa-brands get-social-icon fa-youtube"></i>
        </div>
        <div class="col-sm-11 p0">
            <p>
                <?= __('{0}: Tutorials and screencasts related to development and events',
                    $this->Html->link(__('YouTube'), Configure::read('Site.menu.items.community.youtube.url'), ['target' => '_blank'])
                ) ?>
            </p>
        </div>
    </div>
    <div class="col-sm-12 p0">
        <div class="col-sm-1 p0">
            <i class="fa-brands get-social-icon fa-twitter"></i>
        </div>
        <div class="col-sm-11 p0">
            <p>
                <?= __('{0}: Get the latest updates from around the world',
                    $this->Html->link(__('Twitter'), Configure::read('Site.menu.items.community.twitter.url'), ['target' => '_blank'])
                ) ?>
            </p>
        </div>
    </div>
    <div class="col-sm-12 p0">
        <div class="col-sm-1 p0">
            <i class="fa-brands get-social-icon fa-reddit-alien"></i>
        </div>
        <div class="col-sm-11 p0">
            <p>
                <?= __('{0}: Official Subreddit of CakePHP',
                    $this->Html->link(__('CakePHP on Reddit'), 'https://www.reddit.com/r/cakephp/', ['target' => '_blank'])
                ) ?>
            </p>
        </div>
    </div>
</div>
