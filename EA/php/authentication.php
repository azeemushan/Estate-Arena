<?php

include_once '../include/init.php';

$has_error=false;

function php_validation($data){

$data=trim($data);
$data=stripslashes($data);
$data=htmlspecialchars($data);

return $data;


}


$uname=$_POST['user'];
$pass=$_POST['pass'];

// echo $uname;
// echo $pass;

$username=php_validation($uname);
$password=php_validation($pass);

$sql_query="SELECT * FROM users WHERE user_name='$username' AND password='$password'";
$result=mysqli_query($conn,$sql_query);
$row =mysqli_fetch_array($result, MYSQLI_ASSOC);  
$count = mysqli_num_rows($result); 

$username=$row['user_name'];
//echo $username;
if($count >0){
// echo "login success <br>";
// echo $row['user_name'];
	$_SESSION['id'] = $row['id'];
$_SESSION['username']=$row['user_name'];

header('Location:dashboard.php');
exit();
}

else{

//echo "no user found in the database ";
$_SESSION['invalid_up']='Invalid Username and password';
$has_error=true;
header('Location:login.php?invalid_up=Invalid Username and password');

exit();

}

?>