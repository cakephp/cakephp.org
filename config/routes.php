<?php
/**
 * Routes configuration.
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * It's loaded within the context of `Application::routes()` method which
 * receives a `RouteBuilder` instance `$routes` as method argument.
 *
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

use Cake\Http\Middleware\CsrfProtectionMiddleware;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;

/*
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
 */
/** @var \Cake\Routing\RouteBuilder $routes */
$routes->setRouteClass(DashedRoute::class);

Router::addUrlFilter(function ($params, $request) {
    if ($request->getParam('language') && !isset($params['language'])) {
        $params['language'] = $request->getParam('language');
    }

    return $params;
});

$basicRoutes = function (RouteBuilder $routes) {

    // Register scoped middleware for in scopes.
    $routes->registerMiddleware('csrf', new CsrfProtectionMiddleware([
        'httponly' => true,
    ]));

    /*
     * Apply a middleware to the current route scope.
     * Requires middleware to be registered through `Application::routes()` with `registerMiddleware()`
     */
    $routes->applyMiddleware('csrf');

    /**
     * Here, we are connecting '/' (base path) to a controller called 'Pages',
     * its action called 'display', and we pass a param to select the view file
     * to use (in this case, src/Template/Pages/home.ctp)...
     */
    $routes->connect('/', ['controller' => 'Pages', 'action' => 'display', 'home']);

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
    $routes->connect('/roadtrip', ['controller' => 'Pages', 'action' => 'display', 'road_trip']);

    $routes->redirect('/pages/documentation', 'http://book.cakephp.org/5');
    $routes->redirect('/documentation', 'http://book.cakephp.org/5');
    $routes->connect('/changelogs', ['controller' => 'Changelogs', 'action' => 'index']);
    $routes->connect('/changelogs/*', ['controller' => 'Changelogs', 'action' => 'view']);
    $routes->redirect('/development', ['controller' => 'Pages', 'action' => 'display', 'business-solutions']);

    $routes->connect('/showcase', ['controller' => 'Projects', 'action' => 'index']);
    $routes->prefix('admin', function ($routes) {
        $routes->connect('/', ['controller' => 'Dashboards', 'action' => 'index']);
        $routes->fallbacks('DashedRoute');
    });
    $routes->connect('/meetups', ['controller' => 'Pages', 'action' => 'display', 'meetups']);

    /**
     * ...and connect the rest of 'Pages' controller's URLs.
     */
    $routes->connect('/pages/*', ['controller' => 'Pages', 'action' => 'display']);

    $routes->fallbacks();
};

$realRoutes = function ($routes) use ($basicRoutes) {
    $routes->scope('/', $basicRoutes);

    return $routes;
};

$routes->scope('/jp', ['language' => 'ja_JP'], $realRoutes);
$routes->scope('/fr', ['language' => 'fr_FR'], $realRoutes);
$routes->scope('/pt', ['language' => 'pt_BR'], $realRoutes);
$routes->scope('/', ['language' => 'en'], $realRoutes);
$routes->scope('/', $realRoutes);
