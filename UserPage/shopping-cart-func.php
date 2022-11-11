<?php
    session_start();
    include '../config2.php';
    if(!empty($_SESSION['user'][0]['CUST_ID']))
        $cust_id=$_SESSION['user'][0]['CUST_ID'];
    else
        $cust_id='null';

    //print_r($cust_id);
    if(isset($_GET['type'])&&isset($_GET['action'])){
        if($_GET['action']=='insert'||$_GET['action']=='update'){
            $id=$_POST['id'];
            $title=$_POST['title'];
            $price=$_POST['price'];
            $productImg=$_POST['productImg'];
            $number=$_POST['number'];
            
            
        }if($_GET['action']=='delete'||$_GET['action']=='getdataById'){
            $id=$_POST['id'];
        }
        $res='';
        $data= array();
        
        if($_GET['type']=='cart' && $cust_id!='null'){
            if($_GET['action']=='getdataAll'){
                $sql="SELECT * FROM `shopping` WHERE `shopping`.`cust_id`=$cust_id";
                $list=mysqli_query($conn,$sql);
                $res='';
                while($row=mysqli_fetch_assoc($list)){//fetch data
                    $shopping_id=$row['shopping_id'];
                    $id=$row['id'];
                    $productImg=$row['productImg'];
                    $title=$row['title'];
                    $price=$row['price'];
                    $number=$row['number'];
                    $res.='
                    <div class="cart-box">
                        <img src="'.$productImg.'" alt="" class="cart-img">
                        <div class="detail-box">
                            <div class="shopping_id" >'.$shopping_id.'</div>
                            <div class="cart-product-id" style="display: none;">'.$id.'</div>
                            <div class="cart-product-title">'.$title.'</div>
                            <div class="cart-price">'.$price.'</div>
                            <input type="number" class="cart-quantity" value="'.$number.'">
                        </div>
                        <!---remove-->
                        <i class="bx bxs-trash-alt cart-remove"></i>
                    </div>
                    
                    
                    ';
                    
                    
                    
                    
                }
                echo $res;
                

            }else if($_GET['action']=='getdataById'){
                
                $sql="select * from  `shopping` where `id`=$id and `cust_id`=$cust_id";
                $list=mysqli_query($conn,$sql);
                if(mysqli_num_rows($list)>0){
                     $res='1';
                }else{
                     $res='0';
                }
                echo $res;//
                
                

            }else if($_GET['action']=='getshopping_Id'){
                $sql="SELECT shopping_id from `shopping` ORDER BY `shopping`.shopping_id DESC LIMIT 1;";
    
                $shopping_id=mysqli_fetch_assoc(mysqli_query($conn,$sql))['shopping_id'];
                echo $shopping_id;
            }else if($_GET['action']=='insert'){
                $sql="INSERT INTO `shopping` (`id`, `title`, `price`, `productImg`, `number`,`cust_id`) VALUES ('$id', '$title', '$price', '$productImg', 1,$cust_id)";
                $res=mysqli_query($conn,$sql);
                echo $sql;
                
            }else if($_GET['action']=='update'){
                $sql="UPDATE `shopping` SET `title` = '$title', `price` = '$price', `productImg` = '$productImg', `number` = '$number' WHERE `shopping`.`id` = '$id';";
                $res=mysqli_query($conn,$sql);
                
                echo $sql;
            }else if($_GET['action']=='updateQuantity'){
                $shopping_id=$_POST['shopping_id'];
                $number=$_POST['number'];
                $sql="UPDATE `shopping` SET  `number` = '$number' WHERE `shopping`.`shopping_id` = '$shopping_id';";
                $res=mysqli_query($conn,$sql);
                
                echo $sql;
            }else if($_GET['action']=='delete'){
                $shopping_id=$_POST['shopping_id'];
                $sql="DELETE FROM `shopping` WHERE  `shopping`.`shopping_id` = '$shopping_id'";
                $res=mysqli_query($conn,$sql);
                echo $sql;
            }else if($_GET['action']=='order'){
                date_default_timezone_set("Asia/Ho_Chi_Minh");   //India time (GMT+5:30)
                $trans_d_id= date('Ymd-His');
                $date=date("Y-m-d");
                //--duyet gio hang
                $sql="select * from `shopping` where `shopping`.cust_id=$cust_id ";
                                
                $ds=mysqli_query($conn,$sql);
                $response=array();
                $numOfItems=0;
                $gandTotal=0;
                while($row=mysqli_fetch_assoc($ds)){//INSERT INTO `transaction_details` (`ID`, `TRANS_D_ID`, `PRODUCTS`, `QTY`, `PRICE`) VALUES (NULL, 'kkkkkkk', 'SP demo', '5', '15');
                    $numOfItems=$row['number'];
                    
                    $gandTotal+=$row['price'];
                    $sub_array = array();
                    $sub_array[] = $row['id'];
                    $sub_array[] = $row['number'];
                    $sub_array[] = $row['price'];
                    $sub_array[] = $row['productImg'];
                    $sub_array[] = $row['number'];
                    $data[] = $sub_array;
                    ////////test data
                    $title=$row['title'];
                    $price=$row['price'];
                    $number=$row['number'];
                    
                    $sql="INSERT INTO `transaction_details` (`ID`, `TRANS_D_ID`, `PRODUCTS`, `QTY`, `PRICE`) VALUES (NULL, '$trans_d_id', '$title', '$number', '$price')";
                    echo $sql;            
                    mysqli_query($conn,$sql);
                }
                ///=>Xoa All shopping
                $sql="DELETE FROM `shopping` where `shopping`=$cust_id ";
                $res=mysqli_query($conn,$sql);
                // echo $sql;
                $output=array(
                    'data'=>$data,
                );
                //Print array in JSON format
                echo json_encode($output['data']);

                //INSERT INTO `transaction` (`TRANS_ID`, `CUST_ID`, `NUMOFITEMS`, `GRANDTOTAL`, `DATE`, `TRANS_D_ID`) VALUES (NULL, '23', '3', '999', '2022', 'kkkkkkk');
                $sql="INSERT INTO `transaction` (`TRANS_ID`, `CUST_ID`, `NUMOFITEMS`, `GRANDTOTAL`, `DATE`, `TRANS_D_ID`) 
                VALUES (NULL,$cust_id, '$numOfItems', '$gandTotal', '2022-10', '$trans_d_id')";
                mysqli_query($conn,$sql);
            }else{
                $sql="DELETE FROM `shopping` WHERE `shopping`.`cust_id`=$cust_id";
                $res=mysqli_query($conn,$sql);
                echo $sql;
            }

        }else if($_GET['type']=='heart' && $cust_id!='null'){//heart
            if($_GET['action']=='getdataAll'){
                $sql="SELECT * FROM `favorite` WHERE `favorite`.`cust_id`=$cust_id";
                $list=mysqli_query($conn,$sql);
                $res='';
                while($row=mysqli_fetch_assoc($list)){//fetch data
                    $id=$row['id'];
                    $productImg=$row['productImg'];
                    $title=$row['title'];
                    $price=$row['price'];
                    $res.='
                    <div class="cart-box">
                        <img src="'.$productImg.'" alt="" class="cart-img">
                        <div class="detail-box">
                            <div class="cart-product-id" style="display: none;">'.$id.'</div>
                            <div class="cart-product-title">'.$title.'</div>
                            <div class="cart-price">'.$price.'</div>
                            
                        </div>
                        <!---remove-->
                        <i class="bx bx-heart cart-heart-remove"></i>
                    </div>
                    
                    
                    ';
                    
                    
                    
                    
                }
                echo $res;

            }else if($_GET['action']=='getdataById'){
                $sql="select * from  `favorite` where `id`='$id' and `cust_id`=$cust_id";
                $list=mysqli_query($conn,$sql);
                if(mysqli_num_rows($list)>0){
                     $res='1';
                }else{
                     $res='0';
                }
                echo $res;
                

            }else if($_GET['action']=='insert'){
                $sql="INSERT INTO `favorite` (`id`, `title`, `price`, `productImg`,`cust_id`) VALUES ('$id', '$title', '$price', '$productImg',$cust_id)";
                $res=mysqli_query($conn,$sql);
                echo $sql;
                
            }else if($_GET['action']=='update'){
                $sql="UPDATE `favorite` SET `title` = '$title', `price` = '$price', `productImg` = '$productImg', `number` = '$number' WHERE `favorite`.`id` = '$id';";
                $res=mysqli_query($conn,$sql);
                echo $sql;
            }else{
                $sql="DELETE FROM `favorite` WHERE `favorite`.`id` = '$id' and  `favorite`.`cust_id`=$cust_id";
                $res=mysqli_query($conn,$sql);
                echo $sql;
            }

        }
    }
        // $id=$_POST['id'];
        // $title=$_POST['title'];
        // $price=$_POST['price'];
        // $productImg=$_POST['productImg'];
        // $number=$_POST['number'];
        // $res='';
        
        // if($_GET['action']=='getdataAll'){
        //     $sql='select * from  `shopping`';
        //     $list=mysqli_query($conn,$sql);
        //     $res='';
        //     while($row=mysqli_fetch_assoc($list)){
        //         $id=$row['id'];
        //         $productImg=$row['productImg'];
        //         $title=$row['title'];
        //         $price=$row['price'];
        //         $res+=`
        //         <img src="$productImg" alt="" class="cart-img">
        //         <div class="detail-box">
        //             <div class="cart-product-title">$id</div>
        //             <div class="cart-product-title">$title</div>
        //             <div class="cart-price">$price</div>
        //             <input type="number" class="cart-quantity" value="1">
        //         </div>
        //         <!---remove-->
        //         <i class='bx bxs-trash-alt cart-remove'></i>`;
        //     }
        //     echo $res;

        // }else if($_GET['action']=='insert'){
        //     $sql="insert into `shopping` values('$id','$title','$price','$productImg',1)";
        //     $res=mysqli_query($conn,$sql);
            
        // }else if($_GET['action']=='update'){
        //     $sql='update from `shopping` set `title`=$title,`price`=$price,`productImg`=$productImg where `id`=$id';
        //     $res=mysqli_query($conn,$sql);
        // }else{
        //     $sql='delete `shopping` where `id`=$id';
        //     $res=mysqli_query($conn,$sql);
        // }

?>