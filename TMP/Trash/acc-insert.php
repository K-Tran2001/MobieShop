<?php
    include_once './config.php';

    extract($_POST);
    if(isset($_POST['username_send']  )&&isset($_POST['password_send']  )&&isset($_POST['avatar_send']  )){
        
        $filename = $_POST['filename'];

        

        $sql="insert into `taikhoan` values('$username_send','$password_send','$avatar_send')";
        

        $result=mysqli_query($conn,$sql);
    }

?>