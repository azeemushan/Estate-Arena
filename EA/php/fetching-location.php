<?php
 //include_once '../include/init.php';


$query=mysqli_query($conn,"SELECT * FROM `locations`");
$num_of_rows=mysqli_num_rows($query);
if($num_of_rows>0){

while($data=mysqli_fetch_assoc($query)){

echo "<option value='".$data['LocationID']."'>".$data['City']."</option>";

}

}


?>