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
					<h3 class="title1">Employee Details</h3>

					<br>
			 	<a href="employee-list.php"><input type="submit" name="submit" value="Back" class="btn btn-primary" ></a>
			
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
						<div class="form-title">  
							<?php

?>
						
						</div>
						<div class="form-body">
							<form method="post">
								<p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
  
  <?php
 $cid=$_GET['editid'];
 $total = $_SESSION['discount'];
$ret=mysqli_query($con,"select * from  tblemployees where ID='$cid' ");

while ($row=mysqli_fetch_array($ret)) {

?> 
<table class="table table-bordered">
                            
							 <th>Name</th><td><?php echo $row['Name'];?></td>
  </tr>

						 <th>Email</th><td><?php  echo $row['email'];?></td>
  </tr>

							 <th>Mobile Number</th><td><?php  echo $row['contactno'];?></td>
  </tr>

                             <th>role</th><td><?php  echo $row['role'];?></td>
  </tr>

                             <th>Basic Salary</th><td><?php  echo $row['salary'];?></td>
  </tr>



                             <th>Discount Salary</th><td><?php echo $total; ?></td>
  </tr>

							 <button class="btn btn-primary"><a href="employee_appointment.php?editid=<?php echo $row['ID'];?>">View all discounts</a></button> <br><br>
							 <th>Total Salary</th><td><?php
							 $total_sale=$total +$row['salary'];
							 $totalsale+=$total_sale;
							  echo $totalsale;?></td>
  </tr>



                             
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