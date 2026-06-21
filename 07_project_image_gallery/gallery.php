<?php
  include './inc/functions.inc.php';
  include './inc/images.inc.php';

?>
<?php include './views/header.php'; ?>

<div class="gallery-container">
  <?php foreach ($imageTitles as $src => $title) : ?>
    <a href="image.php?<?php echo http_build_query(["image" => $src]); ?>" class="gallery-item">
      <img class="grid-image" src="images/<?php echo rawurlencode($src); ?>" alt="<?php echo e($title) ?>" />
      <p class="image-description"><?php echo e($title) ?></p>
    </a>
  <?php endforeach; ?>
</div>

<?php include './views/footer.php'; ?>
