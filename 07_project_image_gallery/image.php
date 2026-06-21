<?php
include './inc/functions.inc.php';
include './inc/images.inc.php';

?>
<?php include './views/header.php'; ?>

<div>
  <?php if (!empty($_GET["image"]) && !empty($imageTitles[$_GET["image"]])): ?>
    <?php $selectedImage = $_GET["image"]; ?>
    <h2><?php echo e($imageTitles[$selectedImage]); ?></h2>
    <img class="poster" src="./images/<?php echo rawurlencode($selectedImage); ?>"
         alt="<?php echo e($imageTitles[$selectedImage]) ?>"
    >
    <p class="description"><?php echo str_replace("\n", "<br />", e($imageDescriptions["$selectedImage"])); ?></p>
  <?php else: ?>
    <div class="notice">
      This image could not be found
    </div>
  <?php endif; ?>

  <a href="./gallery.php" class="backButton">Back to Gallery</a>
</div>

<?php include './views/footer.php'; ?>
