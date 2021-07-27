<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

include('includes/dbconnection.php');// Using database connection file here

$ID = $_GET['addid']; // get id through query string

$del = mysqli_query($con,"delete from users where id = '$ID'"); // delete query

if($del)
{
    mysqli_close($con); // Close connection
    header("location:customer-list.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>
    
</body>
</html>