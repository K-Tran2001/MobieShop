
<style>
    :root{
        --main-color: #fd4646;
        --text-color: #171427;
        --bg-color: #fff;
        --back-color:#71be34;
        --update-color:#ffb702;
    }
    .cart {

    z-index: 4;
    position: fixed;
    top: 0;
    right: -100%;
    width: 360px;
    min-height: 100vh;
    padding: 20px;
    background:#eeebf6;
    box-shadow: -2px 0 4px hsl(0 4% 15%/10%);
    transition: .3s;
    
}
.cart-heart {

z-index: 4;
position: fixed;
top: 0;
right: -100%;
width: 360px;
min-height: 100vh;
padding: 20px;
background:#ccccf7;
box-shadow: -2px 0 4px hsl(0 4% 15%/10%);
transition: .3s;

}
.cart-user {

z-index: 4;
position: fixed;
top: 0;
right: -100%;
width: 360px;
min-height: 100vh;
padding: 20px;
background:#e9b386;
box-shadow: -2px 0 4px hsl(0 4% 15%/10%);
transition: .3s;

}
.user-name {
    align-items: center;
    font-weight: bold;
}

.user-avatar {
    width: 150px;
    height: 150px;
    border-radius: 75px;
}

.setting ul {
    margin-left: 3rem;
}

.setting ul li {
    font-size: 1.1rem;
    
    margin-top: 1rem;
}



.cart.active {
    right: 0;
}
.cart-heart.active {
    right: 0;
}
.cart-user.active {
    right: 0;
}

.cart-title {
    text-align: center;
    font-size: 1.5rem;
    font-weight: 600;
    margin-top: 2rem;
}

.cart-box {
    display: grid;
    grid-template-columns: 32% 50% 18%;
    align-items: center;
    gap: 1rem;
    margin-top: 1rem;
}

.cart-img {
    width: 100px;
    height: 100px;
    object-fit: contain;
}

.detail-box {
    display: grid;
    row-gap: 0.5rem;
}

.cart-product-title {
    font-size: 1.3rem;
    text-transform: uppercase;
}

.cart-price {
    font-weight: 500;
}

.cart-quantity {
    border: 1px solid var(--text-color);
    outline-color: var(--main-color);
    width: 2.4rem;
    text-align: center;
    font-size: 1rem;
    
}

.cart-remove {
    font-size: 24px;
    color: var(--main-color);
    cursor: pointer;
}
.cart-heart-remove {
    font-size: 24px;
    color: var(--main-color);
    cursor: pointer;
}

.total {
    display: flex;
    justify-content: flex-end;
    margin-top: 1.5rem;
    border-top: 1px solid var(--text-color);
}

.total-title {
    font-size: 1rem;
    font-weight: 600;
}

.total-price {
    margin-left: 0.5rem;
}

.btn-buy {
    display: flex;
    margin: 1.5rem auto 0 auto;
    padding: 12px 20px;
    border: none;
    background-color: var(--main-color);
    color: var(--bg-color);
    font-size: 1rem;
    font-weight: 500;
    cursor: pointer;
}


.btn-buy:hover {
    background-color: var(--text-color);
}
.btn-back {
    display: flex;
    margin: 1.5rem auto 0 auto;
    padding: 12px 20px;
    border: none;
    background-color: var(--back-color);
    color: var(--bg-color);
    font-size: 1rem;
    font-weight: 500;
    cursor: pointer;
}


.btn-back:hover {
    background-color: var(--text-color);
}
.btn-update {
    display: flex;
    margin: 1.5rem auto 0 auto;
    padding: 12px 20px;
    border: none;
    background-color: var(--update-color);
    color: var(--bg-color);
    font-size: 1rem;
    font-weight: 500;
    cursor: pointer;
}


.btn-back:hover {
    background-color: var(--text-color);
}



#close-cart {
    position: absolute;
    top: 1rem;
    right: 0.8rem;
    font-size: 1.5rem;
    color: var(--text-color);
    cursor: pointer;
}
#close-cart-heart {
    position: absolute;
    top: 1rem;
    right: 0.8rem;
    font-size: 1.5rem;
    color: var(--text-color);
    cursor: pointer;
}
#close-cart-user {
    position: absolute;
    top: 1rem;
    right: 0.8rem;
    font-size: 1.5rem;
    color: var(--text-color);
    cursor: pointer;
}

</style>
<!--tach nho ra them nua--->
<header >

<div class="header-top">

    <div class="container">

        <ul class="header-social-container">

            <li>
                <a href="#" class="social-link">
                    <ion-icon name="logo-facebook"></ion-icon>
                </a>
            </li>

            <li>
                <a href="#" class="social-link">
                    <ion-icon name="logo-twitter"></ion-icon>
                </a>
            </li>

            <li>
                <a href="#" class="social-link">
                    <ion-icon name="logo-instagram"></ion-icon>
                </a>
            </li>

            <li>
                <a href="#" class="social-link">
                    <ion-icon name="logo-linkedin"></ion-icon>
                </a>
            </li>
            

        </ul>

        <div class="header-alert-news">
            <p>
                <b>Free Shipping</b> This Week Order Over - $55
            </p>
        </div>

        <div class="header-top-actions">

            <select name="currency">

    <option value="usd">USD &dollar;</option>
    <option value="eur">EUR &euro;</option>

  </select>

            <select name="language">

    <option value="en-US">English</option>
    <option value="es-ES">Espa&ntilde;ol</option>
    <option value="fr">Fran&ccedil;ais</option>

  </select>

        </div>

    </div>

</div>

<div class="header-main">

    <div class="container">

        <a href="index.php" class="header-logo">
            <img src="img/logo-K-5.jpg" alt="Anon's logo" width="120" height="120">
        </a>

        <div class="header-search-container">

            <input type="search" name="search" class="search-field" placeholder="Enter your product name...">

            <button class="search-btn">
    <ion-icon name="search-outline"></ion-icon>
  </button>

        </div>

        <div class="header-user-actions">

            <button class="action-btn">
    <ion-icon name="person-outline" id="cart-user"></ion-icon>
  </button>

            <button class="action-btn">
    <ion-icon name="heart-outline" id="cart-heart"></ion-icon>
    <span class="count count-heart">0</span>
  </button>

            <button class="action-btn">
    <ion-icon name="bag-handle-outline" id="cart-icon"></ion-icon>
    <span class="count count-cart">0</span>
  </button>

        </div>

    </div>

</div>
<!---cart-->
<div class="cart" style= "height: 100px; overflow-y: scroll;">
            <h2 class="cart-title">Your cart</h2>
            <div class="cart-content" id="cart">
                <!--cart content-->
              


            </div>
            <!--Total---------->
            <div class="total">
                <div class="total-title">Total</div>
                <div class="total-price">$0</div>

            </div>
            <!---Buy btn-->
            <button type="button" class="btn-buy" onclick="buy()">Buy now</button>
            <!---cart close-->
            <i class='bx bxs-message-square-x' id="close-cart"></i>

</div>
<script>
    function buy(){
        window.location.href='checkout.php'
    }
</script>
<div class="cart-heart" style= "height: 100px; overflow-y: scroll;">
            <h2 class="cart-title">Your Heart</h2>
            <div class="cart-heart-content" id="heart">
                <!--cart content-->


            </div>
            <!--Total---------->
            <div class="total" >
                

            </div>
            <!---Buy btn-->
            <button type="button" class="btn-buy">Go to Cart</button>
            <!---cart close-->
            <i class='bx bxs-message-square-x' id="close-cart-heart"></i>

</div>
<?php
if(!empty($_SESSION['user']))
 foreach($_SESSION['user'] as $key => $value){

?>

<div class="cart-user" style= "height: 100px; overflow-y: scroll;">
            <h2 class="cart-title">Profile</h2>
            <div class="cart-user-content">
                <!--cart content-->
                <center>
                    <!--cart content-->
                    <img src="img/<?php echo $value['IMG']  ?>" alt="" class="user-avatar">
                    
                    <h2 class="user-name" ><?php echo $value['USERNAME']  ?></h2>
                </center>


            </div>
            <!--Total---------->
            <div class="total">
                

            </div>
            <div class="setting">
            
                <ul class="setting">
                    
                    <li><a style="text-decoration: none;color:#171427" href="./profile-edit.php">Cập nhật hồ sơ cá nhân<i class='bx bx-chevron-right'></i></a></li>
                    <li><a style="text-decoration: none;color:#171427" href="./purchase-history.php">Lịch sử mua hàng<i class='bx bx-chevron-right'></i></a></li>
                    <li><button onclick="()=>{window.location.href='index.php'}">Cai dat rieng<i class='bx bx-chevron-right'></i></button></li>
                    <li>Trung tam ho tro<i class='bx bx-chevron-right'></i></li>
                    <li>Yeu cau xoa tai khoan<i class='bx bx-chevron-right'></i></li>
                </ul>
            </div>
            <!---Buy btn-->
            <a href="logout-excute.php"><button type="button" class="btn-buy" >  Logout</button></a>
            
            <!---cart close-->
            <i class='bx bxs-message-square-x' id="close-cart-user"></i>

</div>
<?php
}else{
?>
<div class="cart-user" style= "height: 100px; overflow-y: scroll;">
            <h2 class="cart-title">Profile</h2>
            <div class="cart-user-content">
                <!--cart content-->
                <center>
                    <!--cart content-->
                    <img src="img/hacker.jpg" alt="" class="user-avatar">
                    
                    <h2 class="user-name" >Guess</h2>
                </center>


            </div>
            <!--Total---------->
            <div class="total">
                

            </div>
            <div class="setting">
                
            </div>
            <!---Buy btn-->
            <a href="../login.php"><button type="button" class="btn-buy" >  Login</button></a>
            
            <!---cart close-->
            <i class='bx bxs-message-square-x' id="close-cart-user"></i>

</div>

<?php 
    } 
?>

<!-- <script>
    function logout(){
            $.ajax({  
                    
                    type:"POST",  
                    url:"logout-excute.php",  
                    data:{
                        
                    },  
                    success:function(data){ 
                        
                        
                        
                    }  
    
                });  

        }
</script> -->


<div class="mobile-bottom-navigation">

    <button class="action-btn" data-mobile-menu-open-btn>
        <ion-icon name="menu-outline"></ion-icon>
    </button>

    <button class="action-btn">
        <ion-icon name="bag-handle-outline"></ion-icon>

        <span class="count">0</span>
    </button>

    <button class="action-btn">
        <ion-icon name="home-outline"></ion-icon>
    </button>

    <button class="action-btn">
        <ion-icon name="heart-outline"></ion-icon>

        <span class="count">0</span>
    </button>

    <button class="action-btn" data-mobile-menu-open-btn>
        <ion-icon name="grid-outline"></ion-icon>
    </button>

</div>

<nav class="mobile-navigation-menu  has-scrollbar" data-mobile-menu>

    <div class="menu-top">
        <h2 class="menu-title">Menu</h2>

        <button class="menu-close-btn" data-mobile-menu-close-btn>
            <ion-icon name="close-outline"></ion-icon>
        </button>
    </div>

    <ul class="mobile-menu-category-list">

        <li class="menu-category">
            <a href="#" class="menu-title">Home</a>
        </li>

        <li class="menu-category">

            <button class="accordion-menu" data-accordion-btn>
                <p class="menu-title">Men's</p>

                <div>
                <ion-icon name="add-outline" class="add-icon"></ion-icon>
                <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                </div>
            </button>

            <ul class="submenu-category-list" data-accordion>

                <li class="submenu-category">
                    <a href="#" class="submenu-title">Shirt</a>
                </li>

                <li class="submenu-category">
                    <a href="#" class="submenu-title">Shorts & Jeans</a>
                </li>

                <li class="submenu-category">
                    <a href="#" class="submenu-title">Safety Shoes</a>
                </li>

                <li class="submenu-category">
                    <a href="#" class="submenu-title">Wallet</a>
                </li>

            </ul>

        </li>

        <li class="menu-category">

            <button class="accordion-menu" data-accordion-btn>
                <p class="menu-title">Women's</p>

                <div>
                <ion-icon name="add-outline" class="add-icon"></ion-icon>
                <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                </div>
            </button>

            <ul class="submenu-category-list" data-accordion>

                <li class="submenu-category">
                    <a href="#" class="submenu-title">Dress & Frock</a>
                </li>

                <li class="submenu-category">
                    <a href="#" class="submenu-title">Earrings</a>
                </li>

                <li class="submenu-category">
                    <a href="#" class="submenu-title">Necklace</a>
                </li>

                <li class="submenu-category">
                    <a href="#" class="submenu-title">Makeup Kit</a>
                </li>

            </ul>

        </li>

        <li class="menu-category">

            <button class="accordion-menu" data-accordion-btn>
                <p class="menu-title">Jewelry</p>

                <div>
                <ion-icon name="add-outline" class="add-icon"></ion-icon>
                <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                </div>
            </button>

            <ul class="submenu-category-list" data-accordion>

                <li class="submenu-category">
                    <a href="#" class="submenu-title">Earrings</a>
                </li>

                <li class="submenu-category">
                    <a href="#" class="submenu-title">Couple Rings</a>
                </li>

                <li class="submenu-category">
                    <a href="#" class="submenu-title">Necklace</a>
                </li>

                <li class="submenu-category">
                    <a href="#" class="submenu-title">Bracelets</a>
                </li>

            </ul>

        </li>

        <li class="menu-category">

            <button class="accordion-menu" data-accordion-btn>
                <p class="menu-title">Perfume</p>

                <div>
                <ion-icon name="add-outline" class="add-icon"></ion-icon>
                <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                </div>
            </button>

            <ul class="submenu-category-list" data-accordion>

                <li class="submenu-category">
                    <a href="#" class="submenu-title">Clothes Perfume</a>
                </li>

                <li class="submenu-category">
                    <a href="#" class="submenu-title">Deodorant</a>
                </li>

                <li class="submenu-category">
                    <a href="#" class="submenu-title">Flower Fragrance</a>
                </li>

                <li class="submenu-category">
                    <a href="#" class="submenu-title">Air Freshener</a>
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

    <div class="menu-bottom">

        <ul class="menu-category-list">

            <li class="menu-category">

                <button class="accordion-menu" data-accordion-btn>
                    <p class="menu-title">Language</p>

                    <ion-icon name="caret-back-outline" class="caret-back"></ion-icon>
                </button>

                <ul class="submenu-category-list" data-accordion>

                    <li class="submenu-category">
                        <a href="#" class="submenu-title">English</a>
                    </li>

                    <li class="submenu-category">
                        <a href="#" class="submenu-title">Espa&ntilde;ol</a>
                    </li>

                    <li class="submenu-category">
                        <a href="#" class="submenu-title">Fren&ccedil;h</a>
                    </li>

                </ul>

            </li>

            <li class="menu-category">
                <button class="accordion-menu" data-accordion-btn>
                    <p class="menu-title">Currency</p>
                    <ion-icon name="caret-back-outline" class="caret-back"></ion-icon>
                </button>

                <ul class="submenu-category-list" data-accordion>
                    <li class="submenu-category">
                        <a href="#" class="submenu-title">USD &dollar;</a>
                    </li>

                    <li class="submenu-category">
                        <a href="#" class="submenu-title">EUR &euro;</a>
                    </li>
                </ul>
            </li>

        </ul>

        <ul class="menu-social-container">

            <li>
                <a href="#" class="social-link">
                    <ion-icon name="logo-facebook"></ion-icon>
                </a>
            </li>

            <li>
                <a href="#" class="social-link">
                    <ion-icon name="logo-twitter"></ion-icon>
                </a>
            </li>

            <li>
                <a href="#" class="social-link">
                    <ion-icon name="logo-instagram"></ion-icon>
                </a>
            </li>

            <li>
                <a href="#" class="social-link">
                    <ion-icon name="logo-linkedin"></ion-icon>
                </a>
            </li>

        </ul>

    </div>

</nav>

</header>