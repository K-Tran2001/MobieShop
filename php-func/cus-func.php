<?php
include './config.php';
    if(isset($_GET['action'])){
        if($_GET['action']=='getdataAll'){
            if(isset($_POST['displaySend']  )){
                $table='';
                $sql="select * from `khachhang`";
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

        }else if($_GET['action']=='getdataById'){
            if(isset($_POST['updateid']  )){
                $accountid=$_POST['updateid'];
                $sql="select * from `khachhang` where `maKH`='$accountid'";
                
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

        }if($_GET['action']=='insert'){
            $maKH=$_POST['maKH'];
            $tenKH=$_POST['tenKH'];
            $ngaySinh=$_POST['ngaySinh'];
            $gioiTinh=$_POST['gioiTinh'];
            $diaChi=$_POST['diaChi'];
            $dienThoai=$_POST['dienThoai'];

            $sql="insert into `khachhang` values('$maKH','$tenKH','$ngaySinh','$diaChi','$dienThoai','$gioiTinh')";
            

            $result=mysqli_query($conn,$sql);

        }if($_GET['action']=='update'){
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

        }if($_GET['action']=='delete'){
            if(isset($_POST['deleteid']  )){
                $accountid=$_POST['deleteid'];
        
                
                $sql="delete from `khachhang` where `maKH`='$accountid'";
        
                $result=mysqli_query($conn,$sql);
                
        
                
            }

        }else if($_GET['action']=='search-customer'){//search
            if(isset($_POST['displaySend']  )){
                $key=$_POST['input'];
                $table='';
                $sql="select * from khachhang where `maKH` like '{$key}%'  or `tenKH` like '{$key}%' or `ngaySinh` like '{%key}%' or `ngaySinh` like '{%key}%' or `gioiTinh` like '{%key}%' or `diaChi` like '{%key}%' or `dienThoai` like '{%key}%'";
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

        }
    }


?>