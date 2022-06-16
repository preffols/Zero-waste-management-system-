<?php

include 'conn_db.php';

$name = $_POST['name'];
$sector11= $_POST['sector'];
$password = $_POST['password'];
$phone_number = $_POST['phone_number'];
$business = $_POST['business'];
$national_id=$_POST['national_id'];
$my_business=$_POST['my_business'];

echo "password in post is".$_POST['password'];


$table_name="test";
$sector = strtolower($sector11);



if ($sector=="shoes") {
	global $password;
$table_name="shoes";
create_table($table_name);

create_table_for_accounts($table_name);
insert_into_table_for_accounts($table_name);
insert_into_table($table_name);
header('Location: register2.html');
}

elseif ($sector=="fish") {
	$table_name="fish";
create_table($table_name);

create_table_for_accounts($table_name);
insert_into_table_for_accounts($table_name);
insert_into_table($table_name);
header('Location: register2.html');
}


elseif ($sector=="vegetables") {
	
	$table_name="vegetables";
	create_table($table_name);
	insert_into_table($table_name);
	create_table_for_accounts($table_name);
	insert_into_table_for_accounts($table_name);
	header('Location: register2.html');
	}

//if sector is clothes
elseif ($sector=="clothes") {
	$table_name="clothes";
create_table($table_name);
insert_into_table($table_name);
create_table_for_accounts($table_name);
insert_into_table_for_accounts($table_name);
header('Location: register2.html');
}

//function to insert data into specific table
function insert_into_table($table_name)
{
	
global $name;
global $sector;

global $phone_number;
global $business;
global $national_id;
global $my_business;
global $password;
global $national_id_photo1;


$password1 =$password;
include 'conn_db.php';
$sq4= "INSERT INTO $table_name(name,phone_number,business,national_id,my_business,password) VALUES(
'$name','$phone_number','$business','$national_id','$my_business','$password1')";
$sq5= mysqli_query($conn,$sq4);

}

//function to create table

 function create_table($table_name1)
{
include 'conn_db.php';

$sql = "CREATE TABLE IF NOT EXISTS $table_name1(
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


//function to create table for accounts

function create_table_for_accounts($table_name1)
{
include 'conn_db.php';
$table_name = $table_name1."_accounts";

$sql = "CREATE TABLE IF NOT EXISTS $table_name(
name VARCHAR(255),
phone_number VARCHAR(255),
status BOOLEAN,
amount_paid DOUBLE,
passcode INT(100),
days INT(100) NOT NULL,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
PRIMARY KEY(phone_number)
)";
$sq2= mysqli_query($conn, $sql);
}

//function to insert data into specific table
function insert_into_table_for_accounts($table_name1)
{
	include 'conn_db.php';
	
global $name;
global $status;

global $phone_number;
global $amount_paid;
global $days;
global $passcode;



$table_name = $table_name1."_accounts";
$passcode = rand(100000, 100000000);
$status = TRUE;
$days = 0;


$sq47 = "INSERT INTO $table_name(name,phone_number,status,amount_paid,days,passcode) VALUES(
'$name','$phone_number','$status','$amount_paid','$days','$passcode')";
$sq51= mysqli_query($conn,$sq47);
}

?>