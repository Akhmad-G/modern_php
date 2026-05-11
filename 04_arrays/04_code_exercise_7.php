<?php

$playlist = ['Starry Night', 'Moonlit Walk', 'Whispering Wind', 'Golden Horizon'];


if (!empty($playlist)) {
  if (in_array("Sunny Days", $playlist)) echo "You have great taste! 'Sunny Days' always lifts the mood!";
  elseif (count($playlist) >= 2) $playlist[1] = "Solar Whispers";

} else echo "Your playlist needs an update. Time to discover more music!";
