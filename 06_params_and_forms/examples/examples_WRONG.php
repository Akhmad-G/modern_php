<!--

I certainly picked a fine place to try displaying all the examples in a single window
Right in the examples that rely on URL parameters!


Still, everything seems to be working correctly;


It’s just that, naturally, the examples immediately receive GET/POST requests from this document,
resulting in incorrect data.

-->

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
      <?php $path = ($page) ?>
      <a
        href="examples.php?<?php echo http_build_query(["example" => "$path"]) ?>" class="button"
        style="margin: 0 1rem;"
      >
        <?php echo e($name); ?>
      </a>
    <?php endforeach; ?>
  </nav>

  <?php
    if (!empty($_GET["example"])) {
      $example = $_GET["example"];
    }
    if (in_array($example, array_keys($pages))) {
      echo file_get_contents("./pages/{$example}.php");
    }

  ?>

</main>

</body>
</html>