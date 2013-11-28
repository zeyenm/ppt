<?php 
if (session_status() == PHP_SESSION_NONE) {
include 'login.php';
}
else
{
include 'includes/member.php'; 
}
?>