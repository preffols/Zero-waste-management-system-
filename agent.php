<?php
if(isset($_POST['submit'])){
include_once('conn_db.php');

$agent_code = $_POST['agent_code'];
$sector1 = $_POST['sector'];
$phone_number = $_POST['phone_number'];
$amount_paid = $_POST['amount_paid'];
$sector = $sector1."_accounts";
$days = $_POST['days'];

$agents = "agents";



$sqli1 = "SELECT * FROM $agents WHERE agent_code ='$agent_code'";
$result2 = mysqli_query($conn, $sqli1);


$row1 = mysqli_fetch_assoc($result2);
	$agent_money = $row1["agent_money"];

$agent_money1 = $agent_money - $amount_paid;


   $update ="UPDATE `agents` SET agent_money='$agent_money1' WHERE agent_code = '$agent_code'";

    $results = mysqli_query($conn,$update);
    

$passcode = rand(100000, 100000000);
$status = TRUE;

$sqli19 = "SELECT * FROM $sector WHERE phone_number ='$phone_number'";
$result23 = mysqli_query($conn, $sqli19);


$row11 = mysqli_fetch_assoc($result23);
	$amount_paid1 = $row11["amount_paid"];
  $days2 = $row11["days"];

$vendor_money1 = $amount_paid + $amount_paid1;
$days1 = $days + $days2;

$update1 ="UPDATE $sector SET amount_paid= '$vendor_money1', days ='$days1' WHERE phone_number = '$phone_number'";
  $results5 = mysqli_query($conn,$update1);

//$sql9 = "UPDATE `$sector1` SET `amount_paid`=[".$amount_paid."],`status`=[".$status."],`days`=[".$days."],`passcode`=[".$passcode."] WHERE phone_number = '$phone_number'";

//$result2=mysqli_query($conn, $sql9);


 


header('Location: agent2.html');
}


else{
    echo "click submit button ";
  //  header('Location: agent2.html');
}
header('Location: agent2.html');
?>