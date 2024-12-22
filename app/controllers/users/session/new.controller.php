<?php
$email = $_POST['email'];
$password = $_POST['password'];

$validation = Validation::validate([
  'email' => ['required'],
  'password' => ['required']
], $_POST);

if ($validation->rejected()) {
  redirect('/session');
}

$user = $db->query(query: 'SELECT * FROM users WHERE email = :email', params: ['email' => $email], class: User::class)->fetch();

if (!$user) {
  flash()->set('error', 'Usuário não encontrado', 'error');
  redirect('/session');
}

if (!password_verify($password, $user->password)) {
  flash()->set('error', 'Usuário ou senha incorreta', 'error');
  redirect('/session');
}


redirect('/');
