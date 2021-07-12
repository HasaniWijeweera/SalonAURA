<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
 ?>
<?php 
include('includes/dbconnection.php');
session_start();
error_reporting(0);
include('includes/dbconnection.php');
function debug_to_console($data) {
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);

    echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
}
if(isset($_SESSION['booking-success'])){
    if($_SESSION['booking-success']==1){
        echo '<script>alert("Booking success.")</script>';

    }
    $_SESSION['booking-success']=0;

}

if(isset($_POST['checkdate'])){
    debug_to_console($_POST['availabledate']);
    $wanteddate=$_POST['availabledate'];
    $host=$_SERVER['HTTP_HOST'];
    $_SESSION['path']="date-path";
    header("location:http://$host/SalonAURA/book.php?date=$wanteddate");
    
}
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
$ret=mysqli_query($con,"select AptNumber from bookings where Email='$email' and  PhoneNumber='$phone'");
$result=mysqli_fetch_array($ret);
$_SESSION['aptno']=$result['AptNumber'];
 echo "<script>window.location.href='thank-you.php'</script>";	
  }
  else
    {
      $msg="Something Went Wrong. Please try again";
    }

  

  }
  $selectedbeautician="";
  
  if(isset($_SESSION['beauticianID'])){
    $selectedbeautician=$_SESSION['beauticianID'];
  }
  
  

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Salon AURA</title>

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
<?php include_once('includes/userheader.php');



?>

<body>


    <section class="hero-wrap hero-wrap-2"
        style="background-image: url('images/Black and White Basic Presentation Template (2).png');"
        data-stellar-background-ratio="0.5">

        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate pb-5">

                    <?php if(strlen($_SESSION['login']))
    {   ?>
                    <li><a href="#"><i class="icon fa fa-user"></i>
                            <h2 class="mb-0 bread">Welcome <?php echo htmlentities($_SESSION['username']);?></h2>
                        </a></li>
                    <?php } ?>

                </div>
            </div>
        </div>
    </section>



    <br><br><br><br><br><br>
    <section class="ftco-section ftco-no-pt ftco-booking">

        <div class="container-fluid px-0">
            <div class="container">
                <div class="row justify-content-center pb-3">
                    <div class="col-md-10 heading-section text-center ftco-animate">
                        <h1 class="big">Book</h1>
                        <span class="subheading">Make an appointment</span>
                        <h2 class="mb-4">Make an appointment</h2>
                        <p>Now you can select the beautician as well as the time slot as you preffered...</p>


                        <div style="display:flex;justify-content:space-around;">
                        <form name="DateFilter" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

                            <div class="datepicker">
                                <input type="date" name="availabledate" required min=<?php echo date('Y-m-d');?>>
                                <input name="checkdate"type="submit" >
                            </div>
                        </form>
                        <div class="dropdown">
                            <button class="" type="button"
                                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                Select beautician
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <?php
                                $beauticianQuery="SELECT * FROM tblemployees";
                                $beauticianNames=mysqli_query($con,$beauticianQuery);
                                while($row = mysqli_fetch_array($beauticianNames))
                                {
                                   
                                   echo '<a class="dropdown-item" href="../../SalonAURA/userindex.php?choice='.$row['ID'].'">'.$row['Name'].'</a>';
                                } 
                              ?>

                            </div>
                        </div>
                        </div>
                        
                        <br><br><br><br><br>

                    </div>
                </div>

            </div>
        </div>

        <div id="demo">

        </div>
        <?php
        if(isset($_GET['choice'])){
            $beauticianQuery2="SELECT * FROM tblemployees where ID=".$_GET['choice']."";
            $beauticianName2=mysqli_query($con,$beauticianQuery2);
            while($row2 = mysqli_fetch_array($beauticianName2)){
                echo '<h2 class="row justify-content-center pb-3" >Selected beautician is&nbsp  <b>'.$row2['Name'].'</b></h2>';
                $_SESSION['beautician_name']=$row2['Name'];
            }
            
            include_once('calendar.php');

        }

        
          ?>
    </section>


    <br>


    <?php include_once('includes/footer.php');?>

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00" />
        </svg></div>


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
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false">
    </script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>
    <script>
    function setBeautician(val) {

        document.getElementById("demo").innerHTML =val;

    }
    </script>
</body>

</html>