<?php
    include_once './config.php';//$conn

    if(isset($_POST['deleteid']  )){
        $accountid=$_POST['deleteid'];

        
        $sql="delete from `taikhoan` where `username`='$accountid'";

        $result=mysqli_query($conn,$sql);
        

        
    }

?>