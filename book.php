<?php
include('includes/dbconnection.php');
session_start();
error_reporting(0);
 $mysqli=new mysqli('localhost','root', '','mysalon'); 
if(isset($_GET['date'])){
    $name=" ".$_SESSION['beautician_name'];
    $date = $_GET['date'];
    $stmt=$mysqli->prepare("select * from bookings where date=? and beautician=?");
    $stmt->bind_param('ss',$date,$name);
    $bookings= array();
    if($stmt->execute()){
        $result= $stmt->get_result();
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                $bookings[]= $row['timeslot'];
            }
            $stmt->close();
        }
    }
}
function debug_to_console($data) {
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);

    echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
}
$hidefield="";
if(isset( $_SESSION['path'])){
    $hidefield="type:hidden";
}
if(isset($_POST['submit'])){
    if(isset($_SESSION['beautician_name'])){
        $selectedBeautician= $_SESSION['beautician_name'];
    }
    else{
        $selectedBeautician=$_POST['beauty'];
    }
    $name = $_POST['name'];
    $email = $_POST['email'];
    $timeslot = $_POST['timeslot'];
    $services=$_POST['services'];
    $beauty=$selectedBeautician;
    $number=$_POST['number'];
    $aptnumber = mt_rand(100000000, 999999999);
    $duecheck=substr($timeslot,0,2);
    $duecheck=+$duecheck;
    //////////////////////////////////////////////////////////////////////////////////////////
    $beauticianDurationstmt=$mysqli->prepare("SELECT duration FROM taskduration where taskname=?");
    $beauticianDurationstmt->bind_param('s',$_POST['services']);
    $dbduration=0;
    if($beauticianDurationstmt->execute()){
        $durationresult=$beauticianDurationstmt->get_result();
        while ($row = $durationresult->fetch_array(MYSQLI_NUM))
        {
            foreach ($row as $r)
            {
                 $dbduration=$r;
            }
        }
        $beauticianDurationstmt->close();
    }
    else{
        debug_to_console("Task did not execute");
        
    }
    
    if($dbduration+$duecheck>18){
        echo '<script>alert("Time slot is not enough for the task. please try another time slot")</script>';
    }
    else{
        debug_to_console("possible");
        $canregister=0;
        for($x = 0; $x < $dbduration; $x++){
            $startTime=$duecheck+$x;
            $endTime=$duecheck+$x+1;
            $startTimeStamp="";
            $endTimeStamp="";
            if($startTime>=12){
                $startTimeStamp="PM";
            }
            else{
                $startTimeStamp="AM";
            }
            if($endTime>=12){
                $endTimeStamp="PM";
            }
            else{
                $endTimeStamp="AM";
            }

            $stringStart=strval($startTime);
            $stringEnd=strval($endTime);
            if(strlen($stringStart)==1){
                $stringStart='0'.$stringStart;
            }
            if(strlen($stringEnd)==1){
                $stringEnd='0'.$stringEnd;
            }
            $stringStart=$stringStart.":00".$startTimeStamp."-";
            $stringEnd=$stringEnd.":00".$endTimeStamp;
            $timeslot=$stringStart.$stringEnd;

            $stmt = $mysqli->prepare("select * from bookings where date = ? AND timeslot=?");
            $stmt->bind_param('ss', $date, $timeslot);
            if($stmt->execute()){
                $result = $stmt->get_result();
                if($result->num_rows>0){
                    $canregister=1;
                    echo '<script>alert("The time slot is not available.")</script>';


                }
            }
            
        }
        if($canregister==0){
            for($x = 0; $x < $dbduration; $x++){
                $startTime=$duecheck+$x;
            $endTime=$duecheck+$x+1;
            $startTimeStamp="";
            $endTimeStamp="";
            if($startTime>=12){
                $startTimeStamp="PM";
            }
            else{
                $startTimeStamp="AM";
            }
            if($endTime>=12){
                $endTimeStamp="PM";
            }
            else{
                $endTimeStamp="AM";
            }

            $stringStart=strval($startTime);
            $stringEnd=strval($endTime);
            if(strlen($stringStart)==1){
                $stringStart='0'.$stringStart;
            }
            if(strlen($stringEnd)==1){
                $stringEnd='0'.$stringEnd;
            }
            $stringStart=$stringStart.":00".$startTimeStamp."-";
            $stringEnd=$stringEnd.":00".$endTimeStamp;
            $timeslot=$stringStart.$stringEnd;
            $query=mysqli_query($con,"insert into bookings(name, timeslot, email, date,Services, beautician, PhoneNumber) value('$name', '$timeslot', '$email', '$date','$services',' $beauty','$number')");
                           
            }
            
            $ret=mysqli_query($con,"select id from bookings where email='$email' and  PhoneNumber='$phone'");
            $result=mysqli_fetch_array($ret);
            $_SESSION['aptno']=$result['id'];
            //echo "<script>window.location.href='thank-you.php'</script>";
            $_SESSION['booking-success']=1;
            header("location: userindex.php");
            $stmt->execute();
            $msg = "<div class='alert alert-success'>Booking Successfull</div>";
            $bookings[] = $timeslot;
            $stmt->close();
            $mysqli->close();
        }
        
        
    }
    


}

 $duration=60;
 $cleanup=0;
 $start="06:00";
 $end="18:00";
 
Function timeslots($duration, $cleanup, $start, $end){

    $start= new DateTime($start);
    $end= new DateTime($end);
    $interval = new DateInterval("PT".$duration."M");
    $cleanupInterval = new DateInterval("PT".$cleanup."M");
    $slots = array();

    for($intStart = $start; $intStart<$end; $intStart->add($interval)->add($cleanupInterval)){
        $endPeriod = clone $intStart;
        $endPeriod->add($interval);
        if($endPeriod>$end){
            break;
        }

        $slots[] = $intStart->format("H:iA")."-".$endPeriod->format("H:iA");
    }

    return $slots;
}

?>
<!doctype html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title></title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/main.css">
    <style>
        .container{
            background= #e83e8c;
        }
    </style>
  </head>

  <body>
  <br><br><br><br>
    <div class="container">
    
        <h1 class="text-center">Book for Date: <?php echo date('m/d/Y', strtotime($date)); ?></h1><hr>
        <div class="row">
        <div class="col-md-12">
          <?php echo(isset($msg))?$msg:""; ?>
        </div>
        <?php $timeslots = timeslots($duration, $cleanup, $start, $end); 
             foreach($timeslots as $ts){
            ?>
          <div class="col-md-2">
            <div class="form-group">
              <?php if(in_array($ts, $bookings)){ ?>
             <button class="btn btn-danger"><?php echo $ts; ?></button>
               <?php }else{ ?>
                <button class="btn btn-success book" data-timeslot="<?php echo $ts; ?>"><?php echo $ts; ?></button>
             <?php }  ?>
    </div>
</div>
<?php } ?> 
</div>  <br><br><br><br>	<a href="userindex.php" class="forgot-password pull-right">Back to Home</a>
    </div>

    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">

                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Booking for: <span id="slot"></span></h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form action="" method="post">
                               <div class="form-group">
                                    <label for="">Time Slot</label>
                                    <input readonly type="text" class="form-control" id="timeslot" name="timeslot">
                                </div>
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input reandonly type="text" class="form-control" name="name" value="<?php echo htmlentities($_SESSION['username']);?>" >
                                </div>
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input required type="email" class="form-control" name="email" value="<?php echo htmlentities($_SESSION['login']);?>">
                                </div>
                                
                                
			                <div class="form-group">
                            <label for="">Select a Services</label>
		                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
		                      <select name="services" id="services" required="true" class="form-control">
		                      	<option value="">Select here</option>
		                      	<?php $query=mysqli_query($con,"select * from tblservices");
              while($row=mysqli_fetch_array($query))
              {
              ?>
		                       <option value="<?php echo $row['ServiceName'];?>"><?php echo $row['ServiceName'];?></option>
		                       <?php } ?> 
		                      </select>
		                    </div>

                            <div class="form-group">
                            <label for="">Select a Beautician</label>
		                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
		                      <!--  -->
                              <input readonly type="hidden" type="text" class="form-control" id="beauty" value="<?php echo $_SESSION['beautician_name'] ?>" >
		                    </div>
					    
                            <div class="form-group">
                                    <label for="">Mobile Number</label>
                                    <input required type="text" class="form-control" name="number" minLength="10" maxLength="10" pattern="[0-9]+" value="<?php echo htmlentities($_SESSION['number']);?>">
                                </div>

                                <div class="form-group pull-right">
                                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                 </div>
                
            </div>

       </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script>
$(".book").click(function(){
    var timeslot = $(this).attr('data-timeslot');
    $("#slot").html(timeslot);
    $("#timeslot").val(timeslot);
    $("#myModal").modal("show");
});
</script>
  
  </body>

</html>
