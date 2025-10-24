<?php

use Core\App;
use Core\Validator;
use Core\Database;

$db = App::resolve(Database::class);

$cuid = 1;

$note = $db->query('select * from notes where idnotes = :id', [
    'id' => $_POST['id']
    ])->findOrFail();

authorize($note['user_id'] === $cuid );

$errors = [];

if (! Validator::string($_POST['body'], 1, 2500)) {
    $errors['body'] = 'Not created: enter text up to 2,500 characters';
}

if (count($errors)) {
    return view('notes/edit.view.php', [
    'heading' => 'Edit note',
    'errors' => $errors,
    'note' => $note
]);
}

$db->query('UPDATE notes SET body = :body where idnotes = :id', [
    'body' => $_POST['body'],
    'id' => $_POST['id']
]);

header('location: /notes');
exit();
