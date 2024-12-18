<?php

class Database
{
  public $db;
  public function __construct($config)
  {
    $this->db = new PDO($config['driver'] . ':' . $config['database']);
  }
}

$db = new Database(config('database'));
