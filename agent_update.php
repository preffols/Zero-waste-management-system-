<?php

// new agent and old agent recharginr


include 'conn_db.php';

$agent_code = $_POST['agent_code'];
$agent_money = $_POST['agent_money'];
$agent_password = $_POST['agent_password'];

$agent_id = 1;


    $update ="UPDATE `agents` SET agent_money='$agent_money' WHERE agent_code = '$agent_code'";

    $results = mysqli_query($conn,$update);


   header('Location: agent_update2.html');

$close = mysqli_close($conn);

