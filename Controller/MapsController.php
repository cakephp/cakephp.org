<?php

class MapsController extends AppController {

	var $components = array('RequestHandler', 'SpamFilter');

	var $appid = 'CakeMap';

	var $paginate = array('limit' => 80);

	function beforeRender() {
		$this->set('key', $this->Map->key);
	}

	function index() {
		$this->Session->setFlash(__('A cake in the face of all spammers.', true));
		$this->redirect('/');
		return false;

		if (
			empty($this->data['Map']['filter'])
			||
			(!empty($this->data['Map']['filter']) && $this->data['Map']['filter'] != 11)
			||
			!empty($this->data['Other']['name'])
			||
			!empty($this->data['Other']['body'])
		) {
			$this->data = null;
		}

		if (!empty($this->data)) {
			$this->Map->create();
			if ($this->Map->save($this->data)) {
				$this->Session->setFlash(__('Nice. Your mark was added', true));
			} else {
				$this->Session->setFlash(__('Ooops. Your mark could not added', true));
			}
		}

		if ($this->RequestHandler->ext == 'rss') {
			Configure::write('debug', '0');
			$this->layout = false;
		}
		$this->set('markers', $this->paginate(array('Map.title IS NOT NULL', 'Map.filter' => '11')));
	}
}