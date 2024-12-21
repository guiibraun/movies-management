<?php
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$user = $db->query(query: 'INSERT INTO users (name, email, password) VALUES (:name, :email, :password)', params: ['email' => $email, 'name' => $name, 'password' => $password]);

redirect('/registration');
