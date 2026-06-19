<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
  >
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="/simple.css">
  <title>Travel Showcase</title>
</head>
<body>
  <?php require_once __DIR__ . "/inc/functions.inc.php"; ?>

  <?php
    $handle = opendir(__DIR__ . "/images");

    $images = [];
    $allowedImageExtensions = [
      "jpg",
      "jpeg",
      "png"
    ];
    while (($currentFile = readdir($handle)) !== false) {
      if ($currentFile === "." || $currentFile === "..") continue;
      $extension = pathinfo($currentFile, PATHINFO_EXTENSION);

      if (!in_array($extension, $allowedImageExtensions)) continue;
      else {
        $images[] = $currentFile;
      }
    }

    $imageDescriptions = [];
    foreach ($images as $image) {
      $name = pathinfo($image, PATHINFO_FILENAME);
      if (file_exists(__DIR__ . "/images/" . $name . ".txt")) {
        $imageDescriptions[$image] = explode("\n", file_get_contents(__DIR__ . "/images/" . $name . ".txt"));
      }
    }
    //      var_dump($imageDescriptions);

    closedir($handle);
  ?>

  <main>
    <?php foreach ($imageDescriptions as $image => $text): ?>
      <h3><?php echo e($text[0]); ?></h3>
      <img src="<?php echo "./images/" . rawurlencode($image) ?>" alt="<?php echo e($text[0]) ?>">
      <?php for ($paragraphNum = 1; $paragraphNum < count($text); $paragraphNum++): ?>
        <p><?php echo e($text[$paragraphNum]) ?></p>
      <?php endfor; ?>
    <?php endforeach; ?>
  </main>
</body>
</html>

<?php
