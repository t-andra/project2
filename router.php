<?php
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes=[
'/'=>'controllers/index.php',
'/services'=>'controllers/services.php',
'/competencies'=>'controllers/competencies.php',
'/projects'=>'controllers/projects.php',
'/partnership'=>'controllers/partnership.php',
'/feedback'=>'controllers/feedback.php',
];

function routeToController($uri, $routes) {
if (array_key_exists($uri,$routes)) {

require $routes[$uri];
}
else {
abort();
}
}

function abort($code=404) {
http_response_code($code);
require "views/{$code}.php";
dd();
}

routeToController($uri, $routes);