<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Add Customer</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/pure.css" rel="stylesheet" type="text/css">
<link href="css/pure-min.css" rel="stylesheet" type="text/css">
<link href="css/pure-nr.css" rel="stylesheet" type="text/css">
<link href="css/pure-nr-min.css" rel="stylesheet" type="text/css">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
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
<p>&nbsp;</p>
</br>
<p>&nbsp;</p>
<table width="50%" border="0" cellspacing="15" cellpadding="15" align="center">
  <tbody>
  <div class="pure-menu pure-menu-horizontal" align="center">
    <!--- <a href="#" class="pure-menu-heading pure-menu-link">BRAND</a> --->
    <ul class="pure-menu-list">
         <li class="pure-menu-item"><a href="success.php" class="pure-menu-link">Home</a></li>
        <li class="pure-menu-item"><a href="add_gs.php" class="pure-menu-link">Add Customer</a></li>
        <li class="pure-menu-item"><a href="#" class="pure-menu-link">Check-In</a></li>
        <li class="pure-menu-item"><a href="#" class="pure-menu-link">Booking</a></li>
        <li class="pure-menu-item"><a href="#" class="pure-menu-link">Check-Out</a></li>
        <li class="pure-menu-item"><a href="#" class="pure-menu-link">View All Rooms</a></li>
        <li class="pure-menu-item"><a href="#" class="pure-menu-link">Food Menu</a></li>
    </ul>
</div>
    <h1 align="center">.</h1>
    <tr>
      <th><img src="img/logo_2.png"></th>
      
      <th>
      <form method="post" action="add_ad_in.php" class="pure-form pure-form-aligned">
    <fieldset>
        <div class="pure-control-group">
            <label for="name">Name:</label>
            <input id="name" type="text" placeholder="Name" name="name">
        </div>

        <div class="pure-control-group">
            <label for="house_no">House/Plot No:</label>
            <input id="house_no" type="text" placeholder="House/Plot No:" name="house_no">
        </div>

        <div class="pure-control-group">
            <label for="street">Street</label>
            <input id="street" type="text" placeholder="Street" name="street">
        </div>

        <div class="pure-control-group">
            <label for="area">Area</label>
            <input id="area" type="text" placeholder="Area" name="area">
        </div>
        
        <div class="pure-control-group">
            <label for="lg_area">L.G.A / Area Council</label>
            <input id="lg_area" type="text" placeholder="L.G.A / Area Council" name="lg_area">
        </div>
        
        <div class="pure-control-group">
            <label for="state">State</label>
            <input id="state" type="text" placeholder="State" name="state">
        </div>

        

            <button type="submit" class="pure-button pure-button-primary">Submit</button>
        </div>
    </fieldset>
</form>
      </th>
    </tr>
  </tbody>
</table>
  </body>
</html>
