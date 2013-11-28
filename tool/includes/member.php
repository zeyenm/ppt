<?php
  include ("check.php");
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
  <!--Script by http://decodingtutorials.wordpress.com -->
  <head>
    <title>
      Mitglieder-Bereich
    </title>
  </head>
  <body>
    <p>
      Dieser Bereich ist nur für Mitglieder sichtbar.
    </p>
    <p>
      Ihre Benutzer-ID ist: <?php echo $_SESSION["id"];?> <br />
      Ihr Benutername ist: <?php echo $_SESSION["name"];?>
    </p>
    <p>
      <a href="includes/logout.php">Logout</a>
    </p>
  </body>
</html>