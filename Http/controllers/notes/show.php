<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$cuid = 1;

$note = $db->query('select * from notes where idnotes = :id', [
    'id' => $_GET['id']
    ])->findOrFail();

authorize($note['user_id'] === $cuid );

view('notes/show.view.php', [
    'heading' => 'My Notes',
    'note' => $note
]);

