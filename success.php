<!doctype html>
<html>
<head>
<?php
require '/connectDB.php';
?>
<meta charset="utf-8">
<title>BRIGHTER SUITES HMS</title>
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
<?php
echo 'Login Successful';
?>
<table width="50%" border="0" cellspacing="15" cellpadding="5" align="center" class="box">
  <tbody>
    <tr>
      <td>
      <div class="pure-menu pure-menu-horizontal">
    <ul class="pure-menu-list">
        <li class="pure-menu-item"><a href="success.php" class="pure-menu-link">Home</a></li>
        <li class="pure-menu-item"><a href="add_gs.php" class="pure-menu-link">Add Customer</a></li>
        <li class="pure-menu-item"><a href="#" class="pure-menu-link">Check-In</a></li>
        <li class="pure-menu-item"><a href="#" class="pure-menu-link">Booking</a></li>
        <li class="pure-menu-item"><a href="#" class="pure-menu-link">Check-Out</a></li>
        <li class="pure-menu-item"><a href="#" class="pure-menu-link">View All Rooms</a></li>
        <li class="pure-menu-item"><a href="#" class="pure-menu-link">Food Menu</a></li>
        <li <button type="submit" class="pure-button pure-button-primary">Logout</button> </li>
        
    </ul>
</div>
      </td>
    </tr>
    <tr>
      <th>&nbsp;
      <img src="img/logo.png">
      </th>
    </tr>
  </tbody>
</table>


</body>
</html>
