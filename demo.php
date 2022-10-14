<?php
session_start();
    include 'config2.php';

    $sql="SELECT CUST_ID from `customer` ORDER BY `customer`.CUST_ID DESC LIMIT 1;";
    
    $cust_id=mysqli_fetch_assoc(mysqli_query($conn,$sql))['CUST_ID'];

    
    //$res=$cust_id['CUST_ID'];

    echo $_SESSION['user'][0];

?>