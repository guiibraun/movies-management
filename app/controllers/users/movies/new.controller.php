<?php

$categories = Category::all();

view('users/movies/new', ['categories' => $categories]);
