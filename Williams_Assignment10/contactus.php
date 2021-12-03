<!DOCTYPE html>
<html>
<head lang="en">
<meta charset="utf-8">
<title>Mile High Hotel</title>
<link rel="stylesheet" type="text/css" href="css/hotel.css"/>
</head>
<body>
<div class="sidenav">
<a href="index.html">Home</a> 
<a href="info.html">Info</a> 
<a href="receipt.html">Receipt</a>
<a href="amenities.html">Amenities</a>
<a href="discount.html">Discount</a>
<a href="estimate.html">Estimate</a>
<a href="register.html">Register</a>
<a href="map.html">Map</a></li>
<a href="special_features.html">Features</a>
<a href="feature_pricing.html">Pricing</a>
<a href="contactus.php">Contact Us</a>
</div>
<div class ="main">
<form method="post" action="contact_complete.php" id="XXform">
<fieldset><legend>Personal Information</legend>
<table border>
<tr>
<th><label for="XXname">*FullName:</label></th>
<td><input type="text" name="XXname" size="30" value="<?php if(isset($_POST['XXname'])){echo $_POST['XXname'];}?>"/></td>
</tr>
<tr>
<th><label for="XXaddress">*Address</label></th>
<td><input type="XXaddress" name="XXaddress" value="<?php if(isset($_POST['XXaddress'])){echo $_POST['XXaddress'];}?>"/></td>
</tr>

<tr>
<th><label for="XXpass">*Date of Arrival:</label></th>
<td><input type="date" name="XXdate" size="30" value="<?php if(isset($_POST['XXdate'])){echo $_POST['XXdate'];}?>"/></td>
</tr>
<tr>
<th><label for="XXroom">*Room Size:</label></th>
<td><select name="XXroom" id="XXroom">
<option value=""<?php if(isset($_POST['XXroom']) && $_POST['XXroom']==""){echo 'selected:';}?>>SELECT ONE</option>
<option value="DB"<?php if(isset($_POST['XXroom'])&&$_POST['XXroom']=="DB"){echo 'selected:';}?>>Double</option>
<option value="QU"<?php if(isset($_POST['XXroom'])&&$_POST['XXroom']=="QU"){echo 'selected:';}?>>Queen</option>
<option value="KI"<?php if(isset($_POST['XXroom'])&&$_POST['XXroom']=="KI"){echo 'selected:';}?>>King</option>
</select>
</td>
</tr>
<tr>
<th>Comments:</th>
<td><textarea name="XXcomments" id="XXcomments"></textarea></td>
</tr>
<tr>
<th>Submit:</th>
<td><input type="submit" name="Submit" id="XXsubmit"/></td>
</tr>
</table>
</fieldset>
</form>
</body>
</div>
</html>
