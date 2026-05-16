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
  <h1 style="text-align: center">Coding Exercise 11</h1>
  <pre>
    <?php
    $hrSalaries = ['Alice' => 5000, 'Bob' => 6000, 'Charlie' => 5500];
    $salesSalaries = ['David' => 6200, 'Elena' => 4800, 'Fiona' => 5300];
    $itSalaries = ['Fiona' => 5300, 'George' => 5600, 'Hannah' => 5900, 'Ivan' => 6400];

    $hrTotal = array_sum(array_values($hrSalaries));
    $salesTotal = array_sum(array_values($salesSalaries));
    $itTotal = array_sum(array_values($itSalaries));

    $totals = [
      "HR" => $hrTotal,
      "Sales" => $salesTotal,
      "IT" => $itTotal,
      ];

    foreach ($totals as $department => $expenditure) {
      if ($expenditure === max($totals)) {
        $maxDept = $department;
        break;
      }
    }

    ?>
  </pre>

</body>
</html>