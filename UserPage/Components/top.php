
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
    <link rel="shortcut icon" href="./img/logo-K-5.jpg" type="image/x-icon">

    <link rel="stylesheet" href="./style.css">
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

   
    
    
</head>

<body>

    
    <!--card shopping-->

    <div class="overlay" data-overlay></div>

    <!--
    - MODAL
  -->

    <div class="modal" data-modal>

        <div class="modal-close-overlay" data-modal-overlay></div>

        <div class="modal-content">

            <button class="modal-close-btn" data-modal-close>
        <ion-icon name="close-outline"></ion-icon>
      </button>

            <div class="newsletter-img">
                <img src="./assets/images/newsletter.png" alt="subscribe newsletter" width="400" height="400">
            </div>

            <div class="newsletter">

                <form action="#">

                    <div class="newsletter-header">

                        <h3 class="newsletter-title">Subscribe Newsletter.</h3>

                        <p class="newsletter-desc">
                            Subscribe the <b>K-shop</b> to get latest products and discount update.
                        </p>

                    </div>

                    <input type="email" name="email" class="email-field" placeholder="Email Address" required>

                    <button type="submit" class="btn-newsletter">Subscribe</button>

                </form>

            </div>

        </div>

    </div>





    <!--
    - NOTIFICATION TOAST
  -->

    <div class="notification-toast" data-toast>

        <button class="toast-close-btn" data-toast-close>
      <ion-icon name="close-outline"></ion-icon>
    </button>

        <div class="toast-banner">
            <img src="./assets/images/products/jewellery-1.jpg" alt="Rose Gold Earrings" width="80" height="70">
        </div>

        <div class="toast-detail">

            <p class="toast-message">
                Someone in new just bought
            </p>

            <p class="toast-title">
                Rose Gold Earrings
            </p>

            <p class="toast-meta">
                <time datetime="PT2M">2 Minutes</time> ago
            </p>

        </div>

    </div>
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







    <!--
    - HEADER
  -->

    <?php include './Components/header.php'?>
    <nav class="desktop-navigation-menu ">

    <div class="container">
        <!--1-->
        <ul class="desktop-menu-category-list">

<li class="menu-category">
    <a href="#" class="menu-title">Home</a>
</li>
<!--Bo cai home ra  dua cac menu-category vo(dropdown)-->

<?php include_once './Components/menu-category.php'?>



<li class="menu-category">
    <a href="#" class="menu-title">SmartPhone</a>

    <ul class="dropdown-list">

        <li class="dropdown-item">
            <a href="#">Iphone 13 Pro Max</a>
        </li>

        <li class="dropdown-item">
            <a href="#">Galaxy S22 Ultra</a>
        </li>

        <li class="dropdown-item">
            <a href="#">Galaxy Z Flip</a>
        </li>

        <li class="dropdown-item">
            <a href="#">Google Pixel</a>
        </li>

    </ul>
</li>

<li class="menu-category">
    <a href="#" class="menu-title">Phone Accessories</a>

    <ul class="dropdown-list">

        <li class="dropdown-item">
            <a href="#">Airport</a>
        </li>

        <li class="dropdown-item">
            <a href="#">Phone Charger</a>
        </li>

        <li class="dropdown-item">
            <a href="#">Headphone</a>
        </li>

    

    </ul>
</li>

<li class="menu-category">
    <a href="#" class="menu-title">Blog</a>
</li>

<li class="menu-category">
    <a href="#" class="menu-title">Hot Offers</a>
</li>

</ul>        
        <!--1-->

    </div>

</nav>