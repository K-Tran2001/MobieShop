<?php
    include_once './config.php';

   
    $maCty=$_POST['maCty'];
    $tenCty=$_POST['tenCty'];
    $tinh=$_POST['tinh'];
    $dienThoai=$_POST['dienThoai'];

    $sql="insert into `ncc` values('$maCty','$tenCty','$tinh','$dienThoai')";
    

    $result=mysqli_query($conn,$sql);

?>