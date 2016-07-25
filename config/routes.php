<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

use Cake\Core\Plugin;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;

/**
 * The default class to use for all routes
 *
 * The following route classes are supplied with CakePHP and are appropriate
 * to set as the default:
 *
 * - Route
 * - InflectedRoute
 * - DashedRoute
 *
 * If no call is made to `Router::defaultRouteClass()`, the class used is
 * `Route` (`Cake\Routing\Route\Route`)
 *
 * Note that `Route` does not do any inflections on URLs which will result in
 * inconsistently cased URLs when used with `:plugin`, `:controller` and
 * `:action` markers.
 *
 */
Router::defaultRouteClass('DashedRoute');

Router::scope('/', function (RouteBuilder $routes) {
    /**
     * Here, we are connecting '/' (base path) to a controller called 'Pages',
     * its action called 'display', and we pass a param to select the view file
     * to use (in this case, src/Template/Pages/home.ctp)...
     */
    $routes->connect('/', ['controller' => 'Pages', 'action' => 'display', 'home']);

    /**
     * ...and connect the rest of 'Pages' controller's URLs.
     */
    $routes->connect('/pages/*', ['controller' => 'Pages', 'action' => 'display']);

    /**
     * Custom routes
     */
    $routes->connect('/newsletter', ['controller' => 'Pages', 'action' => 'display', 'newsletter']);
    $routes->connect('/newsletter/freelancers', ['controller' => 'Pages', 'action' => 'display', 'newsletter_freelancers_signup']);
    $routes->connect('/newsletter/signup', ['controller' => 'Pages', 'action' => 'display', 'newsletter_signup']);
    $routes->connect('/search', ['controller' => 'Pages', 'action' => 'display', 'search']);
    $routes->connect('/news', ['controller' => 'Pages', 'action' => 'display', 'news']);
    $routes->connect('/documentation/videos', ['controller' => 'Pages', 'action' => 'display', 'videos']);
    $routes->connect('/privacy', ['controller' => 'Pages', 'action' => 'display', 'privacy']);
    $routes->connect('/assets', ['controller' => 'Pages', 'action' => 'display', 'assets']);
    $routes->connect('/logos', ['controller' => 'Pages', 'action' => 'display', 'trademark']);
    $routes->connect('/trademark', ['controller' => 'Pages', 'action' => 'display', 'trademark']);
	$routes->connect('/get-involved', ['controller' => 'Pages', 'action' => 'display', 'get-involved']);
	$routes->connect('/team', ['controller' => 'Pages', 'action' => 'display', 'team']);
	$routes->connect('/business-solutions', ['controller' => 'Pages', 'action' => 'display', 'business-solutions']);

	$routes->redirect('/pages/documentation', 'http://book.cakephp.org/');
    $routes->redirect('/documentation', 'http://book.cakephp.org/');
    $routes->connect('/changelogs', ['controller' => 'Changelogs', 'action' => 'index']);
    $routes->connect('/changelogs/*', ['controller' => 'Changelogs', 'action' => 'view']);
    $routes->redirect('/development', ['controller' => 'Pages', 'action' => 'display', 'business-solutions']);

	$routes->connect('/showcase', ['controller' => 'Projects', 'action' => 'index']);
	$routes->prefix('admin', function ($routes) {
		$routes->connect('/', ['controller' => 'Projects', 'action' => 'index']);
		$routes->fallbacks('DashedRoute');
	});

	/**
     * Connect catchall routes for all controllers.
     *
     * Using the argument `DashedRoute`, the `fallbacks` method is a shortcut for
     *    `$routes->connect('/:controller', ['action' => 'index'], ['routeClass' => 'DashedRoute']);`
     *    `$routes->connect('/:controller/:action/*', [], ['routeClass' => 'DashedRoute']);`
     *
     * Any route class can be used with this method, such as:
     * - DashedRoute
     * - InflectedRoute
     * - Route
     * - Or your own route class
     *
     * You can remove these routes once you've connected the
     * routes you want in your application.
     */
    $routes->fallbacks('DashedRoute');
});
Router::connect('/admin/login', ['plugin' => 'CakeDC/Users', 'controller' => 'Users', 'action' => 'login']);
/**
 * Load all plugin routes.  See the Plugin documentation on
 * how to customize the loading of plugin routes.
 */
Plugin::routes();
