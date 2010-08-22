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

	var $helpers = array('Html', 'Form', 'Javascript', 'Session');

	function beforeRender() {
		$one = array(
			'version' => __('Stable', true) . ': 1.1.20.7692',
			'date' => 'January 1, 2008',
			'link' => 'http://cakeforge.org/frs/?group_id=23&release_id=428',
			'announcement' => 'http://bakery.cakephp.org/articles/view/release-cakephp-rc3-the-rc-of-triumph',
			'changelog' => 'https://trac.cakephp.org/wiki/changelog/1.1.x.x'
		);

		$two = array(
			'version' => '1.2.8 ' . __('Stable', true),
			'date' => 'August 21, 2010',
			'link' => 'http://github.com/cakephp/cakephp/downloads',
			'announcement' => 'http://bakery.cakephp.org/articles/view/cakephp-1-2-8-released',
			'changelog' => 'http://cakephp.lighthouseapp.com/projects/42648/changelog-1-2-8'
		);
		
		$three = array(
			'version' => '1.3.3 ' . __('Stable', true), 
			'date' => 'July 18, 2010',
			'link' => 'http://github.com/cakephp/cakephp/downloads',
			'announcement' => 'http://bakery.cakephp.org/articles/view/cakephp-1-3-3-rainbow-icing-edition-released',
			'changelog' => 'http://cakephp.lighthouseapp.com/projects/42648/changelog-1-3-3'
		);

		$this->set(compact('one', 'two', 'three'));
	}
}
?>