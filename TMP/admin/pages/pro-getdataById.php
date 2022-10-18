<?php
    include_once '../includes/config.php';//$conn

    if(isset($_POST['updateid']  )){
        $accountid=$_POST['updateid'];
        $sql="select * from `sanpham` where `maSP`='$accountid'";
        
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

?>