<?php

class Category
{
  public $id;
  public $name;

  public static function all()
  {
    $db = new Database(config('database'));

    $categories = $db->query(query: 'SELECT * FROM categories', class: self::class)->fetchAll();

    return $categories;
  }
}
