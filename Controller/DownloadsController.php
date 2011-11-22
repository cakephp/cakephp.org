<?php

class DownloadsController extends AppController {

	function index() {
		$args = func_get_args();
		$path = join(DS, $args);

		$current = null;

		if ($args > 0) {
			$current = array_pop($args);
		}

		$data = $this->Download->read($path);

		$this->set(compact('data', 'args', 'current'));
	}
}