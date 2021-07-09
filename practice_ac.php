<?php
$b_score = $_POST['beauty'];
$t_score = $_POST['treat'];
$q_score = $_POST['quality'];
$feedback_txt = $_POST['suggestion'];
$conn = mysqli_connect("localhost", "root","", "mysalon");
$query ="insert into feedback(beauty_score, treat_score, quality_score, feedback)values($b_score, $t_score,$q_score, '$feedback_txt')";
$result = mysqli_query($conn, $query);
if($result)
  echo 'Thank you for your feedback. We\'ll appreciate!';
else
die("Something terrible happened. Please try again. ");
?>