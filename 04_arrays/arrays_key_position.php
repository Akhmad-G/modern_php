<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../03%20-%20arrays/04-arrays/simple.css" />
    <title>Document</title>
</head>
<body>
<pre><?php

$categories = ['Programming', 'Business', 'Art & Drawing', 'Self improvment', 'History'];

$categories[2] = 'Art and Drawing';
$categories[99] = 'Nature books';
$categories[5] = 'Physic';
$categories[100] = 'Math';
$categories[] = "Position???";

// unset($categories[3]);

var_dump($categories);

/*Output:
  array(9) {
    [0]=>
  string(11) "Programming"
    [1]=>
  string(8) "Business"
    [2]=>
  string(15) "Art and Drawing"
    [3]=>
  string(15) "Self improvement"
    [4]=>
  string(7) "History"
    [99]=>
  string(12) "Nature books"
    [5]=>
  string(6) "Physic"
    [100]=>
  string(4) "Math"
    [101]=>
  string(11) "Position???"
}*/


?></pre>
</body>
</html>