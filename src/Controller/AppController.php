<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Core\Configure;
use Cake\Event\Event;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link http://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');
        $this->loadComponent('Security');
        $this->loadComponent('Csrf');
    }

    /**
     * Before render callback.
     *
     * @param \Cake\Event\Event $event The beforeRender event.
     * @return void
     */
    public function beforeRender(Event $event)
    {
        if (!array_key_exists('_serialize', $this->viewVars) &&
            in_array($this->response->type(), ['application/json', 'application/xml'])
        ) {
            $this->set('_serialize', true);
        }
		$this->set([
				'_version' => Configure::read('App.version'),
			]);
    }

	public function beforeFilter(Event $event)
	{
		parent::beforeFilter($event);
		$pages = ['/', '/documentation/videos', '/pages/privacy', '/pages/trademark', '/showcase', '/pages/newsletter'];

		if ($this->request->here === '/') {
			$this->set('metaOptions', ['title' => 'CakePHP Homepage | Rapid Development PHP Framework', 'description' => 'CakePHP is an open-source web, rapid development framework that makes building web applications simpler, faster and require less code. It follows the model–view–controller (MVC) . Manual for beginners now available and links towards the last version.']);
		}
		if ($this->request->here === '/documentation/videos') {
			$this->set('metaOptions', ['title' => 'CakePHP | Learn CakePHP from the experts | Video Training', 'description' => 'CakePHP making building web applications simpler, faster and require less code. Manual, training and guides for beginners now available and links towards the last version.']);
		}
		if ($this->request->here === '/pages/privacy') {
			$this->set('metaOptions', ['title' => 'CakePHP Rapid Development PHP Framework | Privacy policy', 'description' => 'CakePHP Privacy Policy.']);
		}
		if ($this->request->here === '/pages/trademark') {
			$this->set('metaOptions', ['title' => 'CakePHP Rapid Development PHP Framework | Logos and trademarks', 'description' => 'CakePHP Logos and Trademark policies.']);
		}
		if ($this->request->here === '/showcase') {
			$this->set('metaOptions', ['title' => 'CakePHP Rapid Development PHP Framework | Success story showcases', 'description' => 'CakePHP making building web applications simpler, faster and require less code. Success stores - how CakePHP has helped other companies to succeed.']);
		}
		if ($this->request->here === '/pages/newsletter') {
			$this->set('metaOptions', ['title' => 'CakePHP Rapid Development PHP Framework | CakePHP latest news', 'description' => 'Latest CakePHP News.']);
		}

		$this->set('changeTitle', in_array($this->request->here, $pages));
	}
}
