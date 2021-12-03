<!DOCTYPE html>
<html>
<head lang="en">
<meta charset="utf-8">
<title>Mile High Hotel</title>
	 <link rel="stylesheet" type="text/css" href="css/hotel.css"/>
</head>
<div class ="main">
<?php
$errormsg="";
	if (isset($_POST['XXsubmit']) )
{
	echo '<p>The form was submitted.</p>';
}

if(empty($_POST['XXname']))
{
	$errormsg.="<p>Your Name is empty</p>";
}
if(empty($_POST['XXroom'])) {$errormsg.="<p>Room Size is Empty</p>";}
if(empty($_POST['XXaddress'])) {$errormsg.="<p>Your Address is Empty</p>";}
if(empty($_POST['XXdate'])) {$errormsg.="<p>Date is Empty</p>";}


echo $errormsg;
?>
<body>
<fieldset><legend>Personal Information</legend>
<table border>
<tr>
<th><label for="XXname">Full Name:</label></th>
<td><?php echo $_POST['XXname']?></td>
</tr>
<tr>
<th><label for="XXaddress">Address:</label></th>
<td><?php echo $_POST['XXaddress']?></td>
</tr>
<tr>
<th><label for="XXdate">Date Of Arrival:</label></th>
<td><?php echo$_POST['XXdate']?></td>
</tr>
	<tr>
	<th>Room Size:</th>
	<td>
	<?php
if(isset($_POST['XXroom']) && $_POST['XXroom']=="DB")
	{
	echo 'Double';
	}
	
	?>
	<?php if(isset($_POST['XXroom']) && $_POST['XXroom']=="QU") {echo'Queen';}?>
	<?php if(isset($_POST['XXroom']) && $_POST['XXroom']=="KI") {echo'King';}?>
	</td>
	</tr>
	<tr>
	<th><label for="XXcomments">Comments:</label</th>
	<th><?php echo $_POST['XXcomments']?></td>
	</tr>
	</table>
	</fieldset>
	</form>
	</body>
	</div>
	</html>