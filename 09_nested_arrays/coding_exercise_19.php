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
        'Gadget Galore' => [
          'AdSet1' => [
            'name' => 'Smart Home Devices',
            'targetAudience' => ['Home Owners'],
            'clicks' => 412,
            'impressions' => 20480
          ],
          'AdSet2' => [
            'name' => 'Wearable Tech',
            'targetAudience' => ['Fitness Fans'],
            'clicks' => 389,
            'impressions' => 19500
          ]
        ],
        'Tech Trends 2024' => [
          'AdSet1' => [
            'name' => 'Augmented Reality Gadgets',
            'targetAudience' => ['Gamers', 'Tech Enthusiasts'],
            'clicks' => 408,
            'impressions' => 23900
          ],
          'AdSet2' => [
            'name' => 'Eco-Friendly Tech',
            'targetAudience' => ['Eco Warriors'],
            'clicks' => 256,
            'impressions' => 12800
          ],
          'AdSet3' => [
            'name' => 'Robotics for Kids',
            'targetAudience' => ['Parents', 'Tech Enthusiasts'],
            'clicks' => 530,
            'impressions' => 26500
          ]
        ]
      ];

      $specifiedAudience = "Tech Enthusiasts";
      $adWithHighestCTRForAudience = [
        "targetAudience" => $specifiedAudience,
        "highestCTRAdSet" => "",
        "highestCTR" => 0,
      ];

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
            }

            if ($audience === $specifiedAudience) {
              $ctr = round(($item["clicks"] / $item["impressions"]) * 100, 2);

              if ($adWithHighestCTRForAudience["highestCTR"] < $ctr) {
                $adWithHighestCTRForAudience["highestCTRAdSet"] = $item["name"];
                $adWithHighestCTRForAudience["highestCTR"] = $ctr;
              }
            }
          }
        }

        $ctr = round(($campaignClicks / $campaignImpressions) * 100, 2);
        if ($ctr > $maxCTR) {
          $maxCTR = $ctr;
          $highestCTR = ["$campaign" => $maxCTR];
        }
        $campaignsCTR[$campaign] = $ctr;
      }
      var_dump($campaignsCTR);

    ?>
  </pre>

</body>
</html>