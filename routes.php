<?php

return [
  [
    'path' => '/',
    'controller' => 'main/index',
    'method' => 'GET'
  ],
  [
    'path' => '/sobre',
    'controller' => 'about/index',
    'method' => 'GET'
  ],
  [
    'path' => '/session',
    'controller' => 'users/session/index',
    'method' => 'GET'
  ],
  [
    'path' => '/session',
    'controller' => 'users/session/new',
    'method' => 'POST'
  ]
];
