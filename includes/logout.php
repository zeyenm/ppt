<?php
  //Script by http://decodingtutorials.wordpress.com
  session_unset();
  session_destroy();
  die(header("location: ../login.php")); 
?>