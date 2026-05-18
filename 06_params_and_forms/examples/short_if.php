<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="/simple.css" />
  <title>GET</title>
</head>
<body><pre>
    <?php

    $name = 'Jan';

    // Regular form
    if ($name === 'Jan') echo "The name is: Jan";
    else echo 'The name is not Jan';

    // Short form
    $text = ($name === 'Jan' ? 'The name is: Jan' : 'The name is not Jan');
    echo $text;

    // Short form usage in associative array
    $array = [
      'ABC',
      ($name === 'Jan' ? 'The name is: Jan' : 'The name is not Jan')
    ];
    var_dump($array);
    ?>
</pre>

</body>
</html>
