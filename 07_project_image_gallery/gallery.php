<?php
include './inc/functions.inc.php';
include './inc/images.inc.php';

?>
<?php include './views/header.php'; ?>

<main class="gallery-container">
  <?php foreach ($imageTitles as $imageName => $imageTitle) : ?>
  <div class="gallery-item">
    <img src="images/<?php echo e($imageName) ?>" alt="<?php echo e($imageTitle) ?>">
    <p class="description"><a href="image.php?image=<?php echo e($imageName) ?>"><?php echo e($imageTitle) ?></a></p>
  </div>
  <?php endforeach; ?>

</main>

<?php include './views/footer.php'; ?>
