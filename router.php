<?php

$routes = require 'routes.php';

$path = parse_url(($_SERVER['REQUEST_URI']))['path'];

$method = $_SERVER['REQUEST_METHOD'];

$controller;

foreach ($routes as $key => $val) {
  if ($val['path'] === $path && $val['method'] === $method) {

    $controller = $val['controller'];
    break;
  }
}


if (isset($controller)) {
  require "../app/controllers/{$controller}.controller.php";
} else {
  echo '404';
}
