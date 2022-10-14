<?php
include_once './config2.php';//$conn
    if(isset($_GET['action'])){
        if($_GET['action']=='getdataAll'){
            if(isset($_POST['displaySend']  )){
                $table='';
                $sql="select * from category";
                $ds=mysqli_query($conn,$sql);
                while($dong=mysqli_fetch_assoc($ds)){
                    
                    $category_id=$dong['category_id'];
                    $cname=$dong['cname'];
                    $table.='<tr>
                    <td>'.$category_id.'</td>
                    <td> '.$cname.'</td>

                    <td><a onclick="getDetails(`'.$category_id.'`)" class="btn btn-warning">Sua</a></td>
                    <td><a onclick="deletesupplier(`'.$category_id.'`)"  class="btn btn-danger">Xoa</a></td>
                    </tr>';
                    
                }

                echo $table;
            }

        }else if($_GET['action']=='getdataById'){
            if(isset($_POST['updateid']  )){
                $category_id=$_POST['updateid'];
                $sql="select * from `category` where `CATEGORY_ID`='$category_id'";
                
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
            $cname=$_POST['cname'];

            $sql="INSERT INTO `category` (`CATEGORY_ID`, `CNAME`) VALUES (NULL, '$cname')";
            

            $result=mysqli_query($conn,$sql);

        }if($_GET['action']=='update'){
            if(isset($_POST['category_id']  )){
                $category_id=$_POST['category_id'];
                $cname=$_POST['cname'];
                
                
                $sql="UPDATE `category` SET `CNAME` = '$cname' WHERE `category`.`CATEGORY_ID` = $category_id";

                
                $result=mysqli_query($conn,$sql);
                
            }

        }if($_GET['action']=='delete'){
            if(isset($_POST['deleteid']  )){
                $category_id=$_POST['deleteid'];
        
                
                $sql="delete from `category` where `category_id`='$category_id'";
        
                $result=mysqli_query($conn,$sql);
                
        
                
            }
        

        }
    }


?>