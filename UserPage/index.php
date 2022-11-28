<?php 
    session_start();
    include '../config2.php';
?>
<?php include 'Components/top.php'?>

<!---=========================================================================================-->



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
                <!--2-->
                
                <?php
                    $sql="select * from `banner` where STATE=1";//$sql="SELECT * FROM `product` ORDER by BUY_NUMBER DESC LIMIT 3";
                    $list=mysqli_query($conn,$sql);
                    while($row=mysqli_fetch_assoc($list)){
                ?>
                
                <div class="slider-item">

                    <img src="./img/<?php echo $row['IMG']?>" alt="new fashion summer sale" class="banner-img">

                    <!-- <div class="banner-content">

                        <p class="banner-subtitle">Sale Offer</p>

                        <h2 class="banner-title">...</h2>

                        <p class="banner-text">
                            starting at &dollar; <b>29</b>.99
                        </p>

                        <a href="#" class="banner-btn">Shop now</a>

                    </div> -->

                </div>
                <?php
                        }
                ?>                      
                <!--2-->
            </div>

        </div>

    </div>
        <!--
      - CATEGORY
    -->

        <div class="category">

            <div class="container">

                <div class="category-item-container has-scrollbar">

                    
                    
                
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
                            <!--3-->
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
                            <!--3-->
                        </ul>

                    </div>

                    <div class="product-showcase">

                        <h3 class="showcase-heading">best sellers</h3>

                        <div class="showcase-wrapper">

                            <div class="showcase-container">
                                <!--Nhung code SELECT * FROM `product` ORDER by BUY_NUMBER DESC LIMIT 5-->
                                <!--4-->
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
                                <!--4-->
                                
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
                            <!--5-->
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


                            <!--5-->
                            
                        </div>

                    </div>



                    <!--
            - PRODUCT GRID
          -->

                    <div class="product-main">
                        <h2 class="title">New Products</h2>

                        <div class="product-grid">
                            <!--6-->
                            <?php
                                //xu ly session // xu ly phan trang
                                
                                $sql='select * from `product` where STATE=1';
                                $ds=mysqli_query($conn,$sql);
                                $tong_mh=mysqli_num_rows($ds);
                                
                                $soluong=8;
                                $tongsotrang=ceil ($tong_mh/$soluong);
                                //echo 'tong so trang '.$tongsotrang;
                                if(!isset($_GET['page'])){
                                    $tranghh=1;

                                }else{
                                    $tranghh=$_GET['page'];
                                }
                                if($tranghh>$tongsotrang){
                                    $tranghh=$tongsotrang;
                                }elseif($tranghh<1){
                                    $tranghh=1;
                                }
                                $batdau=($tranghh-1)*$soluong;
                                //echo '\tong sp  '.$tong_mh;
                                //echo '\ntrang hh '.$tranghh;
                                //echo '\nbat dau '.$batdau;
                                //$mathang=$mh->laymathangphantrang($batdau,$soluong);limit x,y

                                //////////////////
                                $sql='select * from `product` p inner join `category` c on p.CATEGORY_ID = c.CATEGORY_ID where STATE=1 ORDER BY PRODUCT_ID DESC 
                                LIMIT '.$batdau.','. $soluong.'';
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

                            <!--6-->

                        </div>

                    </div>

                </div>

            </div>

        </div>

  </div>
  <!--Panigation-->
  <style>
    .center {
  text-align: center;
}

.pagination {
  display: inline-block;
}

.pagination a {
  color: black;
  float: left;
  padding: 8px 16px;
  text-decoration: none;
  transition: background-color .3s;
  border: 1px solid #ddd;
  margin: 0 4px;
}

.pagination a.active {
  background-color: var(--salmon-pink);
  color: white;
  border: 1px solid var(--salmon-pink);
}
.head{
    border-bottom-left-radius: 30px;
    border-top-left-radius: 30px;
}
.tail{
    border-bottom-right-radius: 30px;
    border-top-right-radius: 30px;
}
.disabled{
    filter: opacity(0);
}

.pagination a:hover:not(.active) {background-color: #ddd;}
  </style>
  <center>
  <div class="pagination">
    <?php
        if($tranghh<=1){
            echo '<a class="head disabled">&laquo;</a>';
        }else{
            echo '<a class="head" href="?page='.($tranghh-1).'">&laquo;</a>';
        }
        for($i=1;$i<=$tongsotrang;$i++){
            if($i==$tranghh)
                echo '<a href="?page='.$i.'" class="active">'.$i.'</a>';
            else echo '<a href="?page='.$i.'" >'.$i.'</a>';    
        }
        if($tranghh>=$tongsotrang){
            echo '<a class="tail disabled" >&raquo;</a>';
        }else{
            echo '<a class="tail" href="?page='.($tranghh+1).'">&raquo;</a>';
        }
    ?>
    
  </div>
  </center>

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
                <!--mở copy dòng 660-750-> past vô đây và command -->



                <!--mở copy-> past vô đây và command -->

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
        <!---======================Footẻ==========================================-->
   <?php include 'Components/bot.php'?>