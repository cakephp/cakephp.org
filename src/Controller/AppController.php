<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use AssetCompress\View\Helper\AssetCompressHelper;
use Cake\Controller\Controller;
use Cake\Event\Event;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link http://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{

    /**
     * Helpers
     *
     * @var array
     */
    public $helpers = [
        'AssetCompress.AssetCompress',
        'Form',
        'Html',
        'Session',
    ];

    /**
     * Before Render
     *
     * @param \Cake\Event\Event $event The event object.
     * @return void
     */
    public function beforeRender(Event $event)
    {
        $one = [
            'version' => '1.2.12 ' . __('Stable'),
            'date' => 'April 28, 2013',
            'link' => 'https://github.com/cakephp/cakephp/zipball/1.2.12',
            'announcement' => 'http://bakery.cakephp.org/articles/markstory/2013/04/28/security_release_-_cakephp_1_2_12_1_3_16_2_2_8_and_2_3_4',
            'changelog' => 'http://cakephp.org/changelogs/1.2.12'
        ];

        $two = [
            'version' => '1.3.19 ' . __('Stable'),
            'date' => 'June 14, 2014',
            'link' => 'https://github.com/cakephp/cakephp/zipball/1.3.19',
            'announcement' => 'http://bakery.cakephp.org/articles/markstory/2014/06/15/cakephp_2_5_2_and_1_3_19_released',
            'changelog' => 'http://cakephp.org/changelogs/1.3.19'
        ];

        $three = [
            'version' => '2.6.3 ' . __('Stable'),
            'date' => 'Mar 16, 2015',
            'link' => 'https://github.com/cakephp/cakephp/zipball/2.6.3',
            'announcement' => 'http://bakery.cakephp.org/articles/markstory/2015/03/16/cakephp_2_6_3_released',
            'changelog' => 'http://cakephp.org/changelogs/2.6.3'
        ];

        $this->set(compact('one', 'two', 'three'));
    }
}
