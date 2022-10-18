<?php
    $server="localhost";
    $user="root";
    $pass="";
    $db="k-shop";

    $conn=mysqli_connect($server,$user,$pass,$db);
    if(!$conn){
        die("Loi ".mysqli_connect_error());
        exit();
    }

    // $sql="select * from `location`";
    //     $ds=mysqli_query($conn,$sql);
    //     $res='';
    //     while($dong=mysqli_fetch_assoc($ds)){
    //         $res.='<option value='.$dong['LOCATION_ID'].'>'.$dong['CITY'].'</option>';
    //     }
    //     echo $res;
    
        //functio loadFK(page);if else

    function loadProduct(){
        include 'config2.php';
        $sql="select * from `product`";
        $ds=mysqli_query($conn,$sql);
        $res='';
        while($dong=mysqli_fetch_assoc($ds)){
            $res.='<option value='.$dong['PRODUCT_ID'].'>'.$dong['NAME'].'</option>';
        }
        echo $res;
    }
    function loadCategory(){
        include 'config2.php';
        $sql="select * from `category`";
        $ds=mysqli_query($conn,$sql);
        $res='';
        while($dong=mysqli_fetch_assoc($ds)){
            $res.='<option value='.$dong['CATEGORY_ID'].'>'.$dong['CNAME'].'</option>';
        }
        echo $res;
    }
    function loadCustomer(){
        include 'config2.php';
        $sql="select * from `customer`";
        $ds=mysqli_query($conn,$sql);
        $res='';
        while($dong=mysqli_fetch_assoc($ds)){
            $res.='<option value='.$dong['CUST_ID'].'>'.$dong['FIRST_NAME'].'</option>';
        }
        echo $res;
    }
    function loadSupplier(){
        include 'config2.php';
        $sql="select * from `supplier`";
        $ds=mysqli_query($conn,$sql);
        $res='';
        while($dong=mysqli_fetch_assoc($ds)){
            $res.='<option value='.$dong['SUPPLIER_ID'].'>'.$dong['COMPANY_NAME'].'</option>';
        }
        echo $res;
    }
    function loadType(){
        include 'config2.php';
        $sql="select * from `type_user`";
        $ds=mysqli_query($conn,$sql);
        $res='';
        while($dong=mysqli_fetch_assoc($ds)){
            $res.='<option value='.$dong['type_id'].'>'.$dong['type'].'</option>';
        }
        echo $res;
    }
    function loadLocation(){
        include 'config2.php';

        $sql="select * from `location`";
        $ds=mysqli_query($conn,$sql);
        $res='';
        while($dong=mysqli_fetch_assoc($ds)){
            $res.='<option value='.$dong['LOCATION_ID'].'>'.$dong['CITY'].'</option>';
        }
        echo $res;
    }


    
?>