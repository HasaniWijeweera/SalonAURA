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
							<h4>Supplier Details:  <?php echo $fdate?> to <?php echo $tdate?></h4>
						</div>
						<div class="form-body">
							<form method="post">
								<p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
  
  <?php
 $cid=$_GET['editid'];
$ret=mysqli_query($con,"select * from  tblemployees where ID='$cid'");

while ($row=mysqli_fetch_array($ret)) {

?> 

                            
							 <div class="form-group"> <label >Name</label> <input readonly  type="text" class="form-control" id="name" name="name"  value="<?php  echo $row['Name'];?>" required="true"> </div>
							 <div class="form-group"> <label >Email</label> <input readonly  type="text"  id="email" name="email" class="form-control"  value="<?php  echo $row['email'];?>" required="true"> </div>
							 <div class="form-group"> <label >Mobile Number</label> <input readonly  type="text" id="mobilenum" name="mobilenum" class="form-control"  value="<?php  echo $row['contactno'];?>" required="true"> </div>
                             <div class="form-group"> <label >role</label> <input readonly  type="text" id="role" name="role" class="form-control"  value="<?php  echo $row['role'];?>" required="true"> </div>
                             <div class="form-group"> <label >Basic Salary</label> <input readonly  type="text" id="salary" name="salary" class="form-control"  value="<?php  echo $row['salary'];?>" required="true"> </div>
                             <div class="form-group"> <label >Discount Salary</label> <input readonly  type="text" id="dsalary" name="dsalary" class="form-control"  value="<?php  echo $row['salary'];?>" required="true"> </div> 
							 <div class="form-group"> <label >Total Salary</label> <input readonly  type="text" id="tsalary" name="tsalary" class="form-control"  value="<?php  echo $row['salary'];?>" required="true"> </div>
                             
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