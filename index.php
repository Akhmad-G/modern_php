<?php
  require_once "./header.inc.php";
  require_once "./functions.inc.php";
?>


<main>
  <ul>
    <?php foreach ($topics as $topic => $link): ?>
      <li>
        <a href="<?php echo e($link); ?>"><?php echo e($topic); ?></a>
      </li>
    <?php endforeach; ?>
  </ul>
</main>

</body>
</html>