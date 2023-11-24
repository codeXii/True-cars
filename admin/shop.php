<?php

require 'partials/header.php';

// FETCH ALL CARS FROM DATABASE
$car_sql = "SELECT * FROM car";
$car_query = mysqli_query($conn, $car_sql);


// FETCH CURRENT USER
if(isset($_SESSION['user-id-1'])){
    $user_id = $_SESSION['user-id-1'];
}




?>

<!-- ===============     START OF SEARCH BAR =================== -->
<section class="search_bar section-p1" >
    <form action="<?= ROOT_URL ?>admin/search.php" method="GET" class="container search_bar-container">
        <div>
            <input type="search" name="search" placeholder="Enter car model">
        </div>
        <button name="submit" class="btn">Search</button>
    </form>
</section>
    
<!-- ===============     END OF SEARCH BAR =================== -->


        <!-- SHOP SECTION -->
                        <!---PRODUCTS--->
<section id="product1" class="section-p1">
    <?php if(isset($_SESSION['cart'])):?>
    <div class="bg-danger">
        <p>
            <?= $_SESSION['cart'];
            unset($_SESSION['cart']); ?>
        </p>
    </div>
    <?php endif; ?>
    <div class="product-container">
        <?php while($car = mysqli_fetch_assoc($car_query)):?>
        <div class="product">
        <form action="" method="POST" enctype="multipart/form-data"> 
            <img src="<?= ROOT_URL ?>images/<?= $car['image'] ?>" alt="">
            <input type="hidden" class="form-control" name="image" value="<?= $car['image'] ?>"/>
            <div class="description">
                <span>Toyota</span>
                <h5><?= $car['model'] ?></h5>
                <input type="hidden" class="form-control" name="model" value="<?= $car['model'] ?>"/>
                <div class="star">
                    <i class="fas fa-star"></i> 
                    <i class="fas fa-star"></i> 
                    <i class="fas fa-star"></i> 
                    <i class="fas fa-star"></i> 
                </div>
                <h4>$<?= number_format($car['price'], 2) ?></h4>
                <input type="hidden" class="form-control" name="year" value="<?= $car['year'] ?>"/>
                <input type="hidden" class="form-control" name="price" value="<?= $car['price'] ?>"/>
                <input type="hidden" class="form-control" name="user-id" value="<?= $user_id ?? null ?>"/>
            </div>
            <button type="submit" name="submit"><i class="fas fa-shopping-cart" id="cart"></i></button>
            </form>
        </div> 
    <?php endwhile; ?>
    </div>
</section>




        <!-- MAP BOX BACKGROUND -->
    <section id="map-box">
    </section>

        <!-- FOOTER -->
    <footer id="footer">

        <div id="box-1">
            <div class="cols">
                <h4>Inventory</h4>
                <a href="#">New vehicles</a>
                <a href="#">Pre-owned vehicles</a>
                <a href="#">Certified Pre-owned vehicles</a>
                <a href="#">Price Under 20K</a>
            </div>
            <div class="cols">
                <h4>Service</h4>
                <a href="#">Service Center</a>
                <a href="#">Schedule Service</a>
                <a href="#">Parts Center</a>
                <a href="#">Order Parts</a>
            </div>
            <div class="cols">
                <h4>Financing</h4>
                <a href="#">Finance Center</a>
                <a href="#">Apply For Financing</a>
                <a href="#">Payment Calculator</a>
                <a href="#">Value Your Trade</a>
            </div>
            <div class="cols">
                <h4>About</h4>
                <a href="#">About Us</a>
                <a href="#">Contact Us</a>
                <a href="#">Meet Our Staff</a>
                <a href="#">Customer Testimonials</a>
            </div>
        </div>

        <div id="box-2">
            <div id="footer-img">
                <div>
                    <img src="./images/toyota-dark-desktop-logo.png" alt="" id="img-1">
                </div>
                <div id="img-2">
                    <img src="./images/toyotagreenwhichlogo.PNG" alt="">
                </div>
            </div>
            <div id="footer-socials">
                <i class="fa-brands fa-x-twitter h2"></i>
                <i class="fa-brands fa-square-facebook h2"></i>
                <i class="fa-brands fa-youtube h2"></i>
                <i class="fa-brands fa-instagram h2"></i>
            </div>
        </div>

        <div id="box-3">
            <div>
                <ul>
                    <li>PRIVACY POLICY |</li>
                    <li>CONTACT US |</li>
                    <li>SITEMAP |</li>
                    <li>SITEMAP XML |</li>
                    <li>SAFETY RECALLS & SERVICE CAMPAIGNS |</li>
                    <li>AUDIOEYE</li>
                </ul>
                <P>ADVANCED AUTOMOTIVE DEALER WEBSITES BY DEALER INSPIRE</P>
            </div>
            
            <div>
                <p>COPYRIGHT © 2023 TRUE-CARS TOYOTA OF GREENWICH</p>
            </div>
        </div>
    </footer>
    

<!-- CUSTOM JAVASCRIPT -->
    <?php
        require '../partials/script.php';
    ?>

<!-- BOOTSTRAP JS SCRIPT  -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>