<?php
//session_start();
/*$current_date= date("d-m-Y");//get date
$connection= mysqli_connect("localhost","root","","lms");
//echo gettype($current_date);
$logout_query="UPDATE INTO logs(logout_date) VALUES('$current_date')";
$logout_query_result=mysqli_query($connection,$logout_query);*/



session_unset();
session_destroy();

header("Location:signup.php");
    
?>