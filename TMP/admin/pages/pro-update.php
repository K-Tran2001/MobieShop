<?php
    include_once '../includes/config.php';//$conn

    if(isset($_POST['maSP']  )){
        $maSP = $_POST['maSP'];
        $tenSP = $_POST['tenSP'];
        $hinhAnh = $_POST['hinhAnh'];
        $mota = $_POST['mota'];
        $chatLuong = $_POST['chatLuong'];
        $trangThai = $_POST['trangThai'];
        $gia = $_POST['gia'];
        $nhomSP = $_POST['nhomSP'];
        $NCC = $_POST['nCC'];
        $ngayNhap = $_POST['ngayNhap'];

        if($hinhAnh==''){
            $sql="update `sanpham` set `tenSP`='$tenSP',`moTa`='$mota',`chatLuong`='$chatLuong',`trangThai`='$trangThai',`gia`='$gia',`nhomSP`='$nhomSP',`NCC`='$NCC',`ngayNhap`='$ngayNhap' where `maSP`='$maSP'";

        }else{
            $sql="update `sanpham` set `tenSP`='$tenSP',`hinhAnh`='$hinhAnh',`moTa`='$mota',`chatLuong`='$chatLuong',`trangThai`='$trangThai',`gia`='$gia',`nhomSP`='$nhomSP',`NCC`='$NCC',`ngayNhap`='$ngayNhap' where `maSP`='$maSP'";

        }

        
        
        $result=mysqli_query($conn,$sql);
        
    }


?>