<?php

include('includes/config.php');// Using database connection file here

$ID = $_GET['addid']; // get id through query string

$del = mysqli_query($con,"delete from bookings where ID = '$ID'"); // delete query

if($del)
{
    mysqli_close($con); // Close connection
    header("location:order-history.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>