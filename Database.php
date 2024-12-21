<?php

class Database
{
  public $db;
  public function __construct($config)
  {
    $this->db = new PDO($config['driver'] . ':' . $config['database']);
  }

  public function query($query, $params = [], $class = null) {
    $prepare = $this->db->prepare($query, $params);

    if($class){
      $prepare->setFetchMode(PDO::FETCH_CLASS, $class);
    }

    $prepare->execute($params);

    return $prepare;
  }

  public function fetchAll($query, $params = []){
    $query = $this->query($query, $params);

    return $query->fetchAll();
  }

  public function fetch($query, $params = []){
    $query = $this->query($query, $params);

    return $query->fetch();
  }
}

$db = new Database(config('database'));
