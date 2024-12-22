<?php

class Movie
{

  public $id;
  public $title;
  public $description;
  public $release_year;
  public $category_id;
  public $user_id;
  public $cover;


  public static function all($search = '')
  {
    $db = new Database(config('database'));

    $movies = $db->query(query: 'SELECT * FROM movies WHERE title LIKE :search OR description LIKE :search', class: Movie::class, params: ['search' => "%{$search}%"])->fetchAll();

    return $movies;
  }
}
