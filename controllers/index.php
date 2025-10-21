<?php

$_SESSION['name'] = 'Me';

view('index.view.php', [
    'heading' => 'Home'
]);