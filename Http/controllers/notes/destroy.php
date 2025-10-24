<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$note = $db->query('select * from notes where idnotes = :id', [
    'id' => $_POST['id']
])->findOrFail();

authorize($note['user_id'] === $_SESSION['user']['cuid'] );

$db->query('delete from notes where idnotes = :id', [
    'id' => $_POST['id']
]);

header('location: /notes');
exit();
