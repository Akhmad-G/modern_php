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
  <h1 style="text-align: center">Coding Exercise 14</h1>
  <pre>
    <?php

      require_once "examples/inc/functions.inc.php";

      $emailContent = "Subject: Unlock Your Potential with Us!\n\nDear Alex,\n\nWe hope this message finds you well.\n\nQuote of the Month:\n\nDr. Albert Szent-Györgyi: 'Innovation is seeing what everybody has seen and thinking what nobody has thought.'\n\nBest wishes,\nYour Discovery Network Team\nP.S. Don't miss our special announcement next month!";

      $contentArray = explode("\n\n", $emailContent);
      //    var_dump($contentArray);

      $quoteIndex = array_search('Quote of the Month:', $contentArray) + 1;
      //    if ($quoteIndex) echo $contentArray[$quoteIndex] . "\n";
      //    else echo "Quote not found";

      $author = explode(": ", $contentArray[$quoteIndex])[0];
      $quote = explode(": ", $contentArray[$quoteIndex])[1];
      $contentArray[$quoteIndex] = $quote . " - " . $author;

      $modifiedEmailContent = implode("\n\n", $contentArray);

      echo e($modifiedEmailContent);

    ?>
  </pre>

</body>
</html>