<?php
session_start();
error_reporting(0);


include('includes/dbconnection.php');
if (strlen($_SESSION['bpmsaid']==0)) {
  header('location:logout.php');
  } else{

  ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Salon AURA | Update Suppliers</title>

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
<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">
<!--//Metis Menu -->
</head> 
<body class="cbp-spmenu-push">
	<div class="main-content">
		<!--left-fixed -navigation-->
		 <?php include_once('includes/sidebar.php');?>
		<!--left-fixed -navigation-->
		<!-- header-starts -->
	 <?php include_once('includes/header.php');?>
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
			
				<div class="forms"> 
					<h3 class="title1">Update Supplier</h3>

					<br>
			 	<a href="employee-list.php"><input type="submit" name="submit" value="Back" class="btn btn-primary" ></a>
			
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
						<div class="form-title">  
							<?php
$fdate=$_POST['fromdate'];
$tdate=$_POST['todate'];

?>
  <?php
 $cid=$_GET['editid'];
$ret=mysqli_query($con,"select * from  tblemployees where ID='$cid'");

while ($row=mysqli_fetch_array($ret)) {
    $name= $row['Name'];
?> 
							<h4>Supplier Details:  <?php echo $row['Name'] ?></h4>
						</div>
						<div class="form-body">
							<form method="post">
								<p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
  


                            
<table class="table table-bordered"> <thead> <tr> <th>#</th> 
						<!-- <th> Appointment Number</th> -->
						 <th>Customer Name</th><th>Service</th><th>Appointment Date</th><th>Appointment Time</th><th>Total Cost</th><th>Discount</th>   </tr> </thead> <tbody>
<?php
$ret=mysqli_query($con,"select *from  bookings group by ApplyDate ");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>

						 <tr> <th scope="row"><?php echo $cnt;?></th>  
						 
						 <td><?php  echo $row['name'];?></td>
						 <td>
						 <?php echo $row['Services'];?></td>
						  <td><?php 
						  echo $row['beautician'];?></td>
						  <td><?php  echo $row['date'];?></td>
						   <td><?php  echo $row['timeslot'];?></td>
						    </tr>   <?php 
$cnt=$cnt+1;
}?></tbody> </table> 
							 <?php } ?>
							 
						</div>
						
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
<?php } ?>