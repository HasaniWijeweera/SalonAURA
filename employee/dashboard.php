<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['bpmsaid']==0)) {
  header('location:logout.php');
  } 
     ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Salon AURA | Welcome</title>

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
 <!-- js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<!--webfonts-->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!--//webfonts--> 
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<!-- chart -->
<script src="js/Chart.js"></script>
<!-- //chart -->
<!--Calender-->
<link rel="stylesheet" href="css/clndr.css" type="text/css" />
<script src="js/underscore-min.js" type="text/javascript"></script>
<script src= "js/moment-2.2.1.js" type="text/javascript"></script>
<script src="js/clndr.js" type="text/javascript"></script>
<script src="js/site.js" type="text/javascript"></script>
<!--End Calender-->
<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">
<!--//Metis Menu -->
</head> 
<body class="cbp-spmenu-push">
<div class="main-content">
		
		 <?php include_once('includes/sidebar.php');?>
		
	<?php include_once('includes/header.php');?>
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="tables">
					<h3 class="title1">Employee details</h3>
					<br><br>
					
					<?php
$adminid=$_SESSION['bpmsaid'];
$ret=mysqli_query($con,"select * from tblemployees where ID='$adminid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
						 <div class="form-group"> <label >Name</label> <input readonly  type="text" class="form-control" id="name" name="name"  value="<?php  echo $row['Name'];?>" required="true"> </div>
							 <div class="form-group"> <label >Email</label> <input readonly  type="text"  id="email" name="email" class="form-control"  value="<?php  echo $row['email'];?>" required="true"> </div>
							 <div class="form-group"> <label >Mobile Number</label> <input readonly  type="text" id="mobilenum" name="mobilenum" class="form-control"  value="<?php  echo $row['contactno'];?>" required="true"> </div>
                             <div class="form-group"> <label >role</label> <input readonly  type="text" id="role" name="role" class="form-control"  value="<?php  echo $row['role'];?>" required="true"> </div>
                             <div class="form-group"> <label >Basic Salary</label> <input readonly  type="text" id="salary" name="salary" class="form-control"  value="<?php  echo $row['salary'];?>" required="true"> </div>


                             <div class="form-group"> <label >Discount Salary</label> <input readonly  type="text" id="dsalary" name="dsalary" class="form-control"  value="<?php  echo $row['discount_amount'];?>" required="true"> </div> 
							 <button class="btn btn-primary"><a href="employee_appointment.php?editid=<?php echo $row['ID'];?>">View all discounts</a></button> <br><br>
							 <div class="form-group"> <label >Total Salary</label> <input readonly  type="text" id="tsalary" name="tsalary" class="form-control"  value=<?php
							 $total_sale=$row['discount_amount']+$row['salary'];
							 $totalsale+=$total_sale;
							  echo $totalsale;?> required="true"> </div>
						
					</div><?php } ?>
				
				</div>
			</div>
		</div>
	</div>
	<!-- Classie -->
		<script src="js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			

			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.js"> </script>
</body>
</html>