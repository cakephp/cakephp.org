<?php
/**
 * Temporary Screencasts Controller
 *
 * Used only for legacy links to force redirection
 *
 * @package cakephp
 */
class ScreencastsController extends AppController {

	public $uses = array();

/**
 * Default index action
 *
 * @return void
 */
	public function index() {
		return $this->redirect('http://tv.cakephp.org', 301);
	}
}