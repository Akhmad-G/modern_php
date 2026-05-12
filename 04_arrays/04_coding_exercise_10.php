<!--TODO: Need to calculate position on the waiting list, excluding everyone who is on other lists.-->

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
    $waitingList = [
      'Alex Reed',
      'Blake Jordan',
      'Casey Smith',
      'Drew Alex',
      'Elliot Ford',
      'Finley Harper',
      'Jordan Kay',
      'Kim Lee',
      'Liam Park',
      'Morgan Drew'
    ];

    $waitingList = array_unique($waitingList);
    $priorityParticipants = ['Jordan Kay', 'Sam Taylor', 'Zane Pryor'];

    $finalAttendees = array();
    $backupCandidates = array();
    foreach ([...$priorityParticipants, ...$waitingList] as $name) {
      if (count($finalAttendees) < 5) {
        if (!in_array($name, $finalAttendees)) {
          $finalAttendees[] = $name;
        }
      } elseif (count($backupCandidates) < 3) {
        if (!in_array($name, $backupCandidates)) {
          $backupCandidates[] = $name;
          echo "\nHey $name, we want to inform you that you are one of our backup candidates. 🥳";
        }
      } else break;
    }

//    var_dump($finalAttendees, $backupCandidates);

    $individualName = 'Kim Lee';
    $individualStatus ='';

    if (in_array($individualName, $finalAttendees)) {
      $individualStatus = "Final Attendee";
    } elseif (in_array($individualName, $backupCandidates)) {
      $individualStatus = "Backup Candidate";
    } elseif (in_array($individualName, $waitingList)) {
      $position = array_search($individualName, $waitingList) + 1;
      $individualStatus = "Waiting, position $position";
    } else $individualStatus = "Not found";

    echo "\n" . $individualName . " you are in " . $individualStatus;

    ?>
  </pre>

</body>
</html>