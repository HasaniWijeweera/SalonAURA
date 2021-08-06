<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['bpmsaid']==0)) {
  header('location:logout.php');
  } else{

if(isset($_POST['submit']))
  {
    $sname=$_POST['sname'];
    $pname=$_POST['pname'];
   $pprice=$_POST['pprice'];
   $oquantity=$_POST['oquantity'];
   
 
     
    $query=mysqli_query($con, "insert into  purchase (supplier_name,ProductName,ProductPrice,OrderQuantity) value('$sname','$pname','$pprice','$oquantity')");
    if ($query) {
		$_SESSION['status']="New Purchase Added";
 } else {
echo "<script>alert('Something Went Wrong. Please try again.');</script>";  	
} }
  ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Salon AURA | Add employee</title>

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
					<h3 class="title1">New Purchase</h3>

                    <br><a href="supplier-purchase.php"><input type="submit" name="submit" value="back" class="btn btn-primary" ></a>
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
						<div class="form-title">
							<h4> Purchase:</h4>
						</div>
						<div class="form-body">
							<form method="post">
								<p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>

  
<div class="form-group">
                            <label for="">Supplier Name</label>
		                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
		                      <select name="sname" id="sname" required="true" class="form-control">
		                      	<option value="">Select here</option>
		                      	<?php 
                                 
                                  $query=mysqli_query($con,"select * from suppliers");
              while($row=mysqli_fetch_array($query))
              {
              ?>
		                       <option value="<?php echo $row['name'];?>"><?php echo $row['name'];?></option>
		                       <?php } ?> 
		                      </select>
		                    </div>

                            <div class="form-group">
                            <label for="">select product</label>
		                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
		                      <select name="pname" id="pname" required="true" class="form-control">
		                      	<option value="">Select here</option>
		                      	<?php 
                                
                                  $query=mysqli_query($con,"select * from suppliers");
              while($row=mysqli_fetch_array($query))
              {
              ?>
		                       <option value="<?php echo $row['Details'];?>"><?php echo $row['Details'];?></option>
		                       <?php } ?> 
		                      </select>
		                    </div>

						<label>Product Price</label> <input type="text" 
							 id="pprice" name="pprice" class="form-control" placeholder="Enter Product Price" value="" required="true">

							<label >Order Quantity</label> <input type="text"
							  class="form-control" id="oquantity" name="oquantity" placeholder="Enter Order Quantity" value="" required="true"
							   maxlength="10" pattern="[0-9]+"> 

						<br>
						
							  <button type="submit" name="submit" class="btn btn-default">Add</button> </form> 
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
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   <?php 
   if(isset($_SESSION['status'])&& $_SESSION['status'] !='')
   { ?>
   <script>
	   swal({
		   title:"<?php echo $_SESSION['status'];?>",
		   icon:"success",
		   button:"OK",
	   });
   </script>
   <?php unset($_SESSION['status']);
   }?>
</body>
</html>
<?php } ?>