<?php
require 'partials/header.php';


$email = $_SESSION['login-data']['email'] ?? null;
$password = $_SESSION['login-data']['password'] ?? null;

unset($_SESSION['login-data']);



?>


    

    <section id="signup">
        <div id="register-content">
            <div class="form-container">

            <?php if(isset($_SESSION['signup-success'])):?>

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p class="h3 text-center bg-success">
                            <?= $_SESSION['signup-success'];
                            unset($_SESSION['signup-success']);?>
                        </p>
                    </div>
                </div>
            </div>

            <?php endif; ?>

                <div class="row">
                    <div class="col-12">
                        <h2 class="text-center">Wellcome back</h2>
                        <p class="lead mt-3">Login to your account</p>
                        <?php if(isset($_SESSION['login'])):?>
                            <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="h3 text-center bg-danger">
                                        <?= $_SESSION['login'];
                                        unset($_SESSION['login']);?>
                                    </p>
                                </div>
                            </div>
                        </div>

            <?php endif; ?>
                        <form action="<?= ROOT_URL ?>login-logic.php" method="POST">
                            <div class="mb-2">
                                <input type="text" class="form-control" name="email"  placeholder="Enter email address"/>
                              </div>
    
                              <div class="mb-2">
                                <input type="password" class="form-control" name="password"  placeholder="Enter password"/>
                              </div>
          
                              <button type="submit" name="submit">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
      

        <!-- TOYOTA GREENWHICH ABOUT SECTION -->
    <section id="toyota-about">
        
        <div id="overlay" >
            <h2>WELCOME TO TRUE-CARS TOYOTA OF GREENWICH</h2>
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
    



  

<!-- CUSTOM JAVASCRIPT -->
<script>
    // Script for navigation bar

const bar = document.getElementById('bar');
const close = document.getElementById('close');
const nav = document.getElementById('navbar');

if (bar) {
    bar.addEventListener('click', () =>{
     nav.classList.add('active');   
    })
}

if (close){
    close.addEventListener('click', ()=>{
        nav.classList.remove('active');
    })
}
</script>

<!-- BOOTSTRAP JS SCRIPT  -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>