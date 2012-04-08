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
Cache::config('default', array(
	'engine' => 'File',
));

CakePlugin::load('Csfnavbar');
CakePlugin::load('AssetCompress');

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
			'image' => 'hotscripts.png',
			'name' => 'Hot Scripts',
			'url' => 'http://www.hotscripts.com'),
		array(
			'image' => 'piano-marvel.png',
			'name' => 'Piano Marvel',
			'url' => 'http://pianomarvel.com'),
		array(
			'image' => 'feedbackforms.png',
			'name' => 'Website Feedback Forms',
			'url' => 'https://websitefeedbackforms.com/'),
		array(
			'image' => 'copify.png',
			'name' => 'Copify',
			'url' => 'http://www.copify.com'),
		array(
			'image' => 'social-poke.png',
			'name' => 'socialpoke.me',
			'url' => 'http://socialpoke.me'),
		array(
			'image' => 'flipcomp.png',
			'name' => 'Flipcomp',
			'url' => 'http://www.flipcomp.com'),
		array(
			'image' => 'booking-boy.png',
			'name' => 'Booking Boy',
			'url' => 'http://www.bookingboy.com/'),
		array(
			'image' => 'affilorama.png',
			'name' => 'Affilorama',
			'url' => 'http://www.affilorama.com'),
		array(
			'image' => 'traffic-travis.png',
			'name' => 'Traffic Travis',
			'url' => 'http://www.traffictravis.com'),
		array(
			'image' => 'fmtv.jpg',
			'name' => 'followmy.tv',
			'url' => 'http://followmy.tv'),
		/*
		array(
			'name' => 'Fanroom',
			'url' => 'http://fanroom.co.uk'),
		array(
			'name' => 'Amerpages',
			'url' => 'http://amerpages.com'),
		array(
			'name' => 'CakePHP Questions',
			'url' => 'http://ask.cakephp.org'),
		array(
			'name' => 'Miss Universe',
			'url' => 'http://www.missuniverse.com'),
		 */
	),
	'Using' => array(
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
			'name' => 'MapMe',
			'url' => 'http://www.mapme.com'),
		// array(
		// 	'name' => 'Zeadoo',
		// 	'url' => 'http://www.zeadoo.com'),
		// array(
		// 	'name' => 'cghub',
		// 	'url' => 'http://cghub.com'),
	),
));


