<?php
session_start();
include '../config2.php';
$username_update=$_POST['username_update'];
$password_update=$_POST['password_update'];
$password_update=md5($password_update,false);
$avatar_update=$_POST['avatar_update'];
$phone_number_update=$_POST['phone_number_update'];
$cust_id=$_SESSION['user'][0]['CUST_ID'];
$user_id=$_POST['user_id'];


    
    
$sql='';
if($avatar_update==''){
    
    $sql="update `users` set `PASSWORD`='$password_update' where `ID`='$user_id'";
    mysqli_query($conn,$sql);
    $sql="update `customer` set `PHONE_NUMBER`='$phone_number_update' where `CUST_ID`='$cust_id'";
    mysqli_query($conn,$sql);

    $_SESSION['user'][0]['PASSWORD']=$password_update;
    
}else{
    $sql="update `users` set `PASSWORD`='$password_update',`IMG`='$avatar_update'  where `ID`='$user_id'";
    mysqli_query($conn,$sql);
    $sql="update `customer` set `PHONE_NUMBER`='$phone_number_update' where `CUST_ID`='$cust_id'";
    mysqli_query($conn,$sql);
    $_SESSION['user'][0]['PASSWORD']=$password_update;
    $_SESSION['user'][0]['IMG']=$avatar_update;
}

 echo $sql;
 
    //$_SESSION['user'][]=$session_array;
 
?>