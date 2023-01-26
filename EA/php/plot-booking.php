<?php
include_once '../include/init.php';
include_once '../include/fpdf/fpdf.php';
if (isset($_POST['submit'])) {


$has_error = false;
$fname = $sdw_of = $cnic = $pass_cnic = $permanent_add = $add_line_2 = $email = $dob = $mailing_add = $cell_no= "";
// error variable for Client detail
$fname_err = $sdw_of_err = $cnic_err = $pass_cnic_err = $permanent_add_err = $add_line_2_err = $email_err = $dob_err = $mailing_add_err = $cell_no_err= "";

// The plot booking data or varible defined in the backend for the php 

$project=$location=$street=$plot_no=$booking_office=$plot_status=$plot_size="";
// error variable for plot detail

$project_err=$location_err=$street_err=$plot_no_err=$booking_office_error=$plot_status_err=$plot_size_err="";


    if (empty($_POST['fname'])) {
        $fname_err = 'Full name is required !';
        $_SESSION['fname_err'] = $fname_err;
        $has_error = true;
    } else {
        $fname = $_POST['fname'];
        if (!preg_match("/^['a-zA-Z-']*$/", $fname)) {
            $fname_err = "Only letters and white space allowed";
            $_SESSION['fname_err'] = $fname_err;
            $has_error = true;
        }
    }
    if (empty($_POST['sdw_of'])) {
        $sdw_of_err = "S/D/W of is required ";
        $_SESSION['sdw_of_err'] = $sdw_of_err;
        $has_error = true;
    } else {
        $sdw_of = $_POST['sdw_of'];
        if (!preg_match("/^['a-zA-Z-']*$/", $sdw_of)) {
            $sdw_of_err = "Only letters and white space allowed";
            $_SESSION['sdw_of_err'] = $sdw_of_err;
            $has_error = true;
        }
    }
    if(empty($_POST['cnic'])){
     $cnic_err="CNIC is required";
     $_SESSION['cnic_error']=$cnic_err;
     $has_error=true;

    } else{

    	$cnic = $_POST['cnic'];
    }

    // if (empty($_POST['passport_cnic'])) {
    //     $pass_cnic_err = 'Passport Number is required ';
    //     $_SESSION['pass_cnic_err'] = $pass_cnic_err;
    //     $has_error = true;
    // } else {
        $pass_cnic = $_POST['passport_cnic'];
    // }
    
   if(empty($_POST['p_address'])){

      $permanent_add_err="Permanent Address is required ";
      $_SESSION['p_address_error']=$permanent_add_err;
      $has_error=true;
   } else{
      
      $permanent_add=$_POST['p_address'];
      //if(!preg_match(pattern, subject))

   }
   
   if(empty($_POST['add_line_2'])){

    $add_line_2_err="Address line 2 is required ";
    $_SESSION['add_line_2_err']=$add_line_2_err;
    $has_error=true;

   } else{

    $add_line_2=$_POST['add_line_2'];

   }
   
   if(!preg_match("/^[^@]+@[^@]+\.[a-z]{2,6}$/i",$_POST['email'])){
    
    $email_err="Invalid email format";
    $_SESSION['email_error']=$email_err;
    $has_error=true;
   } else{

    $email=$_POST['email'];
   }
    
    if(empty($_POST['dob'])){

    $dob_err="Date of Birth is required";
    $_SESSION['dob_error']=$dob_err;
    $has_error=true;

    } else{

   $dob=$_POST['dob'];
    
    }

   // if(empty($_POSt['mailing_address'])){
   //   $mailing_address_err="Mailing address is required ";
   //   $_SESSION['mail_add_err']=$mailing_address_err;
   //   $has_error=true;
   // } else{
     $mailing_addres=$_POST['mailing_address'];
   // }
   if(empty($_POST['cell_no'])){
     $cell_no_err="Cell Number is required";
     $_SESSION['cell_no_err']=$cell_no_err;
     $has_error=true;
   }else{

       $cell_no=$_POST['cell_no'];
   }

// Plot detail code is below 
      
  
   if(empty($_POST['projects'])){
    $project_err="Please Select project ";
    $_SESSION['project_err']=$project_err;
    $has_error=true;
   }else{
    
    $project=$_POST['projects'];

   }

   if(empty($_POST['location'])){    
    $location_err="Please Select location ";
    $_SESSION['location_err']=$location_err;
    $has_error=true;

   }else{
    $location=$_POST['location'];
   }

    if(empty($_POST['street'])){
       $street_err="Street is Required ";
       $_SESSION['street_err']=$street_err;
       $has_error=true;
    } else{
      
     $street=$_POST['street'];
      
    }
    
    if(empty($_POST['plot_no'])){
      $plot_no_err="Plot No is required ";
      $_SESSION['plot_no_err']=$plot_no_err;
      $has_error=true;

     } else{
       
     $plot_no=$_POST['plot_no'];
     }

     if(empty($_POST['booking_office'])){
     $booking_office_error='Please Mentioned the booking office ';
     $_SESSION['booking_office_err']=$booking_office_error;
     $has_error=true;

     }else{
      $booking_office=$_POST['booking_office'];
     }
     
     if(empty($_POST['plot_status'])){
      $plot_status_err="please select plot status";
      $_SESSION['plot_status_err']=$plot_status_err;
      $has_error=true;

     }else{
      
      $plot_status=$_POST['plot_status'];

     }
     if(empty($_POST['plot_size'])){
      $plot_size_err="Please Select the plot size ";
      $_SESSION['plot_size_err']=$plot_size_err;
      $has_error=true;
     // if(empty($_POST['']}))
     } else{
     
     $plot_size=$_POST['plot_size'];


     }

    

    if ($has_error) {
        header('location:../index.php');
    }


$fpdf_1=new FPDF();
// $fpdf_1->setSourceFile(__DIR__ . "/..assets/images/Company-Logo.png");
$fpdf_1->AddPage();
$fpdf_1->SetFont('Arial',"",16);
$fpdf_1->cell(0,10,'PDF FILE REGISTERATION NO 1 ',0,0,'C');
// $fpdf_1->cell(20,10,$fname,1,0);
// $fpdf_1->cell(20,10,$sdw_of,1,0);
//$fpdf_1->SetTitle('PDF FILE NO 1');
// $fpdf_1->Image('..assets/images/'.$image,100,15,35,35);
$file=time().'.pdf';
$fpdf_1->output($file,'D');

// $fpdf_2=new FPDF();
// $fpdf_2->AddPage();
// // $fpdf_1->SetTitle('PDF FILE NO 2');
// // $fpdf_2->output();
$fpdf_2=new FPDF();
// $fpdf_1->setSourceFile(__DIR__ . "/..assets/images/Company-Logo.png");
$fpdf_2->AddPage();
$fpdf_2->SetFont('Arial',"",16);
$fpdf_2->cell(0,10,'PDF FILE REGISTERATION NO 2 ',0,0,'C',0);
$fpdf_2->cell(20,10,$sdw_of,1,0);
//$fpdf_1->SetTitle('PDF FILE NO 1');
// $fpdf_1->Image('..assets/images/'.$image,100,15,35,35);
$file_2=time().'.pdf';
 $fpdf_2->output($file_2,'D');


echo "<br><br><b>Client detail is below </b><br><br>";

    echo $cnic. '<br>';
    echo $fname . '<br>';
    echo $sdw_of . '<br>';
    echo $pass_cnic.'<br>';
    echo $permanent_add.'<br>';
    echo $add_line_2.'<br>';
    echo $email.'<br>';
    echo $dob.'<br>';
    echo $mailing_addres.'<br>';
    echo $cell_no.'<br>';

echo "<br><br><b>Project  detail is below </b><br><br>";

    echo $project .'<br>';
    echo $location.'<br>';
    echo $street.'<br>';
    echo $plot_no.'<br>';
    echo $booking_office.'<br>';
    echo $plot_status.'<br>';
     echo  $plot_size;


}
