<?php
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$validations = Validation::validate([
  'name' => ['required'],
  'email' => ['required', 'email', 'unique'],
  'password' => ['required']
], $_POST);

if ($validations->rejected()) {
  redirect('/registration');
}

$user = $db->query(query: 'INSERT INTO users (name, email, password) VALUES (:name, :email, :password)', params: ['email' => $email, 'name' => $name, 'password' => password_hash($password, PASSWORD_BCRYPT)]);

flash()->set('success', 'Conta criada com sucesso!', 'success');

redirect('/');
