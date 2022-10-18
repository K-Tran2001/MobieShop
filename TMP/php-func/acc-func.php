<?php
    include './config.php';//$conn
    if(isset($_GET['action'])){
        if($_GET['action']=='getdataAll'){
            if(isset($_POST['displaySend']  )){
                $table='';
                $sql="select * from taikhoan";
                $ds=mysqli_query($conn,$sql);
                while($dong=mysqli_fetch_assoc($ds)){
                    $username='';
                    $username=$dong['username'];
                    $password=$dong['password'];
                    $avatar=$dong['avatar'];
                    $table.='<tr>
                    <td>'.$username.'</td>
                    <td> '.$password.'</td>
                    <td ><img src="./img/'.$avatar.'" style="width: 50px;height: 50px;"> </td>
                    <td><a onclick="getDetails(`'.$username.'`)" class="btn btn-warning">Sua</a></td>
                    <td><a onclick="deleteuser(`'.$username.'`)"  class="btn btn-danger">Xoa</a></td>
                </tr>';
                    
                }
                
                
                echo $table;
        
        
                    }
        }else if($_GET['action']=='getdataById'){
            if(isset($_POST['updateid']  )){
                $accountid=$_POST['updateid'];
                $sql="select * from `taikhoan` where `username`='$accountid'";
                
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
            if(isset($_POST['username_send']  )&&isset($_POST['password_send']  )&&isset($_POST['avatar_send']  )){
                $filename = $_POST['filename'];
                //INSERT INTO `taikhoan` (`username`, `password`, `avatar`) VALUES ('0000', 'kkkkk', 'k.jpg');
                $sql="insert into `taikhoan` values('$username_send','$password_send','$avatar_send',0)";
                $result=mysqli_query($conn,$sql);

            }

        }else if($_GET['action']=='update'){
            if(isset($_POST['username_update']  )){
                $username_update=$_POST['username_update'];
                $password_update=$_POST['password_update'];
                $avatar_update=$_POST['avatar_update'];
                if($avatar_update==''){
                    $sql="update `taikhoan` set `password`='$password_update' where `username`='$username_update'";
        
                }else{
                    $sql="update `taikhoan` set `password`='$password_update',`avatar`='$avatar_update' where `username`='$username_update'";
        
                }
        
                
                
                $result=mysqli_query($conn,$sql);
                
            }

        }else if($_GET['action']=='updateState'){
            if(isset($_POST['username']  )){
                $username = $_POST['username'];
                $active = $_POST['active'];

                $sql="update `taikhoan` set `active`='$active' where `username`='$username'";

                $result=mysqli_query($conn,$sql);
                
            }
        }else if($_GET['action']=='delete'){
            if(isset($_POST['deleteid']  )){
                $accountid=$_POST['deleteid'];
        
                
                $sql="delete from `taikhoan` where `username`='$accountid'";
        
                $result=mysqli_query($conn,$sql);
                
        
                
            }

        }else{
            if(isset($_POST['displaySend']  )){
                $key=$_POST['input'];
                $table='';
                $sql="select * from taikhoan where `username` like '{$key}%'  or `password` like '{$key}%' or `avatar` like '{%key}%'";
                $ds=mysqli_query($conn,$sql);
                while($dong=mysqli_fetch_assoc($ds)){
                    $username='';
                    $username=$dong['username'];
                    $password=$dong['password'];
                    $avatar=$dong['avatar'];
                    $table.='<tr>
                    <td>'.$username.'</td>
                    <td> '.$password.'</td>
                    <td ><img src="./img/'.$avatar.'" style="width: 50px;height: 50px;"> </td>
                    <td><a onclick="getDetails(`'.$username.'`)" class="btn btn-warning">Sua</a></td>
                    <td><a onclick="deleteuser(`'.$username.'`)"  class="btn btn-danger">Xoa</a></td>
                </tr>';
                    
                }
                
                
                echo $table;
        
        
            }
        }
    
    
    }

?>