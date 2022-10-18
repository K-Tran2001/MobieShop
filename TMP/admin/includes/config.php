<?php
    $server="localhost";
    $user="root";
    $pass="vertrigo";
    $db="ql_taikhoan";

    $conn=mysqli_connect($server,$user,$pass,$db);
    if(!$conn){
        die("Loi ".mysqli_connect_error());
        exit();
    }
?>