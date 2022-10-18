<?php
    include_once '../includes/config.php';//$conn

    if(isset($_POST['username_update']  )){
        $username_update=$_POST['username_update'];
        $password_update=$_POST['password_update'];
        $avatar_update=$_POST['avatar_update'];
        if($avatar_update==''){
            $sql="update `taikhoan` set `password`='$password_update' where `username`='$username_update'";

        }else{
            $sql="update `taikhoan` set `password`='$password_update',`avatar`='$avatar_update' where `username`='$username_update'";

        }

        
        
        $result=mysqli_query($conn,$sql);
        
    }


?>