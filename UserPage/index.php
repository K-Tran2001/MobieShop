<?php 
    session_start();
    include '../config2.php';
?>
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

        <ul class="desktop-menu-category-list">

            <li class="menu-category">
                <a href="#" class="menu-title">Home</a>
            </li>
            <!--Bo cai home ra  dua cac menu-category vo(dropdown)-->

            <?php include_once './Components/menu-category.php'?>

            <li class="menu-category">
                <a href="#" class="menu-title">Men's</a>

                <ul class="dropdown-list">

                    <li class="dropdown-item">
                        <a href="#">Shirt</a>
                    </li>

                    <li class="dropdown-item">
                        <a href="#">Shorts & Jeans</a>
                    </li>

                    <li class="dropdown-item">
                        <a href="#">Safety Shoes</a>
                    </li>

                    <li class="dropdown-item">
                        <a href="#">Wallet</a>
                    </li>

                </ul>
            </li>

            <li class="menu-category">
                <a href="#" class="menu-title">Women's</a>

                <ul class="dropdown-list">

                    <li class="dropdown-item">
                        <a href="#">Dress & Frock</a>
                    </li>

                    <li class="dropdown-item">
                        <a href="#">Earrings</a>
                    </li>

                    <li class="dropdown-item">
                        <a href="#">Necklace</a>
                    </li>

                    <li class="dropdown-item">
                        <a href="#">Makeup Kit</a>
                    </li>

                </ul>
            </li>

            <li class="menu-category">
                <a href="#" class="menu-title">Jewelry</a>

                <ul class="dropdown-list">

                    <li class="dropdown-item">
                        <a href="#">Earrings</a>
                    </li>

                    <li class="dropdown-item">
                        <a href="#">Couple Rings</a>
                    </li>

                    <li class="dropdown-item">
                        <a href="#">Necklace</a>
                    </li>

                    <li class="dropdown-item">
                        <a href="#">Bracelets</a>
                    </li>

                </ul>
            </li>

            <li class="menu-category">
                <a href="#" class="menu-title">Perfume</a>

                <ul class="dropdown-list">

                    <li class="dropdown-item">
                        <a href="#">Clothes Perfume</a>
                    </li>

                    <li class="dropdown-item">
                        <a href="#">Deodorant</a>
                    </li>

                    <li class="dropdown-item">
                        <a href="#">Flower Fragrance</a>
                    </li>

                    <li class="dropdown-item">
                        <a href="#">Air Freshener</a>
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

    </div>

</nav>





    <!--
    - MAIN
  -->

    <main>

        <!--
      - BANNER
    -->

        

    <div class="banner">

        <div class="container">

            <div class="slider-container has-scrollbar">
                <?php include './Components/slider-item.php' ?>;
                <?php
                    $sql="SELECT * FROM `product` ORDER by BUY_NUMBER DESC LIMIT 3";
                    $list=mysqli_query($conn,$sql);
                    while($row=mysqli_fetch_assoc($list)){
                ?>
                
                <div class="slider-item">

                    <img src="./img/<?php echo $row['IMG']?>" alt="new fashion summer sale" class="banner-img">

                    <div class="banner-content">

                        <p class="banner-subtitle">Sale Offer</p>

                        <h2 class="banner-title"><?php echo $row['NAME']?></h2>

                        <p class="banner-text">
                            starting at &dollar; <b>29</b>.99
                        </p>

                        <a href="#" class="banner-btn">Shop now</a>

                    </div>

                </div>
                <?php
                        }
                ?>
            </div>

        </div>

    </div>
        <!--
      - CATEGORY
    -->

        <div class="category">

            <div class="container">

                <div class="category-item-container has-scrollbar">

                    <?php include './Components/category-item.php'?>
                    <?php include './Components/category-item.php'?>
                    
                
                </div>

            </div>

        </div>





        <!--
      - PRODUCT
    -->

        <div class="product-container">

            <div class="container">


                <!--
          - SIDEBAR
        -->

                <div class="sidebar  has-scrollbar" data-mobile-menu>

                    <div class="sidebar-category">

                        <div class="sidebar-top">
                            <h2 class="sidebar-title">Category</h2>

                            <button class="sidebar-close-btn" data-mobile-menu-close-btn>
                                <ion-icon name="close-outline"></ion-icon>
                            </button>
                        </div>

                        <ul class="sidebar-menu-category-list">
                            <!--Nhung code-->
                            <?php
                                $sql="select CNAME,CATEGORY_ID from `category`";
                                $list=mysqli_query($conn,$sql);
                                while($row=mysqli_fetch_assoc($list)){
                                    $category_id=$row['CATEGORY_ID'];
                                
                            ?>
                                <li class="sidebar-menu-category">

                                    <button class="sidebar-accordion-menu" data-accordion-btn>

                                        <div class="menu-title-flex">
                                            <img src="./assets/images/icons/quotes.svg" alt="clothes" width="20" height="20"
                                            class="menu-title-img">

                                            <p class="menu-title"><?php echo $row['CNAME']?></p>
                                        </div>

                                        <div>
                                            <ion-icon name="add-outline" class="add-icon"></ion-icon>
                                            <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                                        </div>

                                    </button>
                                    <ul class="sidebar-submenu-category-list" data-accordion>
                                        <?php
                                            $sql="select * from product where CATEGORY_ID='$category_id'";
                                            $data=mysqli_query($conn,$sql);
                                            if(mysqli_num_rows($data)){
                                                while($r=mysqli_fetch_assoc($data)){
                                        ?>
                                        <li class="sidebar-submenu-category">
                                            <a href="view.php?id=<?php echo $r['PRODUCT_ID']?>" class="sidebar-submenu-title">
                                                <p class="product-name"><?php echo $r['NAME']?></p>
                                                <data value="" class="stock" title="Available Stock"><?php echo $r['QTY_STOCK']?></data>
                                            </a>
                                        </li>
                                        <?php
                                            }
                                        }
                                        ?>
                                        
                                    </ul>

                                </li>

                            <!--Nhung code-->
                            <?php
                            }
                            ?>
                                
                            
                            

                        </ul>

                    </div>

                    <div class="product-showcase">

                        <h3 class="showcase-heading">best sellers</h3>

                        <div class="showcase-wrapper">

                            <div class="showcase-container">
                                <!--Nhung code SELECT * FROM `product` ORDER by BUY_NUMBER DESC LIMIT 5-->
                                <?php
                                    $sql="SELECT * FROM `product` ORDER by BUY_NUMBER DESC LIMIT 5";
                                    $list=mysqli_query($conn,$sql);
                                    while($row=mysqli_fetch_assoc($list)){
                                    
                                ?>
                                <div class="showcase">

                                    <a href="#" class="showcase-img-box">
                                        <img src="./img/<?php echo $row['IMG']?>" alt="baby fabric shoes" width="75" height="75" class="showcase-img">
                                    </a>

                                    <div class="showcase-content">

                                        <a href="#">
                                            <h4 class="showcase-title"><?php echo $row['NAME']?></h4>
                                        </a>

                                        <div class="showcase-rating">
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                        </div>

                                        <div class="price-box">
                                            <del><?php echo $row['PRICE']+10?></del>
                                            <p class="price"><?php echo $row['PRICE']?></p>
                                        </div>

                                    </div>

                                </div>

                                <?php
                                    }
                                ?>


                                <!--Nhung code-->
                                

                            </div>

                        </div>

                    </div>

                </div>



                <div class="product-box">

                    <!--
            - PRODUCT MINIMAL
          -->

                    



                    <!--
            - PRODUCT FEATURED
          -->

                    <div class="product-featured">

                        <h2 class="title">Deal of the day</h2>

                        <div class="showcase-wrapper has-scrollbar">
                            <?php
                                $sql="SELECT * FROM `product` ORDER by BUY_NUMBER DESC LIMIT 3";
                                $list=mysqli_query($conn,$sql);
                                while($row=mysqli_fetch_assoc($list)){
                            ?>
                            <div class="showcase-container">

                                <div class="showcase">

                                    <div class="showcase-banner">
                                        <img src="./img/<?php echo $row['IMG']?>" alt="shampoo, conditioner & facewash packs" class="showcase-img">
                                    </div>

                                    <div class="showcase-content">

                                        <div class="showcase-rating">
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star-outline"></ion-icon>
                                            <ion-icon name="star-outline"></ion-icon>
                                        </div>

                                        <a href="#">
                                            <h3 class="showcase-title"><?php echo $row['NAME']?></h3>
                                        </a>

                                        <p class="showcase-desc">
                                        <?php echo $row['DESCRIPTION']?>
                                        </p>

                                        <div class="price-box">
                                            <p class="price"><?php echo $row['PRICE']?></p>

                                            <del><?php echo $row['PRICE']+10?></del>
                                        </div>

                                        <button class="add-cart-btn">add to cart</button>

                                        <div class="showcase-status">
                                            <div class="wrapper">
                                                <p>
                                                    already sold: <b>20</b>
                                                </p>

                                                <p>
                                                    available: <b>40</b>
                                                </p>
                                            </div>

                                            <div class="showcase-status-bar"></div>
                                        </div>

                                        <div class="countdown-box">

                                            <p class="countdown-desc">
                                                Hurry Up! Offer ends in:
                                            </p>

                                            <div class="countdown">

                                                <div class="countdown-content">

                                                    <p class="display-number">360</p>

                                                    <p class="display-text">Days</p>

                                                </div>

                                                <div class="countdown-content">
                                                    <p class="display-number">24</p>
                                                    <p class="display-text">Hours</p>
                                                </div>

                                                <div class="countdown-content">
                                                    <p class="display-number">59</p>
                                                    <p class="display-text">Min</p>
                                                </div>

                                                <div class="countdown-content">
                                                    <p class="display-number">00</p>
                                                    <p class="display-text">Sec</p>
                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>
                            <?php
                                }
                            ?>
                        </div>

                    </div>



                    <!--
            - PRODUCT GRID
          -->

                    <div class="product-main">
                        <h2 class="title">New Products</h2>

                        <div class="product-grid">

                            <?php
                                
                                $sql='select * from `product` p inner join `category` c on p.CATEGORY_ID = c.CATEGORY_ID';
                                $ds=mysqli_query($conn,$sql);
                                if(mysqli_num_rows($ds)){
                                    while($dong = mysqli_fetch_assoc($ds)){
                                        if($dong['STATE']==1){


                            ?>
                                <div class="showcase">

                                    <div class="showcase-banner">
                                        

                                        <img src="img/<?php echo $dong['IMG']?>" alt="Mens Winter Leathers Jackets" width="200" class="product-img default">
                                        <img src="img/<?php echo $dong['IMG']?>" alt="Mens Winter Leathers Jackets" width="200" class="product-img hover">

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
                                                $star=3;
                                            
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
                                }
                            ?>
                            
                            

                        </div>

                    </div>

                </div>

            </div>

        </div>

  </div>





        <!--
      - TESTIMONIALS, CTA & SERVICE
    -->

        <div>

            <div class="container">

                <div class="testimonials-box">

                    <!--
            - TESTIMONIALS
          -->

                    <div class="testimonial">

                        <h2 class="title">testimonial</h2>

                        <div class="testimonial-card">

                            <img src="./assets/images/testimonial-1.jpg" alt="alan doe" class="testimonial-banner" width="80" height="80">

                            <p class="testimonial-name">Alan Doe</p>

                            <p class="testimonial-title">CEO & Founder Invision</p>

                            <img src="./assets/images/icons/quotes.svg" alt="quotation" class="quotation-img" width="26">

                            <p class="testimonial-desc">
                                Lorem ipsum dolor sit amet consectetur Lorem ipsum dolor dolor sit amet.
                            </p>

                        </div>

                    </div>



                    <!--
            - CTA
          -->

                    <div class="cta-container">

                        <img src="./assets/images/cta-banner.jpg" alt="summer collection" class="cta-banner">

                        <a href="#" class="cta-content">

                            <p class="discount">25% Discount</p>

                            <h2 class="cta-title">Summer collection</h2>

                            <p class="cta-text">Starting @ $10</p>

                            <button class="cta-btn">Shop now</button>

                        </a>

                    </div>



                    <!--
            - SERVICE
          -->

                    <div class="service">

                        <h2 class="title">Our Services</h2>

                        <div class="service-container">

                            <a href="#" class="service-item">

                                <div class="service-icon">
                                    <ion-icon name="boat-outline"></ion-icon>
                                </div>

                                <div class="service-content">

                                    <h3 class="service-title">Worldwide Delivery</h3>
                                    <p class="service-desc">For Order Over $100</p>

                                </div>

                            </a>

                            <a href="#" class="service-item">

                                <div class="service-icon">
                                    <ion-icon name="rocket-outline"></ion-icon>
                                </div>

                                <div class="service-content">

                                    <h3 class="service-title">Next Day delivery</h3>
                                    <p class="service-desc">UK Orders Only</p>

                                </div>

                            </a>

                            <a href="#" class="service-item">

                                <div class="service-icon">
                                    <ion-icon name="call-outline"></ion-icon>
                                </div>

                                <div class="service-content">

                                    <h3 class="service-title">Best Online Support</h3>
                                    <p class="service-desc">Hours: 8AM - 11PM</p>

                                </div>

                            </a>

                            <a href="#" class="service-item">

                                <div class="service-icon">
                                    <ion-icon name="arrow-undo-outline"></ion-icon>
                                </div>

                                <div class="service-content">

                                    <h3 class="service-title">Return Policy</h3>
                                    <p class="service-desc">Easy & Free Return</p>

                                </div>

                            </a>

                            <a href="#" class="service-item">

                                <div class="service-icon">
                                    <ion-icon name="ticket-outline"></ion-icon>
                                </div>

                                <div class="service-content">

                                    <h3 class="service-title">30% money back</h3>
                                    <p class="service-desc">For Order Over $100</p>

                                </div>

                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>





        <!--
      - BLOG
    -->

        <div class="blog">

            <div class="container">

                <div class="blog-container has-scrollbar">

                    <div class="blog-card">

                        <a href="#">
                            <img src="./assets/images/blog-1.jpg" alt="Clothes Retail KPIs 2021 Guide for Clothes Executives" width="300" class="blog-banner">
                        </a>

                        <div class="blog-content">

                            <a href="#" class="blog-category">Fashion</a>

                            <a href="#">
                                <h3 class="blog-title">Clothes Retail KPIs 2021 Guide for Clothes Executives.</h3>
                            </a>

                            <p class="blog-meta">
                                By <cite>Mr Admin</cite> / <time datetime="2022-04-06">Apr 06, 2022</time>
                            </p>

                        </div>

                    </div>

                    <div class="blog-card">

                        <a href="#">
                            <img src="./assets/images/blog-2.jpg" alt="Curbside fashion Trends: How to Win the Pickup Battle." class="blog-banner" width="300">
                        </a>

                        <div class="blog-content">

                            <a href="#" class="blog-category">Clothes</a>

                            <h3>
                                <a href="#" class="blog-title">Curbside fashion Trends: How to Win the Pickup Battle.</a>
                            </h3>

                            <p class="blog-meta">
                                By <cite>Mr Robin</cite> / <time datetime="2022-01-18">Jan 18, 2022</time>
                            </p>

                        </div>

                    </div>

                    <div class="blog-card">

                        <a href="#">
                            <img src="./assets/images/blog-3.jpg" alt="EBT vendors: Claim Your Share of SNAP Online Revenue." class="blog-banner" width="300">
                        </a>

                        <div class="blog-content">

                            <a href="#" class="blog-category">Shoes</a>

                            <h3>
                                <a href="#" class="blog-title">EBT vendors: Claim Your Share of SNAP Online Revenue.</a>
                            </h3>

                            <p class="blog-meta">
                                By <cite>Mr Selsa</cite> / <time datetime="2022-02-10">Feb 10, 2022</time>
                            </p>

                        </div>

                    </div>

                    <div class="blog-card">

                        <a href="#">
                            <img src="./assets/images/blog-4.jpg" alt="Curbside fashion Trends: How to Win the Pickup Battle." class="blog-banner" width="300">
                        </a>

                        <div class="blog-content">

                            <a href="#" class="blog-category">Electronics</a>

                            <h3>
                                <a href="#" class="blog-title">Curbside fashion Trends: How to Win the Pickup Battle.</a>
                            </h3>

                            <p class="blog-meta">
                                By <cite>Mr Pawar</cite> / <time datetime="2022-03-15">Mar 15, 2022</time>
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </main>
    <!--Chat box-->
    <div class="chatbox-wrapper">
        <div class="chatbox-toggle">
            <i class='bx bx-message-dots'></i>
        </div>
        <div class="chatbox-message-wrapper">
            <div class="chatbox-message-header">
                <div class="chatbox-message-profile">
                    <img src="./img/h5.jpg" alt="" class="chatbox-message-image">
                    <div>
                        <h4 class="chatbox-message-name">Virtual Assistant</h4>
                        <p class="chatbox-message-status">Online</p>
                    </div>
                </div>
                <div class="chatbox-message-dropdown">
                    <i class='bx bx-dots-vertical-rounded chatbox-message-dropdown-toggle'></i>
                    <ul class="chatbox-message-dropdown-menu">
                        <li>
                            <a href="#">Search</a>
                        </li>
                        <li>
                            <a href="#">Report</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="chatbox-message-content">
                <h4 class="chatbox-message-no-message">You don't have message yet!</h4>
                <!-- <div class="chatbox-message-item sent">
					<span class="chatbox-message-item-text">
						Lorem, ipsum, dolor sit amet consectetur adipisicing elit. Quod, fugiat?
					</span>
					<span class="chatbox-message-item-time">08:30</span>
				</div>
				<div class="chatbox-message-item received">
					<span class="chatbox-message-item-text">
						Lorem, ipsum, dolor sit amet consectetur adipisicing elit. Quod, fugiat?
					</span>
					<span class="chatbox-message-item-time">08:30</span>
				</div> -->
            </div>
            <div class="chatbox-message-bottom">
                <form action="#" class="chatbox-message-form">
                    <textarea rows="1" placeholder="Type message..." class="chatbox-message-input"></textarea>
                    <button type="submit" class="chatbox-message-submit"><i class='bx bx-send' ></i></button>
                </form>
            </div>
        </div>
    </div>





    <!--
    - FOOTER
  -->

    <footer>

        <div class="footer-category">

            <div class="container">

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
    

    <!--
    - ionicon link
  -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    
    <script src="./shopping-cart.js"></script>
    <script src="./chat-box.js"></script>
    <script src="./view.js"></script>

    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    
    
    
                            

                           

</body>

</html>