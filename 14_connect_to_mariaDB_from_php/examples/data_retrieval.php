<?php

$pdo = new PDO('mysql:host=db;dbname=note_app', 'root', 'root', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);

$stmt = $pdo->prepare('SELECT * FROM `notes`');
$stmt->execute();
$results = $stmt->fetchAll();
var_dump($results);