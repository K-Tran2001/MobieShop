<?php
include_once './config.php';//$conn
    if(isset($_GET['action'])){
        if($_GET['action']=='getdataById'){
            if(isset($_POST['updateid']  )){
                $accountid=$_POST['updateid'];
                $sql="select * from `supplier` where `supplier_id`='$accountid'";
                
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
            
            $company_name=$_POST['company_name'];
            $location_id=$_POST['location_id'];
            $phone_number=$_POST['phone_number'];

            $sql="INSERT INTO `supplier` (`SUPPLIER_ID`, `COMPANY_NAME`, `LOCATION_ID`, `PHONE_NUMBER`) 
            VALUES (NULL, '$company_name', '$location_id', '$phone_number')";
            

            $result=mysqli_query($conn,$sql);

        }if($_GET['action']=='update'){
            if(isset($_POST['supplier_id']  )){
                $supplier_id=$_POST['supplier_id'];
                $company_name=$_POST['company_name'];
                $location_id=$_POST['location_id'];
                $phone_number=$_POST['phone_number'];
                
                $sql="UPDATE `supplier` SET `COMPANY_NAME` = '$company_name', `LOCATION_ID` = '$location_id', 
                `PHONE_NUMBER` = '$phone_number' WHERE `supplier`.`SUPPLIER_ID` = $supplier_id";

                $result=mysqli_query($conn,$sql);
                
            }

        }if($_GET['action']=='delete'){
            if(isset($_POST['deleteid']  )){
                $accountid=$_POST['deleteid'];
        
                
                $sql="delete from `supplier` where `supplier_id`='$accountid'";
        
                $result=mysqli_query($conn,$sql);
                
        
                
            }
        

        }
    }


?>