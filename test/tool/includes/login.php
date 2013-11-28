<?php   
  //Script by http://decodingtutorials.wordpress.com  

  session_start(); //Session starten um Session-Variablen initialisieren zu können

  include("connect.php"); 

  $connection  = mysql_connect ($db_Host.$db_HostPort, $db_User, $db_UserPW);     
  mysql_select_db ($db_DBName , $connection);   
  $name = $_POST["name"];   
  $pass = md5($_POST["pass"]);   

  $sql = "SELECT id, usr FROM users WHERE (usr = '$name' AND pass = '$pass');";   
  $result = mysql_query($sql);   
  $row = mysql_fetch_array($result);  

  if (mysql_num_rows($result)==1) {     
    $_SESSION["id"] = $row["id"];     
    $_SESSION["name"] = $row["name"];    
    die(header("location: member.php"));   
  }  

  else {    
    echo "Login fehlgeschlagen";   
  } 

?>