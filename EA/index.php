<?php
include_once 'include/init.php';
?>
<!DOCTYPE html>
<html>

<head>
  <title>Real Estate</title>
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
   <link rel="stylesheet"href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>

  <style>
    

#testtype:focus {
border:none;
border-bottom:1px solid #000;
}
  </style>
</head>

<body>
 <!--  <div id="frm">
    <h1>Login</h1>
    <b style="color:red;margin-bottom:20px;text-align:center;"><?php //echo showGetErr('login_first'); ?></b>
    <b style="color:red;margin-bottom:20px;text-align:center;"><?php //echo showGetErr('invalid_up'); ?></b>
    <b style="color:green;margin-bottom:20px;text-align:center;"><?php //echo showGetErr('logout_success'); ?></b>
    <p class="errors"></p>
    <form name="login_form" action="php/authentication.php" onsubmit=" return validation()" method="POST">
      <p>
        <label> UserName: </label>
        <input type="text" id="user" name="user" />
      </p>
      <span class="pass_errors"></span>
      <p>
        <label> Password: </label>
        <input type="password" id="pass" name="pass" />
      </p>
      <p>
        <input type="submit" id="btn" value="Login" />
      </p>
    </form>
  </div> -->
<!--   <form class="form" action="php/plot-booking.php" method="POST">
    <h2>Particular of Allottee</h2>


    <label>
      
      Full Name:
  </label>
<span style="color:red;font-weight: bold;"> <?php //echo showSessionErr('fname_err'); ?></span><br>
      <input type="text" name="fname" placeholder="Enter Your Name" value="<?php// echo fieldvalue('fname')?>" />
    
    <label>
      
      S/o,D/o,W/o:</label>
      <span style="color:red;font-weight: bold;"><?php // echo showSessionErr('sdw_of_err'); ?></span><br>
      <input type="text" name="sdw_of" placeholder="Enter the Name" value="<?php // echo fieldvalue('sdw_of')?>" />
    
    <div class="Info">
      <div class="pInfo-1">
        <label>
          CNIC:</label>
          <span style="color:red;font-weight: bold;"><?php //echo showSessionErr('cnic_error'); ?></span><br>
          <input type="text" name="cnic" data-inputmask="'mask': '99999-9999999-9'" placeholder="XXXXX-XXXXXXX-X" value="<?php// echo fieldvalue('cnic');?>">
    
        <label>
         Passport:
        </label>
        <span style="color:red;font-weight: bold;"><?php // echo showSessionErr('pass_cnic_err'); ?></span><br>
          <input type="number" name="passport_cnic" placeholder="Enter Your Passport No/CNIC"value="<?php// echo fieldvalue('passport_cnic');?>" /> 
    
        <label>
          Permanent Addr:
        </label>
      <span style="color:red;font-weight: bold;"><?php // echo showSessionErr('p_address_error'); ?></span><br>
          <input type="text" name="p_address"placeholder="Enter Your Address"value="<?php // echo fieldvalue('p_address');?>" />
      
        <label>
          Address line 2:
        </label>
<span style="color:red;font-weight: bold;"><?php //echo showSessionErr('add_line_2_err'); ?></span><br>
          <input type="text" name="add_line_2" placeholder="Enter Your Address"value="<?php //echo fieldvalue('add_line_2');?>" />
        
        <label>
          Email:
        </label>
          <span style="color:red;font-weight: bold;"><?php // echo showSessionErr('email_error'); ?></span><br>
          <input type="email" name="email"placeholder="Enter Your Address"value="<?php // echo fieldvalue('email');?>" />
        
      </div>
      <div class="pInfo-2">
        <label>
          Date Of Birth:
        </label>
          <span style="color:red;font-weight: bold;"><?php //echo showSessionErr('dob_error'); ?></span><br>
          <input type="date" name="dob" placeholder="Enter Your Passport No/CNIC"value="<?php// echo fieldvalue('dob');?>" />
        
        <label>
          Mailing Address:
        </label>
         <span style="color:red;font-weight: bold;"><?php //echo showSessionErr('mail_add_err'); ?></span><br>
          <input type="text" name="mailing_address" placeholder="Enter Your Address"value="<?php // echo fieldvalue('mailing_address');?>" />
        </label>
        <label>
          Address line 2:
          <input type="text" name=""placeholder="Enter Your Address" />
        </label> 
        <label>
          Cell No #:
        </label>
        <span style="color:red;font-weight: bold;"><?php // echo showSessionErr('cell_no_err'); ?></span><br>
          <input type="number" name="cell_no" placeholder="Enter Your Address"value="<?php // echo fieldvalue('cell_no');?>" />
        </label>
      </div>
    </div>
     </form>
    <form class="form2"> 
    <h2>Project and plot information:</h2>
    <div class="Info">
      <div class="pInfo-1">
        <label>Project Name:
        </label>
<span style="color:red;font-weight: bold;"><?php  //echo showSessionErr('project_err'); ?></span><br>        
           <input type="text" placeholder="Enter Your Name" /> 
        <select name="projects"value="<?php // echo fieldvalue('location');?>">
          <option value="">Select Project </option>
          <?php //include_once 'php/fetch-projects.php';?>
        </select>
        <label>Phase/Sector:</label>
        <span style="color:red;font-weight: bold;"><?php //echo showSessionErr('location_err'); ?></span><br> 
          <input type="text" placeholder="Enter the Name" /> 
          <select name="location" value="">
          <option value="" >Select Location </option>
          <?php // include_once 'php/fetching-location.php';?>
        </select>
        <div class="house-info">
          <label>
            Street No:
            </label>
            <span style="color:red;font-weight: bold;"><?php // echo showSessionErr('street_err'); ?></span><br> 
            <input type="text" name="street" placeholder="Enter the Name" value="<?php // echo fieldvalue('street');?>"/>
         
          <label>
            Plot No:
            </label>
            <span style="color:red;font-weight: bold;"><?php // echo showSessionErr('plot_no_err'); ?></span><br> 
            <input type="text" name="plot_no" placeholder="Enter the Name"  value="<?php // echo fieldvalue('plot_no');?>" />
          
        </div>
        <label>Booking Office:</label>
        <span style="color:red;font-weight: bold;"><?php // echo showSessionErr('booking_office_err'); ?></span><br>
          <input type="text" name="booking_office" placeholder="Enter the Name" />
        
      </div>
      <div class="pInfo-2">
        <label>Plot Status:</label>
        <div class="plot-status-2">
          <input type="radio"name="plot_status"value="Resendental" />
          <span>Resedental</span>
          <input type="radio"name="plot_status"value="Commercial" />
          <span>Commercial</span>
          <input type="radio"name="plot_status"value="Form_House" />
          <span>Form House</span>
        </div>
        <label>Plot Size:</label>
        <div class="plot-status-1">
          <input type="radio"name="plot_size"value="05 Marla" />
          <span>05 Marla</span>
          <input type="radio"name="plot_size"value="02 Marla" />
          <span>02 Marla </span>
          <input type="radio"name="plot_size" value="02 Kanal" />
          <span>02 Kanal</span>
          <input type="radio" name="plot_size" value="07 Marla"/>
          <span>07 Marla</span>
          <input type="radio"name="plot_size" value="o4 Marla"/>
          <span>04 Marla </span>
          <input type="radio"name="plot_size" value="04 Kanal" />
          <span>04 Kanal</span>
          <input type="radio"name="plot_size"value="10 Marla"/>
          <span>10 Marla</span>
          <input type="radio" name="plot_size"rel="attach" />
        <input type="text" value="" id="testtype" />
          <input type="radio" name="plot_size" value="08 Kanal"/>
          <span>08 Kanal</span>
          <input type="radio" name="plot_size" value="20 Marla"/>
          <span>20 Marla</span>
          <span></span>
          <input type="radio"name="plot_size"rel="attach" />
         <input type="text" value="" id="testtype" style="border:none;border-bottom:1px solid #000;"/>

           //<span type="text" value=""  id="testtype">_______ </span> 
        </div>
      </div>
      <input type="submit" name="submit" value="Submit" id="plot-booking">
    </div>
  </form> -->


 <div class="bg-gray-200 w-full min-h-screen flex items-center justify-center" >
          <div class="w-full py-8">
            <div class="flex items-center justify-center space-x-2">
              <h1 class="header-change text-3xl font-bold text-blue-600 tracking-wider" >Provisional Allotment Letter</h1>
            </div>
            <div class="bg-white w-5/6 md:w-3/4 lg:w-2/3 xl:w-[900px] 2xl:w-[550px] mt-8 mx-auto px-16 py-8 rounded-lg shadow-2xl" >
              <form class="my-8 text-sm frm1"action="php/plot-booking.php"method="POST">
                <h2 class="head-change text-2xl font-bold tracking-wide text-gray-800" > particular of the allotttee</h2>
                <div class="flex flex-col my-4">
                  <label for="name" class="text-gray-700">Full Name</label>
                  <span style="color:red;font-weight: bold;"> <?php echo showSessionErr('fname_err'); ?></span><br>
                  <input type="text" name="fname" placeholder="Enter Your Name" value="<?php echo fieldvalue('fname')?>" class="mt-2 p-2 border border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300 rounded text-sm text-gray-900"placeholder="Enter your name" />
                </div>

                <div class="flex flex-col my-4">
                  <label for="text" class="text-gray-700">S/0,D/o,W/o</label>
                  <span style="color:red;font-weight: bold;"><?php echo showSessionErr('sdw_of_err'); ?></span><br>
                  <input type="text" name="sdw_of" placeholder="Enter the Name" value="<?php echo fieldvalue('sdw_of')?>"class="mt-2 p-2 border border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300 rounded text-sm text-gray-900"placeholder="Enter your email" />
                </div>
               <!--  <div class="flex justify-right">

                  <div class="form-check form-check-inline">
                    <input class="form-check-input form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="radio" name="cnic" data-inputmask="'mask': '99999-9999999-9'" placeholder="XXXXX-XXXXXXX-X" value="<?php //echo fieldvalue('cnic');?>"class="mt-2 p-2 border border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300 rounded text-sm text-gray-900">
                    <label class="form-check-label inline-block text-gray-800" for="inlineRadio10"> CNIC</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="radio" name="plot_status"value="Commercial" id="inlineRadio2" >
                    <label class="form-check-label inline-block text-gray-800" for="inlineRadio20">Passport</label>
                  </div>
                </div> -->
                <div class="flex flex-col my-4">
                  <label for="number" class="text-gray-700">CNIC</label>
                  <span style="color:red;font-weight: bold;"><?php echo showSessionErr('cnic_error'); ?></span><br>
                  <input type="text" name="cnic" data-inputmask="'mask': '99999-9999999-9'" placeholder="XXXXX-XXXXXXX-X" value="<?php echo fieldvalue('cnic');?>"class="mt-2 p-2 border border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300 rounded text-sm text-gray-900" />
                </div>
                <div class="flex flex-col my-4">
                  <label for="number" class="text-gray-700">Passport</label>
                  <span style="color:red;font-weight: bold;"><?php echo showSessionErr('pass_cnic_err'); ?></span><br>
                  <input type="number" name="passport_cnic" placeholder="Enter Your Passport No/CNIC"value="<?php echo fieldvalue('passport_cnic');?>"class="mt-2 p-2 border border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300 rounded text-sm text-gray-900" />
                </div>
                <div class="flex flex-col my-4">
                  <label for="text" class="text-gray-700">Permenent Address</label>
                  <span style="color:red;font-weight: bold;"><?php echo showSessionErr('p_address_error'); ?></span><br>
                  <input type="text" name="p_address"placeholder="Enter Your Address"value="<?php echo fieldvalue('p_address');?>"class="mt-2 p-2 border border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300 rounded text-sm text-gray-900"/>
                </div>
                <div class="flex flex-col my-4">
                  <label for="text" class="text-gray-700">Address line 2</label>
                  <span style="color:red;font-weight: bold;"><?php echo showSessionErr('add_line_2_err'); ?></span><br>
                  <input type="text" name="add_line_2" placeholder="Enter Your Address"value="<?php echo fieldvalue('add_line_2');?>"class="mt-2 p-2 border border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300 rounded text-sm text-gray-900"  />
                </div>
                <div class="flex flex-col my-4">
                  <label for="text" class="text-gray-700">Email</label>
                  <span style="color:red;font-weight: bold;"><?php echo showSessionErr('email_error'); ?></span><br>
                  <input type="email" name="email"placeholder="Enter Your Address"value="<?php echo fieldvalue('email');?>"class="mt-2 p-2 border border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300 rounded text-sm text-gray-900" />
                </div>
                <div class="flex flex-col my-4">
                  <label for="text" class="text-gray-700">DOB</label>
                  <span style="color:red;font-weight: bold;"><?php echo showSessionErr('dob_error'); ?></span><br>
                  <input type="date" name="dob" placeholder="Enter Your Passport No/CNIC"value="<?php echo fieldvalue('dob');?>"class="mt-2 p-2 border border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300 rounded text-sm text-gray-900" />
                </div>
                <div class="flex flex-col my-4">
                  <label for="text" class="text-gray-700"> Maling Address</label>
                  <span style="color:red;font-weight: bold;"><?php echo showSessionErr('mail_add_err'); ?></span><br>
                  <input type="text" name="mailing_address" placeholder="Enter Your Address"value="<?php echo fieldvalue('mailing_address');?>"class="mt-2 p-2 border border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300 rounded text-sm text-gray-900" />
                </div>
                <div class="flex flex-col my-4">
                <!--   <label for="text" class="text-gray-700">Address line 2</label>

                  <input type="text"name="add_line_2"id="add_line_2" class="mt-2 p-2 border border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300 rounded text-sm text-gray-900" placeholder="Enter your email" />
                </div> -->
                <div class="flex flex-col my-4">
                  <label for="text" class="text-gray-700">Cell NO</label>
                  <span style="color:red;font-weight: bold;"><?php echo showSessionErr('cell_no_err'); ?></span><br>
                  <input type="number" name="cell_no" placeholder="Enter Your Address"value="<?php echo fieldvalue('cell_no');?>"class="mt-2 p-2 border border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300 rounded text-sm text-gray-900" />
                </div>
          <!--     </form> -->
                <!-- ******************************** -->
                
              <!-- <form class="my-8 text-sm frm2"> -->
                <h2 class="head-change text-2xl font-bold tracking-wide text-gray-800" > project and plot information</h2>
                <div class="flex flex-col my-4">
                  <label for="name" class="text-gray-700">project Name</label>
                  <span style="color:red;font-weight: bold;"><?php  echo showSessionErr('project_err'); ?></span><!-- <br>   -->
                  <select name="projects"class="mt-2 p-2 border border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300 rounded text-sm text-gray-900">
                   <option value="">Select Project</option>
                   <?php include_once 'php/fetch-projects.php';?>
                  </select>
                </div>
                <div class="flex flex-col my-4">
                  <label for="name" class="text-gray-700">Sector/Phase</label>
                  <span style="color:red;font-weight: bold;"><?php echo showSessionErr('location_err'); ?></span><!-- <br> -->
                  <select name="location"class="mt-2 p-2 border border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300 rounded text-sm text-gray-900">
                   <option value="">Select Location</option>
                   <?php  include_once 'php/fetching-location.php';?>
                  </select>
                </div>
                <div class="flex flex-col my-4">
                  <label for="number" class="text-gray-700">street no</label>
                  <span style="color:red;font-weight: bold;"><?php  echo showSessionErr('street_err'); ?></span><br>
                  <input type="text" name="street" placeholder="Enter the Name" value="<?php  echo fieldvalue('street');?>"class="mt-2 p-2 border border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300 rounded text-sm text-gray-900" />
                </div>
                <div class="flex flex-col my-4">
                  <label for="text" class="text-gray-700">Plot NO</label>
                  <span style="color:red;font-weight: bold;"><?php  echo showSessionErr('plot_no_err'); ?></span><br> 
                  <input type="text" name="plot_no" placeholder="Enter the Name"  value="<?php  echo fieldvalue('plot_no');?>"id="plot_no"class="mt-2 p-2 border border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300 rounded text-sm text-gray-900"/>
                </div>
                <div class="flex flex-col my-4">
                  <label for="text" class="text-gray-700">Booking Officer</label>
                  <span style="color:red;font-weight: bold;"><?php  echo showSessionErr('booking_office_err'); ?></span><br>
                  <input type="text"name="booking_office"value="<?php echo fieldvalue('booking_office')?>"id="booking_office"class="mt-2 p-2 border border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300 rounded text-sm text-gray-900" placeholder="Booking Officer" />
                </div>
                <div class="">
                <label for="text" class="text-gray-700 plot-status">plot Status</label>
               <span style="color:red;font-weight: bold;"><?php  echo showSessionErr('plot_status_err'); ?></span><br>
                <div class="flex justify-right">

                  <div class="form-check form-check-inline">
                    <input class="form-check-input form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="radio" name="plot_status"value="Resendental"id="inlineRadio1">
                    <label class="form-check-label inline-block text-gray-800" for="inlineRadio10"> Residential</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="radio" name="plot_status"value="Commercial" id="inlineRadio2" >
                    <label class="form-check-label inline-block text-gray-800" for="inlineRadio20">Commercial</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2" type="radio" name="plot_status"value="Form_House" id="inlineRadio3" value="option3">
                    <label class="form-check-label inline-block text-gray-800" for="inlineRadio30">Farm House</label>
                  </div>
                </div>
             
                <div class="flex flex-col my-4">
                  <label for="text" class="text-gray-700 plot-status">plot Size</label>
                  <span style="color:red;font-weight: bold;"><?php  echo showSessionErr('plot_size_err'); ?></span>
                  <div class="flex justify-right">
                    <div class="flex justify-right">

                      <div>

                        <div class="form-check">
                          <input class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 my-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="radio" name="plot_size"value="05 Marla" id="flexRadioDefault10">
                          <label class="form-check-label inline-block text-gray-800" for="inlineRadio10">05 Marla</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 my-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="radio" name="plot_size"value="02 Marla" id="flexRadioDefault20">
                          <label class="form-check-label inline-block text-gray-800" for="inlineRadio10">02 Marla</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 my-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="radio" name="plot_size" value="02 Kanal" id="flexRadioDefault20">
                          <label class="form-check-label inline-block text-gray-800" for="inlineRadio10">02 Kanal</label>
                        </div>
                      </div>
                      <div>
                        <div class="form-check">
                          <input class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 my-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="radio" name="plot_size" value="07 Marla" id="flexRadioDefault10">
                          <label class="form-check-label inline-block text-gray-800" for="inlineRadio10">07 Marla</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 my-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="radio" name="plot_size" value="o4 Marla" id="flexRadioDefault20">
                          <label class="form-check-label inline-block text-gray-800" for="inlineRadio10">04 Marla</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 my-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="radio" name="plot_size" value="04 Kanal" id="flexRadioDefault20">
                          <label class="form-check-label inline-block text-gray-800" for="inlineRadio10">04 Kanal</label>
                        </div>
                      </div>
                      <div>
                        <div class="form-check">
                          <input class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 my-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="radio" name="plot_size"value="10 Marla" id="flexRadioDefault10">
                          <label class="form-check-label inline-block text-gray-800" for="inlineRadio10">10 Marla</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 my-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="radio" name="plot_size"rel="attach"  id="flexRadioDefault20">
                          <input type="text" value="" id="testtype" style="border:none;border-bottom:1px solid #000;" />
                        </div>
                        <div class="form-check">
                          <input class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 my-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="radio" name="plot_size" value="08 Kanal" id="flexRadioDefault20">
                          <label class="form-check-label inline-block text-gray-800" for="inlineRadio10">08 Kanal</label>
                        </div>
                      </div>
                      <div>
                        <div class="form-check">
                          <input class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 my-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="radio" name="plot_size" value="20 Marla" id="flexRadioDefault10">
                          <label class="form-check-label inline-block text-gray-800" for="inlineRadio10">20 Marla</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 my-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="radio" name="plot_size"rel="attach" id="flexRadioDefault20">
                          <input type="text" value="" id="testtype" style="border:none;border-bottom:1px solid #000;"/>
                        </div>
                       <!--  <div class="form-check">
                          <input class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 my-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="radio" name="flexRadioDefault" id="flexRadioDefault20">
                          <label class="form-check-label inline-block text-gray-800" for="inlineRadio10">_________</label>
                        </div> -->
                      </div>
                    </div>
                  
                  </div>
                  
                </div>
               

                <div class="my-4 flex items-center justify-start space-x-4 bttn-change">
                  <input type="submit"name="submit"value="Submit" class="bg-green-600 hover:bg-green-700 rounded-lg px-8 py-2 text-gray-100 hover:shadow-xl transition duration-150 uppercase" >
                </div>
              </form>
            </div>
          </div>
        </div>



















<script src="https://cdn.tailwindcss.com"></script>
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"
        ></script>
  <script type="text/javascript" src="assets/js/app.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/jquery.inputmask.bundle.js"></script>
  <script>
    $(":input").inputmask();
  </script>

  <script>
    $(document).ready(function(){
    $("input[type=radio]").change(function(){
        if($(this).attr("rel") == "attach")
        {
            $(this).val($("#testtype").val());
        }
    });

   $("#testtype").change(function(){
        $("input[type=radio]:eq(3)").val($(this).val());
   });   
});

  </script>
</body>

</html>