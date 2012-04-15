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

// Load featured sites config
Configure::load('featured_sites.php');
