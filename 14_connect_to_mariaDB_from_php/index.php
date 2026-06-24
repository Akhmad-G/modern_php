<?php require_once "../header.inc.php" ?>
<h3><?php echo e(array_keys($topics)[13]) ?></h3>

<?php
  $pdo = new PDO("mysql:host=db;dbname=note_app", "root", "root", [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
  ]);
?>

<main>
  <ol>
    <li><a href="./examples/examples.php">Examples from Course</a></li>
  </ol>
  <p>Database connection config for DDEV:</p>
  <pre>
  $pdo = new PDO("mysql:host=db;dbname=note_app", "root", "root", [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
  ]);
</pre>
</main>
