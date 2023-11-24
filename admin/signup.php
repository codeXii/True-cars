<?php

require 'config/database.php';

// get back from data if there was any error
    $firstname = $_SESSION['signup-data']['firstname'] ?? null;
    $lastname = $_SESSION['signup-data']['lastname'] ?? null;
    $email = $_SESSION['signup-data']['email'] ?? null ;
    $password = $_SESSION['signup-data']['password'] ?? null ;
    $cpassword = $_SESSION['signup-data']['cpassword'] ?? null;
    $phone = $_SESSION['signup-data']['phone'] ?? null;

    unset($_SESSION['signup-data']);
  

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- BOOTSTRAP STYLESHEET -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- CUSTOM STYLESHEET -->
    <link rel="stylesheet" href="<?= ROOT_URL ?>css/styles.css">

    <!-- FONTAWESOME ICONS CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <link rel="stylesheet" href="<?= ROOT_URL ?>fontawesome-free-6.4.2-web/css/all.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />

    <title>Toyota of Greenwich</title>
</head>
<body>

   <!-- HEADERS / NAVBARS -->
   <section id="header">

<div>
    <ul id="navbar">
       
            <li><a href="<?= ROOT_URL ?>admin">Login</a></li>
            <li><a href="<?= ROOT_URL ?>admin/signup.php">Register</a></li>
    </ul>
</div>

<!-- <div id="mobile">
    <a href="cart.html"> <i class="fas fa-shopping-bag"></i> </a>
    <i id="bar" class="fas fa-outdent" ></i>
</div> -->

<div id="nav-location">
    <p><i class="fa-solid fa-location-dot"></i> Directions 75 E Putnam Ave, Cos Cob, CT 06807</p>
</div>
</section>




    <section id="signup">
        <div id="register-content">
            <div class="form-container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="text-center">Get Started</h2>
                        <p class="lead mt-3">Create your admin account</p>


                        <?php if(isset($_SESSION['signup'])):?>
                            <div>
                            <p>
                                <?= $_SESSION['signup'];
                                    unset($_SESSION['signup']);?>
                            </p>
                        </div>
                    <?php endif; ?>



                        <form action="<?= ROOT_URL ?>admin/signup-logic.php" method="POST">
                            <div class="mb-2">
                                <input type="text" class="form-control" name="firstname" value="<?= $firstname ?>" placeholder="Enter first name"/>
                              </div>
    
                              <div class="mb-2">
                                <input type="text" class="form-control" name="lastname" value="<?= $lastname ?>" placeholder="Enter last name"/>
                              </div>
    
                              <div class="mb-2">
                                <input type="text" class="form-control" name="email" value="<?= $email ?>"  placeholder="Enter email address"/>
                              </div>
    
                              <div class="mb-2">
                                <input type="number" class="form-control" name="phone" value="<?= $phone ?>"  placeholder="Phone number"/>
                              </div>
    
                              <div class="mb-2">
                                <input type="password" class="form-control" name="password" value="<?= $password ?>" placeholder="Enter password"/>
                              </div>
    
                              <div class="mb-2">
                                <input type="password" class="form-control" name="cpassword" value="<?= $cpassword ?>"  placeholder="Confirm password"/>
                              </div>
          
                              <button type="submit" name="submit">Register</button>
                        </form>

                        <small>Already have an account? <a href="<?= ROOT_URL ?>admin">login here</a></small>
                    </div>
                </div>
            </div>
        </div>
    </section>
      

        <!-- TOYOTA GREENWHICH ABOUT SECTION -->
    <section id="toyota-about">
        
        <div id="overlay" >
            <h2>Welcome to Toyota of Greenwich</h2>
        <p>Thank you for making your way to Toyota of Greenwich, your certified Toyota dealer serving drivers throughout Cos Cob and the surrounding areas. At our dealership, you’ll find a solid selection of new Toyota for sale, as well as a carefully inspected lineup of pre-owned vehicles. We also have a well-connected finance center run by a qualified team of finance experts, who can help you get the right loan or lease in a quick, easy, and transparent manner.</p>
        <p>Our commitment to our customers continues well beyond the date of purchase. We also have a professional team of Toyota technicians on hand with the skills and equipment to handle all manner of maintenance and repairs, as well as a full stock of authentic parts. Make your way to Toyota of Greenwich in Cos Cob today for quality vehicles, a friendly team, and professional service at every step of the way. And if you have any questions for us, you can always get in touch at (203) 661-5055</p>
        </div>
    </section>


     <!-- MAP BOX BACKGROUND  -->
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
    


    <?php
        require '../partials/script.php';
    ?>



  



<!-- BOOTSTRAP JS SCRIPT  -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>