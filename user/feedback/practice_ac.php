<?php
$q_score = $_POST['quality'];
$feedback_txt = $_POST['suggestion'];
$treatment = $_POST['treatment'];
$product = $_POST['product'];
$feedbackID=$_POST['Id'];
$conn = mysqli_connect("localhost", "root","", "mysalon");
$query ="insert into feedback(id,quality_score, feedback,beauty_score,treat_score)values($feedbackID,$q_score,$feedback_txt,$treatment,$product)";
$result = mysqli_query($conn, $query);
if($result){
  $host=$_SERVER['HTTP_HOST'];
  $uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
  echo '<script language="javascript">alert("Thank you for your feedback. We\'ll appreciate!");</script>';
  //echo "alert('Thank you for your feedback. We\'ll appreciate!')";
  
  header("location:http://$host/SalonAURA/user/order-history.php");
}
else
die("Something terrible happened. Please try again. ");
?>