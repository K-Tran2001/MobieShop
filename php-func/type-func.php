<?php
include_once './config2.php';//$conn
    if(isset($_GET['action'])){
        if($_GET['action']=='getdataAll'){
            if(isset($_POST['displaySend']  )){
                $table='';
                $sql="select * from type";
                $ds=mysqli_query($conn,$sql);
                while($dong=mysqli_fetch_assoc($ds)){
                    
                    $type_id=$dong['type_id'];
                    $type=$dong['type'];

                    $table.='<tr>
                    <td>'.$type_id.'</td>
                    <td> '.$type.'</td>

                    <td><a onclick="getDetails(`'.$type_id.'`)" class="btn btn-warning">Sua</a></td>
                    <td><a onclick="deletesupplier(`'.$type_id.'`)"  class="btn btn-danger">Xoa</a></td>
                    </tr>';
                    
                }
                
                
                echo $table;
        
        
            }

        }else if($_GET['action']=='getdataById'){
            if(isset($_POST['updateid']  )){
                $type_id=$_POST['updateid'];
                $sql="select * from `type` where `type_id`='$type_id'";
                
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
            $type=$_POST['type'];
            $sql="INSERT INTO `type` (`type_id`, `type`) VALUES (NULL, '$type')";

            $result=mysqli_query($conn,$sql);

        }if($_GET['action']=='update'){
            if(isset($_POST['type_id']  )){
                $type_id=$_POST['type_id'];
                $type=$_POST['type'];

                $sql="UPDATE `type` SET `type` = '$type' WHERE `type`.`type_id` = $type_id";
        
                
                
                $result=mysqli_query($conn,$sql);
                
            }

        }if($_GET['action']=='delete'){
            if(isset($_POST['deleteid']  )){
                $type_id=$_POST['deleteid'];
        
                
                $sql="delete from `type` where `type_id`='$type_id'";
        
                $result=mysqli_query($conn,$sql);
                
            }
        

        }
    }


?>