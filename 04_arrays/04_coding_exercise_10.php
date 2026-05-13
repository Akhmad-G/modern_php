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
//    $waitingList = [
//      'Alex Reed',
//      'Blake Jordan',
//      'Casey Smith',
//      'Drew Alex',
//      'Elliot Ford',
//      'Finley Harper',
//      'Jordan Kay',
//      'Kim Lee',
//      'Liam Park',
//      'Morgan Drew'
//    ];
    $waitingList = ['Eva Grant', 'Ian Hope', 'Olivia Jane'];

    $priorityParticipants = [];

    $finalList = array_merge($priorityParticipants, $waitingList);
//    $finalList = array_unique($finalList);
    var_dump($finalList);
    $finalAttendees = array();
    $backupCandidates = array();
    foreach ($finalList as $name) {
      if (count($finalAttendees) < 5) {
        if (in_array($name, $finalAttendees)) continue;
        $finalAttendees[] = $name;
      } elseif (count($backupCandidates) < 3) {
        if (in_array($name, $backupCandidates) or in_array($name, $finalAttendees)) continue;
        $backupCandidates[] = $name;
        echo "\nHey $name, we want to inform you that you are one of our backup candidates. 🥳";
      } else break;
    }

    sort($finalAttendees);
    sort($backupCandidates);

    var_dump($finalAttendees, $backupCandidates);
    var_dump(array_unique(['Dylan Marsh', 'Jake Frost', 'Julia Stream', 'Ava Stone', 'Dylan Marsh', 'Emma Lake', 'Grace Hill', 'Henry Cole', 'Kyle Brook', 'Lily Snow', 'Mason Cliff', 'Nora Field', 'Sophia Forest']));

    $individualName = 'Kim Lee';
    $individualStatus = '';

    if (in_array($individualName, $finalAttendees)) {
      $individualStatus = "Final Attendee";
    } elseif (in_array($individualName, $backupCandidates)) {
      $individualStatus = "Backup Candidate";
    } elseif (in_array($individualName, $finalList)) {
      $position = array_search($individualName, $finalList) - 7;
      $individualStatus = "Waiting, position $position";
    } elseif (count($finalList) > 8 ) {
      $individualStatus = "Not found";
    }

    echo "\n" . $individualName . " you are in " . $individualStatus;

    ?>
  </pre>

</body>
</html>