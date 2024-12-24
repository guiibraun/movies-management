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

function image($file)
{
  return "/assets/images/{$file}";
}

function config($key)
{
  $config = require '../configs.php';

  return $config[$key];
}

function redirect($path)
{
  header("location: {$path}");
  exit;
}

function flash()
{
  return new Flash();
}


function auth()
{
  if (!isset($_SESSION['auth'])) {
    return null;
  }

  return $_SESSION['auth'];
}

function base_path($path)
{
  return BASE_DIR . $path;
}

function base_public($path)
{
  return PUBLIC_DIR . $path;
}
