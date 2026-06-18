<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
  >
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="/simple.css">
  <title>Coding Exercise</title>
</head>
<body>
  <h1 style="text-align: center">Coding Exercise 20</h1>
  <pre>
    <?php

      require_once "./inc/functions.inc.php";

      $totalEnergyConsumption = 50000;
      $monthlyIncrease = 200;
      $efficiencyImprovement = 0.001;
      $energyCapacityThreshold = 150000;

      $months = 0;

      // Loop to forecast when energy consumption will reach or exceed the threshold
      while ($totalEnergyConsumption < $energyCapacityThreshold && $months < 12 * 50) { // Limit to 50 years
        $totalEnergyConsumption += $monthlyIncrease; // Add monthly increase.
        $totalEnergyConsumption *= (1 - $efficiencyImprovement); // Apply efficiency improvement.
        $months++; // Increment month counter.
      }


      // Display the result based on the forecast
      if ($months >= 600) {
        // Output message if the threshold is not met within 50 years
        echo "The energy consumption threshold of $energyCapacityThreshold kWh will not be met within 50 years.";
      } else {
        // Output message indicating the number of months needed to meet the threshold
        echo "It will take $months months to reach or exceed the threshold of $energyCapacityThreshold kWh.";
      }

    ?>
  </pre>

</body>
</html>