<?php
require 'functions.php';

$path = parse_url(($_SERVER['REQUEST_URI']))['path'];

$method = $_SERVER['REQUEST_METHOD'];

$routes = [
  [
    'PATH' => '/',
    'CONTROLLER' => 'main/index.php',
    'METHOD' => 'GET'
  ],
  [
    'PATH' => '/sobre',
    'CONTROLLER' => 'about/index.php',
    'METHOD' => 'GET'
  ]
];


$controller;

foreach ($routes as $key => $val) {
  if ($val['PATH'] === $path && $val['METHOD'] === $method) {

    $controller = $val['CONTROLLER'];
    break;
  }
}

if (isset($controller)) {
  require "controllers/{$controller}";
} else {
  echo '404';
}
