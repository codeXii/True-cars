<?php

require 'partials/header.php';

?>


        <!-- SHOWCASE / HERO -->
    <section class="showcase">

        <video autoplay loop muted src="./videos/Toyota of Greenwich Hero Banner.mp4"></video>

        <div class="showcase-content">
            <h1>Welcome to True Cars  <br> Toyota of Greenwich</h1>
            <form action="<?= ROOT_URL ?>search.php" method="GET">
            <div id="options-div">
                <select name="" id="">
                    <option value="">Type</option>
                    <option value="">New</option>
                    <option value="">Certified Used</option>
                    <option value="">Used</option>
                </select>
                <select name="" id="">
                    <option value="">Year</option>
                    <option value="">2024</option>
                    <option value="">2023</option>
                    <option value="">2022</option>
                    <option value="">2021</option>
                    <option value="">2020</option>
                    <option value="">2019</option>
                    <option value="">2018</option>
                    <option value="">2017</option>
                    <option value="">2016</option>
                    <option value="">2015</option>
                    <option value="">2014</option>
                </select>
                <select name="" id="">
                    <option value="">Make</option>
                    <option value="">Chevrolet</option>
                    <option value="">Ford</option>
                    <option value="">Honda</option>
                    <option value="">INFINITI</option>
                    <option value="">Lexus</option>
                    <option value="">Mercedez-benz</option>
                    <option value="">Toyota</option>
                </select>
                <select name="search" id="">
                    <option value="">Model</option>
                    <option value="">4Runner</option>
                    <option value="">Accord</option>
                    <option value="">Ascent</option>
                    <option value="">Avalon</option>
                    <option value="">Camry</option>
                    <option value="">Camry Hybrid</option>
                    <option value="">Corola</option>
                    <option value="">Corola Cross</option>
                    <option value="">Corola Cross Hybrid</option>
                    <option value="">Crown</option>
                    <option value="">Explorer</option>
                </select>

                <button type="submit" name="submit">Search</button>
                </form>
            </div>

            <div id="offer-div"  >
                <div>
                    <img src="./images/carredpic.png" alt="">
                    <div>
                        <p>NEW VEHICLES</p>
                    </div>
                </div>
                <div>
                    <img src="./images/carkeyred.png" alt="">
                    <div>
                        <p>USED VEHICLES</p>
                    </div>
                </div>
                <div>
                    <img src="./images/carofferred.png" alt="">
                    <div>
                        <p>SPECIAL OFFERS</p>
                    </div>
                </div>
                <div>
                    <img src="./images/cartyrered.png" alt="">
                    <div>
                        <p>SCHEDULE SERVICE</p>
                    </div>
                </div>
            </div>
           
        </div>
        <div id="special-image" >
            <img src="./images/service-specials-burst.png" alt="">
        </div>
    </section> 

        <!-- SHOWCASE DETAILS -->
    <section id="showcase-details">
        <div id="showcase-details-div1">
            <h2>Car of the Month - 2023 Toyota GR Corolla</h2>
            <p>Even at a standstill, GR Corolla looks like it’s ready for action. Flared front and rear fenders show off its wider stance for better grip of the road, while sporty black accents combine form and function. Its available red-painted calipers and GR badging hint that it’s more than just good looks. Lightweight yet robust, GR Corolla pumps out 300 horsepower and 273 lb.-ft. of torque out of its compact G16E-GTS turbocharged engine. With an exclusively offered 6-speed short-shift intelligent Manual Transmission (iMT), you’ve got total control. Inspired by the World Rally Championship, GR Corolla’s powertrain was developed to withstand almost any driving condition.</p>
            <button type="button" >Learn More</button>
        </div>
        <div id="showcase-details-div2">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/5C8LziN78KQ" title="2023 Toyota GR Corolla Overview | Toyota" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>

    </section> 


        <!-- CAROUSEL -->
    <section id="carousel">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="./images/cslide1.jpeg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="./images/cslide2.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="./images/cslide3.jpeg" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </section>

        <!-- TRADE WORTH SECTION -->
    <section id="trade-worth">
    
            <img src="./images/kbb-logo.svg" alt="">
            <div>
                <h2>What's Your Trade‑In Worth?</h2>
                <p>Get your Kelley Blue Book® Trade‑In Value.</p>
            </div>
        
    </section> 


        <!-- FIND YOUR NEXT TOYOTA  -->
     <section id="next-toyota">

        <div>
            <p class="lead">Find Your Next Toyota</p>
        </div>

        <div>
            <ul>
                <li id="list1">CARS & MINIVAN</li>
                <li id="list2">TRUCKS</li>
                <li id="list3">CROSSOVER & SUVS</li>
                <li id="list4">HYBRIDS & FUEL CELL</li>
            </ul>
        </div>

        <div id="div-1" class="car-divs mt-5 mt-md-4">
            <div>
                <img src="./images/cars&mini/camry.png" alt="" class="mb-2">
                <h4 class="fw-bold">Camry</h4>
            </div>
            <div>
                <img src="./images/cars&mini/corolla.png" alt="" class="mb-2">
                <h4 class="fw-bold">Corolla</h4>
            </div>
            <div>
                <img src="./images/cars&mini/corolla-hatchback.png" alt="" class="mb-2">
                <h4 class="fw-bold">Corolla Hatchback</h4>
            </div>
            <div>
                <img src="./images/cars&mini/toyota-crown.png" alt="" class="mb-2">
                <h4 class="fw-bold">Toyota Crown</h4>
            </div>
            <div>
                <img src="./images/cars&mini/prius.png" alt="" class="mb-2">
                <h4 class="fw-bold">Prius</h4>
            </div>
        </div>

        <div id="div-2" class="car-divs mt-5 false">
            <div>
                <img src="./images/trucks/tacoma.png" alt="" class="mb-2">
                <h4 class="fw-bold">Tacoma</h4>
            </div>
            <div>
                <img src="./images/trucks/tundra.png" alt="" class="mb-2">
                <h4 class="fw-bold">Tundra</h4>
            </div>
            <div>
                <img src="./images/trucks/tundra-i-force-max.png" alt="" class="mb-2">
                <h4 class="fw-bold">Tundra i-FORCE MAX</h4>
            </div>
        </div>

        <div id="div-3" class="car-divs mt-5 false">
            <div>
                <img src="./images/crossover&suvs/rav4.png" alt="" class="mb-2">
                <h4 class="fw-bold">RAV4</h4>
            </div>
            <div>
                <img src="./images/crossover&suvs/4runner.png" alt="" class="mb-2">
                <h4 class="fw-bold">4Runner</h4>
            </div>
            <div>
                <img src="./images/crossover&suvs/highlander.png" alt="" class="mb-2">
                <h4 class="fw-bold">highlander</h4>
            </div>
            <div>
                <img src="./images/crossover&suvs/240x80_2024_toyota_grand_highlander_left.png" alt="" class="mb-2">
                <h4 class="fw-bold">Grand highlander</h4>
            </div>
            <div>
                <img src="./images/crossover&suvs/sequoia.png" alt="" class="mb-2">
                <h4 class="fw-bold">sequoia</h4>
            </div>
        </div>

        <div id="div-4" class="car-divs mt-5 false">
            <div>
                <img src="./images/hybrids&fuelcell/bz4x.png" alt="" class="mb-2">
                <h4 class="fw-bold">Bz4x</h4>
            </div>
            <div>
                <img src="./images/hybrids&fuelcell/corolla-cross-hybrid-row-1-removebg-preview.png" alt="" class="mb-2">
                <h4 class="fw-bold">Corolla Cross-Hybrid</h4>
            </div>
            <div>
                <img src="./images/hybrids&fuelcell/corolla-hybrid.png" alt="" class="mb-2">
                <h4 class="fw-bold">Corolla hybrid</h4>
            </div>
            <div>
                <img src="./images/hybrids&fuelcell/prius-prime.png" alt="" class="mb-2">
                <h4 class="fw-bold">Prius prime</h4>
            </div>
            <div>
                <img src="./images/hybrids&fuelcell/prius.png" alt="" class="mb-2">
                <h4 class="fw-bold">prius</h4>
            </div>
        </div>
    </section>


        <!-- WE'LL BUY YOUR CAR -->
    <section id="buy-car">
        <div>
            <img src="./images/MicrosoftTeams-image-34 (1).jpg" alt="">
        </div>
    </section>   
    
    
        <!-- SECOND OFFER DIV -->
    <section id="offer-2">
        <div id="offer-2-div">
            <div id="offer-2-1">
                <div>
                    <img src="./images/offersnip1.PNG" alt="" class="img-fluid">
                    <img src="./images/offersnip2.PNG" alt="" class="img-fluid">
                </div>
                <div>
                    <img src="./images/offersnip3.PNG" alt="" class="img-fluid">
                </div>
            </div>
            <div id="offer-2-2">
                <img src="./images/offersnip4.PNG" alt="" class="img-fluid">
            </div>
        </div>
    </section>


        <!-- OUR REVIEWS -->
    <section id="reviews">
        <p class="lead h2">Our Reviews</p>
        <div id="reviews-img">
            <img src="./images/review1.PNG" alt="" class="img-fluid">
            <img src="./images/review2.PNG" alt="" class="img-fluid">
            <img src="./images/review3.PNG" alt="" class="img-fluid">
        </div>

        <button type="button">Read all reviews</button>
    </section>

        <!-- TOYOTA GREENWHICH ABOUT SECTION -->
    <section id="toyota-about">
        
        <div id="overlay" >
            <h2>WELCOME TO TRUE-CARS TOYOTA OF GREENWICH</h2>
        <p>Thank you for making your way to True Cars a subsidiary of Toyota of Greenwich, your certified Toyota dealer serving drivers throughout Cos Cob and the surrounding areas. At our dealership, you’ll find a solid selection of new Toyota for sale, as well as a carefully inspected lineup of pre-owned vehicles. We also have a well-connected finance center run by a qualified team of finance experts, who can help you get the right loan or lease in a quick, easy, and transparent manner.</p>
        <p>Our commitment to our customers continues well beyond the date of purchase. We also have a professional team of Toyota technicians on hand with the skills and equipment to handle all manner of maintenance and repairs, as well as a full stock of authentic parts. Make your way to Toyota of Greenwich in Cos Cob today for quality vehicles, a friendly team, and professional service at every step of the way. And if you have any questions for us, you can always get in touch at (203) 661-5055</p>
        </div>
    </section>


        <!-- MAP BOX BACKGROUND -->
    <section id="map-box">
    </section>

   
   


<!-- CUSTOM JAVASCRIPT -->
<?php
require 'partials/footer.php';
require 'partials/script.php';

?>

<!-- BOOTSTRAP JS SCRIPT  -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>