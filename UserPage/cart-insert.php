<?php
    include '../config.php';
    if(isset($_POST['id'])&&isset($_POST['title'])&&isset($_POST['price'])&&isset($_POST['productImg'])){
        $id=$_POST['id'];
        $title=$_POST['title'];
        $price=$_POST['price'];
        $productImg=$_POST['productImg'];
        $number=$_POST['number'];
        
        $sql="INSERT INTO `giohang` (`id`, `title`, `price`, `productImg`, `number`) VALUES ('$id', '$title', $price, '$productImg', 1)";
            

        $result=mysqli_query($conn,$sql);
        echo $sql;

    //printf($result);
    }
    


?>