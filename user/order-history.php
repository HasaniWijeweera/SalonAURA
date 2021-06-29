<?php 
session_start();
error_reporting(0);
include('includes/config.php');
function debug_to_console($data) {
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);

    echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
}
if(strlen($_SESSION['login'])==0)
    {   
header('location:login.php');
}
else{

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

		<title>My Order History</title>
<!-- Customizable CSS --> <link rel="stylesheet" href="assets/css/bootstrap.min.css">
	    <link rel="stylesheet" href="assets/css/main.css">
	    <link rel="stylesheet" href="assets/css/green.css">
	    <link rel="stylesheet" href="assets/css/owl.carousel.css">
		<link rel="stylesheet" href="assets/css/owl.transitions.css">
		<!--<link rel="stylesheet" href="assets/css/owl.theme.css">-->
		<link href="assets/css/lightbox.css" rel="stylesheet">
		<link rel="stylesheet" href="assets/css/animate.min.css">
		<link rel="stylesheet" href="assets/css/rateit.css">
		<link rel="stylesheet" href="assets/css/bootstrap-select.min.css">


	
	<script language="javascript" type="text/javascript">
var popUpWin=0;
function popUpWindow(URLStr, left, top, width, height)
{
 if(popUpWin)
{
if(!popUpWin.closed) popUpWin.close();
}
popUpWin = open(URLStr,'popUpWin', 'toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=no,copyhistory=yes,width='+600+',height='+600+',left='+left+', top='+top+',screenX='+left+',screenY='+top+'');
}

</script>
<?php include('includes/userheader3.php');?> <br><br><br>
	</head>
	
    <body class="cnt-home">
	
	
	
	<div class="body-content outer-top-bd">
	<div class="container">
		<div class="sign-in-page inner-bottom-sm">
			
<div class=" sign-in">

	<div class="panel panel-default checkout-step-02">
		<div class="panel-heading">
    	<h4 class="unicase-checkout-title">
	        <a data-parent="#accordion">
	          Upcoming Appointments
	        </a>
	     </h4>
    </div>
		<table class="table table-bordered">
			<thead>
				<tr>
					
					<th >Service</th>
					<th >Date</th>
					<th >Time</th>
					<th >Beautician</th>
					<th >Action</th>
					
					
					
				</tr>
			</thead>
			<?php
				$sql1 = "SELECT  Services, date, timeslot, beautician FROM bookings WHERE Remark='remarked' AND email='".$_SESSION['login']."'";
				$result = mysqli_query($con, $sql1);
				if (mysqli_num_rows($result) > 0){
					while($row = mysqli_fetch_assoc($result)){
						echo "<tr>
						<td>".$row["Services"]."</td>
						<td>".$row['date']."</td>
						<td>".$row['timeslot']."</td>
						<td>".$row["beautician"]."</td>
						<td>Delete</td>
						</tr>";
					}
				}
			?>

			<tbody>

			</tbody>

		</table>
	</div>

	<br><br><br>

	<div class="panel panel-default checkout-step-02">

		<div class="panel-heading"><h4 class="unicase-checkout-title"><a data-parent="#accordion">Previous Appointments</a></h4></div>
		<table class="table table-bordered">
			<thead>
				<tr>
					
					<th >Service</th>
					<th >Date</th>
					<th >Time</th>
					<th >Beautician</th>
					<th >Action</th>
					
					
					
				</tr>
			</thead>
			<?php
				$sql1 = "SELECT  Services, date, timeslot, beautician FROM bookings WHERE Remark='' AND email='".$_SESSION['login']."'";
				$result = mysqli_query($con, $sql1);
				if (mysqli_num_rows($result) > 0){
					while($row = mysqli_fetch_assoc($result)){
						echo "<tr>
						<td>".$row["Services"]."</td>
						<td>".$row['date']."</td>
						<td>".$row['timeslot']."</td>
						<td>".$row["beautician"]."</td>
						<td>Give Feedback</td>
						</tr>";
					}
				}
			?>
			<tbody>

			</tbody>

		</table>
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

	
</body>
</html>
<?php } ?>