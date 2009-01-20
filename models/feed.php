<?php
//App::import('Core', 'Xml');

class Feed extends AppModel {

	var $useTable = false;

	function __construct($id = null, $table = null, $ds = null) {
		parent::__construct($id, $table, $ds);
		Cache::config('feed', array('engine' => 'File', 'serialize' => true));
	}

	function schema() {
		return $this->_schema = array('url' => array('type' => 'text'));
	}

	var $validate = array('url' => array('required' => VALID_NOT_EMPTY, 'valid' => 'url'));

	var $__feeds = array(
		//'Nate\'s blog' => 'http://cake.insertdesignhere.com/posts.rss',
		//'With Cake' => 'http://withcake.com/posts/rss',
		'Ohloh' => 'http://www.ohloh.net/projects/cakephp/messages.rss',
		'Bakery' => 'http://bakery.cakephp.org/articles/rss',
		'Trac' => 'https://trac.cakephp.org/timeline?changeset=on&ticket=on&max=50&daysback=90&format=rss',
		//'Tickets' => 'http://groups.google.com/group/tickets-cakephp/feed/rss_v2_0_msgs.xml',
		'GoogleGroup' => 'http://groups.google.com/group/cake-php/feed/rss_v2_0_msgs.xml',
		'CakeDC' => 'http://cakedc.com/articles.rss',
		'Debuggable' => 'http://feeds.feedburner.com/debuggable',
		
		//'CakeBaker' => 'http://feeds.feedburner.com/Cakebaker',
		//'Jippi' => 'http://www.cakephp.nu/feed'
	);

	//var $__feeds = array('Google Group' => 'http://groups.google.com/group/cake-php/feed/rss_v2_0_msgs.xml');

	function findAll() {

			App::import(array('Xml', 'HttpSocket'));

			$socket =& new HttpSocket();

			$data = array();
			foreach ($this->__feeds as $name => $feed) {
				$fed = Cache::read($name . '_feed_data', 'feed');
				if (empty($fed)) {
					$get = $socket->get($feed);
					$rss = new Xml($get);
					$fed = Set::reverse($rss);
					Cache::write($name . '_feed_data', $fed, array('config' => 'feed', 'duration' => '+20 minutes'));
				}

				$data[$name] = $fed;

			}
		return $data;
	}

	function read($feed) {
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