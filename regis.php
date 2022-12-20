<?php
 

    include './config2.php';

    $f_name=$_POST['f_name'];
    $l_name=$_POST['l_name'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    //$email=$_POST['email'];
    $img=$_POST['img'];
    $location_id=$_POST['location_id'];

    $password = md5($password,false);

    // $sql="INSERT INTO `customer` (`CUST_ID`, `FIRST_NAME`, `LAST_NAME`, `EMAIL`, `PHONE_NUMBER`, `LOCATION_ID`)
    // VALUES (NULL, '', '', 'tvkhoa_20th@student.agu.edu.vn	', '', '$location_id');";
     $sql="INSERT INTO `customer` (`CUST_ID`, `FIRST_NAME`, `LAST_NAME`, `PHONE_NUMBER`, `LOCATION_ID`)
    VALUES (NULL, '$f_name', '$l_name', '', '$location_id');";
    mysqli_query($conn,$sql);


    $sql="SELECT CUST_ID from `customer` ORDER BY `customer`.CUST_ID DESC LIMIT 1;";
        
    $cust_id=mysqli_fetch_assoc(mysqli_query($conn,$sql))['CUST_ID'];

    //echo $cust_id;//lay duoc cust id vua insert

    //////////tao account co cust_id

    $sql="INSERT INTO `users` (`ID`, `CUSTOMER_ID`, `USERNAME`, `PASSWORD`, `TYPE_ID`, `IMG`, `STATE`) 
    VALUES (NULL, '$cust_id', '$username', '$password', '2', '$img', '1')";
    mysqli_query($conn,$sql);
    echo $sql;




?>