<?php 
/* SVN FILE: $Id: schema.php 442 2007-12-28 22:02:33Z gwoo $ */
/*Cakephp schema generated on: 2007-12-28 13:12:09 : 1198878969*/


class CakephpSchema extends CakeSchema {

	var $name = 'Cakephp';

	function before($event = array()) {
		return true;
	}

	function after($event = array()) {
	}

	var $maps = array(
			'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'extra' => 'auto_increment'),
			'latitude' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 100),
			'longitude' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 100),
			'title' => array('type'=>'string', 'null' => true, 'default' => NULL),
			'address' => array('type'=>'text', 'null' => true, 'default' => NULL),
			'description' => array('type'=>'text', 'null' => true, 'default' => NULL),
			'created' => array('type'=>'datetime', 'null' => false, 'default' => '0000-00-00 00:00:00'),
			'modified' => array('type'=>'datetime', 'null' => false, 'default' => '0000-00-00 00:00:00'),
			'remove' => array('type'=>'boolean', 'null' => false, 'default' => '0'),
			'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
		);

	var $screencasts = array(
			'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'extra' => 'auto_increment'),
			'title' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 250),
			'producer' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 250),
			'movie' => array('type'=>'string', 'null' => true, 'default' => NULL),
			'image' => array('type'=>'string', 'null' => true, 'default' => NULL),
			'size' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 11),
			'description' => array('type'=>'text', 'null' => false),
			'created' => array('type'=>'datetime', 'null' => true, 'default' => NULL),
			'modified' => array('type'=>'datetime', 'null' => true, 'default' => NULL),
			'downloads' => array('type'=>'integer', 'null' => true, 'default' => NULL),
			'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
		);

}
?>