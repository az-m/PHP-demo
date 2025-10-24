<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$note = $db->query('select * from notes where idnotes = :id', [
    'id' => $_GET['id']
    ])->findOrFail();

authorize($note['user_id'] === $_SESSION['user']['cuid'] );

view('notes/edit.view.php', [
    'heading' => 'Edit note',
    'errors' => [],
    'note' => $note
]);