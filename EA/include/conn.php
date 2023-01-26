
<?php
$host_name = 'localhost';
$user_name = 'root';
$password = "";
$db_name = 'estate_arena';
$conn = mysqli_connect($host_name, $user_name, $password, $db_name);
if (!$conn) {
    die('connection failed' . mysqli_connect_error());
}

// echo "connected to the database !";

?>