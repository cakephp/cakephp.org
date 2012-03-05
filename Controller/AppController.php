<?php
/**
 * Short description for class.
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		cake
 * @subpackage	cake.app
 */
class AppController extends Controller {

/**
 * Helpers
 *
 * @var array
 */
	public $helpers = array(
		'AssetCompress.AssetCompress',
		'Form',
		'Html',
		'Js',
		'Session',
	);

/**
 * Before Render
 *
 * @return void
 */
	function beforeRender() {
		$one = array(
			'version' => '1.2.11 ' . __('Stable'),
			'date' => 'Sept 18, 2011',
			'link' => 'https://github.com/cakephp/cakephp/zipball/1.2.11',
			'announcement' => 'http://bakery.cakephp.org/articles/lorenzo/2011/09/19/cakephp_triple_layered_edition_released',
			'changelog' => 'http://cakephp.org/changelogs/1.2.11'
		);
		
		$two = array(
			'version' => '1.3.13 ' . __('Stable'), 
			'date' => 'Oct 15, 2011',
			'link' => 'https://github.com/cakephp/cakephp/zipball/1.3.13',
			'announcement' => 'http://bakery.cakephp.org/articles/markstory/2011/10/15/cakephp_1_3_13_released',
			'changelog' => 'http://cakephp.org/changelogs/1.3.13'
		);

		$three = array(
			'version' => '2.1.0 ' . __('Stable'),
			'date' => 'March 05, 2012',
			'link' => 'https://github.com/cakephp/cakephp/zipball/2.1.0',
			'announcement' => 'http://bakery.cakephp.org/articles/lorenzo/2012/03/05/cakephp_2_1_0_just_landed',
			'changelog' => 'http://cakephp.org/changelogs/2.1.0'
		);

		$this->set(compact('one', 'two', 'three'));
	}
}
