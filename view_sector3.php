<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">


 

    <meta charset="UTF-8">
  <meta name="description" content="Free Web tutorials">
  <meta name="keywords" content="HTML,CSS,XML,JavaScript">
  <meta name="author" content="John Doe">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="mystyle.css">
<script type="text/javascript" src="scriipt2.js"></script>
</head>
<body>

<?php  
include 'conn_db.php';
 $sector1 = $_POST["sector"];



 
       $sector1;
       $sector_description;
        $table_name1 = $sector1."_sector_description";
        
   
    
  $table_name1;
   $sector_name;

    $sq12 = "SELECT * FROM $table_name1 WHERE  sector_name = '$sector1'";
    $result=mysqli_query($conn, $sq12);

$row=mysqli_fetch_assoc($result);
    
$sector_name = $row["sector_name"];
$number_of_vendors = $row["number_of_vendors"];
$recycled_waste_amount = $row["recycled_waste_amount"];
$non_recycled_waste_amount = $row["non_recycled_waste_amount"];
$benefits = $row["benefits"];
$sector_description = $row["sector_description"];

   




?>

<p>
<div class="row">
<div class="left">
<article><img src="index2.gif">

</article>
</div>
<div class="right">
<aside><h1><b>WELCOME TO MZUZU CITY CITY COUNCIL</b></h1>
<p>KEEP MZUZU CITY CLEAN ... ZERO WASTE MANAGEMENT IS ACHIVABLE.</p></aside>
<H2>
  LETS MANAGE OUR WASTE WELL
</H2>
</div>
</div>
</p>
<div class="row">
  <div class="left" style="background-color:#bbb;">
    <h2>Menu</h2>
    <input type="text" id="mySearch" onkeyup="myFunction()" placeholder="Search.." title="Type in a category">
    <ul id="myMenu">
    <li><a href="index.html">refresh</a></li>
      <li><a href="register2.html">register</a></li>
      <li><a href="get_passcode2.html">get passcode</a></li>
      <li><a href="report_bin2.html">report full bin</a></li>
      <li><a href="report2.html">report illegal vending</a></li>
      <li><a href="view_sector2.html">view sector</a></li>
      <li><a href="sector_admin2.html">sector adimin</a></li>
      <li><a href="new_agent_or_recharge2.html">agent register</a></li>
      <li><a href="agent2.html">agent</a></li>
      <li><a href="agent_update2.html">agent update</a></li>
    </ul>
  </div>
  
  <div class="right"  style="background-color: white">
<form action="view_sector.php" method="POST">

<table border="1" cellpadding="5" cellspacing="10" align="center">
       <tr>
          <td colspan="3"> <h1>WELCOME TO YOUR SECTOR</h1><br></td> 
       </tr> 
        <tr>
                <th>
                  sector name
                </th>
                <th>
                        <?php  echo $sector_name;   ?>
                </th>
            </tr>
<tr >
    <td>
            number od vendor 

    </td>
    <td>

           <?php  echo $number_of_vendors;   ?>
    </td>
</tr>

<tr>
<td>
    benefits
</td>
<td>
   <?php  echo $benefits;   ?>
</td>
</tr>
<tr>
    <td>
        amount of recycled waste
    </td>
    <td>
       <?php  echo $recycled_waste_amount;   ?>
    </td>
</tr>
<tr>
        <td>
            amount of non recycled waste
        </td>
        <td>
            <?php  echo $non_recycled_waste_amount;   ?>
        </td>
    </tr>
    <tr>
    <td rowspan="3">
        sector description
    </td>
    <td rowspan="3">
        <?php  echo $sector_description;   ?>
    </td>
</tr>


</table>
  


  </p>
<p>
  
   
</table>
    
</p>
</div>


  </div>
</div>



</body>

<!-- Mirrored from www.w3schools.com/howto/tryit.asp?filename=tryhow_js_search_menu by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Jul 2018 02:09:39 GMT -->
</html>
