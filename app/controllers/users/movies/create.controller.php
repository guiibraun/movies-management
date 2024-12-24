<?php

if (!auth()) {
  redirect('/session');
}

$validations = Validation::validate([
  'title' => ['required'],
  'release_year' => ['required'],
  'category' => ['required'],
  'description' => ['required'],

], $_POST);

if ($validations->rejected()) {
  redirect('/user/movies/new');
}

$title = $_POST['title'];
$description = $_POST['description'];
$release_year = $_POST['release_year'];
$category_id = $_POST['category'];

$newCoverName = md5(rand());
$extension = pathinfo($_FILES['cover']['name'], PATHINFO_EXTENSION);

$cover = "assets/images/uploads/" . $newCoverName . '.' . $extension;

move_uploaded_file($_FILES['cover']['tmp_name'], $cover);

Movie::create([
  'title' => $title,
  'description' => $description,
  'category_id' => $category_id,
  'release_year' => $release_year,
  'cover' => $cover,
]);
dd($cover);
