<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/simple.css">
  <link rel="stylesheet" href="/style.css">
  <title>Modern PHP</title>
</head>
<body>
  <?php require_once __DIR__ . "/topics.php" ?>
  <?php
    /**
     * Escapes a value for safe output in HTML.
     *
     * This function converts special characters to HTML entities to help
     * prevent cross-site scripting (XSS) when displaying dynamic content.
     */
    function e($value) {
      return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
    }

  ?>

  <?php
    /**
     * Returns the correct URL for the project start page.
     *
     * The project has different base paths in XAMPP and DDEV, so this
     * function selects the appropriate start page URL for the current
     * environment.
     */
    function getStartPageUrl(string $url): bool
    {
      $headers = @get_headers($url);

      if ($headers === false) {
        return false;
      }

      return str_contains($headers[0], '200');
    }

    $mainUrl = 'http://localhost/modern_php/index.php';
    $fallbackUrl = 'https://modern-php.ddev.artif.dev/index.php';

    $link = getStartPageUrl($mainUrl) ? '/modern_php/oop_zip_file.php' : $fallbackUrl;
  ?>


  <header>
    <h1><a href="<?php echo e($link)?>">Projekte aus dem Kurs „Modern PHP“</a></h1>
  </header>