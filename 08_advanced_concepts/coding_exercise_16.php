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
  <h1 style="text-align: center">Coding Exercise 16</h1>
  <pre>
    <?php

      require_once "examples/inc/functions.inc.php";

      $emailTemplate = "Dear [NAME],\n\nWe're excited to share with you this week's featured article:\n\n[ARTICLE]\n\nUpcoming Events:\n[EVENTS]\n\nBest regards,\nYour Friendly Team";
      $recipient = ['name' => 'Alice', 'segment' => 'Tech Enthusiast', 'email' => 'alice@example.com'];
      $segmentContent = [
        'Tech Enthusiast' => "The Latest in Tech: Top Gadgets",
        'Health Guru' => "Transform Your Lifestyle: The Best of Health and Fitness",
      ];
      $events = [
        "Webinar on Future Tech Trends",
        "Photography Workshop",
        "Health and Wellness Retreat"
      ];

      $personalizedEmail = str_replace("[NAME]", $recipient["name"], $emailTemplate);

      $personalizedEmail = str_replace("[ARTICLE]", $segmentContent[$recipient["segment"]], $personalizedEmail);

      $eventsStr = "- " . implode("\n- ", $events);

      $personalizedEmail = str_replace("[EVENTS]", $eventsStr, $personalizedEmail);
      var_dump($personalizedEmail);

    ?>
  </pre>

</body>
</html>