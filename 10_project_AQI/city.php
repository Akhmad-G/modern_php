<?php

require __DIR__ . "/inc/functions.inc.php";

$city = null; // ! ADD to note: use default value
// ! ADD to note : don't forget to check
if (!empty($_GET["city"])) {
  $city = $_GET["city"];
}

$cities = json_decode(
  file_get_contents(__DIR__ . "/data/index.json"),
  true
);

$filename = null;
foreach ($cities as $currentCity) {
  if ($city === $currentCity["city"]) {
    $filename = $currentCity["filename"];
    break;
  }
}

?>

<?php require __DIR__ . "/views/header.inc.php" ?>

<h2><?php echo e($filename) ?></h2>
<?php require __DIR__ . "/views/footer.inc.php" ?>
