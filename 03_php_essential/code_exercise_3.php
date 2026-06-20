<!--Online Shop Prices-->

<?php

  // Assume $price is already set

  $discount = $price / 100 * 30;
  $priceAfterDiscount = $price - $discount - 10;
  $tax = $priceAfterDiscount / 100 * 20;
  $finalPrice = $priceAfterDiscount + $tax;
  $loyalty = $finalPrice * 100;

  echo "After applying discounts and taxes, the item's price is reduced from \${$price} to \${$finalPrice}, and you've earned $loyalty loyalty points.";

?>