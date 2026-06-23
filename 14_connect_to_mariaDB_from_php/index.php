<?php require_once "../header.inc.php" ?>
  <h3><?php echo e(array_keys($topics)[13]) ?></h3>

<?php
  $pdo = new PDO("mysql:host=db;dbname=note_app", "root", "root", [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
  ]);
  var_dump($pdo);
?>
