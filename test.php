<?php
// $d = new date();
// $str="" + $d.getFullYear() + ($d.getMonth() + 1) + $d.getDate() + "-" + $d.getHours() + $d.getMinutes() + $d.getSeconds();
// echo $str;


//echo md5('123',false); hash mdd5


//===========================================================================================
session_start();
include './config2.php';
$cust_id=$_SESSION['user'][0]['CUST_ID'];
// $sql="INSERT INTO `customer` (`CUST_ID`, `FIRST_NAME`, `LAST_NAME`, `EMAIL`, `PHONE_NUMBER`, `LOCATION_ID`) VALUES (NULL, 'KHANG', 'PHAN', 'tvkhoa_20th@student.agu.edu.vn	', '1111111111', '113');";
// mysqli_query($conn,$sql);

// $sql="SELECT CUST_ID from `customer` ORDER BY `customer`.CUST_ID DESC LIMIT 1;";
    
// $cust_id=mysqli_fetch_assoc(mysqli_query($conn,$sql))['CUST_ID'];

// echo $cust_id;//lay duoc cust id vua insert

// //////////tao account co cust_id

// $sql="INSERT INTO `users` (`ID`, `CUSTOMER_ID`, `USERNAME`, `PASSWORD`, `TYPE_ID`, `IMG`, `STATE`) VALUES (NULL, '$cust_id', 'khoavip12', 'khoavip12', '2', 'h1.jpg', '1')";
// mysqli_query($conn,$sql);
///////////////--acc-cus-success------/////////////

//===========================================================================================

date_default_timezone_set("Asia/Ho_Chi_Minh");   //India time (GMT+5:30)
$trans_d_id= date('Ymd-His');
//--duyet gio hang
$sql="select * from `shopping` where `shopping`.cust_id=$cust_id ";
                
$ds=mysqli_query($conn,$sql);
$response=array();
$numOfItems=0;
$gandTotal=0;
while($row=mysqli_fetch_assoc($ds)){//INSERT INTO `transaction_details` (`ID`, `TRANS_D_ID`, `PRODUCTS`, `QTY`, `PRICE`) VALUES (NULL, 'kkkkkkk', 'SP demo', '5', '15');
    $numOfItems++;
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
// $sql="DELETE FROM `shopping` ";
// $res=mysqli_query($conn,$sql);
// echo $sql;


$output=array(
    'data'=>$data,
  );
//Print array in JSON format
 echo json_encode($output['data']);

 //INSERT INTO `transaction` (`TRANS_ID`, `CUST_ID`, `NUMOFITEMS`, `GRANDTOTAL`, `DATE`, `TRANS_D_ID`) VALUES (NULL, '23', '3', '999', '2022', 'kkkkkkk');
$sql="INSERT INTO `transaction` (`TRANS_ID`, `CUST_ID`, `NUMOFITEMS`, `GRANDTOTAL`, `DATE`, `TRANS_D_ID`) 
VALUES (NULL,$cust_id, '$numOfItems', '$gandTotal', '2022', '$trans_d_id')";
mysqli_query($conn,$sql);
////////////--Success---////////////

//===========================================================================================



 

?>