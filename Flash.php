<?php

const FLASH = 'FLASH_MESSAGES';

const FLASH_ERROR = 'error';
const FLASH_WARNING = 'warning';
const FLASH_INFO = 'info';
const FLASH_SUCCESS = 'success';

class Flash
{
  public function set(string $name, $message, string $type)
  {
    if (isset($_SESSION[FLASH][$name])) {
      unset($_SESSION[FLASH][$name]);
    }

    $_SESSION[FLASH][$name] = ['message' => $message, 'type' => $type];
  }

  public function get(string $name)
  {
    if (!isset($_SESSION[FLASH][$name])) {
      return;
    }

    $message = $_SESSION[FLASH][$name];

    unset($_SESSION[FLASH][$name]);

    return $message;
  }
}
