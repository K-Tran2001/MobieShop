<?php

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
        $sql="select * from `type`";
        $ds=mysqli_query($conn,$sql);
        $res='';
        while($dong=mysqli_fetch_assoc($ds)){
            $res.='<option value='.$dong['TYPE_ID'].'>'.$dong['TYPE'].'</option>';
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