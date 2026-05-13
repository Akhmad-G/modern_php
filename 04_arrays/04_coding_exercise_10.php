<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
  >
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="simple.css">
  <title>Coding Exercise</title>
</head>
<body>
  <h1 style="text-align: center">Coding Exercise 10</h1>
  <pre>
    <?php
    $waitingList = ['Ava Stone', 'Ben Short', 'Chloe Hart', 'Dylan Marsh', 'Emma Lake', 'Finn Gale'];

    $priorityParticipants = ['Ben Short', 'Chloe Hart', 'Zane Pryor'];

    $finalList = array_merge($priorityParticipants, $waitingList);
    $finalList = array_unique($finalList);

    $finalAttendees = array_slice($finalList, 0, 5);
    $backupCandidates = array_slice($finalList, 5, 3);
    $waitingList = array_splice($finalList, 8);

    foreach ($backupCandidates as $name) {
      echo "\nHey $name, we want to inform you that you are one of our backup candidates. 🥳";
    }

    sort($finalAttendees);
    sort($backupCandidates);

    var_dump($finalAttendees, $backupCandidates);

    $individualName = 'FDsf';
    $individualStatus = 'Not found';

    if (in_array($individualName, $finalAttendees)) {
      $individualStatus = "Final Attendee";
    } elseif (in_array($individualName, $backupCandidates)) {
      $individualStatus = "Backup Candidate";
    } elseif (in_array($individualName, $waitingList)) {
      $position = array_search($individualName, $waitingList) + 1;
      $individualStatus = "Waiting, position $position";
    }

    if ($individualStatus !== "Not found") echo "\n" . $individualName . " you are in " . $individualStatus;
    else echo "\n" . $individualName . $individualStatus;

    ?>
  </pre>

</body>
</html>