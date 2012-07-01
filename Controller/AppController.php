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
			'version' => '1.3.15 ' . __('Stable'), 
			'date' => 'March 26, 2011',
			'link' => 'https://github.com/cakephp/cakephp/zipball/1.3.15',
			'announcement' => 'http://bakery.cakephp.org/articles/lorenzo/2012/03/26/cakephp_2_1_1_and_1_3_15_released',
			'changelog' => 'http://cakephp.org/changelogs/1.3.15'
		);

		$three = array(
			'version' => '2.2.0 ' . __('Stable'),
			'date' => 'July 1st, 2012',
			'link' => 'https://github.com/cakephp/cakephp/zipball/2.2.0',
			'announcement' => 'http://bakery.cakephp.org/articles/lorenzo/2012/07/01/cakephp_2_2_and_2_1_4_released',
			'changelog' => 'http://cakephp.org/changelogs/2.2.0'
		);

		$this->set(compact('one', 'two', 'three'));
	}
}
