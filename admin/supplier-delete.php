<?php

include('includes/dbconnection.php');// Using database connection file here

$ID = $_GET['addid']; // get id through query string

$del = mysqli_query($con,"delete from suppliers where id = '$ID'"); // delete query

if($del)
{
    mysqli_close($con); // Close connection
    header("location:supplier-list.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>