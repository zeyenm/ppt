<?php
  //Script by http://decodingtutorials.wordpress.com

  include("connect.php");

  $connection  = mysql_connect($db_Host.$db_HostPort, $db_User, $db_UserPW); 
  mysql_select_db ($db_DBName , $connection);

  $name = $_POST["name"];
  $email = $_POST["email"];
  $pass = md5($_POST["pass"]); //Passwort in verschlüsselter Form in die Datenbank speichern
  $sql = "INSERT INTO users (id , usr , pass, email) VALUES ( NULL ,'$name','$pass', '$email', '', '0000-00-00 00:00:00');";
  mysql_query($sql);
  die(header("location: login.html")); //Benutzer zur Login-Seite weiterleiten
?>