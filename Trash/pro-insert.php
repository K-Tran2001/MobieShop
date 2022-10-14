<?php
    include_once './config.php';

    extract($_POST);
        if(isset($_POST['maSP'])){
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

            $sql="insert into `sanpham` values('$maSP','$tenSP','$hinhAnh','$mota','$chatLuong','$trangThai','$gia','$nhomSP','$NCC','$ngayNhap')";

            //$sql="insert into `sanpham` values('$maSP','$tenSP','$hinhAnh','$mota','$chatLuong','trangThai','gia','$nhomSP','$NCC','$ngayNhap')";
            //$sql="INSERT INTO `sanpham` (`maSP`, `tenSP`, `hinhAnh`, `moTa`, `chatLuong`, `trangThai`, `gia`, `nhomSP`, `NCC`, `ngayNhap`) VALUES ('$maSP', '', '', '', 0, '', 0, '', '', '')";
            //$sql="INSERT INTO `sanpham` (`maSP`, `tenSP`, `hinhAnh`, `moTa`, `chatLuong`, `trangThai`, `gia`, `nhomSP`, `NCC`, `ngayNhap`) VALUES ('SP004', 'tai nghe AKG', 'iphone.png', 'asdasda', '5', 'like new', '78', 'phu kien', 'tengshen', '2022-06-15')";

            $result=mysqli_query($conn,$sql);

        }
        else{
            
        }
        
        

?>