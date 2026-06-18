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
      $years = 5;

      // Variable to store the forecasted energy consumption after calculations
      $forecastedEnergyConsumption = $totalEnergyConsumption;;

      for ($month = 1; $month <= 12 * $years; $month++) {

        // Add the monthly increase in energy consumption due to new developments
        $forecastedEnergyConsumption += $monthlyIncrease;

        // Apply the efficiency improvement factor to reduce the total energy consumption
        $forecastedEnergyConsumption *= (1 - $efficiencyImprovement);
      }

      // Round the final forecasted energy consumption value to two decimal places
      $forecastedEnergyConsumption = round($forecastedEnergyConsumption, 2);

      echo e($forecastedEnergyConsumption);

    ?>
  </pre>

</body>
</html>