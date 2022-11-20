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

    <!--
    - google font link
  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="./shopping-cart.js">

    <!--JQuery-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    
    <style>
                :root{
            --primary: #2175f5;
        }

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        
        .img-pro{
            width: 30vw;
            height: 70vh;
        }

        .container{      
            
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }

        .card{
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
        }

        .shoeBackground{
            position: relative;
            width: 50%;
            height: 475px;
            box-shadow: -15px 0 35px rgba(0, 0, 0, 0.1),
            0 -15px 35px rgba(0, 0, 0, 0.1),
            0 15px 35px rgba(0, 0, 0, 0.1);
            transition: .5s;
        }

        .gradients{
            position: absolute;
            width: 100%;
            height: 100%;
            left: 0;
            top: 0;
        }

        .gradient{
            position: absolute;
            width: 100%;
            height: 100%;
            left: 0;
            top: 0;
            z-index: -2;
        }

        .first{
            z-index: 0;
            animation: 1s width ease;
        }

        @keyframes width{
            from{
                width: 0%;
            }
            to{
                width: 100%;
            }
        }

        .second{
            z-index: -1;
        }

        .gradient[color="blue"]{
            background-image: linear-gradient(45deg, #0136af, #22abfa);
        }

        .gradient[color="red"]{
            background-image: linear-gradient(45deg, #d62926, #ee625f);
        }

        .gradient[color="green"]{
            background-image: linear-gradient(45deg, #11998e, #1ce669);
        }

        .gradient[color="orange"]{
            background-image: linear-gradient(45deg, #fc4a1a, #f7b733);
        }

        .gradient[color="black"]{
            background-image: linear-gradient(45deg, #111, #666);
        }

        .logo{
            position: absolute;
            width: 100px;
            left: 20px;
            top: 20px;
        }

        .share{
            position: absolute;
            top: 15px;
            right: 15px;
            background-color: #fff;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            text-align: center;
            font-size: 1.3rem;
            text-decoration: none;
            color: var(--primary);
            transition: .5s;
        }

        .share:hover{
            transform: scale(1.1);
        }

        .share i{
            line-height: 50px;
        }

        .nike{
            position: absolute;
            top: 85px;
            left: 15px;
            font-size: 5rem;
            text-transform: uppercase;
            line-height: .9;
            color: #fff;
            opacity: .1;
        }

        .shoe{
            position: absolute;
            width: 140%;
            opacity: 0;
            bottom: 0;
            right: 0;
            transform: rotate(-20deg);
            transition: .5s;
        }

        .shoe.show{
            opacity: 1;
        }

        .info{
            width: 50%;
            background-color: #fff;
            z-index: 1;
            padding: 35px 40px;
            box-shadow: 15px 0 35px rgba(0, 0, 0, 0.1),
            0 -15px 35px rgba(0, 0, 0, 0.1),
            0 15px 35px rgba(0, 0, 0, 0.1);
        }

        .shoeName{
            padding: 0 0 10px 0;
        }

        .shoeName div{
            display: flex;
            align-items: center;
        }

        .shoeName div .big{
            margin-right: 10px;
            font-size: 2rem;
            color: #333;
            line-height: 1;
        }

        .shoeName div .new{
            background-color: var(--primary);
            text-transform: uppercase;
            color: #fff;
            padding: 3px 10px;
            border-radius: 5px;
            transition: .5s;
        }

        .shoeName .small{
            font-weight: 500;
            color: #444;
            margin-top: 3px;
            text-transform: capitalize;
        }

        .shoeName, .description, .color-container, .size-container{
            border-bottom: 1px solid #dadada;
        }

        .description{
            padding: 10px 0;
        }

        .title{
            color: #3a3a3a;
            font-weight: 600;
            font-size: 1.2rem;
            text-transform: uppercase;
        }

        .text{
            color: #555;
            font-size: 17px;
        }

        .color-container{
            padding: 10px 0;
        }

        .colors{
            padding: 8px 0;
            display: flex;
            align-items: center;
        }

        .color{
            width: 25px;
            height: 25px;
            border-radius: 50%;
            margin: 0 10px;
            border: 5px solid;
            cursor: pointer;
            transition: .5s;
        }

        .color[color="blue"]{
            background-color: #2175f5;
            border-color: #2175f5;
        }

        .color[color="red"]{
            background-color: #f84848;
            border-color: #f84848;
        }

        .color[color="green"]{
            background-color: #29b864;
            border-color: #29b864;
        }

        .color[color="orange"]{
            background-color: #ff5521;
            border-color: #ff5521;
        }

        .color[color="black"]{
            background-color: #444;
            border-color: #444;
        }

        .color.active{
            border-color: #fff;
            box-shadow: 0 0 10px .5px rgba(0, 0, 0, 0.2);
            transform: scale(1.1);
        }

        .size-container{
            padding: 10px 0;
            margin-bottom: 10px;
        }

        .sizes{
            padding: 8px 0;
            display: flex;
            align-items: center;
        }

        .size{
            width: 40px;
            height: 40px;
            border-radius: 6px;
            background-color: #eee;
            margin: 0 10px;
            text-align: center;
            line-height: 40px;
            font-size: 1.1rem;
            font-weight: 500;
            cursor: pointer;
            transition: .3s;
        }

        .size.active{
            background-color: var(--primary);
            color: #fff;
            transition: .5s;
        }

        .buy-price{
            padding-top: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .price{
            color: #333;
            display: flex;
            align-items: flex-start;
        }

        .price h1{
            font-size: 2.1rem;
            font-weight: 600;
            line-height: 1;
        }

        .price i{
            font-size: 1.4rem;
            margin-right: 1px;
        }

        .buy{
            padding: .7rem 1rem;
            background-color: var(--primary);
            text-decoration: none;
            color: #fff;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: 500;
            font-size: 1.1rem;
            transition: .5s;
        }

        .buy:hover{
            transform: scale(1.1);
        }

        .buy i{
            margin-right: 2px;
        }

        @media (max-width: 1070px){
            .shoe{
                width: 135%;
            }
        }

        @media (max-width: 1000px){
            .card{
                flex-direction: column;
                width: 100%;
                box-shadow: 0 0 35px 1px rgba(0, 0, 0, 0.2);
            }
            
            .card > div{
                width: 100%;
                box-shadow: none;
            }

            .shoe{
                width: 100%;
                transform: rotate(-5deg) translateY(-50%);
                top: 55%;
                right: 2%;
            }

            .nike{
                top: 20%;
                left: 5%;
            }
        }

        @media (max-width: 600px){
            .share{
                width: 40px;
                height: 40px;
            }

            .share i {
                font-size: 1rem;
                line-height: 40px;
            }

            .logo{
                width: 70px;
            }
        }

        @media (max-width: 490px){
            .nike{
                font-size: 7rem;
            }

            .shoeName div .big{
                font-size: 1.3rem;
            }

            .small{
                font-size: 1rem;
            }

            .new{
                padding: 2px 6px;
                font-size: .9rem;
            }

            .title{
                font-size: .9rem;
            }

            .text{
                font-size: .8rem;
            }

            .buy{
                padding: .5rem .8rem;
                font-size: .8rem;
            }

            .price h1{
                font-size: 1.5rem;
            }

            .price i{
                font-size: .9rem;
            }

            .size{
                width: 30px;
                height: 30px;
                margin: 0 8px;
                font-size: .9rem;
                line-height: 30px;
            }

            .color{
                margin: 0 6px;
                width: 0 20px;
                width: 20px;
                height: 20px;
                border-width: 4px;
            }

            .share{
                width: 35px;
                height: 35px;
                top: 10px;
                right: 10px;
            }

            .share i{
                font-size: .8rem;
                line-height: 35px;
            }

            .logo{
                width: 60px;
                top: 10px;
                left: 10px;
            }

            .info{
                padding: 20px;
            }
        }

        @media (max-width: 400px){
            .buy i{
                display: none;
            }

            .container{
                padding: 20px;
            }
        }
        .cmt-box{
            background-color: #444;
            padding: 0 60px;
        }
    </style>
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
            <a href="index.php"><button style="padding: 10px 30px; background-color: gray;border-radius: 2px; ">Return</button></a>

            <div class="container">
                <!-- <div class="sidebar  has-scrollbar" data-mobile-menu>

                    <div class="sidebar-category">

                       <h1>Element</h1>

                    </div>

                    <div class="product-showcase">

                        <h1>Element</h1>

                    </div>

                </div>
                <div class="product-box">             

                    <h1>View + Binh luan</h1>
                </div> -->

        
                <?php
                    include '../config2.php';
                    if(isset($_GET['id']  )){
                        $accountid=$_GET['id'];
                        $sql="select * from `product` p inner join `category` c on p.CATEGORY_ID = c.CATEGORY_ID where `PRODUCT_ID`='$accountid'";
                        
                        $ds=mysqli_query($conn,$sql);
                        $response=array();
                        while($dong=mysqli_fetch_assoc($ds)){
                            
                
                
                ?>    
        
                <div class="card" >
                    <div class="shoeBackground">
                        <div class="gradients">
                            <div class="gradient second" color="blue"></div>
                            <div class="gradient" color="red"></div>
                            <div class="gradient" color="green"></div>
                            <div class="gradient" color="orange"></div>
                            <div class="gradient" color="black"></div>
                        </div>
                        <h1 class="nike"><?php echo $dong['NAME']?></h1>
                        <img src="img/logo.png" alt="" class="logo">
                        <a href="#" class="share"><i class="fas fa-share-alt"></i></a>

                        <!-- <img src="img/blue.png" alt="" class="shoe show" color="blue">
                        <img src="img/red.png" alt="" class="shoe" color="red">
                        <img src="img/green.png" alt="" class="shoe" color="green">
                        <img src="img/orange.png" alt="" class="shoe" color="orange">
                        <img src="img/black.png" alt="" class="shoe" color="black"> -->
                        <img  src="img/<?php echo $dong['IMG']?>" alt="" class="product-img-view shoe img-pro show" color="blue">
                        <img  src="img/<?php echo $dong['IMG']?>" alt="" class="product-img-view shoe img-pro" color="red">
                        <img  src="img/<?php echo $dong['IMG']?>" alt="" class="product-img-view shoe img-pro" color="green">
                        <img  src="img/<?php echo $dong['IMG']?>" alt="" class="product-img-view shoe img-pro" color="orange">
                        <img  src="img/<?php echo $dong['IMG']?>" alt="" class="product-img-view shoe img-pro" color="black">

                    </div>
                    <div class="info">
                        <div class="shoeName">
                            <div>
                                <h1 class="big" ><?php echo $dong['NAME']?></h1>
                                <span class="new">new</span>
                            </div>
                            <h3 class="small"><?php echo $dong['CNAME']?></h3>
                        </div>
                        <div class="description">
                            <h3 class="title">Product Info</h3>
                            <p class="text"><?php echo $dong['DESCRIPTION']?>.</p>
                        </div>
                        <div class="color-container">
                            <h3 class="title">Color</h3>
                            <div class="colors">
                                <span class="color active" primary="#2175f5" color="blue"></span>
                                <span class="color" primary="#f84848" color="red"></span>
                                <span class="color" primary="#29b864" color="green"></span>
                                <span class="color" primary="#ff5521" color="orange"></span>
                                <span class="color" primary="#444" color="black"></span>
                            </div>
                        </div>
                        <div class="size-container">
                            <h3 class="title">size</h3>
                            <div class="sizes">
                                <span class="size">7</span>
                                <span class="size">8</span>
                                <span class="size active">9</span>
                                <span class="size">10</span>
                                <span class="size">11</span>
                            </div>
                        </div>
                        <div class="buy-price">
                            <!-- <a href="#" class="buy"><i class="fas fa-shopping-cart"></i>Add to card</a> -->
                            <!--id, title, price, productImg-->
                            <button class ="buy" onclick="addCart(<?php echo $dong['PRODUCT_ID']?>,
                                                                    '<?php echo $dong['NAME']?>',
                                                                    '<?php echo $dong['PRICE']?>')"><i class="fas fa-shopping-cart"></i>Add to card</button>
                            <div class="price">
                                <i class="fas fa-dollar-sign"></i>
                                <h1><?php echo $dong['PRICE']?> $</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                        }
                    }
                
                ?>   
            <script >
                const sizes = document.querySelectorAll('.size');
                const colors = document.querySelectorAll('.color');
                const shoes = document.querySelectorAll('.shoe');
                const gradients = document.querySelectorAll('.gradient');
                const shoeBg = document.querySelector('.shoeBackground');

                let prevColor = "blue";
                let animationEnd = true;

                function changeSize(){
                    sizes.forEach(size => size.classList.remove('active'));
                    this.classList.add('active');
                }

                function changeColor(){
                    if(!animationEnd) return;
                    let primary = this.getAttribute('primary');
                    let color = this.getAttribute('color');
                    let shoe = document.querySelector(`.shoe[color="${color}"]`);
                    let gradient = document.querySelector(`.gradient[color="${color}"]`);
                    let prevGradient = document.querySelector(`.gradient[color="${prevColor}"]`);

                    if(color == prevColor) return;

                    colors.forEach(c => c.classList.remove('active'));
                    this.classList.add('active');

                    document.documentElement.style.setProperty('--primary', primary);
                    
                    shoes.forEach(s => s.classList.remove('show'));
                    shoe.classList.add('show');

                    gradients.forEach(g => g.classList.remove('first', 'second'));
                    gradient.classList.add('first');
                    prevGradient.classList.add('second');

                    prevColor = color;
                    animationEnd = false;

                    gradient.addEventListener('animationend', () => {
                        animationEnd = true;
                    })
                }

                sizes.forEach(size => size.addEventListener('click', changeSize));
                colors.forEach(c => c.addEventListener('click', changeColor));

                let x = window.matchMedia("(max-width: 1000px)");

                function changeHeight(){
                    if(x.matches){
                        let shoeHeight = shoes[0].offsetHeight;
                        shoeBg.style.height = `${shoeHeight * 0.9}px`;
                    }
                    else{
                        shoeBg.style.height = "475px";
                    }
                }

                changeHeight();

                window.addEventListener('resize', changeHeight);
                function addCart(id, title, price) {
                    ///// Lấy full link img
                    var productImg = document.getElementsByClassName('product-img-view')[0].src;
                    console.log(productImg);
                    $.ajax({
                        url: "shopping-cart-func.php?type=cart&action=getdataById",
                        type: "post",
                        data: {
                            id: id,
                        },
                        success: function (data, status) {
                            console.log(data);
                            if (data == 1) { //ton tai
                                showSuccessToast('Error', title + ' already exists in Your ShoppingCart', 'error');

                            } else if (data == 0) {
                                addProductToCart2(id, title, price, productImg); //=> them 1 cai id de xoa ok hon

                                addProductToCart_db2(id, title, price, productImg);
                                updateTotal();
                                showSuccessToast('Success', title + ' has just been added to Your ShppingCart', 'success');
                                displayCart();
                            }
                        },
                    });
                    // addProductToCart2(id, title, price, productImg);
                    // addProductToCart_db2(id, title, price, productImg);
                }
                function addProductToCart2(id, title, price, productImg) {
                    console.log(id + title + price + productImg);
                    count_cart_number++;
                    count_cart.innerText = count_cart_number;

                    var cartShopBox = document.createElement('div')
                    cartShopBox.classList.add('cart-box')
                    var cartItems = document.getElementsByClassName('cart-content')[0];
                    var cartItemsNames = cartItems.getElementsByClassName('cart-product-title');
                    for (var i = 0; i < cartItemsNames.length; i++) {
                        if (cartItemsNames[i].innerText == 'title') {
                            alert('you have already add this item to cart')
                            return;
                        }
                    }

                    var cartBoxContent = `
                            <img src="${productImg}" alt="" class="cart-img">
                            <div class="detail-box">
                                <div class="cart-product-id" style="display: none;">${id}</div>
                                <div class="cart-product-title">${title}</div>
                                <div class="cart-price">${price}</div>
                                <input type="number" class="cart-quantity" value="1">
                            </div>
                            <!---remove-->
                            <i class='bx bxs-trash-alt cart-remove'></i>

                    `
                    cartShopBox.innerHTML = cartBoxContent;
                    cartItems.append(cartShopBox);
                    cartShopBox.getElementsByClassName('cart-remove')[0].addEventListener('click', removeCartItem);
                    cartShopBox.getElementsByClassName('cart-quantity')[0].addEventListener('change', quantityChanged);

                }
                function addProductToCart_db2(id, title, price, productImg) {
                    console.log(id); console.log("-"); console.log(title); console.log("-");
                    console.log(price); console.log("-"); console.log(productImg); console.log("-")
                    $.ajax({
                        url: "shopping-cart-func.php?type=cart&action=insert",
                        type: "post",
                        data: {
                            id: id,
                            title: title,
                            price: price, //co $ no fail
                            productImg: productImg,
                            number:1

                        },
                        success: function (data, status) {

                            console.log(data);

                        }

                    })

                }
            </script> 

            </div>
            
            <div class="container">
                <div class="product-main">
                <h2 class="title">Related Products</h2>
                            

                    <div class="product-grid">

                        <?php
                            //include_once'../UserPage/Components/config.php';
                            //include '../config.php';
                            $sql='select * from `product` p inner join `category` c on p.CATEGORY_ID = c.CATEGORY_ID limit 4';
                            $ds=mysqli_query($conn,$sql);
                            $count=0;
                            if(mysqli_num_rows($ds)){
                                while($dong = mysqli_fetch_assoc($ds)){
                                    


                        ?>
                            <div class="showcase">

                                <div class="showcase-banner">
                                    

                                    <img src="img/<?php echo $dong['IMG']?>" alt="Mens Winter Leathers Jackets" width="200" height="300" class="product-img default">
                                    <img src="img/<?php echo $dong['IMG']?>" alt="Mens Winter Leathers Jackets" width="200" height="300" class="product-img hover">

                                    <p class="showcase-badge">15%</p>

                                    <div class="showcase-actions">

                                        <button class="btn-action">
                                            <ion-icon name="heart-outline" class="add-cart-heart"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="eye-outline" class="view-detail"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="repeat-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="bag-add-outline" class="add-cart"></ion-icon>
                                        </button>

                                    </div>

                                </div>

                                <div class="showcase-content">
                                    
                                    <a href="#">
                                    <h5 class="product-id" style="display: none;"  ><?php echo $dong['PRODUCT_ID']?></h5>
                                    </a>

                                    <a href="#" class="showcase-category"><?php echo $dong['CNAME']?></a>

                                    <a href="#">
                                        <h3 class="showcase-title product-title"><?php echo $dong['NAME']?></h3>
                                    </a>

                                    <div class="showcase-rating">
                                        <?php
                                            $star=3;//$dong['chatLuong'];
                                        
                                            for( $i=0;$i < $star-1;$i++){
                                                echo ' <ion-icon name="star"></ion-icon>';
                                            }
                                        
                                        
                                        ?>
                                        <ion-icon name="star"></ion-icon>
                                        
                                    </div>

                                    <div class="price-box">
                                        <p class="price">$<?php echo $dong['PRICE']?></p>
                                        <del>$<?php echo $dong['PRICE']+50?></del>
                                    </div>

                                </div>

                            </div>

                        <?php

                                }
                            }
                        ?>
                        
                        

                    </div>

                </div>
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