<?php

class FeedsController extends AppController {

	var $components  = array('Email');

	var $__password = 'cool';

	function refresh($password = null) {

	}

	function index() {
		$data = $this->Feed->findAll();
		$this->set('data', $data);
	}

	function submit() {
		$this->autoRender = false;
		 if(!empty($this->request->data)) {
			$this->Feed->set($this->request->data);

			if(empty($this->request->data['Other']['name']) && empty($this->request->data['Other']['email']) && $this->Feed->validates()) {
				$this->Email->to = 'gwoo@cakephp.org';
				$this->Email->from = 'noreply@cakephp.org';
				$this->Email->subject = 'Planet Feed submission';
				$this->Email->template = null;

				$content[] = $this->request->data['Feed']['url'];

				if($this->Email->send($content)) {
					$this->Session->setFlash(__('your feed was submitted'));
					$this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash(__('The feed was not submitted, try again.'));
				}
			}
		}
		$this->render('index');
	}
}