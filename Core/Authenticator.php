<?php

namespace Core;

class Authenticator 
{
    public function attempt($email, $password) {
        $user = App::resolve(Database::class)->query('SELECT * FROM users WHERE email = :email', [
            'email' => $email
        ])->find();

        if ($user) {
            if (password_verify($password, $user['password'])) {
                $this->login([
                    'email' => $email
                ]);

            return true;
            }
        }

        return false;
    }

    
    public function login($user) {
        $db = App::resolve(Database::class);

        $current_user = $db->query('select * from users where email = ?', [$user['email']])->findOrFail();

        $_SESSION['user'] = [
            'cuid' => $current_user['idusers'],
            'email' => $user['email']
        ];

        session_regenerate_id(true);
    }

    public function logout() {
        Session::destroy();
    }
}