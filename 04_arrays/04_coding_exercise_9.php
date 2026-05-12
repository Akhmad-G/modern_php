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
  <h1 style="text-align: center">Coding Exercise 9</h1>
  <pre>
    <?php
    $waitingList = ['Dawn White', 'Frank Smith', 'Bob Carter', 'Charlie Davis', 'Eve Black', 'Alice Brown', 'Alice Brown', 'Charlie Davis', 'Grace Jones', 'Hank Green', 'Eve Black', 'Dawn White'];
    $removeFromList = ['Dawn White', 'Charlie Davis'];

    $waitingList = array_unique($waitingList);
    sort($waitingList);
    var_dump($waitingList);

    $cleanedWaitingList = [];
    foreach ($waitingList as $participant) {
      if (!in_array($participant, $removeFromList)) {
        $cleanedWaitingList[] = $participant;
//        echo "Check!✅\n";
      }
    }

//    var_dump($cleanedWaitingList);

    $selectedParticipants = array();
    foreach ($cleanedWaitingList as $participant) {
      if (count($selectedParticipants) < 5) {
        $selectedParticipants[] = $participant;
      } else break;
    }

//    var_dump($selectedParticipants);
    ?>
  </pre>

  <ul>
    <?php foreach ($cleanedWaitingList as $participant) if (in_array($participant, $selectedParticipants)) : ?>
      <li><?php echo $participant . "✅ " ?></li>
    <?php else: ?>
      <li><?php echo $participant . "❌ " ?></li>
    <?php endif; ?>
  </ul>
</body>
</html>