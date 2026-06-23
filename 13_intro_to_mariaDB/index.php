<?php require_once "../header.inc.php"; ?>
<h3><?php echo e(array_keys($topics)[12]) ?></h3>

<h4 style="text-align: center;">The entire project was built using phpMyAdmin.</h4>
<ul>
  <h5>Database access:</h5>
  <li>in XAMPP:
    <ol>
      <li><a href="http://localhost/dashboard">localhost/dashboard -></a> "phpMyAdmin"</li>
    </ol>
  </li>
  <li>in <a href="https://addons.ddev.com/addons/ddev/ddev-phpmyadmin">DDEV</a>
    <ol>
      <li>open the terminal and enter the following commands:</li>
      <li>ddev add-on get ddev/ddev-phpmyadmin</li>
      <li>ddev restart</li>
      <li>ddev phpmyadmin</li>
    </ol>
  </li>
</ul>
</body>
</html>
