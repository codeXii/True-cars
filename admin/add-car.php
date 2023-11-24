<?php

require 'partials/header.php';

// get back from data if there was any error
$carname = $_SESSION['add-car-data']['carname'] ?? null;
$model = $_SESSION['add-car-data']['model'] ?? null;
$year = $_SESSION['add-car-data']['year'] ?? null ;
$price = $_SESSION['add-car-data']['price'] ?? null ;

unset($_SESSION['add-car-data']);



?>




    <section id="signup">
        <div id="register-content">
            <div class="form-container">
                <div class="row">
                    <div class="col-12">
                        <p class="lead mt-3">Add a new car </p>
                        <form action="<?= ROOT_URL ?>admin/add-car-logic.php" method="POST" enctype="multipart/form-data">
                        
                        <?php if(isset($_SESSION['add-car'])):?>
                            <div class="bg-danger px-2">
                                <p>
                                    <?= $_SESSION['add-car'];
                                    unset($_SESSION['add-car']);?>
                                </p>
                            </div>

                        <?php endif; ?>
                            <div class="mb-2">
                                <input type="text" class="form-control" name="carname" value="<?= $carname ?>" placeholder="Enter car name e.g Toyota"/>
                              </div>
    
                              <div class="mb-2">
                                <input type="text" class="form-control" name="model" value="<?= $model ?>" placeholder="Enter car model"/>
                              </div>
    
                              <div class="mb-2">
                                <input type="number" class="form-control" name="year" value="<?= $year ?>" placeholder="Enter car year"/>
                              </div>

                              <div class="mb-2">
                                <input type="number" class="form-control" name="price" value="<?= $price ?>"  placeholder="Enter car price"/>
                              </div>
    
    
                              <div class="mb-2">
                              <label for="image">Car image </label> 
                                <input type="file" class="form-control" name="image" id="image" />
                              </div>
    
          
                              <button type="submit" name="submit">Add</button>
                        </form>
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