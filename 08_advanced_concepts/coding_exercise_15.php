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

    $emailContent = "Dear alex  ,\n\nWe hope this message finds you well.\n\nThis month, we are focusing on personal growth and innovation. Don't miss out on our exclusive insights!\n\nBest wishes,\nYour Discovery Network Team\nP.S. Check out our latest blog post!";


/*    Create a preview snippet from the email content .
 The preview should include the first 30 characters following the 'Dear [Name],\n\n' greeting, appended with '...'
 to indicate more content follows.
 Be mindful that each newline character(\n) is counted as a single character
 Save this preview text to a new variable called $emailPreview
Example: $emailPreview = 'We hope this message finds you...'*/

    $contentArray = explode("\n\n", $emailContent);
        var_dump($contentArray);



    ?>
  </pre>

</body>
</html>