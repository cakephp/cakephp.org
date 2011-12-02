<?php
/**
 * Changelogs Controller
 *
 * @package app
 * @subpackage app.controllers
 */
class ChangelogsController extends AppController {

/**
 * Before Filter
 *
 * @return void
 */
	public function beforeFilter() {
		$this->Changelog->repository(Configure::read('Changelog.Repository'));
	}

/**
 * Index Action
 *
 * @return void
 */
	public function index() {
		$tags = $this->Changelog->tags();
		$this->set('tags', $tags);
		return $tags;
	}

/**
 * View changelog
 *
 * @param string $tag Tag to view
 * @return void
 */
	public function view($tag = null) {
		if (!$tag || !in_array($tag, $this->Changelog->tags())) {
			$this->Session->setFlash(__('Invalid tag for changelogs'));
			$this->setAction('index');
			return;
		}
		$this->set('tag', $tag);
		$this->set('changes', $this->Changelog->changes($tag));
	}
}
