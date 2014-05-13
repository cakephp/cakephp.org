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
			'version' => '1.2.12 ' . __('Stable'),
			'date' => 'April 28, 2013',
			'link' => 'https://github.com/cakephp/cakephp/zipball/1.2.12',
			'announcement' => 'http://bakery.cakephp.org/articles/markstory/2013/04/28/security_release_-_cakephp_1_2_12_1_3_16_2_2_8_and_2_3_4',
			'changelog' => 'http://cakephp.org/changelogs/1.2.12'
		);
		
		$two = array(
			'version' => '1.3.18 ' . __('Stable'), 
			'date' => 'April 28, 2014',
			'link' => 'https://github.com/cakephp/cakephp/zipball/1.3.18',
			'announcement' => 'http://bakery.cakephp.org/articles/markstory/http://bakery.cakephp.org/articles/markstory/2014/04/29/cakephp_1_3_18_and_2_4_8_released',
			'changelog' => 'http://cakephp.org/changelogs/1.3.18'
		);

		$three = array(
			'version' => '2.5.0 ' . __('Stable'),
			'date' => 'May 12, 2014',
			'link' => 'https://github.com/cakephp/cakephp/zipball/2.5.0',
			'announcement' => 'http://bakery.cakephp.org/articles/markstory/2014/05/13/cakephp_2_5_0_released',
			'changelog' => 'http://cakephp.org/changelogs/2.5.0'
		);

		$this->set(compact('one', 'two', 'three'));
	}
}
