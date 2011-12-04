<?php
/**
 * Feed Model
 *
 * @package cakephp
 * @subpackage cakephp.models
 */
App::uses('HttpSocket', 'Network/Http');
App::uses('Xml', 'Utility');

class Feed extends AppModel {

/**
 * Table to use
 *
 * @var mixed String for table name, or false for no table.
 */
	public $useTable = false;

/**
 * Constructor
 *
 * @param mixed $id Feed ID
 * @param mixed $table Table name
 * @param mixed $ds Datasource
 */
	public function __construct($id = null, $table = null, $ds = null) {
		parent::__construct($id, $table, $ds);
		Cache::config('feed', array('engine' => 'File', 'serialize' => true));
	}

/**
 * Get model schema
 *
 * @return array Schema
 */
	public function schema($field = false) {
		return $this->_schema = array('url' => array('type' => 'text'));
	}

/**
 * Validation
 *
 * @var array
 */
	public $validate = array(
		'url' => array(
			'required' => 'notEmpty',
			'valid' => 'url'
		)
	);

/**
 * Feeds
 *
 * @var array
 */
	private $__feeds = array(
		//'Nate\'s blog' => 'http://cake.insertdesignhere.com/posts.rss',
		//'With Cake' => 'http://withcake.com/posts/rss',
		'Ohloh' => 'http://www.ohloh.net/projects/cakephp/messages.rss',
		'Bakery' => 'http://bakery.cakephp.org/articles.rss',
		// 'Trac' => 'https://trac.cakephp.org/timeline?changeset=on&ticket=on&max=50&daysback=90&format=rss',
		//'Tickets' => 'http://groups.google.com/group/tickets-cakephp/feed/rss_v2_0_msgs.xml',
		'GoogleGroup' => 'http://groups.google.com/group/cake-php/feed/rss_v2_0_msgs.xml',
		'CoreGoogleGroup' => 'http://groups.google.com/group/cakephp-core/feed/rss_v2_0_msgs.xml',
		'CakeDC' => 'http://cakedc.com/articles.rss',
		'BakeryNews' => 'http://bakery.cakephp.org/articles/featured.rss'
		//'Debuggable' => 'http://feeds.feedburner.com/debuggable',
		//'CakeBaker' => 'http://feeds.feedburner.com/Cakebaker',
		//'Jippi' => 'http://www.cakephp.nu/feed'
	);

/**
 * Find All
 *
 * @return array Results
 */
	public function findAll() {
		$socket = new HttpSocket(array('timeout' => 5));
		$data = array();
		foreach ($this->__feeds as $name => $feed) {
			$fed = Cache::read($name . '_feed_data', 'feed');
			if (empty($fed)) {
				$get = $socket->get($feed);
				$rss = Xml::build($get->body());
				$fed = Xml::toArray($rss);
				Cache::write($name . '_feed_data', $fed, 'feed');
			}
			$data[$name] = $fed;
		}
		return $data;
	}

/**
 * Read feeds from cache.
 *
 * @param string $feed 
 * @return array Results
 */
	public function read($feed = null, $id = null) {
		$data = Cache::read($feed . '_feed_data', 'feed');
		if (empty($data)) {
			$data = $this->findAll();
			if (!empty($data[$feed])) {
				return $data[$feed];
			}
		}
		return $data;
	}
}
