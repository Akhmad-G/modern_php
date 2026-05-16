<!--Loyalty Points Evaluation (Part 1)-->

<?php

// The variable $loyaltyPoints will be available to you
if ($loyaltyPoints >= 3000) {
  if ($loyaltyPoints >= 6000) {
    echo "You can spend 6000 Loyalty Points for a discount of 15%.";
  } else echo "You can spend 3000 Loyalty Points for a discount of 5%.";
} else echo "You have fewer than 3000 Loyalty Points. No discount is available.";

?>

