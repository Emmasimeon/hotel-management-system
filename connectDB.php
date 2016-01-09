<?php
 

$con = mysqli_connect("localhost","root","","hotelmagsys_db");

if (mysqli_connect_errno())

{

echo "MySQLi Connection was not established: " . mysqli_connect_error();

}

// checking the user

if(isset($_POST['login'])){

$username = mysqli_real_escape_string($con,$_POST['username=md5']);

$password = mysqli_real_escape_string($con,$_POST['password=md5']);

$sel_user = "select * from login where username=md5('$username') AND password=md5('$password')";

$run_user = mysqli_query($con, $sel_user);

$check_user = mysqli_num_rows($run_user);

if($check_user>0){

$_SESSION['username']=$username;


echo "<script>window.open('success.php','_self')</script>";

}

else {

echo "<script>alert('Username or Password is not correct, try again!')</script>";

}

}

?>
