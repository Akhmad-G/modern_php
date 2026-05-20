<?php
include './inc/functions.inc.php';
include './inc/images.inc.php';

?>
<?php include './views/header.php'; ?>

<main class="">

  <?php $selectedImage = $_GET["image"] ?>

  <h1><?php echo e($imageTitles[$selectedImage]) ?></h1>
  <img src="images/<?php echo e($selectedImage) ?>" alt="<?php echo e($imageTitles[$selectedImage]) ?>">
  <p class="description"><?php echo e($imageDescriptions["$selectedImage"]) ?></p>
  <p><a href="./gallery.php">Back to Gallery</a></p>

</main>

<?php include './views/footer.php'; ?>
