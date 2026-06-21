<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="/simple.css" />
  <title>Document</title>
</head>
<body>
  <h1>String Functions 1</h1>
  <pre><?php

      require_once __DIR__ . '/inc/functions.inc.php';

      $text = "PHP, short for \"Hypertext Preprocessor\", is a server-side scripting language first introduced in 1994 by Rasmus Lerdorf. Distributed under a permissive license, PHP is open-source, allowing both personal and commercial use at no cost. It's a cross-platform language, compatible with various server operating systems like Linux, Windows, and macOS, making it highly versatile. The language boasts a large and supportive community, offering an extensive range of libraries, frameworks, and online resources, which has made it a staple for developing dynamic websites and web applications. One of its significant advantages is its seamless integration with relational databases such as MySQL.\nPHP is designed with a syntax that many find user-friendly, although the ease of learning can be subjective and vary from person to person. The language allows for efficient coding; tasks like outputting text can be performed with simple commands like echo. Variables are easily declared, and PHP offers a comprehensive set of control structures, including conditional statements and loops, providing a balance between simplicity and functionality.\nWhile PHP is most commonly used for server-side web development, its capabilities extend beyond that scope. The language has evolved to include command-line scripting and even the creation of desktop applications. However, its primary utility remains in server-side scripting, making it a robust and flexible choice for everything from small websites to complex web-based applications.";

      // Accessing and extracting string parts
      var_dump($text[0]);
      var_dump(substr($text, 1));

    ?></pre>

  <p>
    <strong><?php echo e($text[0]); ?></strong><?php echo e(substr($text, 1)); ?>
  </p>

  <h1>String Functions 2</h1>
  <pre><?php

      // Getting the string length
      var_dump(strlen($text));

      // Checking the start and end of a string
      var_dump(str_starts_with($text, 'PHP'));
      var_dump(str_ends_with($text, 'PHP'));

      // Changing letter case
      var_dump(strtolower($text));
      var_dump(strtoupper($text));
      var_dump(ucfirst('php'));

      // Trimming string edges
      var_dump(trim('   jannis    .-', "-."));
      var_dump(trim('   jannis    '));
      var_dump(rtrim('   jannis    '));
      var_dump(ltrim('   jannis    '));

      // Finding substring positions
      var_dump(strpos($text, 'PHP'));
      var_dump(strpos($text, 'PHP', 1));
      var_dump(strpos($text, 'javascript'));

    ?></pre>

  <h1>String Functions 3</h1>
  <pre><?php

      // Replacing text
      var_dump(str_replace('?', '!', 'Hello World??'));
      var_dump(str_replace(['?', 'World'], ['!', 'Mars'], 'Hello World??'));

    ?></pre>

  <p><?php
      // Converting line breaks for HTML
      echo nl2br(e("PHP\nis amazing!"));
    ?></p>
  <?php /*
<p><?php echo nl2br(e($text)); ?></p>
*/ ?>
  <p>
    <!--    Manually converting line breaks into HTML paragraphs-->
    <?php echo str_replace("\n", "</p><p>", e($text)); ?>
  </p>


</body>
</html>