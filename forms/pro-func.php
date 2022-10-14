<?php
include "./config.php";
    if(isset($_GET['action'])){
        if($_GET['action']=='getdataById'){
            if(isset($_POST['updateid']  )){
                $accountid=$_POST['updateid'];
                $sql="select * from `product` where `product_id`='$accountid'";
                
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
            extract($_POST);
            if(isset($_POST['product_code'])){
                $product_code = $_POST['product_code'];
                $name = $_POST['name'];
                $img = $_POST['img'];
                $description = $_POST['description'];
                $qty_stock = $_POST['qty_stock'];
                $on_hand = $_POST['on_hand'];
                $price = $_POST['price'];
                $category_id = $_POST['category_id'];
                $supplier_id = $_POST['supplier_id'];
                $date_stock_in = $_POST['date_stock_in'];

                $sql="INSERT INTO `product` (`PRODUCT_ID`, `PRODUCT_CODE`, `NAME`, `IMG`, `DESCRIPTION`, `QTY_STOCK`, `ON_HAND`, `PRICE`, `CATEGORY_ID`, `SUPPLIER_ID`, `DATE_STOCK_IN`, `STATE`, `VIEW_NUMBER`, `BUY_NUMBER`)
                 VALUES (NULL, '$product_code', '$name', '$img', '$description', '$qty_stock', '$on_hand', '$price', '$category_id', '$supplier_id', '$date_stock_in', '0', '0', '0');";
                $result=mysqli_query($conn,$sql);

            }
            else{
                
            }

        }else if($_GET['action']=='update'){
            if(isset($_POST['product_code']  )){
                $product_id = $_POST['product_id'];
                $product_code = $_POST['product_code'];
                $name = $_POST['name'];
                $img = $_POST['img'];
                $description = $_POST['description'];
                $qty_stock = $_POST['qty_stock'];
                $on_hand = $_POST['on_hand'];
                $price = $_POST['price'];
                $category_id = $_POST['category_id'];
                $supplier_id = $_POST['supplier_id'];
                $date_stock_in = $_POST['date_stock_in'];
                $state = $_POST['state'];
                $view = $_POST['view'];
                $buy = $_POST['buy'];

                if($hinhAnh==''){
                    $sql="UPDATE `product` SET `PRODUCT_CODE` = '$product_code', `NAME` = '$name', 
                    `DESCRIPTION` = '$description', `QTY_STOCK` = '$qty_stock', `ON_HAND` = '$on_hand', `PRICE` = '$price', 
                    `CATEGORY_ID` = '$category_id', `DATE_STOCK_IN` = '$date_stock_in', `STATE` = '$state', `VIEW_NUMBER` = '$view', `BUY_NUMBER` = '$buy' 
                    WHERE `product`.`PRODUCT_ID` = 1";
        
                }else{
                    $sql="UPDATE `product` SET `PRODUCT_CODE` = '$product_code', `NAME` = '$name', 
                    `IMG` = '$img', `DESCRIPTION` = '$description', `QTY_STOCK` = '$qty_stock', `ON_HAND` = '$on_hand', `PRICE` = '$price', 
                    `CATEGORY_ID` = '$category_id', `DATE_STOCK_IN` = '$date_stock_in', `STATE` = '$state', `VIEW_NUMBER` = '$view', `BUY_NUMBER` = '$buy' 
                    WHERE `product`.`PRODUCT_ID` = 1";
        
                }
        
                
                
                $result=mysqli_query($conn,$sql);
                
            }

        }else if($_GET['action']=='updateState'){
            if(isset($_POST['product_id']  )){
                $product_id = $_POST['product_id'];
                $state = $_POST['state'];

                $sql="update `product` set `state`='$state' where `PRODUCT_ID`='$product_id'";

                $result=mysqli_query($conn,$sql);
                
            }
        }else if($_GET['action']=='delete'){
            if(isset($_POST['deleteid']  )){
                $accountid=$_POST['deleteid'];
        
                
                $sql="delete from `product`  where `PRODUCT_ID`='$accountid'";
        
                $result=mysqli_query($conn,$sql);
                
        
                
            }

        }else if($_GET['action']=='search-product'){//search
            if(isset($_POST['displaySend']  )){
                $key=$_POST['input'];
                $table='';
                $sql="select * from `product` where `maSP` like '{$key}%'  or `tenSP` like '{$key}%' or `moTa` like '{%key}%' ";
                $ds=mysqli_query($conn,$sql);
                while($dong=mysqli_fetch_assoc($ds)){
                    $maSP=$dong['maSP'];
                    $tenSP=$dong['tenSP'];
                    $hinhAnh=$dong['hinhAnh'];
                    $moTa=$dong['moTa'];
                    $chatLuong=$dong['chatLuong'];
                    $trangThai=$dong['trangThai'];
                    $gia=$dong['gia'];
                    $nhomSP=$dong['nhomSP'];
                    $NCC=$dong['NCC'];
                    $ngayNhap=$dong['ngayNhap'];
        
                    $table.='<tr>
                    <td>'.$maSP.'</td>
                    <td> '.$tenSP.'</td>
                    <td ><img src="./img/'.$hinhAnh.'" style="width: 50px;height: 50px;"> </td>
                    <td> '.$moTa.'</td>
                    <td> '.$gia.'</td>
                    <td><a onclick="getDetails_view(`'.$maSP.'`)" class="btn btn-info">Xem</a></td>v
                    <td><a onclick="getDetails(`'.$maSP.'`)" class="btn btn-warning">Sua</a></td>
                    <td><a onclick="deleteproduct(`'.$maSP.'`)"  class="btn btn-danger">Xoa</a></td>
                    </tr>';
                    
                }
                
                
                echo $table;
                
                
                    }

        }
    }


?>