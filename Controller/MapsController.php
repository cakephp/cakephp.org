<?php

class MapsController extends AppController {

	var $components = array('RequestHandler', 'SpamFilter');

	var $appid = 'CakeMap';

	var $paginate = array('limit' => 80);

	function beforeRender() {
		$this->set('key', $this->Map->key);
	}

	function index() {
		$this->Session->setFlash(__('A cake in the face of all spammers.'));
		$this->redirect('/');
		return false;

		if (
			empty($this->request->data['Map']['filter'])
			||
			(!empty($this->request->data['Map']['filter']) && $this->request->data['Map']['filter'] != 11)
			||
			!empty($this->request->data['Other']['name'])
			||
			!empty($this->request->data['Other']['body'])
		) {
			$this->request->data = null;
		}

		if (!empty($this->request->data)) {
			$this->Map->create();
			if ($this->Map->save($this->request->data)) {
				$this->Session->setFlash(__('Nice. Your mark was added'));
			} else {
				$this->Session->setFlash(__('Ooops. Your mark could not added'));
			}
		}

		if ($this->RequestHandler->ext == 'rss') {
			Configure::write('debug', '0');
			$this->layout = false;
		}
		$this->set('markers', $this->paginate(array('Map.title IS NOT NULL', 'Map.filter' => '11')));
	}
}