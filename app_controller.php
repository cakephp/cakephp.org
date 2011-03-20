<?php
/* SVN FILE: $Id: app_controller.php 685 2009-01-16 21:35:58Z gwoo $ */
/**
 * Short description for file.
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) :  Rapid Development Framework <http://www.cakephp.org/>
 * Copyright 2005-2007, Cake Software Foundation, Inc.
 *								1785 E. Sahara Avenue, Suite 490-204
 *								Las Vegas, Nevada 89104
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @filesource
 * @copyright		Copyright 2005-2007, Cake Software Foundation, Inc.
 * @link				http://www.cakefoundation.org/projects/info/cakephp CakePHP(tm) Project
 * @package			cake
 * @subpackage		cake.app
 * @since			CakePHP(tm) v 0.2.9
 * @version			$Revision: 685 $
 * @modifiedby		$LastChangedBy: gwoo $
 * @lastmodified	$Date: 2009-01-16 13:35:58 -0800 (Fri, 16 Jan 2009) $
 * @license			http://www.opensource.org/licenses/mit-license.php The MIT License
 */
/**
 * Short description for class.
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		cake
 * @subpackage	cake.app
 */
class AppController extends Controller {

/**
 * Helpers
 *
 * @var array
 */
	var $helpers = array('Html', 'Form', 'Javascript', 'Session', 'Js');

/**
 * Before Render
 *
 * @return void
 */
	function beforeRender() {
		$one = array(
			'version' => '2.0.0-dev',
			'date' => 'December 26, 2010',
			'link' => 'http://github.com/cakephp/cakephp/downloads',
			'announcement' => 'http://bakery.cakephp.org/articles/markstory/2010/12/26/happy_holiday_yule_cake_-_cakephp_2_0-dev_released',
			'changelog' => 'http://cakephp.org/changelogs/2.0.0-dev'
		);

		$two = array(
			'version' => '1.2.9 ' . __('Stable', true),
			'date' => 'March 20, 2011',
			'link' => 'http://github.com/cakephp/cakephp/downloads',
			'announcement' => 'http://bakery.cakephp.org/articles/markstory/2011/03/20/cakephp_1_3_8_and_1_2_10_released',
			'changelog' => 'http://cakephp.org/changelogs/1.2.10'
		);
		
		$three = array(
			'version' => '1.3.8 ' . __('Stable', true), 
			'date' => 'March 20, 2011',
			'link' => 'http://github.com/cakephp/cakephp/downloads',
			'announcement' => 'http://bakery.cakephp.org/articles/markstory/2011/03/20/cakephp_1_3_8_and_1_2_10_released',
			'changelog' => 'http://cakephp.org/changelogs/1.3.8'
		);

		$this->set(compact('one', 'two', 'three'));
	}
}
