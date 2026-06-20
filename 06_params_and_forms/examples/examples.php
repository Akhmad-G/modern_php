<?php require_once "../../header.inc.php" ?>
<?php require_once "../../functions.inc.php" ?>
<h3>Examples</h3>
<main>
  <?php
    $pages = [
      "short_if" => "Short 'if'",
      "get" => "GET",
      "form" => "FORM",
      "post" => "POST",
      "xss" => "XXS",
    ];
  ?>

  <nav>
    <?php foreach ($pages as $page => $name): ?>
      <?php $path = "pages/" . e($page) . ".php"; ?>
      <a
        href="<?php echo e($path) ?>"
        class="button"
        style="margin: 0 1rem;"
      >
        <?php echo e($name); ?>
      </a>
    <?php endforeach; ?>
  </nav>
</main>

</body>
</html>