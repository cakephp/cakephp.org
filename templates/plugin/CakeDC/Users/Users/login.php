<?php
/**
 * Copyright 2010 - 2015, Cake Development Corporation (http://cakedc.com)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright 2010 - 2015, Cake Development Corporation (http://cakedc.com)
 * @license MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

use Cake\Core\Configure;

?>
<section  class="dark-gray-stripe">
    <div class="container">
        <div class="row">
            <div class="col-md-12 title-mycake">
                <h1><strong>CakePHP</strong> Admin<span class="glyph_range icon-calendar">a</span></h1>
            </div>
        </div>
    </div>
</section>
<section class="ptb-80 back-light-gray ">
    <div class="container">
        <div class="row mycake-login">
            <?= $this->Flash->render('auth') ?>
            <div class="col-lg-6 col-lg-offset-3 col-sm-8 col-sm-offset-2">
                <h4><?= __('Login') ?></h4>
                <div class="col-md-6 col-md-offset-3">
                    <?= $this->Form->create() ?>
                        <?= $this->Form->control('username', ['label' => false, 'required' => true, 'placeholder' => __('Username'), 'class' => 'form-control-mylogin']) ?>
                        <?= $this->Form->control('password', ['label' => false, 'required' => true, 'placeholder' => __('Password'), 'class' => 'form-control-mylogin']) ?>
                        <div class="col-md-5 col-md-offset-1 col-xs-6 p0 pull-right p0">
                            <?= $this->Form->button(__d('Users', 'Login'), ['class' => 'btn-user btn-mylogin']); ?>
                        </div>
                        <div class="col-md-6 col-xs-6 check-mylogin p0">
                            <?php
                            if (Configure::check('Users.RememberMe.active')) {
                                echo $this->Form->control(Configure::read('Users.Key.Data.rememberMe'), [
                                    'type' => 'checkbox',
                                    'label' => __d('Users', 'Remember me.'),
                                    'checked' => 'checked',
                                    //'class' => 'checkbox-custom'
                                ]);
                            }
                            ?>
                            <p>
                            <?php
                            if (Configure::read('Users.Email.required')) {
                                echo $this->Html->link(__('Forgot your password?'), ['action' => 'requestResetPassword']);
                            }
                            ?>
                            </p>
                        </div>
                        <?= $this->Form->end() ?>
                </div>
            </div>
        </div>
    </div>
</section>