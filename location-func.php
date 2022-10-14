<?php
include_once './config2.php';//$conn
    if(isset($_GET['action'])){
        if($_GET['action']=='getdataAll'){
            if(isset($_POST['displaySend']  )){
                $table='';
                $sql="select * from location";
                $ds=mysqli_query($conn,$sql);
                while($dong=mysqli_fetch_assoc($ds)){
                    
                    $location_id=$dong['location_id'];
                    $province=$dong['province'];
                    $city=$dong['city'];
                    $table.='<tr>
                    <td>'.$location_id.'</td>
                    <td> '.$province.'</td>
                    <td> '.$city.'</td>
                    <td><a onclick="getDetails(`'.$location_id.'`)" class="btn btn-warning">Sua</a></td>
                    <td><a onclick="deletesupplier(`'.$location_id.'`)"  class="btn btn-danger">Xoa</a></td>
                    </tr>';
                    
                }

                echo $table;
            }

        }else if($_GET['action']=='getdataById'){
            if(isset($_POST['updateid']  )){
                $location_id=$_POST['updateid'];
                $sql="select * from `location` where `location_id`=$location_id";
                
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
            $province=$_POST['province'];
            $city=$_POST['city'];
            

            $sql="INSERT INTO `location` (`location_ID`, `province`,`city`) VALUES (NULL, '$province','$city')";
            

            $result=mysqli_query($conn,$sql);

        }if($_GET['action']=='update'){
            if(isset($_POST['location_id']  )){
                $location_id=$_POST['location_id'];
                $province=$_POST['province'];
                $city=$_POST['city'];
                
                
                
                $sql="UPDATE `location` SET `province` = '$province',`city` = '$city'  WHERE `location`.`location_ID` = $location_id";

                
                $result=mysqli_query($conn,$sql);
                
            }

        }if($_GET['action']=='delete'){
            if(isset($_POST['deleteid']  )){
                $location_id=$_POST['deleteid'];
        
                
                $sql="delete from `location` where `location_id`='$location_id'";
        
                $result=mysqli_query($conn,$sql);
                
        
                
            }
        

        }
    }


?>