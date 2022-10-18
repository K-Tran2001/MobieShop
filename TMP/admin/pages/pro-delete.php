<?php
    include_once '../includes/config.php';//$conn

    if(isset($_POST['deleteid']  )){
        $accountid=$_POST['deleteid'];

        
        $sql="delete from `sanpham` where `maSP`='$accountid'";

        $result=mysqli_query($conn,$sql);
        

        
    }

?>