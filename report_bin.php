<?php
include 'conn_db.php';

$sector = $_POST['sector'];
$bin_number = $_POST['bin_number'];



$sql ="CREATE TABLE IF NOT EXISTS full_bins(
bin_time_id INT(100) NOT NULL AUTO_INCREMENT,
bin_number INT(100) NOT NULL,
bin_sector VARCHAR(255),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
PRIMARY KEY(bin_time_id)
)";

$sq2= mysqli_query($conn, $sql);




$sq3 = "INSERT INTO full_bins(bin_number,bin_sector) VALUES($bin_number,'$sector')";
$results = mysqli_query($conn, $sq3);

header('Location: report_bin2.html');
?>