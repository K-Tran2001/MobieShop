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
        
        .modal-content {
            display: none;
        }
        .modal-content.active {
        display: block;
        }
    
    
    </style>
    <div id="toast"></div>

    <?php include './Components/header.php'?>
 

    <main>

        <!--
      - BANNER
    -->

        

            



        <!--
      - CATEGORY
    -->

        





        <!--
      - PRODUCT
    -->
     
        <div class="product-container">
            

            <div class="container-fluid"  >
                <div id="msg"></div>
                <script src="../js/msg.js"></script>   
                <script src="../js/jquery-3.3.1.min.js"></script>          
                <div class="row " >
                    
                    <div class="col-lg-9 col-sm-12">
                        <table class="table p-2">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">Product Name</th>
                                <th scope="col">Images</th>
                                <th scope="col">Quantily</th>
                                <th scope="col">Price</th>
                                <th scope="col">Total</th>
                                <th scope="col">Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                //session_start();
                                    include'../config2.php';
                                    $id=$_SESSION['user'][0]['CUST_ID'];
                                    //print_r($id);
                                    $sql="select * from `shopping` where cust_id=$id";//session user_id
                                    //echo $sql;//select * from `shopping` where cust_id=20
                                    $list=mysqli_query($conn,$sql);
                                    $i=0;
                                    $netOfVAT=0;
                                    if(mysqli_num_rows($list)>0){
                                        while($row = mysqli_fetch_assoc($list)){
                                            $i++;
                                            $netOfVAT=$netOfVAT+$row['price'];

                                ?>  
                                <tr>
                                    <td><?php echo $i ?></td>
                                    <td><?php echo $row['title']?></td>
                                    <td><img src="<?php echo $row['productImg']?>" style="width: 50px;height: 50px;" alt=""></td>
                                    <td><?php echo $row['number']?></td>
                                    <td><?php echo $row['price']?></td>
                                    <td><?php echo $row['price']*$row['number']?></td>
                                    <td><i class='bx bxs-trash-alt' style="font-size: 24px;color: var(--main-color);cursor: pointer;"
                                    id="<?php echo $row['id']?>" onclick="deleteItem(<?php echo $row['shopping_id']?>)"></i></td>
                                </tr>
                                <?php
                                        }
                                    }
                                    $total=$netOfVAT+$netOfVAT*0.1;
                                ?>

                            </tbody>
                        </table>
                    </div>
                    <div class="col-lg-3 col-sm-12 p-2 ">
          
                        Today's date is : <span  id="time" style="border: none;" value=""></span >  
          
                        <input type="hidden" name="date" value="2022-09-22 15:13 pm">
                        <?php
                            if($netOfVAT){
                        ?>
                        <div class="form-group row mb-2">

                            <div class="col-sm-5 text-left text-primary py-2">
                            <h6>
                                Net of VAT
                            </h6>
                            </div>
                            <div class="col-sm-7">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                <span class="input-group-text">USD</span>
                                </div>
                                <input type="text" class="form-control text-right " value="<?php echo $netOfVAT?>" readonly="" name="subtotal">
                            </div>
                            </div>

                        </div>
                        <div class="form-group row mb-2">

                            <div class="col-sm-5 text-left text-primary py-2">
                            <h6>
                                Add VAT
                            </h6>
                            </div>
                            <div class="col-sm-7">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                <span class="input-group-text">USD</span>
                                </div>
                                <input type="text" class="form-control text-right " value="<?php echo $netOfVAT*0.1 ?>" readonly="" name="subtotal">
                            </div>
                            </div>

                        </div>
                        <div class="form-group row mb-2">

                            <div class="col-sm-5 text-left text-primary py-2">
                            <h6 class="fw-bold">
                                Total
                            </h6>
                            </div>
                            <div class="col-sm-7">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                <span class="input-group-text">USD</span>
                                </div>
                                <input type="text" class="form-control text-right " value="<?php echo $total?>" readonly="" name="subtotal" id="total">
                            </div>
                            </div>

                        </div>
                        
                        <button class=" btn-buy " style="width: 100%;justify-content: center;" id="checkoutBtn">CHECKOUT</button>
                        
                        <?php
                            }
                        ?>       
                    
                    </div>
                    
                    
                    
                    
                    
                </div>
                <?php
                if($total){
                ?>
                <center>
                <div class="modal-content" id="checkoutBox">
                    <div class="modal-header" style="width: 100%;">
                        <h5 class="modal-title" id="exampleModalCenterTitle">SUMMARY</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" id="cancelCheckout">×</span>
                        </button>
                    </div>
                    <div class="modal-body" style="width: 100%;">
                        <div class="form-group row text-left mb-2">

                            <div class="col-sm-12 text-center">
                            <h3 class="py-0">
                                GRAND TOTAL
                            </h3>
                            <h3 class="font-weight-bold py-3 bg-light">
                                VND <?php echo $total ?>                    </h3>
                            </div>

                        </div>

                        <div class="col-sm-12 mb-2">
                            
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" >Full Name</span>
                                </div>
                                <input type="" class="form-control text-right" id="name" >
                            </div>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" >Address</span>
                                </div>
                                <input type="" class="form-control text-right" id="address">
                            </div>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" >Phone Number</span>
                                </div>
                                <input type="" class="form-control text-right" id="phone">
                            </div>
                            
                                
                                
                                
                            <div class="input-group mb-2 visually-hidden">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">STK</span>
                                </div>
                                <input class="form-control text-right" id="cardNumber" onkeypress="return isNumberKey(event)" type="text" name="cash" 
                                value=""    placeholder="ENTER CASH" required="">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer" style="width: 100%;">
                        <button type="submit" class="btn-back" id="pay">PROCEED TO PAYMENT</button>
                    </div>
                </div>
                </center>
                <?php
                    }
                ?>
                    
                
            </div>
            <script src="https://smtpjs.com/v3/smtp.js"></script>
            <script>
                        $(document).ready(()=>{
                            getDateTime();
                            $(document).on('click','#Update',function(){                              
                                updateDetails();
                            });
                            $(document).on('click','#checkout',function(){

                            })
                            
                            
                        })
                        let checkoutBtn = document.querySelector('#checkoutBtn');
                        let cancelCheckout = document.querySelector('#cancelCheckout');
                        let checkoutBox=document.querySelector('#checkoutBox');
                        checkoutBtn.onclick = ()=>{
                            checkoutBox.classList.add('active')
                        }

                        cancelCheckout.onclick = ()=>{
                            checkoutBox.classList.remove('active')
                        }
                        let pay = document.querySelector('#pay');
                        
                        
                        //console.log(money)
                        
                        pay.onclick = ()=>{
                            
                            sendMail();//delay....
                            showSuccessMsg('Thanh Cong','Thanh toan thanh cong '+<?php echo $total?>+' VND' ,'success')
                            showSuccessMsg('Thanh Cong','Dat hang thanh cong<br>Thong tin don hang duoc gui toi mail <tvkhoa_20th@student.agu.edu.vn>','info')
                            $.ajax({
                                url:"shopping-cart-func.php?type=cart&action=order",
                                type:"POST",
                                data: {
                                },
                                success:function(data,status){
                                    console.log(data);
                                },

                            });
                            setTimeout(() => {
                                deleteItemAll(); 
                            }, 2000);
                            setTimeout(()=>{window.location.href='history.php'},3000);
                            
                        }
                        // let order=document.querySelector('#Order');
                        // order.onclick= Order();
                        function sendMail(){
                            var name = document.querySelector('#name').value;
                            var address = document.querySelector('#address').value;
                            var phone = document.querySelector('#phone').value;
                            var total_price = document.querySelector('#total').value;
                            console.log(total_price,name);
                            $.ajax({
                                url:"send-mail.php",
                                type:"POST",
                                data: {
                                    //maHD 
                                    name:name,
                                    address:address,
                                    phone:phone,
                                    total:total_price,
                                },
                                success:function(){
                                    
                                },

                            })
                        }
                        function getDateTime(){
                            var d = new Date();
                            var time = d.getFullYear()+'-'+(1+d.getMonth())+"-"+d.getDay()+"    "+d.getHours()+":"+d.getMinutes();
                            document.querySelector('#time').innerHTML=time;
                        }
                        function returnHome(){
                            window.location.href='index.php';
                        }
                        function logout(){
                            window.location.href='logout-excute.php';
                        }
                        function uploadfile(){
                            //To save file with this name
                            var file_data = $('#avatar_update').prop('files')[0];    //Fetch the file
                            filename=file_data['name'];
                            console.log(filename);
                            var form_data = new FormData();
                            form_data.append("file",file_data);
                            form_data.append("filename",filename);

                            //Ajax to send file to upload
                            $.ajax({
                                url: "upload.php",                      //Server api to receive the file
                                        type: "POST",
                                        dataType: 'script',
                                        cache: false,
                                        contentType: false,
                                        processData: false,
                                        data: form_data,

                                    success:function(dat2){
                                        if(dat2==1) alert("Successful");
                                        else alert("Unable to Upload");
                                    }
                                });
                        }
                        function updateDetails(){
                            try{
                                var file_data = $('#avatar_update').prop('files')[0];    //Fetch the file
                                    filename=file_data['name'];

                                    var username_update=$('#username_update').val();
                                    var password_update=$('#password_update').val();
                                    var avatar_update=filename;
                                console.log(username_update,password_update,avatar_update);
                                $.post("test-func.php",{
                                    username_update:username_update,
                                    password_update:password_update,
                                    avatar_update:avatar_update
                                },function(data,status){
                                    
                                    console.log(data);
                                    //sconsole.log('OK')
                                    //uploadfile();
                                    
                                    //displayData();
                                    showSuccessMsg('Thanh Cong','Sua DL thanh cong','info')
                                    window.location.href='profile-edit.php';

                                });
                                // $.post("session.php",{
                                //     username_update:username_update,
                                //     password_update:password_update,
                                //     avatar_update:avatar_update
                                // },function(data,status){
                                //     window.location.href='profile-edit.php';

                                // });


                            }catch{

                                var username_update=$('#username_update').val();
                                var password_update=$('#password_update').val();
                                var avatar_update='';
                                console.log(username_update,password_update);
                                $.post("test-func.php",{
                                    username_update:username_update,
                                    password_update:password_update,
                                    avatar_update:avatar_update
                                },function(data,status){
                                    console.log(data);
                                    //console.log('OK')
                                    //displayData();
                                    showSuccessMsg('Thanh Cong','Sua DL thanh cong','info')
                                    window.location.href='profile-edit.php';


                                });
                                

                            }

                        }
                        function deleteItem(id){
                            if(confirm('Ban co thuc su muon xoa '+id)){
                                $.ajax({
                                    url: "shopping-cart-func.php?type=cart&action=delete",
                                    type: "post",
                                    data: {
                                        shopping_id: id,
                                    },
                                    success: function(data, status) {
                                        console.log(data);
                                        showSuccessMsg('Thanh Cong','Đã xóa sản phẩm ra khỏi danh sách mua','info')
                                        setTimeout(()=>{window.location.href='checkout.php';},1000)
                                    }

                                })

                                }
                        }
                        function deleteItemAll(){
                            $.ajax({
                                    url: "shopping-cart-func.php?type=cart&action=deleteAll",
                                    type: "post",
                                    data: {
                                    },
                                    success: function(data, status) {
                                        
                                    }

                                })

                        }
                    </script>
                
        </div>

       
            
            

        </div>

    <footer>

        <div class="footer-category">

            <div class="container" >

                <h2 class="footer-category-title">Brand directory</h2>

                <div class="footer-category-box">

                    <h3 class="category-box-title">Fashion :</h3>

                    <a href="#" class="footer-category-link">T-shirt</a>
                    <a href="#" class="footer-category-link">Shirts</a>
                    <a href="#" class="footer-category-link">shorts & jeans</a>
                    <a href="#" class="footer-category-link">jacket</a>
                    <a href="#" class="footer-category-link">dress & frock</a>
                    <a href="#" class="footer-category-link">innerwear</a>
                    <a href="#" class="footer-category-link">hosiery</a>

                </div>

                <div class="footer-category-box">
                    <h3 class="category-box-title">footwear :</h3>

                    <a href="#" class="footer-category-link">sport</a>
                    <a href="#" class="footer-category-link">formal</a>
                    <a href="#" class="footer-category-link">Boots</a>
                    <a href="#" class="footer-category-link">casual</a>
                    <a href="#" class="footer-category-link">cowboy shoes</a>
                    <a href="#" class="footer-category-link">safety shoes</a>
                    <a href="#" class="footer-category-link">Party wear shoes</a>
                    <a href="#" class="footer-category-link">Branded</a>
                    <a href="#" class="footer-category-link">Firstcopy</a>
                    <a href="#" class="footer-category-link">Long shoes</a>
                </div>

                <div class="footer-category-box">
                    <h3 class="category-box-title">jewellery :</h3>

                    <a href="#" class="footer-category-link">Necklace</a>
                    <a href="#" class="footer-category-link">Earrings</a>
                    <a href="#" class="footer-category-link">Couple rings</a>
                    <a href="#" class="footer-category-link">Pendants</a>
                    <a href="#" class="footer-category-link">Crystal</a>
                    <a href="#" class="footer-category-link">Bangles</a>
                    <a href="#" class="footer-category-link">bracelets</a>
                    <a href="#" class="footer-category-link">nosepin</a>
                    <a href="#" class="footer-category-link">chain</a>
                    <a href="#" class="footer-category-link">Earrings</a>
                    <a href="#" class="footer-category-link">Couple rings</a>
                </div>

                <div class="footer-category-box">
                    <h3 class="category-box-title">cosmetics :</h3>

                    <a href="#" class="footer-category-link">Shampoo</a>
                    <a href="#" class="footer-category-link">Bodywash</a>
                    <a href="#" class="footer-category-link">Facewash</a>
                    <a href="#" class="footer-category-link">makeup kit</a>
                    <a href="#" class="footer-category-link">liner</a>
                    <a href="#" class="footer-category-link">lipstick</a>
                    <a href="#" class="footer-category-link">prefume</a>
                    <a href="#" class="footer-category-link">Body soap</a>
                    <a href="#" class="footer-category-link">scrub</a>
                    <a href="#" class="footer-category-link">hair gel</a>
                    <a href="#" class="footer-category-link">hair colors</a>
                    <a href="#" class="footer-category-link">hair dye</a>
                    <a href="#" class="footer-category-link">sunscreen</a>
                    <a href="#" class="footer-category-link">skin loson</a>
                    <a href="#" class="footer-category-link">liner</a>
                    <a href="#" class="footer-category-link">lipstick</a>
                </div>

            </div>

        </div>

        <div class="footer-nav">

            <div class="container">

                <ul class="footer-nav-list">

                    <li class="footer-nav-item">
                        <h2 class="nav-title">Popular Categories</h2>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Fashion</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Electronic</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Cosmetic</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Health</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Watches</a>
                    </li>

                </ul>

                <ul class="footer-nav-list">

                    <li class="footer-nav-item">
                        <h2 class="nav-title">Products</h2>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Prices drop</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">New products</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Best sales</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Contact us</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Sitemap</a>
                    </li>

                </ul>

                <ul class="footer-nav-list">

                    <li class="footer-nav-item">
                        <h2 class="nav-title">Our Company</h2>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Delivery</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Legal Notice</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Terms and conditions</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">About us</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Secure payment</a>
                    </li>

                </ul>

                <ul class="footer-nav-list">

                    <li class="footer-nav-item">
                        <h2 class="nav-title">Services</h2>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Prices drop</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">New products</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Best sales</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Contact us</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Sitemap</a>
                    </li>

                </ul>

                <ul class="footer-nav-list">

                    <li class="footer-nav-item">
                        <h2 class="nav-title">Contact</h2>
                    </li>

                    <li class="footer-nav-item flex">
                        <div class="icon-box">
                            <ion-icon name="location-outline"></ion-icon>
                        </div>

                        <address class="content">
              419 State 414 Rte
              Beaver Dams, New York(NY), 14812, USA
            </address>
                    </li>

                    <li class="footer-nav-item flex">
                        <div class="icon-box">
                            <ion-icon name="call-outline"></ion-icon>
                        </div>

                        <a href="tel:+607936-8058" class="footer-nav-link">(607) 936-8058</a>
                    </li>

                    <li class="footer-nav-item flex">
                        <div class="icon-box">
                            <ion-icon name="mail-outline"></ion-icon>
                        </div>

                        <a href="mailto:example@gmail.com" class="footer-nav-link">example@gmail.com</a>
                    </li>

                </ul>

                <ul class="footer-nav-list">

                    <li class="footer-nav-item">
                        <h2 class="nav-title">Follow Us</h2>
                    </li>

                    <li>
                        <ul class="social-link">

                            <li class="footer-nav-item">
                                <a href="#" class="footer-nav-link">
                                    <ion-icon name="logo-facebook"></ion-icon>
                                </a>
                            </li>

                            <li class="footer-nav-item">
                                <a href="#" class="footer-nav-link">
                                    <ion-icon name="logo-twitter"></ion-icon>
                                </a>
                            </li>

                            <li class="footer-nav-item">
                                <a href="#" class="footer-nav-link">
                                    <ion-icon name="logo-linkedin"></ion-icon>
                                </a>
                            </li>

                            <li class="footer-nav-item">
                                <a href="#" class="footer-nav-link">
                                    <ion-icon name="logo-instagram"></ion-icon>
                                </a>
                            </li>

                        </ul>
                    </li>

                </ul>

            </div>

        </div>

        <div class="footer-bottom">

            <div class="container">

                <img src="./assets/images/payment.png" alt="payment method" class="payment-img">

                <p class="copyright">
                    Copyright &copy; <a href="#">Anon</a> all rights reserved.
                </p>

            </div>

        </div>

    </footer>






    <!--
    - custom js link
  -->
    <script src="./assets/js/script.js"></script>
    <!-- <script src="../js/jquery-3.3.1.min.js"></script> -->
    <script src="./view.js"></script>
    

    <!--
    - ionicon link
  -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    
    <script src="./shopping-cart.js"></script>
    
    

    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    
    
    
                            

                           

</body>

</html>