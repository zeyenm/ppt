
<?php 
if(session_id()){
    include '../includes/member.php'; 
}
else
{
    include '../test/login.php';
} 
?>