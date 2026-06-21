<!--#TODO: Need to try doing it like in Section 6, so that all the examples are on a single page.-->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" type="text/css" href="/simple.css" />
</head>
<body>
  <h2>For Loop</h2>
  <pre><?php

      for ($x = 0; $x <= 10; $x = $x + 1) {
        var_dump($x);
      }
      // for ($x = 0; $x <= 10; $x = $x + 1) var_dump($x);
      for ($x = 0; $x <= 10; $x++) {
        var_dump($x);
      }
      for ($x = 0; $x <= 10; $x += 2) {
        var_dump($x);
      }
      /*
      for ($x = 0; $x >= -10; $x++) {
          var_dump($x);
      }
      */

    ?></pre>

  <ul>
    <?php for ($number = 0; $number <= 100; $number++): ?>
      <?php if ($number === 10) continue; ?>
      <?php if ($number === 50) break; ?>
      <li>
        <?php echo $number; ?>
      </li>
    <?php endfor; ?>
  </ul>

  <h2>While Loop</h2>
  <pre><?php

      $sum = 0;
      $number = 0;
      while ($sum < 100) {
        // $sum+=$number;
        $sum = $sum + $number;

        // $number++;
        $number = $number + 1;
      }
      var_dump($number);
      var_dump($sum);

    ?></pre>


</body>
</html>