<?php
session_start();
error_reporting(0);
include('includes/config.php');
// Code user Registration
function debug_to_console($data) {
	$output = $data;
	if (is_array($output))
		$output = implode(',', $output);

	echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
}

if(isset($_POST['submit']))
{
$name=$_POST['fullname'];
$email=$_POST['emailid'];
$contactno=$_POST['contactno'];
$age=$_POST['age'];
$details=$_POST['details'];
$password=md5($_POST['password']);
$last_id = $con->insert_id;

$_SESSION['lastid'] = $last_id;
$last_id = $_SESSION['lastid'];

$query=mysqli_query($con,"insert into users(name,email,contactno,password,age, Details) values('$name','$email','$contactno','$password','$age', '$details')");
if($query)
{
	$last_id = $con->insert_id;
	$_SESSION['lastid'] = $last_id;
	echo "<script>alert('You are successfully register');</script>";
	echo "<script>window.location.href = 'email.php'</script>"; }

else{
echo "<script>alert('Entered email already have an account');</script>";
}
}

?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<meta name="description" content="">
		<meta name="author" content="">
	    <meta name="keywords" content="MediaCenter, Template, eCommerce">
	    <meta name="robots" content="all">

	    <title>Salon AURA | Signup</title>

	    <!-- Bootstrap Core CSS -->
	   
	    
	    <!-- Customizable CSS -->
	    <link rel="stylesheet" href="assets/css/main.css">
	    <link rel="stylesheet" href="assets/css/green.css">
	    <link rel="stylesheet" href="assets/css/owl.carousel.css">
		<link rel="stylesheet" href="assets/css/owl.transitions.css">
		<!--<link rel="stylesheet" href="assets/css/owl.theme.css">-->

		
		<!-- Icons/Glyphs -->
		<link rel="stylesheet" href="assets/css/font-awesome.min.css">

        <!-- Fonts --> 
		<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="assets/images/favicon.ico">
<script type="text/javascript">
function valid()
{
 if(document.register.password.value!= document.register.confirmpassword.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.register.confirmpassword.focus();
return false;
}
return true;
}
</script>
    	<script>
function userAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'email='+$("#email").val(),
type: "POST",
success:function(data){
$("#user-availability-status1").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
</script>


<?php include('includes/userheader2.php');?><br><br>
	</head>
    <body class="cnt-home">




<div class="body-content outer-top-bd">
	<div class="container">
		<div class="sign-in-page inner-bottom-sm">
			<div class="row">
				<!-- Sign-in -->			
<div class="col-md-6 col-sm-6 sign-in">
	

<!-- create a new account -->

	<h4 class="checkout-subtitle">create a new account</h4>
	<p class="text title-tag-line">Create your own account.</p>
	<form class="register-form outer-top-xs" role="form" method="post" name="register" onSubmit="return valid();">
<div class="form-group">
	    	<label class="info-title" for="fullname">Full Name </label>
	    	<input type="text" class="form-control unicase-form-control text-input" id="fullname" name="fullname" required="required">
	  	</div>


		<div class="form-group">
	    	<label class="info-title" for="exampleInputEmail2">Email Address </label>
	    	<input type="email" class="form-control unicase-form-control text-input" id="email" onBlur="userAvailability()" name="emailid" required >
	    	       <span id="user-availability-status1" style="font-size:12px;"></span>
	  	</div>

<div class="form-group">
	    	<label class="info-title" for="contactno">Contact No </label>
	    	<input type="text" class="form-control unicase-form-control text-input" id="contactno" name="contactno" pattern="[0-9]+" minLength="10" maxlength="10" required >
	  	</div>

		  <div class="form-group">
	    	<label class="info-title" for="Age">Age</label>
	    	<input type="text" class="form-control unicase-form-control text-input" id="age" name="age" required="required">
	  	</div>

		  <div class="form-group">
	    	<label class="info-title" for="details">Health Details</label>
	    	<input type="text" class="form-control unicase-form-control text-input" id="details" name="details"  required="required">
	  	</div>

<div class="form-group">
	    	<label class="info-title" for="password">Password</label>
	    	<input type="password" class="form-control unicase-form-control text-input" id="password" name="password"  required >
	  	</div>

<div class="form-group">
	    	<label class="info-title" for="confirmpassword">Confirm Password</label>
	    	<input type="password" class="form-control unicase-form-control text-input" id="confirmpassword" name="confirmpassword" required >
	  	</div>

		  <div class="radio outer-xs">
			  <a href="login.php" class="forgot-password pull-right">Already have an account?</a>
		</div>
		
	  	<button type="submit" name="submit" class="btn-upper btn btn-primary checkout-page-button" id="submit">Sign Up</button><a href=""></a>




	</form>
	
	</div>
	<div class="col-md-6 col-sm-6 sign-in"> 
		<br><br>
<img src="assets/Orange Photo College Newsletter.png" class="img-fluid" alt="Colorlib Template">	</a></div>
</div>	 
<!-- create a new account -->			
</div>

		</div>

</div>
</div>

	<script src="assets/js/jquery-1.11.1.min.js"></script>
	
	<script src="assets/js/bootstrap.min.js"></script>
	
	<script src="assets/js/bootstrap-hover-dropdown.min.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>
	
	<script src="assets/js/echo.min.js"></script>
	<script src="assets/js/jquery.easing-1.3.min.js"></script>
	<script src="assets/js/bootstrap-slider.min.js"></script>
    <script src="assets/js/jquery.rateit.min.js"></script>
    <script type="text/javascript" src="assets/js/lightbox.min.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
	<script src="assets/js/scripts.js"></script>

	<!--  For demo purposes ??? can be removed on production -->
	
	<!-- <script src="switchstylesheet/switchstylesheet.js"></script>
	
	<script>
		$(document).ready(function(){ 
			$(".changecolor").switchstylesheet( { seperator:"color"} );
			$('.show-theme-options').click(function(){
				$(this).parent().toggleClass('open');
				return false;
			});
		});

		$(window).bind("load", function() {
		   $('.show-theme-options').delay(2000).trigger('click');
		});
	</script> -->
	<!-- For demo purposes ??? can be removed on production : End  -->

	

</body>
</html>