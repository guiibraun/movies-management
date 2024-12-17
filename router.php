<?php

$routes = require 'routes.php';

$path = parse_url(($_SERVER['REQUEST_URI']))['path'];

$method = $_SERVER['REQUEST_METHOD'];

$controller;

foreach ($routes as $key => $val) {
  if ($val['PATH'] === $path && $val['METHOD'] === $method) {

    $controller = $val['CONTROLLER'];
    break;
  }
}


if (isset($controller)) {
  require "controllers/{$controller}.controller.php";
} else {
  echo '404';
}
