<?php
use Cake\Routing\Router;

Router::plugin(
    'Showcase',
    ['path' => '/showcase'],
    function ($routes) {
    	$routes->connect('/', ['controller' => 'Projects', 'action' => 'index']);
    	$routes->prefix('admin', function ($routes) {
    		$routes->fallbacks('DashedRoute');
    	});
        $routes->fallbacks('DashedRoute');
    }
);
