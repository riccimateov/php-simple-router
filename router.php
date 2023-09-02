<?php

$routes = array(
    array(
        'path_pattern' => '/^index$/',
        'controller' => 'controllers/main.controller.php',
        'name' => 'index',
    ),
    array(
        'path_pattern' => '/^profile\/(?P<id>\d+)$/',
        'controller' => 'controllers/profile.controller.php',
        'name' => 'Profile',
    ),

);

function router($routes)
{
    $route_match = false;
    $url_path = 'index';
    $url_params = array();

    if (isset($_GET['path'])) {
        $url_path = $_GET['path'];
        if (substr($url_path, -1) == '/') {
            $url_path = substr($url_path, 0, -1);
        }
    }

    foreach ($routes as $route) {
        if (preg_match($route['path_pattern'], $url_path, $matches)) {
            $url_params = array_merge($url_params, $matches);
            $route_match = true;
            break;
        }
    }

    if (!$route_match) {
        exit('URL path "' . $url_path . '" is not defined.');
    }

    if (file_exists($route['controller'])) {
        include($route['controller']);
    } else {
        exit('Controller "' . $route['controller'] . '" does not exists.');
    }
}

router($routes);
?>