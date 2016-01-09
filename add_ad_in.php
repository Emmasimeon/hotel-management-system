<?php

if(isset($_POST["submit"])){
}

$name = mysql_real_escape_string ($_POST['name']);
$house_no = mysql_real_escape_string ($_POST['house_no']);
$street = mysql_real_escape_string ($_POST['street']);
$area = mysql_real_escape_string ($_POST['area']);
$lg_area = mysql_real_escape_string ($_POST['lg_area']);
$state = mysql_real_escape_string ($_POST['state']);


$con = new MySQLi('localhost', 'root', '', 'hotelmagsys_db');
   
   if($con->connect_errno) {
	   die('Sorry, we are having some problems.');
   }
  
 $table = 'guest reg';
 
 $sql = "INSERT INTO $table (name,house_no,street,area,lg_area,state) VALUES ('$name','$house_no','$street','$area','$lg_area','$state')";
 
 if (mysqli_query($con, $sql)) {
	 echo "<script>alert('Record Submitted Successfully')</script>";
	 echo "<script>window.open('add_ad.php','_self')</script>";
 } else { 
    echo "Error: " .$sql . "<br>" . mysqli_error($con);
 }
 mysqli_close($con);
 
?>
