<!DOCTYPE html>
<html>
<head>
	<title>get passcode</title>
<script type='text/javascript' src='script.js'></script>
<link rel='stylesheet' type='text/css' href='style.css'>
</head>
<body  style="background-color:#bbb;">
<?php
include_once'conn_db.php';


    include_once'conn_db.php';
    
    $sector1 = $_POST['sector'];
    $phone_number = $_POST['phone_number'];
    $password = $_POST['password'];

    $sector=$sector1."_accounts";



$sql = "SELECT * FROM $sector WHERE phone_number = $phone_number";
$result=mysqli_query($conn, $sql);

$row=mysqli_fetch_assoc($result);
	$passcode=$row["passcode"];

?>

<table border="0" cellpadding="10" cellspacing="10">

<tr>
	<td colspan="2"><h2><b> WELCOME USER </b></h2></td>
</tr>

	<tr>
		<td ><h3 style="color: red" >YOUR PASSCODE IS </h3></td>
		<td>
			<?php  echo "<h3 style='color: cyan'>".$passcode."</h3>"; ?>
		</td>
	</tr>
	<tr>
		<td>
			 <br>  <a href='logout.php'><h3 style="color: orange"><b>LOG OUT</b></h3> </a>
		</td>
		<td>
		<br>  <a href='get_passcode2.html'> <h3 style="color: yellow">GO BACK</h3></a>
			
		</td>
	</tr>

</table>


</body>
</html>