<?php
  //Script by http://decodingtutorials.wordpress.com

	
	$ip = getenv('HTTP_CLIENT_IP')?:
  include("connect.php");

  $connection  = mysql_connect($db_Host.$db_HostPort, $db_User, $db_UserPW); 
  mysql_select_db ($db_DBName , $connection);

  $name = $_POST["name"];
  $email = $_POST["email"];
  $pass = $_POST["pass"]; //Passwort in verschlüsselter Form in die Datenbank speichern
  $sql = "INSERT INTO users (id , usr , pass, email, regIP, dt) VALUES ( NULL ,'$name','$pass', '$email', '', '0000-00-00 00:00:00');";
  mysql_query($sql) or die(mysql_error());
  die(header("location: ../test/index.php")); //Benutzer zur Login-Seite weiterleiten
?>