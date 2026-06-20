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
  <h3 style="text-align: center">Coding Exercise 8</h3>
  <pre>
    <?php

      $playlist = ['Starry Night', 'Moonlit Walk', 'Whispering Wind', 'Golden Horizon'];
      $songRecommendations = ['Ocean Waves', 'City Nights', 'Rising Sun', 'Dancing Shadows', 'Eclipse'];


      $lastIndex = count($playlist) - 1;
      $randomIndex = rand(0, count($songRecommendations) - 1);

      if (!empty($playlist)) {
        $lastPlayed = $playlist[$lastIndex];
        echo "Your lastly added song was: '$lastPlayed'.";
      }

      if (count($playlist) <= 3) {
        $playlist[] = $songRecommendations[$randomIndex];
      }

      if (count($playlist) > 10) {
        unset($playlist[0]);
      } ?>
  </pre>
</body>
</html>
