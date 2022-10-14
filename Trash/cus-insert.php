<?php
    include_once './config.php';

   
        $maKH=$_POST['maKH'];
        $tenKH=$_POST['tenKH'];
        $ngaySinh=$_POST['ngaySinh'];
        $gioiTinh=$_POST['gioiTinh'];
        $diaChi=$_POST['diaChi'];
        $dienThoai=$_POST['dienThoai'];

        $sql="insert into `khachhang` values('$maKH','$tenKH','$ngaySinh','$diaChi','$dienThoai','$gioiTinh')";
        

        $result=mysqli_query($conn,$sql);

?>