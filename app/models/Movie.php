<?php

class Movie
{

  public $id;
  public $title;
  public $description;
  public $release_year;
  public $user_id;
  public $cover;
  public $category;


  public static function all($search = '')
  {
    $db = new Database(config('database'));

    $movies = $db->query(
      query: 'SELECT movies.id, movies.title, movies.description, movies.release_year, movies.user_id, movies.cover, categories.name as category 
    FROM movies 
    LEFT JOIN categories ON categories.id = movies.category_id 
    WHERE movies.title LIKE :search OR description LIKE :search',
      class: Movie::class,
      params: ['search' => "%{$search}%"]
    )->fetchAll();

    return $movies;
  }

  public static function allByUser($id, $search = '')
  {
    $db = new Database(config('database'));

    $movies = $db->query(query: 'SELECT movies.id, movies.title, movies.description, movies.release_year, movies.user_id, movies.cover, categories.name as category 
    FROM movies 
    LEFT JOIN categories ON categories.id = movies.category_id
    WHERE movies.user_id = :id AND
    (movies.title LIKE :search OR description LIKE :search)', class: Movie::class, params: ['search' => "%{$search}%", 'id' => $id])->fetchAll();

    return $movies;
  }
}
