<?php $this->assign('title', __('CakePHP Freelancers Newsletter Signup')); ?>
<!-- Begin MailChimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
<?php $this->start('css'); ?>
<style type="text/css">
    #mc_embed_signup #mc-embedded-subscribe {
        background-color: #c92333;
    }

    #mc_embed_signup .mc-field-group.input-group label {
        margin-left: 5px !important;
    }

    #mc_embed_signup .mc-field-group.col-lg-4.col-md-4 {
        float: left;
        clear: none;
        width: 33.33%;
    }

    #mc-past-responses {
        float: left;
        clear: both;
    }
</style>
<?php $this->end(); ?>
<div id="mc_embed_signup">
    <form action="//cakephp.us9.list-manage.com/subscribe/post?u=f380de581acd576e7d802552a&amp;id=539d7fcbd1"
          method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" novalidate>
        <div id="mc_embed_signup_scroll">
            <h2>Subscribe to our Freelancer Newsletters</h2>

            <div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
            <div class="mc-field-group">
                <label for="mce-EMAIL">Email Address <span class="asterisk">*</span>
                </label>
                <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
            </div>
            <div class="mc-field-group">
                <label for="mce-FNAME">First Name </label>
                <input type="text" value="" name="FNAME" class="" id="mce-FNAME">
            </div>
            <div class="mc-field-group">
                <label for="mce-LNAME">Last Name </label>
                <input type="text" value="" name="LNAME" class="" id="mce-LNAME">
            </div>
            <div class="col-lg-4 col-md-4 mc-field-group input-group">
                <strong>English Lists </strong>
                <ul>
                    <li><input type="checkbox" value="64" name="group[19433][64]" id="mce-group[19433]-19433-3"><label
                            for="mce-group[19433]-19433-3">Freelancers</label></li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-4 mc-field-group input-group">
                <strong>Lista en Español </strong>
                <ul>
                    <li><input type="checkbox" value="128" name="group[19445][128]" id="mce-group[19445]-19445-3"><label
                            for="mce-group[19445]-19445-3">Freelancers</label></li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-4 mc-field-group input-group">
                <strong>Email Format </strong>
                <ul>
                    <li><input type="radio" value="html" name="EMAILTYPE" id="mce-EMAILTYPE-0"><label
                            for="mce-EMAILTYPE-0">html</label></li>
                    <li><input type="radio" value="text" name="EMAILTYPE" id="mce-EMAILTYPE-1"><label
                            for="mce-EMAILTYPE-1">text</label></li>
                </ul>
            </div>
            <p>
                <?= $this->Html->link(__('Past Newsletters'), ['controller' => 'Pages', 'action' => 'display', 'newsletter'], ['title' => __('Past Newsletters'), 'id' => 'mc-past-responses']); ?>
            </p>

            <div id="mce-responses" class="clear">
                <div class="response" id="mce-error-response" style="display:none"></div>
                <div class="response" id="mce-success-response" style="display:none"></div>
            </div>
            <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
            <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text"
                                                                                      name="b_f380de581acd576e7d802552a_539d7fcbd1"
                                                                                      tabindex="-1" value=""></div>
            <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe"
                                      class="button"></div>
        </div>
    </form>
</div>

<!--End mc_embed_signup-->
