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
			'version' => '2.1 ' . __('beta', true),
			'date' => 'Sept 18, 2011',
			'link' => 'https://github.com/cakephp/cakephp/zipball/2.1.0-beta',
			'announcement' => 'http://bakery.cakephp.org/articles/lorenzo/2012/01/23/cakephp_2_1_beta_hot_and_fresh',
			'changelog' => 'http://cakephp.org/changelogs/2.1.0-beta'
		);
		
		$two = array(
			'version' => '1.3.14 ' . __('Stable', true), 
			'date' => 'Dec 28, 2011',
			'link' => 'https://github.com/cakephp/cakephp/zipball/1.3.14',
			'announcement' => 'http://bakery.cakephp.org/articles/markstory/2011/12/29/cakephp_1_3_14_and_2_0_5_released',
			'changelog' => 'http://cakephp.org/changelogs/1.3.14'
		);

		$three = array(
			'version' => '2.0.6 ' . __('Stable', true),
			'date' => 'Feb 5, 2012',
			'link' => 'https://github.com/cakephp/cakephp/zipball/2.0.6',
			'announcement' => 'http://bakery.cakephp.org/articles/lorenzo/2012/02/06/cakephp_2_0_6_released',
			'changelog' => 'http://cakephp.org/changelogs/2.0.6'
		);

		$this->set(compact('one', 'two', 'three'));
	}
}
