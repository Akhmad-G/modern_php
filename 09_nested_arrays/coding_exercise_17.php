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
  <h1 style="text-align: center">Coding Exercise 17</h1>
  <pre>
    <?php

      require_once "./inc/functions.inc.php";

      $campaigns = [
        'Spring Sale' => [
          'AdSet1' => [
            'name' => 'Discounted Gadgets'
          ],
          'AdSet2' => [
            'name' => 'Outdoor Equipment'
          ],
        ],
        'Holiday Deals' => [
          'AdSet1' => [
            'name' => 'Winter Apparel'
          ],
          'AdSet2' => [
            'name' => 'Electronics Special'
          ],
        ],
      ];

      // I didn't think to use `implode()` to better format the output by selecting the desired separator.

      foreach ($campaigns as $campaign => $adSet) {
        echo e("- " . $campaign . ": ");
        $adSetsName = [];
        foreach ($adSet as $set => $item) {
          $adSetsName[] = '"' . $item["name"] . '"';
        }
        echo e(implode(", ", $adSetsName) . "\n");
      }

    ?>
  </pre>

</body>
</html>