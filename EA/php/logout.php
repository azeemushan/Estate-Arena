<?php 
include_once '../include/init.php';





$_SESSION['logout_success']="logout successfully";
$has_error=true;
header('location:login.php?logout_success=Logout successfully');
session_destroy();
exit();

?>