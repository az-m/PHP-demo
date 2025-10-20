<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$cuid = 1;

$note = $db->query('select * from notes where idnotes = :id', [
    'id' => $_POST['id']
])->findOrFail();

authorize($note['user_id'] === $cuid );

$db->query('delete from notes where idnotes = :id', [
    'id' => $_POST['id']
]);

header('location: /notes');
exit();
