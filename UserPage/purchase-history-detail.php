<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>K-Shop</title>

    <!--
    - favicon
  -->
    <!-- <link rel="shortcut icon" href="./assets/images/logo/favicon.ico" type="image/x-icon"> -->
    <link rel="shortcut icon" href="../img/logo-K-5.jpg" type="image/x-icon">

    
    <link rel="stylesheet" href="./chat-box.css">
    
 
    <!--
    - custom css link
  -->
    <link rel="stylesheet" href="./assets/css/style-prefix.css">
    <link rel="stylesheet" href="../css/msg-custom.css">

    <!--
    - google font link
  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="./shopping-cart.js">

    <!--JQuery-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    

    <link rel="stylesheet" href="./style.css">
   

    
</head>

<body>

    
    <!--card shopping-->

    <div class="overlay" data-overlay></div>

    <!--
    - MODAL
  -->

    





    <!--
    - NOTIFICATION TOAST
  -->

    
    <!--  Toast-->
    <style>
        /* ======= Buttons ======== */
        /* Block */
    
        .btn {
            display: inline-block;
            text-decoration: none;
            background-color: transparent;
            border: none;
            outline: none;
            color: #fff;
            padding: 12px 48px;
            border-radius: 50px;
            cursor: pointer;
            min-width: 120px;
            transition: opacity 0.2s ease;
        }
        /* Modifier */
        
        .btn--size-l {
            padding: 16px 56px;
        }
        
        .btn--size-s {
            padding: 8px 32px;
        }
        
        .btn:hover {
            opacity: 0.8;
        }
        
        .btn+.btn {
            margin-left: 16px;
        }
        
        .btn--success {
            background-color: #71be34;
        }
        
        .btn--warn {
            background-color: #ffb702;
        }
        
        .btn--danger {
            background-color: #ff623d;
        }
        
        .btn--disabled {
            opacity: 0.5 !important;
            cursor: default;
        }
        /* ======= Toast message ======== */
        
        #toast {
            position: fixed;
            top: 32px;
            right: 32px;
            z-index: 999999;
        }
        
        .toast {
            display: flex;
            align-items: center;
            background-color: #fff;
            border-radius: 2px;
            padding: 20px 0;
            min-width: 400px;
            max-width: 450px;
            border-left: 4px solid;
            box-shadow: 0 5px 8px rgba(0, 0, 0, 0.08);
            transition: all linear 0.3s;
        }
        
        @keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translateX(calc(100% + 32px));
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
        
        @keyframes fadeOut {
            to {
                opacity: 0;
            }
        }
        
        .toast--success {
            border-color: #47d864;
        }
        
        .toast--success .toast__icon {
            color: #47d864;
        }
        
        .toast--info {
            border-color: #2f86eb;
        }
        
        .toast--info .toast__icon {
            color: #2f86eb;
        }
        
        .toast--warning {
            border-color: #ffc021;
        }
        
        .toast--warning .toast__icon {
            color: #ffc021;
        }
        
        .toast--error {
            border-color: #ff623d;
        }
        
        .toast--error .toast__icon {
            color: #ff623d;
        }
        
        .toast+.toast {
            margin-top: 24px;
        }
        
        .toast__icon {
            font-size: 24px;
        }
        
        .toast__icon,
        .toast__close {
            padding: 0 16px;
        }
        
        .toast__body {
            flex-grow: 1;
        }
        
        .toast__title {
            font-size: 16px;
            font-weight: 600;
            color: #333;
        }
        
        .toast__msg {
            font-size: 14px;
            color: #888;
            margin-top: 6px;
            line-height: 1.5;
        }
        
        .toast__close {
            font-size: 20px;
            color: rgba(0, 0, 0, 0.3);
            cursor: pointer;
        }
        .w-450 {
	width: 450px;
}
.vh-100 {
	min-height: 100vh;
}
.w-350 {
	width: 350px;
}
    </style>
    <div id="toast"></div>

    <?php include './Components/header.php'?>
    <?php
        include '../config2.php';
        $transaction_d_id=$_GET['transaction_d_id'];
        $transaction_id=$_GET['transaction_id'];
        $sql="select *
        from (`transaction` trans inner join `customer` cust on trans.CUST_ID=cust.CUST_ID) 
        INNER JOIN location lo on lo.LOCATION_ID=cust.LOCATION_ID where TRANS_ID='$transaction_id'";
        $list=mysqli_query($conn,$sql);
        $row=mysqli_fetch_assoc($list);
        //print_r($row);
        $subtotal=$row['GRANDTOTAL'];
        $addVAT=$row['GRANDTOTAL']*0.1;
        $total=$subtotal+$addVAT;
        //echo json_encode($row)
    ?>

    <main>
        <div class="container">
        
            <h1>Purchase history detail</h1>
            <div class="row">
                <div class="col-sm-3">
                    <div class="row">
                        <div class="col-sm-6">
                            <a href="purchase-history.php" class="btn-buy btn-sm mb-2">Back</a>
                        </div>
                        <div class="col-sm-6">
                            <a href="../PDF/index.php?transaction_d_id=<?php echo $transaction_d_id?>&transaction_id=<?php echo $transaction_id?>" class="btn-back btn-sm mb-2">Export</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6"></div>
                <div class="col-sm-3">
                    
                    Date:<?php echo $row['DATE']?>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-4">
                    Customer name:<?php echo $row['FIRST_NAME'].' '.$row['LAST_NAME']?>  <br>
                    Adress:<?php echo $row['PROVINCE'].' '.$row['CITY']?> <br>
                    Phone:<?php echo $row['PHONE_NUMBER']?>
                </div>
                <div class="col-sm-4"></div>
                <div class="col-sm-4">
                    Transaction ID:#<?php echo $transaction_id?>
                </div>
            </div>
            <div class="row">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Product Name</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Price</th>
                        <th scope="col">Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql="select * from `transaction_details` where TRANS_D_ID='$transaction_d_id'";
                        $list=mysqli_query($conn,$sql);
                        $i=0;
                        while($row=mysqli_fetch_assoc($list)){
                            $i++;
                            echo "
                                <tr>
                                    <td>".$i."</td>
                                    <td>".$row['PRODUCTS']."</td>
                                    <td>".$row['QTY']."</td>
                                    <td>".$row['PRICE']."</td>
                                    <td>".$row['QTY']*$row['PRICE']."</td>
                                </tr>
                            ";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="row">
                <div class="col-sm-7"></div>
                <div class="col-sm-4 py-1">
                    Payment methods: <br>&emsp;&emsp;&emsp;<b>COD</b>
                    <hr>
                    <table width="100%">
                        <tbody><tr>
                        <td class="font-weight-bold">Subtotal</td>
                        <td class="text-right">$ <?php echo $subtotal?></td>
                        </tr>
                        
                        
                        <tr>
                        <td class="font-weight-bold">Add VAT</td>
                        <td class="text-right">$<?php echo $addVAT ?></td>
                        </tr>
                        <tr>
                        <td class="font-weight-bold">Total</td>
                        <td class="font-weight-bold text-right text-primary"><b>$ <?php echo $total?></b></td>
                        </tr>
                    </tbody></table>
                </div>
                <div class="col-sm-1"></div>
            </div>
            
            
        
        </div>

    </main>

    <?php include 'Components/bot.php'?>