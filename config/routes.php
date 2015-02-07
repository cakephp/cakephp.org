<?php
/* SVN FILE: $Id: routes.php 682 2009-01-12 16:37:23Z gwoo $ */
/**
 * Short description for file.
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different urls to chosen controllers and their actions (functions).
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
 * @since			CakePHP(tm) v 0.2.9
 * @version			$Revision: 682 $
 * @modifiedby		$LastChangedBy: gwoo $
 * @lastmodified	$Date: 2009-01-12 08:37:23 -0800 (Mon, 12 Jan 2009) $
 * @license			http://www.opensource.org/licenses/mit-license.php The MIT License
 */
	Router::parseExtensions('rss');
/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/views/pages/home.thtml)...
 */
	Router::connect('/', array('controller' => 'pages', 'action' => 'display', 'home'));

	Router::connect('/search', array('controller' => 'pages', 'action' => 'display', 'search'));
	Router::connect('/development', array('controller' => 'pages', 'action' => 'display', 'development'));
	Router::connect('/documentation', array('controller' => 'pages', 'action' => 'display', 'documentation'));
	Router::connect('/privacy', array('controller' => 'pages', 'action' => 'display', 'privacy'));

	Router::connect('/logos', array('controller' => 'pages', 'action' => 'display', 'logos'));
	Router::connect('/asset/*', array('plugin' => 'asset_compress', 'controller' => 'assets', 'action' => 'get'));

/**
 * Services
 */
	Router::connect('/services',               array('controller' => 'pages', 'action' => 'display', 'services'));
	Router::connect('/services/support',       array('controller' => 'pages', 'action' => 'display', 'services'));
	Router::connect('/services/training',      array('controller' => 'pages', 'action' => 'display', 'services'));
	Router::connect('/services/consultation',  array('controller' => 'pages', 'action' => 'display', 'services'));
	Router::connect('/services/certification', array('controller' => 'pages', 'action' => 'display', 'services'));

	Router::connect('/changelogs', array('controller' => 'changelogs', 'action' => 'index'));
	Router::connect('/changelogs/*', array('controller' => 'changelogs', 'action' => 'view'));

/**
 * ...and connect the rest of 'Pages' controller's urls.
 */
	Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));
/**
 * Then we connect url '/test' to our test controller. This is helpfull in
 * developement.
 */
	Router::connect('/tests', array('controller' => 'tests', 'action' => 'index'));

	require CAKE . 'Config' . DS . 'routes.php';
