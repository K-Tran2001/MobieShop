<?php
    include_once './config.php';//$conn

    if(isset($_POST['maKH']  )){
        $maKH=$_POST['maKH'];
        $tenKH=$_POST['tenKH'];
        $ngaySinh=$_POST['ngaySinh'];
        $gioiTinh=$_POST['gioiTinh'];
        $diaChi=$_POST['diaChi'];
        $dienThoai=$_POST['dienThoai'];
        
        $sql="update `khachhang` set `tenKH`='$tenKH',`gioiTinh`=$gioiTinh,`dienThoai`='$dienThoai',`diaChi`='$diaChi' where `maKH`='$maKH'";

        
        
        $result=mysqli_query($conn,$sql);
        
    }


?>