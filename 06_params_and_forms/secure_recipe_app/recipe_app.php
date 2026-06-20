<?php require_once "../../header.inc.php"; ?>

<?php
  function e($value) {
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
  }

  $pages = [
    'citrus_salmon' => 'Citrus Symphony Salmon',
    'mediterranian_pasta' => 'Mediterranean Marvel Pasta',
    'sunset_risotto' => 'Sunset Risotto',
    'tropical_tacos' => 'Tropical Tango Tacos',
  ];
?>

<form method="GET" action="recipe_app.php" style="margin: 1rem auto 0;">
  <select name="page">
    <option value="">Please select a recipe</option>
    <?php foreach ($pages as $page => $dish) : ?>
      <option
        value="<?php echo e($page) ?>"
        <?php if (!empty($_GET['page']) && $_GET['page'] == $page) echo 'selected'; ?>
      >
        <?php echo e($dish) ?>
      </option>
    <?php endforeach; ?>
  </select>
  <input type="submit" value="Submit!" />
</form>

<?php

  if (!empty($_GET['page'])) {
    $page = $_GET['page'];
    if (in_array($page, array_keys($pages))) {
//    if (!empty($pages[$page])) {
      echo file_get_contents("pages/{$page}.html");
    }
  }
?>


</body>
</html>