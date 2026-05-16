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
}
