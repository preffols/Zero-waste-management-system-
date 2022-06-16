<?php

include 'conn_db.php';

$name = $_POST["name"];
$malonda = $_POST["malonda"];
$sector= $_POST["sector"];
$phone_number = $_POST["phone_number"];
$national_id = $_POST["national_id"];
$my_business= $_POST["my_business"];
$name2 = $_POST["name2"];
$malonda= $_POST["malonda"];
$name = $_POST["name"];
$name = $_POST["name"];
$name = $_POST["name"];
$name = $_POST["name"];


$sql = "CREATE TABLE IF NOT EXISTS illegal_vending(
name VARCHAR(255),
phone_number VARCHAR(255),
business VARCHAR(255),
national_id VARCHAR(255),
my_business BLOB,
password VARCHAR(255),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
PRIMARY KEY(phone_number)
)";
$sq2= mysqli_query($conn, $sql);
}


?>