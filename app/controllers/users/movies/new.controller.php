<?php

if (!auth()) {
  redirect('/session');
}

$categories = Category::all();

view('users/movies/new', ['categories' => $categories]);
