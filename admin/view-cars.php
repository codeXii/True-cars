<?php
require 'partials/header.php';

// GETTING LOGGED IN USER DETAILS
$user_id = $_SESSION['user-id-1'];
$user_query = "SELECT * FROM admin WHERE id = $user_id ";
$user_result = mysqli_query($conn, $user_query);
$user_record = mysqli_fetch_assoc($user_result);



// FETCH ALL CURRENT USER CART ITEMS
$car_sql = "SELECT * FROM car ORDER BY id DESC";
$car_query = mysqli_query($conn, $car_sql);



?>



        <!-- DASHBOARD -->
        <section id="account-info" class="about-header section-p1">
            <p class="h3">Welcome to Admin Area</p>
            <h3> <i class="fa-regular fa-user"></i></i> <?="{$user_record['firstname']} {$user_record['lastname']}" ?></h3>
            <p> <?= "{$user_record['email']}" ?></p>
        </section>
        

        <!-- ADMIN OPTIONS -->
    <section class="section-p1">
    <div class="admin">
        <ul>
            <li><a href="<?= ROOT_URL ?>admin/dashboard.php">View Users</a></li>
            <li><a href="<?= ROOT_URL ?>admin/view-cars.php">View car inventory</a></li>
            <li><a href="<?= ROOT_URL ?>admin/add-car.php">Add new car</a></li>
        </ul>
    </div>
    </section>


                        <!-- CART TABLE -->
        <section id="cart" class="section-p1">
            <div>
                <p>Users Table</p>
            </div>
            <table width="100%">
                <thead>
                    <tr>
                        <td>Remove</td>
                        <td>IMAGE</td>
                        <td>CARNAME</td>
                        <td>MODEL</td>
                        <td>YEAR</td>
                        <td>PRICE</td>
                    </tr>
                </thead>
                <tbody>
                    <?php if(mysqli_num_rows($car_query) > 0):?>
                    <?php while($car = mysqli_fetch_assoc($car_query)):?>

                    

                    <tr>
                        <td> <a href="<?= ROOT_URL ?>admin/delete-car.php?id=<?= $car['id'] ?>"><i class="far fa-times-circle"></i></a> </td>
                        <td><img src="<?= ROOT_URL ?>images/<?=$car['image']?>" alt=""></td>
                        <td><?= $car['carname'] ?></td>
                        <td><?= $car['model'] ?></td>
                        <td><?= $car['year'] ?></td>
                        <td>$<?= number_format( $car['price'], 2)?></td>
                    </tr>
                    <?php endwhile; ?>
                    <?php else :?>
                        <p class="bg-danger p-2">You currently have no cars in your inventory</p>
                    <?php endif; ?>
                    
                </tbody>
            </table>
        </section>
            
                          
        
         


        <!-- TOYOTA GREENWHICH ABOUT SECTION -->
    <section id="toyota-about">
        
        <div id="overlay" >
            <h2>Welcome to Toyota of Greenwich</h2>
        <p>Thank you for making your way to Toyota of Greenwich, your certified Toyota dealer serving drivers throughout Cos Cob and the surrounding areas. At our dealership, you’ll find a solid selection of new Toyota for sale, as well as a carefully inspected lineup of pre-owned vehicles. We also have a well-connected finance center run by a qualified team of finance experts, who can help you get the right loan or lease in a quick, easy, and transparent manner.</p>
        <p>Our commitment to our customers continues well beyond the date of purchase. We also have a professional team of Toyota technicians on hand with the skills and equipment to handle all manner of maintenance and repairs, as well as a full stock of authentic parts. Make your way to Toyota of Greenwich in Cos Cob today for quality vehicles, a friendly team, and professional service at every step of the way. And if you have any questions for us, you can always get in touch at (203) 661-5055</p>
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