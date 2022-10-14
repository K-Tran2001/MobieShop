<?php
include_once './config.php';//$conn
    if(isset($_GET['action'])){
        if($_GET['action']=='getdataAll'){
            if(isset($_POST['displaySend']  )){
                $table='';
                $sql="select * from ncc";
                $ds=mysqli_query($conn,$sql);
                while($dong=mysqli_fetch_assoc($ds)){
                    
                    $maCty=$dong['maCty'];
                    $tenCty=$dong['tenCty'];
                    $tinh=$dong['tinh'];
                    $dienThoai=$dong['dienThoai'];
                    
        
                    $table.='<tr>
                    <td>'.$maCty.'</td>
                    <td> '.$tenCty.'</td>
                    <td> '.$tinh.'</td>
                    <td> '.$dienThoai.'</td>
                   
                    
                    <td><a onclick="getDetails(`'.$maCty.'`)" class="btn btn-warning">Sua</a></td>
                    <td><a onclick="deletesupplier(`'.$maCty.'`)"  class="btn btn-danger">Xoa</a></td>
                    </tr>';
                    
                }
                
                
                echo $table;
        
        
            }

        }else if($_GET['action']=='getdataById'){
            if(isset($_POST['updateid']  )){
                $accountid=$_POST['updateid'];
                $sql="select * from `ncc` where `maCty`='$accountid'";
                
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
            $maCty=$_POST['maCty'];
            $tenCty=$_POST['tenCty'];
            $tinh=$_POST['tinh'];
            $dienThoai=$_POST['dienThoai'];

            $sql="insert into `ncc` values('$maCty','$tenCty','$tinh','$dienThoai')";
            

            $result=mysqli_query($conn,$sql);

        }if($_GET['action']=='update'){
            if(isset($_POST['maCty']  )){
                $maCty=$_POST['maCty'];
                $tenCty=$_POST['tenCty'];
                $tinh=$_POST['tinh'];
                $dienThoai=$_POST['dienThoai'];
                
                $sql="UPDATE `ncc` SET `dienThoai` = '$dienThoai',`tenCty` = '$tenCty',`tinh` = '$tinh' WHERE `ncc`.`maCty` = '$maCty';";
        
                
                
                $result=mysqli_query($conn,$sql);
                
            }

        }if($_GET['action']=='delete'){
            if(isset($_POST['deleteid']  )){
                $accountid=$_POST['deleteid'];
        
                
                $sql="delete from `ncc` where `maCty`='$accountid'";
        
                $result=mysqli_query($conn,$sql);
                
        
                
            }
        

        }else if($_GET['action']=='search-suppier'){//search
            if(isset($_POST['displaySend']  )){
                $key=$_POST['input'];
                $table='';
                $sql="select * from ncc where `maCty` like '{$key}%'  or `tenCty` like '{$key}%' or `tinh` like '{%key}%'  or `dienThoai` like '{%key}%'";
                $ds=mysqli_query($conn,$sql);
                while($dong=mysqli_fetch_assoc($ds)){
                    $maCty=$dong['maCty'];
                    $tenCty=$dong['tenCty'];
                    $tinh=$dong['tinh'];
                    $dienThoai=$dong['dienThoai'];
                    
        
                    $table.='<tr>
                    <td>'.$maCty.'</td>
                    <td> '.$tenCty.'</td>
                    <td> '.$tinh.'</td>
                    <td> '.$dienThoai.'</td>
                   
                    
                    <td><a onclick="getDetails(`'.$maCty.'`)" class="btn btn-warning">Sua</a></td>
                    <td><a onclick="deletesupplier(`'.$maCty.'`)"  class="btn btn-danger">Xoa</a></td>
                    </tr>';
                    
                }
                
                
                echo $table;
        
        
            }

        }
    }


?>