<!--Loyalty Points Evaluation (Part 2)-->

<?php

// Assume that $totalCost and $loyaltyPoints are already set

if ($loyaltyPoints < 3000) {
  $tax = $totalCost * 0.08;
  $finalPrice = $totalCost + $tax;
  $newLoyaltyPoints = $loyaltyPoints + $finalPrice * 100;
  echo("You have fewer than 3000 Loyalty Points. No discount is available. 
    Your final price (after taxes) would be \${$finalPrice}. 
    Your new Loyalty Balance would be: $newLoyaltyPoints.");
} else {
  $discount = $totalCost * 0.05;
  $tax = ($totalCost - $discount) * 0.08;
  $finalPrice = $totalCost - $discount + $tax;
  $newLoyaltyPoints = $loyaltyPoints - 3000 + $finalPrice * 100;
  echo("You can spend 3000 Loyalty Points for a discount of 5%. 
    Your final price (after discount and taxes) would be \${$finalPrice}. 
    Your new Loyalty Balance would be: $newLoyaltyPoints.");

  if ($loyaltyPoints >= 6000) {
    $discount = $totalCost * 0.15;
    $tax = ($totalCost - $discount) * 0.08;
    $finalPrice = $totalCost - $discount + $tax;
    $newLoyaltyPoints = $loyaltyPoints - 6000 + $finalPrice * 100;
    echo("You can spend 6000 Loyalty Points for a discount of 15%. 
        Your final price (after discount and taxes) would be \${$finalPrice}. 
        Your new Loyalty Balance would be: $newLoyaltyPoints.");
  }
}

?>

