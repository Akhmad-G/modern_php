<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./styles/simple.css" />
  <link rel="stylesheet" href="./styles/custom.css" />
  <?php if (!empty($pageTitle)): ?>
    <title>Culinary Cove &bull; <?php echo $pageTitle; ?></title>
  <?php else: ?>
    <title>Culinary Cove</title>
  <?php endif; ?>

  <!--    <title>Culinary Cove--><?php //if (!empty($pageTitle)): ?><!-- &bull; -->
  <?php //echo $pageTitle; endif; ?><!--</title>-->

</head>
<body>
  <!--    --><?php
  /*        if (empty($headerImg)) {
              $headerImg = "images/pexels-engin-akyurt-1435904.jpg";
          }
      */ ?>
  <header class="header-with-background"
          style="background-image: url('<?php if (!empty($headerImg)) echo $headerImg; else echo "images/pexels-engin-akyurt-1435904.jpg" ?>'); "
  >
    <h1>Culinary Cove</h1>
    <p>Your sanctuary for exceptional flavors</p>
    <nav>
      <!--          If you set this condition at the very beginning, you can eliminate all the `!empty($pageKey)` checks, since they are needed solely to prevent errors.
                --><?php
      /*            if (!isset($pageKey)) $pageKey = '';
                */ ?>

      <!--          Option 1-->
      <?php if (!empty($pageKey) && $pageKey === 'mission'): ?>
        <a class="active" href="our-mission.php">Our mission</a>
      <?php else: ?>
        <a href="our-mission.php">Our mission</a>
      <?php endif; ?>

      <!--          Option 2-->
      <a class="<?php if (!empty($pageKey) && $pageKey === 'ingredients') echo 'active'; ?>" href="ingredients.php">Ingredients</a>

      <!--          Option 3-->
      <a
        <?php if (!empty($pageKey) && $pageKey === 'menu'): ?>
          class="active"
        <?php endif; ?>
        href="menu.php"
      >Menu</a>
    </nav>
  </header>

  <main>