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
  <h3 style="text-align: center">Coding Exercise 7</h3>
  <pre>
    <?php

    $playlist = ['Starry Night', 'Moonlit Walk', 'Whispering Wind', 'Golden Horizon'];


    if (!empty($playlist)) {
      if (in_array("Sunny Days", $playlist)) echo "You have great taste! 'Sunny Days' always lifts the mood!";
      elseif (count($playlist) >= 2) {
        $playlist[1] = "Solar Whispers";
        echo 'The song "Solar Whispers added into your playlist"';
      }

    } else echo "Your playlist needs an update. Time to discover more music!";
    ?>
  </pre>

</body>
</html>