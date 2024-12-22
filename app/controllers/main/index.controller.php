<?php
$search = $_GET['query'] ?? '';

$movies = Movie::all($search);

view('main/index', [
  'movies' => $movies,
  'search' => $search
]);
