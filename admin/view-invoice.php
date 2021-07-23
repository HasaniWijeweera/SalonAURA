<?php 
function debug_to_console($data) {
	$output = $data;
	if (is_array($output))
		$output = implode(',', $output);

	echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
}
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
<title>BPMS || Customer List</title>

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
				<div class="tables" id="exampl">
					<h3 class="title1">Invoice Details</h3>
					
	<?php
	$invid=intval($_GET['invoiceid']);
$ret=mysqli_query($con,"select DISTINCT  tblinvoice.PostingDate,users.name,users.email,users.contactno,users.age
	from  tblinvoice 
	join users on users.id=tblinvoice.Userid 
	where tblinvoice.BillingId='$invid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>				
				
					<div class="table-responsive bs-example widget-shadow">
						<h4>Invoice #<?php echo $invid;?></h4>
						<table class="table table-bordered" width="100%" border="1"> 
<tr>
<th colspan="6">Customer Details</th>	
</tr>
							 <tr> 
								<th>Name</th> 
								<td><?php echo $row['name']?></td> 
								<th>Contact no.</th> 
								<td><?php echo $row['contactno']?></td>
								<th>Email </th> 
								<td><?php echo $row['email']?></td>
							</tr> 
							 <tr> 
							    <th>Age</th> 
								<td><?php echo $row['age']?></td>
								<th>Invoice Date</th> 
								<td colspan="3"><?php echo $row['PostingDate']?></td> 
							</tr> 
<?php }?>
</table> 
<table class="table table-bordered" width="100%" border="1"> 
<tr>
<th colspan="3">Services Details</th>	
</tr>
<tr>
<th>#</th>	
<th>Service</th>
<th>Cost</th>
</tr>

<?php
$bookingID = $_SESSION['bookid'];

debug_to_console($bookid);
$ret2=mysqli_query($con,"select bookings.Services, taskduration.Cost from bookings INNER JOIN taskduration ON bookings.Services=taskduration.taskname where bookings.ID='$bookingID' ");
$ret3=mysqli_query($con,"select taskduration.taskname,taskduration.Cost  
	from  tblinvoice 
	join taskduration on taskduration.ID=tblinvoice.ServiceId 
	where tblinvoice.BillingId='$invid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret2)) {
	?>

<tr>
<th><?php echo $cnt;?></th>
<td><?php echo $row['Services']?></td>	
<td><?php echo $subtotal=$row['Cost']?></td>
</tr>
<?php 
$cnt=$cnt+1;
$gtotal+=$subtotal;
}
while ($row=mysqli_fetch_array($ret3)) {
	?>

<tr>
<th><?php echo $cnt;?></th>
<td><?php echo $row['taskname']?></td>	
<td><?php echo $subtotal=$row['Cost']?></td>
</tr>
<?php 
$cnt=$cnt+1;
$gtotal+=$subtotal;
}


?>

<tr>
<th colspan="2" style="text-align:center">Grand Total</th>
<th><?php echo $gtotal?></th>	

</tr>
</table>
  <p style="margin-top:1%"  align="center">
  <i class="fa fa-print fa-2x" style="cursor: pointer;"  OnClick="CallPrint(this.value)" ></i>
</p>

					</div>
				</div>
			</div>
		</div>
		<!--footer-->
		 <?php include_once('includes/footer.php');?>
        <!--//footer-->
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
function CallPrint(strid) {
var prtContent = document.getElementById("exampl");
var WinPrint = window.open('', '', 'left=0,top=0,width=800,height=900,toolbar=0,scrollbars=0,status=0');
WinPrint.document.write(prtContent.innerHTML);
WinPrint.document.close();
WinPrint.focus();
WinPrint.print();
WinPrint.close();
}
</script>
</body>
</html>
<?php }  ?>