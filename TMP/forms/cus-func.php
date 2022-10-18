<?php
include './config.php';
    if(isset($_GET['action'])){
        if($_GET['action']=='getdataById'){
            if(isset($_POST['updateid']  )){
                $accountid=$_POST['updateid'];
                $sql="select * from `customer` where `cust_id`='$accountid'";
                
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
            $first_name=$_POST['first_name'];
            $last_name=$_POST['last_name'];
            $location_id=$_POST['location_id'];
            $phone_number=$_POST['phone_number'];

            $sql="INSERT INTO `customer` (`CUST_ID`, `FIRST_NAME`, `LAST_NAME`, `PHONE_NUMBER`, `LOCATION_ID`) 
            VALUES (NULL, '$first_name', '$last_name', '$phone_number', '$location_id')";
            

            $result=mysqli_query($conn,$sql);

        }if($_GET['action']=='update'){
            if(isset($_POST['maKH']  )){
                $cust_id=$_POST['cust_id'];
                $first_name=$_POST['first_name'];
                $last_name=$_POST['last_name'];
                $location_id=$_POST['location_id'];
                $phone_number=$_POST['phone_number'];
                
                $sql="UPDATE `customer` SET `FIRST_NAME` = '$first_name', 
                `LAST_NAME` = '$last_name', `PHONE_NUMBER` = '$phone_number', `LOCATION_ID` = '$location_id' 
                WHERE `customer`.`CUST_ID` = 17";
        
                
                
                $result=mysqli_query($conn,$sql);
                
            }

        }if($_GET['action']=='delete'){
            if(isset($_POST['deleteid']  )){
                $accountid=$_POST['deleteid'];
        
                
                $sql="delete from `customer` where `cust_id`='$accountid'";
        
                $result=mysqli_query($conn,$sql);
                
        
                
            }

        }
    }


?>