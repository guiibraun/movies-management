<?php
$email = $_POST['email'];
$password = $_POST['password'];

$user = $db->query(query: 'SELECT * FROM users WHERE email = :email', params: ['email' => $email])->fetch();

dd($user);

redirect('/session');