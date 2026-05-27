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
  <h1 style="text-align: center">Coding Exercise 15</h1>
  <pre>
    <?php

    require_once "examples/inc/functions.inc.php";

    $emailContent = "Dear alex  ,\n\nWe hope this message finds you well.\n\nThis month, we are focusing on personal growth and innovation. Don't miss out on our exclusive insights!\n\nBest wishes,\nYour Discovery Network Team\nP.S. Check out our latest blog post!";


    $emailBodyStart = strpos($emailContent, "\n") + 2;
    $emailBodyEnd = strpos($emailContent, "Best wishes");
    $emailBodyLength = strlen($emailContent) - $emailBodyStart - (strlen($emailContent) - $emailBodyEnd);

    $emailSalutation = substr($emailContent, 0, $emailBodyStart);
    $emailBody = substr($emailContent, $emailBodyStart, $emailBodyLength);
    $emailSignature = substr($emailContent, $emailBodyEnd, strlen($emailContent) - $emailBodyEnd);

//    var_dump($emailSalutation);
//    var_dump($emailBody);
//    var_dump($emailSignature);

    $emailPreview = substr($emailBody, 0, 30) . "...";
    var_dump($emailPreview);

    $charCount = strlen($emailBody);

    $name = substr($emailSalutation, 4, strlen($emailSalutation) - 7);    // "Dear" - 4 char, "," - 1 char, \n\n - 2 char.
    $name = trim($name);
    $name = ucfirst(strtolower($name));

    $emailSalutation = "Dear " . $name . ",\n\n";
    $updatedEmailContent = $emailSalutation . $emailBody . $emailSignature;
    var_dump($updatedEmailContent);

    ?>
  </pre>

</body>
</html>