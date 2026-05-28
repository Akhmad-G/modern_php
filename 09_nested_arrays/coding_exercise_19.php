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
  <h1 style="text-align: center">Coding Exercise 19</h1>
  <pre>
    <?php

    require_once "./inc/functions.inc.php";

    $campaigns = [
      'Tech Trends Extravaganza' => [
        'AdSet1' => [
          'name' => 'Launch Special',
          'targetAudience' => ['Young Adults', 'Tech Enthusiasts'],
          'clicks' => 150,
          'impressions' => 10000
        ],
        'AdSet2' => [
          'name' => 'Holiday Sale',
          'targetAudience' => ['Families', 'Holiday Shoppers'],
          'clicks' => 250,
          'impressions' => 15000
        ],
      ],
      'Seasonal Fashion Frenzy' => [
        'AdSet1' => [
          'name' => 'Spring Collection',
          'targetAudience' => ['Fashion Enthusiasts', 'Women', 'Parents'],
          'clicks' => 200,
          'impressions' => 12000
        ],
        'AdSet2' => [
          'name' => 'Back to School',
          'targetAudience' => ['Students', 'Parents', 'Young Adults'],
          'clicks' => 300,
          'impressions' => 18000
        ],
      ],
    ];

    $specifiedAudience = "";

    $campaignsCTR = [];
    $maxCTR = 0;
    $highestCTR = [];
    $uniqueTargetAudiences = [];

    foreach ($campaigns as $campaign => $adSet) {
      $campaignClicks = 0;
      $campaignImpressions = 0;
      foreach ($adSet as $set => $item) {
        $campaignClicks += $item["clicks"] ?? 0;
        $campaignImpressions += $item["impressions"] ?? 1;
        foreach ($item["targetAudience"] as $audience) {
          if (!in_array($audience, $uniqueTargetAudiences)) {
            $uniqueTargetAudiences[] = $audience;
          };
        }
      }
      $ctr = round(($campaignClicks / $campaignImpressions) * 100, 2);
      if ($ctr > $maxCTR) {
        $maxCTR = $ctr;
        $highestCTR = ["$campaign" => $maxCTR];
      }
      $campaignsCTR[$campaign] = $ctr;
    }

    //    var_dump($campaignsCTR);
    //    var_dump($highestCTR);
        var_dump($uniqueTargetAudiences);


    ?>
  </pre>

</body>
</html>