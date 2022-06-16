<?php

include 'conn_db.php';

   $sector1 = $_POST['sector'];
    $recycled_waste_amount = $_POST["recycled_waste_amount"];
    $non_recycled_waste_amount = $_POST['non_recycled_waste_amount'];
    $number_of_vendors = $_POST['number_of_vendors'];
    $benefits = $_POST['benefits'];
    $sector_name = $sector1;
    $sector_description=" ";


if (isset($_POST["submit"])) {
    include_once 'conn_db.php';
     $sector1 = $_POST['sector'];
    $recycled_waste_amount = $_POST["recycled_waste_amount"];
    $non_recycled_waste_amount = $_POST['non_recycled_waste_amount'];
    $number_of_vendors = $_POST['number_of_vendors'];
    $benefits = $_POST['benefits'];
    $sector_name = $sector1;
    $sector_description=" ";


    if ($sector1 == "fish") {
        global $sector1;
        global $sector_description;
        $table_name1 = $sector1."_sector_description";
        $sector_description = " somba zowuma ,zaziwisi , etc";
        create_table($table_name1); 
        insert_data($table_name1);
         header('Location: index.html');
    }
     if ($sector1 == "shoes") {
        global $sector1;
        global $sector_description;
        $table_name1 = $sector1."_sector_description";
        $sector_description = " sandles  , etc";
        create_table($table_name1); 
        insert_data($table_name1);
        
    }
    


}

//function to create table

function create_table($table_name1)
{
include 'conn_db.php';

$sql = "CREATE TABLE IF NOT EXISTS $table_name1(
sector_name VARCHAR(255),
number_of_vendors INT(255),
recycled_waste_amount VARCHAR(255),
non_recycled_waste_amount VARCHAR(255),
sector_description BLOB,
benefits BLOB,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
PRIMARY KEY(sector_name)
)";
$sq2= mysqli_query($conn, $sql);
}

// function insert data into tables
function insert_data($table_name1)
{
  include 'conn_db.php';
  global $sector_name;
  global $number_of_vendors;
  global $recycled_waste_amount;
  global $non_recycled_waste_amount;
  global $benefits;
  global $sector_description; 

  $sq9 = "INSERT INTO $table_name1(sector_name,number_of_vendors,recycled_waste_amount,non_recycled_waste_amount,benefits,sector_description) VALUES(
   '$sector_name','$number_of_vendors','$recycled_waste_amount','$non_recycled_waste_amount','$benefits','$sector_description')";
   $sq8 = mysqli_query($conn, $sq9);
}

if (isset($_POST["update"])) {
    
    include_once 'conn_db.php';
    $sector1 = $_POST['sector'];
    $recycled_waste_amount = $_POST['recycled_waste_amount'];
    $non_recycled_waste_amount = $_POST['non_recycled_waste_amount'];
    $number_of_vendors = $_POST['number_of_vendors'];
    $benefits = $_POST['benefits'];
    $sector_name = $sector1;
    $sector_description=" ";

    if ($sector1 == "fish") {
        global $sector_description;
        $table_name1 = $sector1."_sector_description";
       $sector_description = " somba zowuma ,zaziwisi , etc";
        update_data($table_name1); 


    }
    
function update_data($table_name1)
{
    global $sector_name;
  global $number_of_vendors;
  global $recycled_waste_amount;
  global $non_recycled_waste_amount;
  global $benefits;
  global $sector_description; 


  $sql11 = "UPDATE `$table_name1` SET `number_of_vendors`=[".$number_of_vendors."],`recycled_waste_amount`=[".$recycles_waste_amount."],`non_recycled_waste_amount`=[".$non_recycled_waste_amount."],`benefits`=[".$benefits."] WHERE sector_name = '$sector_name'";
  $sql16 = mysqli_query($conn,$sql11);
}



}


/* if (isset($_POST["view"])) {
    global $table_name1;
    global $sector_name;

    $sq12 = "SELECT * FROM $table_name1 WHERE  sector_name = '$sector_name'";
    $result=mysqli_query($conn, $sql2);

$row=mysqli_fetch_assoc($result);
    $sector_id = $row["sector_id"];
$sector_name = $row["sector_name"];
$number_of_vendors = $row["number_of_vendors"];
$recycled_waste_amount = $row["recycled_waste_amount"];
$non_recycled_waste_amount = $row["non_recycled_waste_amount"];
$benefits = $row["benefits"];
$sector_description = $row["sector_description"];

   

echo " <!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title></title>
<link rel='stylesheet' type='text/css' href='style.css'>
</head>
<body >


<table border='1' cellpadding='5' cellspacing='10' align='center'>
       <tr>
          <td> <h1>WELCOME TO YOUR SECTOR</h1><br></td> 
       </tr> 
        <tr>
                <th>
                  sector name
                </th>
                <th>
                         $sector_name
                </th>
            </tr>
<tr >
    <td>

            number od vendor 

    </td>
    <td>
            $number_of_vendors
    </td>
</tr>
<tr>
    <td rowspan='5'>
        sector description
    </td>
    <td rowspan='5'>
        $sector_description
    </td>
</tr>

<tr>
<td>
    benefits
</td>
<td>
    $benefits
</td>
</tr>
<tr>
    <td>
        amount of recycled waste
    </td>
    <td>
        $amount_of_recycled_waste
    </td>
</tr>
<tr>
        <td>
            amount of non recycled waste
        </td>
        <td>
         $non_recycled_waste_amount
        </td>
    </tr>

</table>
    
    



</body>
</html> ";
*/


 header('Location: index.html');

?>