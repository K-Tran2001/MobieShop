<?php
    include_once '../includes/config.php';//$conn

    if(isset($_POST['displaySend']  )){
        $key=$_POST['input'];
        $table='';
        $sql="select * from `sanpham` where `maSP` like '{$key}%'  or `tenSP` like '{$key}%' or `moTa` like '{%key}%' ";
        $ds=mysqli_query($conn,$sql);
        while($dong=mysqli_fetch_assoc($ds)){
            $maSP=$dong['maSP'];
            $tenSP=$dong['tenSP'];
            $hinhAnh=$dong['hinhAnh'];
            $moTa=$dong['moTa'];
            $chatLuong=$dong['chatLuong'];
            $trangThai=$dong['trangThai'];
            $gia=$dong['gia'];
            $nhomSP=$dong['nhomSP'];
            $NCC=$dong['NCC'];
            $ngayNhap=$dong['ngayNhap'];

            $table.='<tr>
            <td>'.$maSP.'</td>
            <td> '.$tenSP.'</td>
            <td ><img src="./img/'.$hinhAnh.'" style="width: 50px;height: 50px;"> </td>
            <td> '.$moTa.'</td>
            <td> '.$gia.'</td>
            <td><a onclick="getDetails_view(`'.$maSP.'`)" class="btn btn-info">Xem</a></td>v
            <td><a onclick="getDetails(`'.$maSP.'`)" class="btn btn-warning">Sua</a></td>
            <td><a onclick="deleteproduct(`'.$maSP.'`)"  class="btn btn-danger">Xoa</a></td>
            </tr>';
            
        }
        
        
echo $table;


    }
?>