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
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.print.min.js"></script>

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css">

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
  <?php

 $cid=$_GET['editid'];
$ret=mysqli_query($con,"select * from  tblemployees where ID='$cid'");

while ($row=mysqli_fetch_array($ret)) {
    $name= $row['Name'];
?> 
							<h4><?php echo $row['Name'] ?></h4>
						</div>
						<div class="form-body">
							<form method="post">
								<p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
  


                            
  <table  id="example" class="display" style="width:100%"><thead> <tr> <th>No</th> 
						<!-- <th> Appointment Number</th> -->
						 <th>Customer Name</th><th>Service</th><th>Appointment Date</th><th>Appointment Time</th><th>Total Cost</th><th>Discount</th>   </tr> </thead> <tbody>
<?php

$ret2=mysqli_query($con," select bookings.name, bookings.Services,bookings.beautician,bookings.date, bookings.timeslot, taskduration.Cost from bookings INNER JOIN taskduration ON bookings.Services=taskduration.taskname where
 beautician='$name'  group by ApplyDate");
$cnt=1;      
while ($row=mysqli_fetch_array($ret2)) {

?>

						 <tr> <th scope="row"><?php echo $cnt;?></th>  
						 
						 <td><?php  echo $row['name'];?></td>
						 <td>
						 <?php echo $row['Services'];?></td>
						 <td>
						 <?php echo $row['date'];?></td>
						  <td><?php  echo $row['timeslot'];?></td>

						   <td><?php  echo $row['Cost'];?></td>

						<?php   $gtotal=$row['Cost'] * 0.1;?>

						   <td><?php  echo $gtotal;?></td>
						    </tr>   <?php 
$cnt=$cnt+1;
 $total+=$gtotal;
 
}?></tbody> 


<tr>  
<th colspan="2" style="text-align:center">Grand Total</th>
<th></th>
<th></th><th></th><th></th><th> <?php echo $total?></th>	

<?php $_SESSION['discount'] = $total;?>
</tr>
</table> 
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
   <script>


$(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
           'print'
        ]
    } );
} );
    </script>
</body>
</html>
<?php } ?>