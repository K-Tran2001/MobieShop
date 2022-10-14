<?php
    include './config.php';//$conn
    if(isset($_GET['action'])){
        if($_GET['action']=='getdataById'){
            if(isset($_POST['updateid']  )){
                $accountid=$_POST['updateid'];
                $sql="select * from `users` where `id`='$accountid'";
                
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
            if(isset($_POST['username']  )&&isset($_POST['password']  )&&isset($_POST['avatar']  )){
                $username=$_POST['username'];
                $pasword=$_POST['pasword'];
                $avatar=$_POST['avatar'];
                $customer_id=$_POST['customer_id'];
                $type_id=$_POST['type_id'];
                //$filename = $_POST['filename'];
                //INSERT INTO `taikhoan` (`username`, `password`, `avatar`) VALUES ('0000', 'kkkkk', 'k.jpg');
                $sql="INSERT INTO `users` (`ID`, `CUSTOMER_ID`, `USERNAME`, `PASSWORD`, `TYPE_ID`, `IMG`, `STATE`) 
                VALUES (NULL, '$customer_id', '$username', '$password', '$type_id', '$avatar', '0')";
                $result=mysqli_query($conn,$sql);

            }

        }else if($_GET['action']=='update'){
            if(isset($_POST['id']  )){
                
                $id=$_POST['id'];
                $username=$_POST['username'];
                $password=$_POST['password'];
                $avatar=$_POST['avatar'];
                $customer_id=$_POST['customer_id'];
                $type_id=$_POST['type_id'];
                $state=$_POST['state'];

                if($avatar==''){
                    $sql="UPDATE `users` 
                    SET `CUSTOMER_ID` = '$customer_id', `USERNAME` = '$username', `PASSWORD` = '$password',
                     `TYPE_ID` = '$type_id', `STATE` = '$state' WHERE `users`.`ID` = $id";
        
                }else{
                    $sql="UPDATE `users` 
                    SET `CUSTOMER_ID` = '$customer_id', `USERNAME` = '$username', `PASSWORD` = '$password',
                     `TYPE_ID` = '$type_id', `IMG` = '$avatar', `STATE` = '$state' WHERE `users`.`ID` = $id";
        
                }
        
                
                
                $result=mysqli_query($conn,$sql);
                
            }

        }else if($_GET['action']=='updateState'){
            if(isset($_POST['id']  )){
                $id = $_POST['id'];
                $state = $_POST['state'];

                $sql="update `users` set `state`='$state' where `id`='$id'";

                $result=mysqli_query($conn,$sql);
                
            }
        }else if($_GET['action']=='delete'){
            if(isset($_POST['deleteid']  )){
                $accountid=$_POST['deleteid'];
        
                
                $sql="delete from `users` where `id`='$accountid'";
        
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