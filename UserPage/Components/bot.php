<footer>

<div class="footer-category">

    <div class="container">

        <h2 class="footer-category-title">Brand directory</h2> 
        <?php
            $sql="select * from  category  ";
            $data=mysqli_query($conn,$sql);
            
            if(mysqli_num_rows($data)){
                while($r=mysqli_fetch_assoc($data)){
                    echo '
                    <div class="footer-category-box">
                    <h3 class="category-box-title"> '.$r['CNAME'].':</h3>
                    ';

                    $sql2="select * from product where CATEGORY_ID =".$r['CATEGORY_ID'];
                    $data2=mysqli_query($conn,$sql2);
                    if(mysqli_num_rows($data2)){
                        while($r2=mysqli_fetch_assoc($data2)){
                            echo '
                            <a href="#" class="footer-category-link">'.$r2['NAME'].'</a>
                            ';
                        }
                    }
                    echo '</div>';
                }
            }

        ?>

    </div>

</div>

<div class="footer-nav">

    <div class="container">

        <ul class="footer-nav-list">

            <li class="footer-nav-item">
                <h2 class="nav-title">Popular Categories</h2>
            </li>

            

            <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">Electronic</a>
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