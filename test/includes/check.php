<?php   
  //Script by http://decodingtutorials.wordpress.com  

  session_start();

  if (!isset($_SESSION["id"])||empty($_SESSION["id"])) {
    die(header("location: ../test/login.php")); 
  }

?>