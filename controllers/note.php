<?php

$config = require "config.php";
$db = new Database($config['database']);

$heading = 'Note';

$note = $db->query('select * from notes where idnotes = :id', [
    'id' => $_GET['id']
    ])->findOrFail();

$cuid = 1;

authorize($note['user_id'] === $cuid );

require "views/note.view.php";