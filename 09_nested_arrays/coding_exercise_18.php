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
  <h1 style="text-align: center">Coding Exercise 17</h1>
  <pre>
    <?php

    require_once "./inc/functions.inc.php";

    $campaigns = [
      'Spring Sale' => [
        'AdSet1' => [
          'name' => 'Discounted Gadgets',
          'clicks' => 150,
          'impressions' => 10000
        ],
        'AdSet2' => [
          'name' => 'Outdoor Equipment',
          'clicks' => 250,
          'impressions' => 15000
        ],
      ],
      'Holiday Deals' => [
        'AdSet1' => [
          'name' => 'Winter Apparel',
          'clicks' => 200,
          'impressions' => 12000
        ],
        'AdSet2' => [
          'name' => 'Electronics Special',
          'clicks' => 300,
          'impressions' => 18000
        ],
      ],
    ];

    $totalCampaignClicks = [];
    $totalCampaignImpressions = [];
    $totalAdSets = 0;

    foreach ($campaigns as $campaign => $adSet) {
      $campaignClicks = 0;
      $campaignImpressions = 0;
      $addSets = 0;
      foreach ($adSet as $set => $item) {
//         "??" - isset() handy operator.
        $campaignClicks += $item["clicks"] ?? 0;
//         VS "?" - Standard Ternary Operator:
//        $campaignClicks += isset($item["clicks"]) ? $item["clicks"] : 0;
        $campaignImpressions += $item["impressions"] ?? 0;
        $addSets += 1;
      }
      $totalCampaignClicks[$campaign] = $campaignClicks;
      $totalCampaignImpressions[$campaign] = $campaignImpressions;
      $totalAdSets += $addSets;
    }

    $totalClicks = array_sum($totalCampaignClicks);
    $totalImpressions = array_sum($totalCampaignImpressions);

    if (!empty($totalAdSets) or $totalAdSets !== 0) {
      $averageClicks = round($totalClicks / $totalAdSets);
      $averageImpressions = round($totalImpressions / $totalAdSets);
    } else {
      $averageClicks = 0;
      $averageImpressions = 0;
    }

    echo e("Average clicks per ad set: $averageClicks, Average impressions per ad set: $averageImpressions.");

    ?>
  </pre>

</body>
</html>