<?php

function dump($value)
{
  echo '<pre>';
  var_dump($value);
  echo '</pre>';
}


function dd($value)
{
  dump($value);
  exit;
}

function view($view, $data = [], $layout = 'default')
{

  extract($data);
  require "../app/views/layouts/{$layout}.php";
}
