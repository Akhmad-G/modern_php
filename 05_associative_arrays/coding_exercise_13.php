<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
  >
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../simple.css">
  <title>Coding Exercise</title>
</head>
<body>
  <h1 style="text-align: center">Coding Exercise 13</h1>
  <pre>
    <?php
      $hrSalaries = ['Alice' => 5000, 'Bob' => 6000, 'Charlie' => 5500];
      $salesSalaries = ['David' => 6200, 'Elena' => 4800, 'Fiona' => 5300];
      $itSalaries = ['George' => 5600, 'Hannah' => 5900, 'Ivan' => 6400];

      $companySalaries = array_merge($hrSalaries, $salesSalaries, $itSalaries);
      $totalBefore = array_sum(array_values($companySalaries));
      var_dump($companySalaries);
      echo "\n";

      $averageSalary = array_sum(array_values($companySalaries)) / count($companySalaries);
      echo $averageSalary . "\n";

      foreach ($companySalaries as $name => $salary) {
        if ($salary === $averageSalary) continue;
        elseif ($salary < $averageSalary) $companySalaries[$name] += 200;
        else $companySalaries[$name] -= $salary * 0.05;
      }

      var_dump($companySalaries);

      $totalAfter = array_sum(array_values($companySalaries));
      $change = $totalAfter - $totalBefore;
      if ($change < 0) {
        $change *= -1;
        echo "The net impact of the salary adjustments is a savings of \${$change} for the company.";
      } else {
        echo "The net impact of the salary adjustments is a cost increase of \${$change} for the company.";
      }

    ?>
  </pre>

</body>
</html>