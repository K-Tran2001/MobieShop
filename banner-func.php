<?php
include_once './config2.php';//$conn
    if(isset($_GET['action'])){
        if($_GET['action']=='getdataById'){
            if(isset($_POST['updateid']  )){
                $banner_id=$_POST['updateid'];
                $sql="select * from `banner` where `BANNER_ID`='$banner_id'";
                
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
            $img=$_POST['img'];
            $product_id=$_POST['product_id'];
            $date=$_POST['date'];

            $sql="INSERT INTO `banner` (`BANNER_ID`, `IMG`, `PRODUCT_ID`, `STATE`) 
            VALUES (NULL, '$img', '$product_id', '0')";
            

            $result=mysqli_query($conn,$sql);

        }else if($_GET['action']=='update'){
            if(isset($_POST['banner_id']  )){
                $banner_id=$_POST['banner_id'];
                $img=$_POST['img'];
                $product_id=$_POST['product_id'];
                $state=$_POST['state'];
                if($img==''){
                    $sql="UPDATE `banner` SET  `PRODUCT_ID` = '$product_id', `STATE` = '$state' 
                    WHERE `banner`.`BANNER_ID` = $banner_id";
                }else{
                    $sql="UPDATE `banner` SET `IMG` = '$img', `PRODUCT_ID` = '$product_id', `STATE` = '$state' 
                    WHERE `banner`.`BANNER_ID` = $banner_id";
                }
                
                

                
                $result=mysqli_query($conn,$sql);
                
            }
            echo $sql;

        }else if($_GET['action']=='updateState'){
            if(isset($_POST['banner_id']  )){
                $banner_id=$_POST['banner_id'];
                
                $state=$_POST['state'];
                
                $sql="UPDATE `banner` SET  `STATE` = '$state' 
                WHERE `banner`.`BANNER_ID` = $banner_id";
               
                
                

                
                $result=mysqli_query($conn,$sql);
                
            }
            echo $sql;
        }else if($_GET['action']=='delete'){
            if(isset($_POST['deleteid']  )){
                $banner_id=$_POST['deleteid'];
        
                
                $sql="delete from `banner` where `BANNER_ID`='$banner_id'";
        
                $result=mysqli_query($conn,$sql);
                
        
                
            }
        

        }
    }


?>