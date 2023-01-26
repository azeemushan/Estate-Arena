<?php 

//function fetching_project(){
//include_once '../include/init.php';

$query=mysqli_query($conn,'SELECT * FROM `projects`');

$num_of_rows=mysqli_num_rows($query);
//echo $num_of_rows;
if($num_of_rows>0){
  // echo "<select name='projects'>";
  // echo "<option value=''>Select projects </option>";
 while($data=mysqli_fetch_assoc($query)){

// for($result=1;$result<=$num_of_rows;$result++){
 echo "<option value='".$data['ProjectID']."'>".$data['ProjectName']."</option>";

//print_r($data);

}

//echo "</select>";

}

// }



?>