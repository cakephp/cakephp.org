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

	var $helpers = array('Html', 'Form', 'Javascript');

	function beforeRender() {
		$one = array();
		$one['version'] = 'Stable: 1.1.20.7692';
		$one['date'] = 'January 1, 2008';
		$one['link'] = 'http://cakeforge.org/frs/?group_id=23&release_id=428';
		$one['announcement'] = 'http://bakery.cakephp.org/articles/view/release-cakephp-rc3-the-rc-of-triumph';
		$one['changelog'] = 'https://trac.cakephp.org/wiki/changelog/1.1.x.x';

		$two = array();
		$two['version'] = '1.2.5 Stable';
		$two['date'] = 'Sept 9, 2009';
		$two['link'] = 'http://cakeforge.org/frs/?group_id=23&release_id=449';
		$two['announcement'] = 'http://bakery.cakephp.org/articles/view/release-cakephp-1-2-5';
		$two['changelog'] = 'http://code.cakephp.org/wiki/changelog/1_2_x_x';
		
		$three = array(
			'version' => '1.3-dev', 
			'date' => 'August 3, 2009',
			'link' => 'http://cakeforge.org/frs/?group_id=23&release_id=448',
			'announcement' => 'http://bakery.cakephp.org/articles/view/release-cakephp-1-2-4-8284',
			'changelog' => '447'
		);

		$this->set(compact('one', 'two', 'three'));
	}
}
?>