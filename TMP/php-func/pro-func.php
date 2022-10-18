<?php
include "./config.php";
    if(isset($_GET['action'])){
        if($_GET['action']=='getdataAll'){
            if(isset($_POST['displaySend']  )){
                $table='';
                $sql="select * from sanpham";
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

        }else if($_GET['action']=='getdataById'){
            if(isset($_POST['updateid']  )){
                $accountid=$_POST['updateid'];
                $sql="select * from `sanpham` where `maSP`='$accountid'";
                
                $ds=mysqli_query($conn,$sql);
                $response=array();
                while($dong=mysqli_fetch_assoc($ds)){
                    $response=$dong;
                }
                echo json_encode($response);
            }else{
                $response['status']=200;
                $response['message']='Invalid  or data not found';
            }

        }else if($_GET['action']=='insert'){
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
                $hienThi = $_POST['hienThi'];


                $sql="insert into `sanpham` values('$maSP','$tenSP','$hinhAnh','$mota','$chatLuong','$trangThai','$gia','$nhomSP','$NCC','$ngayNhap','$hienThi')";

                //$sql="insert into `sanpham` values('$maSP','$tenSP','$hinhAnh','$mota','$chatLuong','trangThai','gia','$nhomSP','$NCC','$ngayNhap')";
                //$sql="INSERT INTO `sanpham` (`maSP`, `tenSP`, `hinhAnh`, `moTa`, `chatLuong`, `trangThai`, `gia`, `nhomSP`, `NCC`, `ngayNhap`) VALUES ('$maSP', '', '', '', 0, '', 0, '', '', '')";
                //$sql="INSERT INTO `sanpham` (`maSP`, `tenSP`, `hinhAnh`, `moTa`, `chatLuong`, `trangThai`, `gia`, `nhomSP`, `NCC`, `ngayNhap`) VALUES ('SP004', 'tai nghe AKG', 'iphone.png', 'asdasda', '5', 'like new', '78', 'phu kien', 'tengshen', '2022-06-15')";

                $result=mysqli_query($conn,$sql);

            }
            else{
                
            }

        }else if($_GET['action']=='update'){
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
                $hienThi = $_POST['hienThi'];
                if($hinhAnh==''){
                    $sql="update `sanpham` set `tenSP`='$tenSP',`moTa`='$mota',`chatLuong`='$chatLuong',`trangThai`='$trangThai',`gia`='$gia',`nhomSP`='$nhomSP',`NCC`='$NCC',`ngayNhap`='$ngayNhap',`hienThi`='$hienThi' where `maSP`='$maSP'";
        
                }else{
                    $sql="update `sanpham` set `tenSP`='$tenSP',`hinhAnh`='$hinhAnh',`moTa`='$mota',`chatLuong`='$chatLuong',`trangThai`='$trangThai',`gia`='$gia',`nhomSP`='$nhomSP',`NCC`='$NCC',`ngayNhap`='$ngayNhap',`hienThi`='$hienThi' where `maSP`='$maSP'";
        
                }
        
                
                
                $result=mysqli_query($conn,$sql);
                
            }

        }else if($_GET['action']=='updateState'){
            if(isset($_POST['maSP']  )){
                $maSP = $_POST['maSP'];
                $hienThi = $_POST['hienThi'];

                $sql="update `sanpham` set `hienThi`='$hienThi' where `maSP`='$maSP'";

                $result=mysqli_query($conn,$sql);
                
            }
        }else if($_GET['action']=='delete'){
            if(isset($_POST['deleteid']  )){
                $accountid=$_POST['deleteid'];
        
                
                $sql="delete from `sanpham` where `maSP`='$accountid'";
        
                $result=mysqli_query($conn,$sql);
                
        
                
            }

        }else if($_GET['action']=='search-product'){//search
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

        }
    }


?>