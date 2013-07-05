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
			'version' => '1.3.16 ' . __('Stable'), 
			'date' => 'April 28, 20113',
			'link' => 'https://github.com/cakephp/cakephp/zipball/1.3.16',
			'announcement' => 'http://bakery.cakephp.org/articles/markstory/2013/04/28/security_release_-_cakephp_1_2_12_1_3_16_2_2_8_and_2_3_4',
			'changelog' => 'http://cakephp.org/changelogs/1.3.16'
		);

		$three = array(
			'version' => '2.3.7 ' . __('Stable'),
			'date' => 'July 4, 2013',
			'link' => 'https://github.com/cakephp/cakephp/zipball/2.3.7',
			'announcement' => 'http://bakery.cakephp.org/articles/markstory/2013/07/05/cakephp_2_3_7_2_4_0-beta_released',
			'changelog' => 'http://cakephp.org/changelogs/2.3.7'
		);

		$this->set(compact('one', 'two', 'three'));
	}
}
