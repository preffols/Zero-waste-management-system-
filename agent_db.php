<?php

// new agent 


include_once 'conn_db.php';
include 'conn_db.php';

$agent_code = $_POST['agent_code'];
$agent_money = $_POST['agent_money'];
$agent_name = $_POST['agent_name'];
$agent_password = $_POST['agent_password'];


$sq55 = "CREATE TABLE IF NOT EXISTS agents(
    agent_name VARCHAR(255) NOT NULL,
    agent_code VARCHAR(255) NOT NULL,
    agent_password VARCHAR(255) NOT NULL,
    agent_money BIGINT(100),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY(agent_code)
    )";

$sq22= mysqli_query($conn, $sq55);

 
 
    $sq15 = "INSERT INTO agents(agent_name,agent_code,agent_password,agent_money) VALUES(
        '$agent_name','$agent_code','$agent_password','$agent_money')";

$sq17 = mysqli_query($conn, $sq15 );

header('Location: new_agent_or_recharge2.html');

?>