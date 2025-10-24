<?php

use Core\App;
use Core\Authenticator;
use Core\Database;
use Http\Forms\LoginForm;

$db = App::resolve(Database::class);

$email = $_POST['email'];
$password = $_POST['password'];

$form = LoginForm::validate([
    'email' => $email,
    'password' => $password
]);

$user = $db->query('SELECT * FROM users WHERE email = :email', [
    'email' => $email
])->find();

if ($user) {
        header('location: /login');
        exit();
    } else {
        $db->query('INSERT INTO users(email, password) VALUES(:email, :password)',[
            'email' => $email,
            'password' => password_hash($password, PASSWORD_BCRYPT)
    ]);

    (new Authenticator)->login($user);

    header('location: /');
    exit();
}
