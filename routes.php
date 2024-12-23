<?php

return [
  [
    'path' => '/movies/:id',
    'controller' => 'movies/show',
    'method' => 'GET'
  ],
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
  ],
  [
    'path' => '/registration',
    'controller' => 'users/registration/index',
    'method' => 'GET'
  ],
  [
    'path' => '/registration',
    'controller' => 'users/registration/new',
    'method' => 'POST'
  ],
  [
    'path' => '/user/movies',
    'controller' => 'users/movies/index',
    'method' => 'GET'
  ],
];
