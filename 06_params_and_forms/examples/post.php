<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="/simple.css" />
  <title>Document</title>
</head>
<body><pre><?php
    var_dump($_GET);
    var_dump($_POST);
    ?></pre>

  <form action="post.php" method="POST">
    <input type="text" name="username" value="<?php if (!empty($_POST['username'])) echo $_POST['username']; ?>" />
    <input type="password" name="password" />
    <input type="submit" value="Login!" />
  </form>


<!--  <form action="post.php" method="POST">
    <label for="articleTitle">Title:</label>
    <input type="text" id="articleTitle" name="articleTitle" />

    <label for="articleContent">Content:</label>
    <textarea id="articleContent" name="articleContent"></textarea>

    <input type="submit" name="action" value="Save Draft" />
    <input type="submit" name="action" value="Publish" />
  </form>

  --><?php /*var_dump($_POST); */?>

</body>
</html>