<?php include_once '../include/init.php'; ?>


<!DOCTYPE html>
<html lang="en">
<head>
  
  
    <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
<link rel="stylesheet" href="../assets/css/style.css">


</head>
<body>
<div class="container" id="container">
	<!-- <div class="form-container sign-up-container">

		<form action="#">
			<h1>Create Account</h1>
			<span>or use your email for registration</span>
			<input type="text" name="fname" placeholder="Name" />
			<input type="email" name="email" placeholder="Email" />
			<input type="password" name="password" placeholder="Password" />
			<button>Sign Up</button>
		</form>
	</div> -->
	<div class="form-container sign-in-container">
		<div class="login_errors"style="text-align:center;margin-top:30px;">
		 <b style="color:red;margin-bottom:20px;text-align:center;"><?php echo showSessionErr('login_first'); ?></b>
    <b style="color:red;margin-bottom:20px;text-align:center;"><?php echo showSessionErr('invalid_up'); ?></b>
    <b style="color:green;margin-bottom:20px;text-align:center;"><?php echo showGetErr('logout_success'); ?></b>
</div>
    
		<form name="login_form" id="login_form_id" action="authentication.php"method="POST"onsubmit=" return validation()">
			<h1>Sign in</h1>
			<p class="errors"></p>
			<input type="text" id="user" name="user" placeholder="Enter User Name " />
			 <span class="pass_errors"></span><br>
			<input type="password" id="pass" name="pass" placeholder="Password" />
			<a href="#">Forgot your password?</a>
			<input type="submit" id="btn" value="Login" />
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
         <img class="img" src ="../assets/images/Company-Logo.png" width="100%" height="60%" m-top="10%">
				
        
  
			</div>
      
		</div>
	</div>
</div>

 <script type="text/javascript" src="../assets/js/app.js"></script>
</body>
</html>