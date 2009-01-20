<?php
class ScreencastsController extends AppController {

	var $name = 'Screencasts';
	var $paginate = array('order' => 'created DESC');

	var $components = array('Security');

	function beforeFilter() {
		parent::beforeFilter();
		$this->Security->requireLogin('admin_add','admin_edit','admin_index', 'admin_view');
		$this->Security->loginUsers = array('admin'=>'girlscoveredincake');
	}

	function index() {
		$this->Screencast->recursive = 0;
		$this->set('screencasts', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash('Invalid Screencast.');
			$this->redirect(array('action'=>'index'));
		}
		$this->set('screencast', $this->Screencast->read(null, $id));
	}

	function admin_index() {
		$this->Screencast->recursive = 0;
		$this->set('screencasts', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash('Invalid Screencast.');
			$this->redirect(array('action'=>'index'));
		}
		$this->set('screencast', $this->Screencast->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Screencast->create();
			if ($this->Screencast->save($this->data)) {
				$this->Session->setFlash('The Screencast has been saved');
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash('The Screencast could not be saved. Please, try again.');
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash('Invalid Screencast');
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Screencast->save($this->data)) {
				$this->Session->setFlash('The Screencast has been saved');
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash('The Screencast could not be saved. Please, try again.');
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Screencast->read(null, $id);
		}
	}
}
?>