<?php 
include('includes/dbconnection.php');
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if(isset($_POST['submit']))
  {

    $name=$_POST['name'];
    $email=$_POST['email'];
    $services=$_POST['services'];
    $adate=$_POST['adate'];
    $atime=$_POST['atime'];
    $phone=$_POST['phone'];
    $aptnumber = mt_rand(100000000, 999999999);
  
    $query=mysqli_query($con,"insert into bookings(AptNumber,Name,Email,PhoneNumber,AptDate,AptTime,Services) value('$aptnumber','$name','$email','$phone','$adate','$atime','$services')");
    if ($query) {
$ret=mysqli_query($con,"select AptNumber from bookings where email='$email' and  PhoneNumber='$phone'");
 echo "<script>window.location.href='thank-you.php'</script>";	
  }
  else
    {
      $msg="Something Went Wrong. Please try again";
    }

  
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Salon AURA||Home Page</title>
        
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
	  <?php include_once('includes/header.php');?>
    <!-- END nav -->

    <section id="home-section" class="hero">
		  <div class="home-slider owl-carousel">
	      <div class="slider-item js-fullheight"  style="background-image: url(images/bg.png);" data-stellar-background-ratio="0.5">
	      	<div class="overlay"></div>
	        <div class="container-fluid p-0">
	          <div class="row d-md-flex no-gutters slider-text align-items-end justify-content-end" data-scrollax-parent="true">
	          
		          <div class="one-forth d-flex align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
		          	<div class="text mt-5">
		          		<span class="subheading">Natural Beauty</span>
			            <h1 class="mb-4">Salon AURA</h1>
			            <p class="mb-4">We pride ourselves on our high quality work and attention to detail. The products we use are of top quality branded products.</p>
			            
			           
		            </div>
		          </div>
	        	</div>
	        </div>
	      </div>

	      <div class="slider-item js-fullheight" style="background-image: url(images/bg2.png);" data-stellar-background-ratio="0.5">
	      	<div class="overlay"></div>
			  
	        <div class="container-fluid p-0">
	          <div class="row d-flex no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
	          	
		          <div class="one-forth d-flex align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
		          	<div class="text mt-5">
		          		<span class="subheading">Natural Beauty</span>
			            <h1 class="mb-4">Salon AURA</h1>
			            <p class="mb-4">This parlour provides huge facilities with advanced technology equipments and best quality service. Here we offer best treatment that you might have never experienced before.</p>
			            
			           
		            </div>
		          </div>
	        	</div>
	        </div>
	      </div>

		  <div class="slider-item js-fullheight" style="background-image: url(images/bg5.png);" data-stellar-background-ratio="0.5">
	      	<div class="overlay"></div>
	        <div class="container-fluid p-0">
	          <div class="row d-flex no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
	          
		          <div class="one-forth d-flex align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
		          	<div class="text mt-5">
		          		<span class="subheading">Natural Beauty</span>
			            <h1 class="mb-4">Salon AURA</h1>
			            <p class="mb-4">This parlour provides huge facilities with advanced technology equipments and best quality service. Here we offer best treatment that you might have never experienced before.</p>
			            
			           
		            </div>
		          </div>
	        	</div>
	        </div>
	      </div>

	    </div>


		
    </section>


<section id= "reserve-section"> 


<section class="ftco-section ftco-pricing">
			<div class="container">
				<div class="row justify-content-center pb-3">
          <div class="col-md-10 heading-section text-center ftco-animate">
          	<h1 class="big">services</h1>
          	<span class="subheading">book a service</span>
            <h2 class="mb-4">Our Services</h2>
            <p>Every great dream begins with a dreamer. Always remember, you have within you the strength, the patience, and the passion to reach for the stars to change the world.</p>
         <br>
						
						<a href="user/login.php"><input type="submit" name="submit" value="Make a reservation" height=20 class="btn btn-primary"></a>		
						<br>
    		            </div>
    	                </div>
						</div>
        </div>

    	<div class="container">
    		
			<div class="container-fluid p-0">
    		<div class="row no-gutters">

    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="project">
	    				<img src="images/work-1.jpg" class="img-fluid" alt="Colorlib Template">
	    				<div class="text">
	    					<span>Stylist</span>
	    					<h3>Makeup</h3>
	    				</div>
	    				<a href="images/work-1.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="icon-expand"></span>
	    				</a>
    				</div>
    			</div>

    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="project">
	    				<img src="images/work-2.jpg" class="img-fluid" alt="Colorlib Template">
	    				<div class="text">
	    					<span>Beauty</span>
	    					<h3>Makeup</h3>
	    				</div>
	    				<a href="images/work-2.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="icon-expand"></span>
	    				</a>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="project">
	    				<img src="images/work-3.jpg" class="img-fluid" alt="Colorlib Template">
	    				<div class="text">
	    					<span>Beauty</span>
	    					<h3>Makeup</h3>
	    				</div>
	    				<a href="images/work-3.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="icon-expand"></span>
	    				</a>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="project">
	    				<img src="images/work-4.jpg" class="img-fluid" alt="Colorlib Template">
	    				<div class="text">
	    					<span>Beauty</span>
	    					<h3>Makeup</h3>
	    				</div>
	    				<a href="images/work-4.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="icon-expand"></span>
	    				</a>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="project">
	    				<img src="images/work-5.jpg" class="img-fluid" alt="Colorlib Template">
	    				<div class="text">
	    					<span>Beauty</span>
	    					<h3>Makeup</h3>
	    				</div>
	    				<a href="images/work-5.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="icon-expand"></span>
	    				</a>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="project">
	    				<img src="images/work-6.jpg" class="img-fluid" alt="Colorlib Template">
	    				<div class="text">
	    					<span>Fashion</span>
	    					<h3>Model</h3>
	    				</div>
	    				<a href="images/work-6.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="icon-expand"></span>
	    				</a>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="project">
	    				<img src="images/work-7.jpg" class="img-fluid" alt="Colorlib Template">
	    				<div class="text">
	    					<span>Beauty</span>
	    					<h3>Makeup</h3>
	    				</div>
	    				<a href="images/work-7.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="icon-expand"></span>
	    				</a>
    				</div>
    			</div>

    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="project">
	    				<img src="images/work-8.jpg" class="img-fluid" alt="Colorlib Template">
	    				<div class="text">
	    					<span>Beauty</span>
	    					<h3>Makeup</h3>
	    				</div>
	    				<a href="images/work-8.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="icon-expand"></span>
	    				</a>
    				</div>
    			</div>

    		</div>
    	</div>
		</section>

<section id="about-section">
	<br><br> <br>
	<section class="ftco-section ftco-no-pb ftco-no-pt">
			<div class="container">
				<div class="row">
					<div class="col-md-6 d-flex">
						<div class="p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/about.png);">
				
							
							</a>
						</div>
					</div>
					<div class="col-md-6 py-md-5 pb-5 wrap-about pb-md-5 ftco-animate">
						<?php

$ret=mysqli_query($con,"select * from tblpage where PageType='aboutus' ");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
	          <div class="heading-section mb-4 mt-md-5">
			  <div class="col-md-10 heading-section text-center ftco-animate">
          	<h1 class="big">Pricing</h1>
          	<span class="subheading">Pricing</span>
            <h2 class="mb-4">Our Service Prices</h2>
           
	           
	          </div>
	          <div class="pb-md-5">
							<p><?php  echo $row['PageDescription'];?>.</p>
							
						</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</section>
</section>
<br><br>
<section id="contact-section">
	<br><br>
	<section class="contact-section bg-light">
      <div class="container">
        <div class="row no-gutters d-flex contact-info">
          <?php

$ret=mysqli_query($con,"select * from tblpage where PageType='contactus' ");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>          
           <!-- <div class="heading-section mb-4 mt-md-5">
			  <div class="col-md-10 heading-section text-center ftco-animate">
          	<h1 class="big">Pricing</h1>
          	<span class="subheading">Pricing</span>
            <h2 class="mb-4">Our Service Prices</h2>
			</div>
          </div> -->

          <div class="col-md-3 d-flex">
          	<div class="align-self-stretch box p-4 py-md-5 text-center">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-map-signs"></span>
          		</div>
          		<h3 class="mb-4">Address</h3>
	            <p><?php  echo $row['PageDescription'];?></p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="align-self-stretch box p-4 py-md-5 text-center">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-phone2"></span>
          		</div>
          		<h3 class="mb-4">Contact Number</h3>
	            <p><a href="tel://1234567920">+ <?php  echo $row['MobileNumber'];?></a></p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="align-self-stretch box p-4 py-md-5 text-center">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-paper-plane"></span>
          		</div>
          		<h3 class="mb-4">Email Address</h3>
	            <p><a href="mailto:info@yoursite.com"><?php  echo $row['Email'];?></a></p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="align-self-stretch box p-4 py-md-5 text-center">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-globe"></span>
          		</div>
          		<h3 class="mb-4">Timing</h3>
	            <p><?php  echo $row['Timing'];?></p>
	          </div>
          </div>
          <?php } ?>
        </div>
      </div>
    </section>
</section>

		
<br> <br>


   <?php include_once('includes/footer.php');?>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>