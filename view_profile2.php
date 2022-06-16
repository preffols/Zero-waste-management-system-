<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
  <meta name="description" content="zero WASTE management">
  <meta name="keywords" content="HTML,CSS,XML,JavaScript">
  <meta name="author" content="Prince Nsusa">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" type="text/css" href="mystyle.css">
<script type="text/javascript" src="scriipt2.js"></script>
 
</head>
<body>
<?php

    include_once'conn_db.php';
    
    $sector1 = $_POST['sector'];
    $phone_number = $_POST['phone_number'];
    $password = $_POST['password'];

    $sector=$sector1."_accounts";



$sql = "SELECT * FROM $sector WHERE phone_number = $phone_number";
$result=mysqli_query($conn, $sql);

$row=mysqli_fetch_assoc($result);
  $passcode=$row["passcode"];
  $name = $row["name"];
  $status = $row["status"];
  $amount_paid = $row["amount_paid"];
  $days = $row["days"]; 




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
            <li><a href="index.html">Tsamba Loyamba</a></li>
      <li><a href="register2.html">Lembetsani</a></li>
      <li><a href="get_passcode2.html">Nambara Yachinsinsi</a></li>
      <li><a href="report_bin2.html">Nenani Za Bin ili pafupi kudzadza</a></li>
      <li><a href="report2.html">Nenani Za malonda Osavomerezeka</a></li>
      <li><a href="view_sector2.html">Onani Zamu Chigawo Chanu</a></li>
      <li><a href="sector_admin2.html">Adimini Wa Chigawo</a></li>
      <li><a href="new_agent_or_recharge2.html">Lembetsani Ngati Agent</a></li>
      <li><a href="agent2.html">Agent Menu</a></li>
      <li><a href="agent_update2.html">Agent Update</a></li>
      <li><a href="view_profile2.html">Your Profile</a></li>
    </ul>
  </div>
  
  <div class="right"  style="background-color: white">
<form action="view_sector.php" method="POST">

<table border="1" cellpadding="5" cellspacing="10" align="center">
       <tr>
          <td colspan="3"> <h1>WELCOME TO YOUR PROFILE</h1><br></td> 
       </tr> 
        <tr>
                <th>
                 <img src="pp.gif">
                </th>
                <th>
                    <?php echo $name; ?>
                </th>
            </tr>
<tr >
    <td>

            CURRENT PASSCODE

    </td>
    <td>
            <?php echo $passcode; ?>
    </td>
</tr>

<tr>
<td>
PROFILE STATUS
</td>
<td>
     <?php echo $status; ?>
</td>
</tr>
<tr>
    <td>
        DAYS REMAINING
    </td>
    <td>
       <?php echo $days; ?>
    </td>
</tr>
<tr>
        <td>
           PHONE NUMBER
        </td>
        <td>
           <?php echo $phone_number; ?>
        </td>
    </tr>
    <tr>
    <td rowspan="3">
        SECTOR
    </td>
    <td rowspan="3">
       <?php echo $sector1; ?>
    </td>
</tr>


</table>
  


  </p>
<p>
  
     <table cellpadding="2" cellspacing="5" border="0" align="center">
<tr>
    <td>
        <a href="report_bin.html">REPORT FULL BIN</a>
    </td>
    <td>
        <a href="register.html"><h2 style="color: cyan">register</h2></a>
    </td>
    <td>
        <a href="report.html">REPORT ILLEGAL VENDING</a>
    </td>
</tr>
    
</table>
    
</p>
</div>


  </div>
</div>



</body>

<!-- Mirrored from www.w3schools.com/howto/tryit.asp?filename=tryhow_js_search_menu by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Jul 2018 02:09:39 GMT -->
</html>
