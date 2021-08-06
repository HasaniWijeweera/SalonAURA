<?php
session_start();?>
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
    mysqli_close($con);
    $_SESSION['status']="New Customer Added"; // Close connection
     // redirects to all records page
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
include('customer-list.php');
?>
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   <?php 
   if(isset($_SESSION['status'])&& $_SESSION['status'] !='')
   { ?>
   <script>
	  swal({
  title: "Are you sure?",
  text: "Once deleted, you will not be able to recover this  file!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    swal("Poof! Your  file has been deleted!", {
      icon: "success",
    });
  } else {
    swal("Your file is safe!");
  }
});
   </script>
   <?php unset($_SESSION['status']);
   }?>
    
</body>
</html>