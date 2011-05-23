<?php
/* SVN FILE: $Id: bootstrap.php 442 2007-12-28 22:02:33Z gwoo $ */
/**
 * Short description for file.
 *
 * Long description for file
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
 * @subpackage		cake.app.config
 * @since			CakePHP(tm) v 0.10.8.2117
 * @version			$Revision: 442 $
 * @modifiedby		$LastChangedBy: gwoo $
 * @lastmodified	$Date: 2007-12-28 14:02:33 -0800 (Fri, 28 Dec 2007) $
 * @license			http://www.opensource.org/licenses/mit-license.php The MIT License
 */
/**
 *
 * This file is loaded automatically by the app/webroot/index.php file after the core bootstrap.php is loaded
 * This is an application wide file to load any function that is not used within a class define.
 * You can also use this to include or require any files in your application.
 *
 */
/**
 * The settings below can be used to set additional paths to models, views and controllers.
 * This is related to Ticket #470 (https://trac.cakephp.org/ticket/470)
 *
 * $modelPaths = array('full path to models', 'second full path to models', 'etc...');
 * $viewPaths = array('this path to views', 'second full path to views', 'etc...');
 * $controllerPaths = array('this path to controllers', 'second full path to controllers', 'etc...');
 *
 */
//EOF

/**
 * Changelog settings
 */
Configure::write('Changelog.Git', '/usr/local/bin/git');
Configure::write('Changelog.Repository', 'cakephp.git');

/**
 * Mentioned sites
 */
Configure::write('Sites', array(
	'JustBaked' => array(
		array(
			'name' => 'Amerpages',
			'url' => 'http://amerpages.com'),
		array(
			'name' => 'CakePHP Questions',
			'url' => 'http://ask.cakephp.org'),
		array(
			'name' => 'Traffic Travis',
			'url' => 'http://www.traffictravis.com'),
		array(
			'name' => 'Piano Marvel',
			'url' => 'http://pianomarvel.com'),
		array(
			'name' => 'Miss Universe',
			'url' => 'http://www.missuniverse.com'),
		array(
			'name' => 'Affilorama',
			'url' => 'http://www.affilorama.com'),
		array(
			'name' => 'Hot Scripts',
			'url' => 'http://www.hotscripts.com'),
	),
	'Using' => array(
		array(
			'name' => 'followmy.tv',
			'url' => 'http://followmy.tv'),
		array(
			'name' => 'My Gas Feed',
			'url' => 'http://www.mygasfeed.com'),
		array(
			'name' => 'The Daily Save',
			'url' => 'http://www.thedailysave.com'),
		array(
			'name' => 'Ambling Books',
			'url' => 'http://amblingbooks.com'),
		array(
			'name' => 'Croogo',
			'url' => 'http://croogo.org'),
		array(
			'name' => 'Scratch by MIT',
			'url' => 'http://scratch.mit.edu'),
		array(
			'name' => 'The Onion Store',
			'url' => 'http://store.theonion.com'),
		array(
			'name' => 'NoseRub',
			'url' => 'http://noserub.com'),
		array(
			'name' => 'foamee',
			'url' => 'http://foamee.com'),
		array(
			'name' => 'MapMe',
			'url' => 'http://www.mapme.com'),
		array(
			'name' => 'Zeadoo',
			'url' => 'http://www.zeadoo.com'),
		// array(
		// 	'name' => 'cghub',
		// 	'url' => 'http://cghub.com'),
	),
));


