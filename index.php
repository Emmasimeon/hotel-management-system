<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>BRIGHTER SUITES ADMIN LOGIN</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/pure.css" rel="stylesheet" type="text/css">
<link href="css/pure-min.css" rel="stylesheet" type="text/css">
<link href="css/pure-nr.css" rel="stylesheet" type="text/css">
<link href="css/pure-nr-min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link href="css/buttons.css" rel="stylesheet" type="text/css">
<link href="css/buttons-core.css" rel="stylesheet" type="text/css">
<link href="css/buttons-core-min.css" rel="stylesheet" type="text/css">
<link href="css/buttons-min.css" rel="stylesheet" type="text/css">
<link href="css/forms.css" rel="stylesheet" type="text/css">
<link href="css/forms-min.css" rel="stylesheet" type="text/css">
<link href="css/forms-nr.css" rel="stylesheet" type="text/css">
<link href="css/forms-nr-min.css" rel="stylesheet" type="text/css">
<link href="css/menus.css" rel="stylesheet" type="text/css">
<link href="css/menus-core.css" rel="stylesheet" type="text/css">
<link href="css/menus-core-min.css" rel="stylesheet" type="text/css">
<link href="css/menus-dropdown.css" rel="stylesheet" type="text/css">
<link href="css/menus-dropdown-min.css" rel="stylesheet" type="text/css">
<link href="css/menus-horizontal.css" rel="stylesheet" type="text/css">
<link href="css/menus-horizontal-min.css" rel="stylesheet" type="text/css">
<link href="css/menus-min.css" rel="stylesheet" type="text/css">


<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<table width="50%" border="0" cellspacing="5" cellpadding="5" align="center" class="box">
  <tbody>
  <tr>
      <th>&nbsp;
      &nbsp;
      </br>
      <img src="img/logo.png">
      </th>
    </tr>
    <tr>
      <th>
      <div class="container-1">
      <form method="post" class="pure-form">
        <fieldset>
      <div>
      <label id="username=md5">Username</label>
        <input type="text" placeholder="Username" class="pure-input-rounded" name="username=md5">
      </div>
      <div> 
      <label id="password=md5">Password</label>
        <input type="password" placeholder="Password" class="pure-input-rounded" name="password=md5"></div>
            </br>
        <button type="submit" class="pure-button a.pure-button-primary" name="login">Sign In</button>
      	</fieldset>
      </form>
      </div>
      </th>
    </tr>
  </tbody>
</table>
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




</body>
</html>
