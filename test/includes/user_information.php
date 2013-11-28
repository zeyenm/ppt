<?php
$usr = $_POST['username'];
$query = @mysql_query("SELECT id,usr,email FROM users WHERE usr =".$usr."");

while ($row = @mysql_fetch_array($query)) {
   echo "ID: ".$row{'id'};
   echo "<br>Name: ".$row{'usr'};
   echo "<br>email: ".$row{'email'};
}
?>