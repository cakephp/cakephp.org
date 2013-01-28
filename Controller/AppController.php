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
			'version' => '2.3.0 ' . __('Stable'),
			'date' => 'January 28, 2013',
			'link' => 'https://github.com/cakephp/cakephp/zipball/2.3.0',
			'announcement' => 'http://bakery.cakephp.org/articles/lorenzo/2013/01/28/cakephp_2_3_0_is_out',
			'changelog' => 'http://cakephp.org/changelogs/2.3.0'
		);

		$this->set(compact('one', 'two', 'three'));
	}
}
