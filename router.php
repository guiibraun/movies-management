<?php

$routes = require 'routes.php';

$path = parse_url(($_SERVER['REQUEST_URI']))['path'];

$method = $_SERVER['REQUEST_METHOD'];

$controller = null;

foreach ($routes as $key => $val) {
  $pattern = preg_replace('/:\w+/', '(\w+)', $val['path']);
  $pattern = '#^' . $pattern . '$#';

  if ($val['method'] === $method && preg_match($pattern, $path, $matches)) {
    $controller = $val['controller'];
    array_shift($matches);
    $params = $matches;

    break;
  }
}


if (isset($controller)) {
  require "../app/controllers/{$controller}.controller.php";
} else {
  echo '404';
}
