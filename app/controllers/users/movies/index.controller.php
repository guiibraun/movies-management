<?php

if (!auth()) {
  redirect('/session');
}

$search = $_GET['query'] ?? '';

$userId = auth()->id;

$movies = Movie::allByUser($userId, $search);

view('/users/movies/index', [
  'movies' => $movies,
  'search' => $search
]);
