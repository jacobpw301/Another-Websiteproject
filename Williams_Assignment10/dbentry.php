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
<a href="contactus2.php">Contact Us Again</a>
</div>
<div class ="main">
<body>
<?php
$errormsg="";
$showform = 1;

require_once "connect.php";
if(isset($_POST['XXsubmit']))
{
	echo 'The form was submitted';
	
	$sqlselect="SELECT*from ContactInfo";
	$result=$db->query($sqlselect);
	
	$formfield['XXfirst']=trim($_POST['XXfirst']);
	$formfield['XXaddress']=trim($_POST['XXaddress']);
	$formfield['XXarrival']=trim($_POST['XXarrival']);
	$formfield['XXroomsize']=trim($_POST['XXroomsize']);
	$formfield['XXcomments']=$_POST['XXcomments'];

 if(empty($formfield['XXfirst']))
 {
	 $errormsg.="<p>Your name is empty.</p>";
	 }
	 if(empty($formfield['XXaddress']))
 {
	 $errormsg.="<p>Your address is empty.</p>";
	 }
 if(empty($formfield['XXarrival']))
 {
	 $errormsg.="<p>Your Date of Arrival is empty.</p>";
	 }
 if(empty($formfield['XXroomsize']))
 {
	 $errormsg.="<p>Your Room Size is Empty.</p>";
	 }

if($errormsg!="")
{
	echo"<div class='error'><p>THERE ARE ERRORS!</p>";
	echo $errormsg;
	echo "</div>";
}
else
{
	try
	{
		$sqlinsert='INSERT INTO ContactInfo(fullname, address,arrival,roomsize, comments)
		VALUES(:thename, :theaddress, :thearrival, :theroomsize, :thecomments)';
		$stmtinsert=$db->prepare($sqlinsert);
		$stmtinsert->bindValue(':thename', $_POST['XXfirst']);
		$stmtinsert->bindValue(':theaddress', $_POST['XXaddress']);
		$stmtinsert->bindValue(':thearrival', $_POST['XXarrival']);
		$stmtinsert->bindValue(':theroomsize', $_POST['XXroomsize']);
		$stmtinsert->bindValue(':thecomments', $_POST['XXcomments']);
		
		
		$stmtinsert->execute();
		
		echo"<div clas='success'><p>There are no errors. Thank you.</p></div>";
	}
	catch(PDOException $e)
	{
		echo 'ERROR!!!'.$e->getMessage();
		exit();
	}
}
}
	$sqlselect='SELECT * FROM ContactInfo';
	$result=$db->query($sqlselect);
?>

<form method="post" action="dbentry.php" name="XXform">
<fieldset><legend>Personal Inforamtion</legend>
<table>
<tr>
<th><label for="XXfirst">*Full Name:</label></th>
<td><input type="text" name="XXfirst" id="XXfirst" size="10" value ="<?php if(isset($_POST['XXfirst'])){echo $_POST['XXfirst']; } ?>"/></td>
</tr>
<tr>
<th><label for="XXaddress">*Address:</label></th>
<td><input type="text" name="XXaddress" id="XXaddress" value ="<?php if(isset($_POST['XXaddress'])){echo $_POST['XXaddress']; }?>"/></td>
</tr>
<tr>
<th><label for="XXarrival">*Date of Arrival:</label></th>
<td><input type="text" name="XXarrival" id="XXarrival" value ="<?php if(isset($_POST['XXarrival'])){echo $_POST['XXarrival']; } ?>"/></td>
</tr>
<tr>
<th><label for="XXroomsize">*Room Size:</label></th>
<td><select name="XXroomsize" id="XXroomsize">
<option value="">SELCECT ONE</option>
<option value="DB">Double</option>
<option value="QU">Queen</option>
<option value="KI">King</option>
</select>
</td>
</tr>
<tr>
<th><label for="XXcomments">Comments:</label></th>
<td><textarea name="XXcomments" id="XXcomments"></textarea></td>
<tr>
<th>Submit</th>
<td><input type="submit" name="XXsubmit" value="SUBMIT" /></td>
</tr>
</table>
</fieldset>
</form>
<br><br>
<table border>
<tr>
<th>Full Name</th>
<th>Address</th>
<th>Arrival</th>
<th>Roomsize</th>
<th>Comments</th>
</tr>
<?php
while($row=$result-> fetch())
{
	echo '<tr><td>' .$row['fullname'].'</td><td>'
	.$row['address'].'</td><td>'
	.$row['arrival'].'</td><td>'
	.$row['roomsize'].'</td><td>'
	.$row['comments'].'</td><td>';
}
?>
</table>
</body>
</div>
</html>