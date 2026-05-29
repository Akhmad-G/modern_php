<?php require __DIR__ . "/inc/functions.inc.php" ?>

<?php require __DIR__ . "/views/header.inc.php" ?>

<?php $dataFromJSON = json_decode(file_get_contents("./data/index.json"), true); ?>

<ul>
  <?php foreach ($dataFromJSON as $cityData) : ?>
    <li>
      <a href="city.php?<?php echo http_build_query(["city" => $cityData["city"]]) ?>">
        <?php echo e($cityData["city"] . ", " . $cityData["country"] . " (" . $cityData["flag"] . ")") ?>
      </a>
    </li>
  <?php endforeach; ?>
</ul>

<?php require __DIR__ . "/views/footer.inc.php" ?>
