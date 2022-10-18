<?php
include_once './config2.php';//$conn
    if(isset($_GET['action'])){
        if($_GET['action']=='getdataById'){
            if(isset($_POST['updateid']  )){
                $blog_id=$_POST['updateid'];
                $sql="select * from `blog` where `BLOG_ID`='$blog_id'";
                
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
            $category_id=$_POST['category_id'];
            $title=$_POST['title'];
            $author=$_POST['author'];
            $date=$_POST['date'];

            $sql="INSERT INTO `blog` (`BLOG_ID`, `IMG`, `CATEGORY_ID`, `TITLE`, `AUTHOR`, `DATE`, `STATE`) 
            VALUES (NULL, '$img', '$categoty_id', '$title', '$author', '$date', 0)";
            

            $result=mysqli_query($conn,$sql);

        }else if($_GET['action']=='update'){
            if(isset($_POST['blog_id']  )){
                $blog_id=$_POST['blog_id'];
                
                $category_id=$_POST['category_id'];
                $img=$_POST['img'];
                $title=$_POST['title'];
                $author=$_POST['author'];
                $date=$_POST['date'];
                $state=$_POST['state'];
                
                if($img==''){
                    $sql="UPDATE `blog` SET 
                    `TITLE` = '$title', 
                    `CATEGORY_ID` = '$category_id', 
                    `AUTHOR` = '$author', 
                    `DATE` = '$date', 
                    `STATE` = '$state' 
                    WHERE `blog`.`BLOG_ID` = $blog_id";
                }else{
                    $sql="UPDATE `blog` SET 
                    `IMG` = '$img', 
                    `TITLE` = '$title',
                    `CATEGORY_ID` = '$category_id',  
                    `AUTHOR` = '$author', 
                    `DATE` = '$date', 
                    `STATE` = '$state' 
                    WHERE `blog`.`BLOG_ID` = $blog_id";
                }
                

                
                $result=mysqli_query($conn,$sql);
                
            }
            echo $sql;

        }else if($_GET['action']=='updateState'){
            if(isset($_POST['blog_id']  )){
                $blog_id=$_POST['blog_id'];
                
                $state=$_POST['state'];
                
                $sql="UPDATE `blog` SET  `STATE` = '$state' 
                WHERE `blog`.`BLOG_ID` = $blog_id";
                
                $result=mysqli_query($conn,$sql);
                
            }
            echo $sql;
        }else if($_GET['action']=='delete'){
            if(isset($_POST['deleteid']  )){
                $blog_id=$_POST['deleteid'];
        
                
                $sql="delete from `blog` where `BLOG_ID`='$blog_id'";
        
                $result=mysqli_query($conn,$sql);
                
        
                
            }
        

        }
    }


?>