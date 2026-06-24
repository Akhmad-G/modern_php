<?php

$pdo = new PDO('mysql:host=db;dbname=note_app', 'root', 'root', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);
// var_dump(PDO::ATTR_ERRMODE);
// var_dump(PDO::ERRMODE_EXCEPTION);

var_dump($pdo);