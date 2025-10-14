<?php

require 'Validator.php';

$config = require "config.php";
$db = new Database($config['database']);

$heading = "Create note";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $errors = [];

    if (! Validator::string($_POST['body'], 1, 2500)) {
        $errors['body'] = 'Not created: enter text up to 2,500 characters';
    }

    if (empty($errors)) {
        $db->query('INSERT INTO notes(body, user_id) VALUES(:body, :user_id)',[
            'body' => $_POST['body'],
            'user_id' => 1
        ]);
    }
}

require 'views/note-create.view.php';