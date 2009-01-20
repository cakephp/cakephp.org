<?php

class JobsController extends AppController{
	var $uses = array();
	
	function index() {
		App::import('HttpSocket');
		$Http = new HttpSocket();
		$r = $Http->get('http://www.eliteopensourcejobs.com/jobs/index/48075b46-da18-4009-a658-83a14dddecbf.serialized');
		if (!$r) {
			return;
		}
		$jobs = unserialize($r);
		$this->set(compact('jobs'));
	}
}

?>