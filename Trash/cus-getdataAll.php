<?php
    include_once './config.php';//$conn

    if(isset($_POST['displaySend']  )){
        $table='';
        $sql="select * from khachhang";
        $ds=mysqli_query($conn,$sql);
        while($dong=mysqli_fetch_assoc($ds)){
            
            $maKH=$dong['maKH'];
            $tenKH=$dong['tenKH'];
            $ngaySinh=$dong['ngaySinh'];
            $gioiTinh=$dong['gioiTinh'];
            $diaChi=$dong['diaChi'];
            $dienThoai=$dong['dienThoai'];

            $table.='<tr>
            <td>'.$maKH.'</td>
            <td> '.$tenKH.'</td>
            <td> '.$ngaySinh.'</td>
            <td> '.$gioiTinh.'</td>
            <td> '.$diaChi.'</td>
            <td> '.$dienThoai.'</td>
            
            <td><a onclick="getDetails(`'.$maKH.'`)" class="btn btn-warning">Sua</a></td>
            <td><a onclick="deletecustomer(`'.$maKH.'`)"  class="btn btn-danger">Xoa</a></td>
            </tr>';
            
        }
        
        
        echo $table;
    }
            

?>