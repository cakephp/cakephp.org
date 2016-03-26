<?php
use Cake\Routing\Router;

Router::plugin(
    'Showcase',
    ['path' => '/showcase'],
    function ($routes) {
        $routes->fallbacks('DashedRoute');
    }
);
