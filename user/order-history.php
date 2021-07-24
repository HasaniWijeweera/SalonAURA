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
				$sql1 = "SELECT  ID, Services, date, timeslot, beautician FROM bookings WHERE Status='' AND email='".$_SESSION['login']."' GROUP BY ApplyDate order by date desc";
				$result = mysqli_query($con, $sql1);
				if (mysqli_num_rows($result) > 0){
					while($row = mysqli_fetch_assoc($result)){?>
						 <tr>
						<td><?php echo $row["Services"];?></td>
						<td><?php echo$row['date'];?></td>
						<td><?php echo$row['timeslot'];?></td>
						<td><?php echo$row["beautician"];?></td>
						<td><button ><a href="delete-apppointment.php?addid=<?php echo $row['ID'];?>">Delete</a></button></td>
						</tr>
						<?php }} ?>


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
				
				
				$sql1 = "SELECT  ID,Services, date, timeslot, beautician FROM bookings WHERE Status='1' AND email='".$_SESSION['login']."' group by ApplyDate";
				$result = mysqli_query($con, $sql1);
				if (mysqli_num_rows($result) > 0){
					while($row = mysqli_fetch_assoc($result)){
						$var="";
						$clickmessage="Feedback";
						$sql2="SELECT id FROM feedback where id='".$row['ID']."'";
						$result2 = mysqli_query($con, $sql2);
						if (mysqli_num_rows($result2) > 0){
							$var="disabled color: red;";
							$clickmessage="Feedback submitted";
						}
						?>

						<tr>
						<td><?php  echo  $row["Services"];?></td>
						<td><?php  echo$row['date'];?></td>
						<td><?php  echo$row['timeslot'];?></td>
						<td><?php  echo$row["beautician"];?></td>

						<td>
						
						<button <?php echo $var;?>><a href="feedback/feedback.php?orderID=<?php echo$row['ID'];?>"><?php echo $clickmessage;?></a> </button></td>
						</tr>
						
							<?php }} ?>
				
			
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