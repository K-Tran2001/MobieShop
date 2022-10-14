<?php
    include_once '../includes/config.php';//$conn

    if(isset($_POST['maCty']  )){
        $maCty=$_POST['maCty'];
        $tenCty=$_POST['tenCty'];
        $tinh=$_POST['tinh'];
        $dienThoai=$_POST['dienThoai'];
        
        $sql="UPDATE `ncc` SET `dienThoai` = '$dienThoai',`tenCty` = '$tenCty',`tinh` = '$tinh' WHERE `ncc`.`maCty` = '$maCty';";

        
        
        $result=mysqli_query($conn,$sql);
        
    }


?>