<?php
require 'partials/header.php';

// GETTING LOGGED IN USER DETAILS
if(isset($_SESSION['user-id'])){
    $user_id = $_SESSION['user-id'];
    $user_query = "SELECT * FROM users WHERE id = $user_id";
    $user_result = mysqli_query($conn, $user_query);
    $user_record = mysqli_fetch_assoc($user_result);
    
    
    // FETCH ALL CURRENT USER CART ITEMS
    $cart_sql = "SELECT * FROM cart WHERE user_id = $user_id";
    $cart_query = mysqli_query($conn, $cart_sql);
    
    
    $cart_total_sql = "SELECT SUM(price) AS sum FROM cart WHERE user_id = $user_id";
    $cart_total_query = mysqli_query($conn, $cart_total_sql);
    
    while($row = mysqli_fetch_assoc($cart_total_query)){
        $total = $row['sum'];
    }
}else{
    header('location:' . ROOT_URL . 'login.php');
    die();
}


?>



        <!-- DASHBOARD -->
        <section id="account-info" class="about-header section-p1">
            <h3> <i class="fa-regular fa-user"></i></i> <?="{$user_record['firstname']} {$user_record['lastname']}" ?></h3>
            <p> <?= "{$user_record['email']}" ?></p>
        </section>
        
                        <!-- CART TABLE -->
        <section id="cart" class="section-p1">
            <table width="100%">
                <thead>
                    <tr>
                        <td>Remove</td>
                        <td>Image</td>
                        <td>Product</td>
                        <td>Price</td>
                        <td>Quantity</td>
                        <td>Subtotal</td>
                    </tr>
                </thead>
                <tbody>
                    <?php if(mysqli_num_rows($cart_query) > 0):?>
                    <?php while($cart = mysqli_fetch_assoc($cart_query)):?>

                    

                    <tr>
                        <td> <a href="<?= ROOT_URL ?>delete-cart-item.php?id=<?= $cart['id'] ?>"><i class="far fa-times-circle"></i></a> </td>
                        <td><img src="./images/<?= $cart['image'] ?>" alt=""></td>
                        <td><?= $cart['model'] ?></td>
                        <td>$<?=number_format($cart['price'], 2) ?></td>
                        <td> <input type="number" value="1" name="" id=""> </td>
                        <td>$<?= $cart['price'] ?></td>
                    </tr>
                    <?php endwhile; ?>
                    <?php else :?>
                        <p class="bg-danger p-2">You currently have no items in your cart</p>
                    <?php endif; ?>
                    
                </tbody>
            </table>
        </section>
            
                            <!-- CART CHECKOUT -->
        <section id="cart-add" class="section-p1">
            <div id="coupon">
                <h3>Apply discount Coupon</h3>
                <div>
                    <input type="text" name="" id="" placeholder="Enter your coupon">
                    <button class="normal" >Apply</button>
                </div>
            </div>
        
            <div id="sub-total">
                <h3>Cart Total</h3>
                <table>
                    <tr>
                        <td>Cart Subtotal</td>
                        <td>$<?= number_format( $total, 2) ?></td>
                    </tr>
                    <tr>
                        <td>Shipping</td>
                        <td>Free</td>
                    </tr>
                    <tr>
                        <td><strong>Total</strong></td>
                        <td><strong>$ <?= number_format($total, 2)  ?>  </strong></td>
                    </tr>
                </table>
                <button class="normal" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Proceed to checkout</button>
            </div>
        </section>

        
         <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5 text-center" id="staticBackdropLabel">PAYMENT</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <!-- <p>Please choose preffered payment method below</p> -->


        <!-- <div class="mb-1">
            <label for="" class="form-label">Payment type</label>
            <select class="form-select" id="payment" name="payment" onchange="paymentType()">
                <option value="bank">Bank transfer</option>
                <option value="card">Credit Card</option>
                <option value="bitcoin">Bitcoins</option>
            </select>
         </div>


         <div class="bg-danger div1">
            <p class="p-1">This method is currently unavailable</p>
         </div> -->

         <div class="div2 mt-3">
            <p>Pay the sum of $<?= number_format($total, 2)  ?> to the bitcoin address below  <br> bc1qm8clycjrurwd85p9gswhls7s7x5exp03t7mp4r </p>
            
            <small>Dont have a bitcoin wallet or dont know how to make a payment contact our online customer care for support now 
             <!-- <i class="fa-brands fa-whatsapp h5 text-success"></i> -->
            </small>
            
         </div>


        

                    
                     

            
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary print"><i class="fas fa-print"></i> Print</button> -->
      </div>
    </div>
  </div>
</div>

         


        <!-- TOYOTA GREENWHICH ABOUT SECTION -->
    <section id="toyota-about">
        
        <div id="overlay" >
            <h2>WELCOME TO TRUE-CARS TOYOTA OF GREENWICH</h2>
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
    
<script type="text/javascript">

    // VARIABLES FOR CASH PAYMENT
    function paymentType(){
        var div2 = document.querySelector('.div2');
        var div1 = document.querySelector('.div1');
        var payment = document.querySelector('#payment');
    

            // cash_div.style.display = 'none';
            // cash_div1.style.display = 'none';

        paymentTypeValue = payment.value;

        if(paymentTypeValue == "bank"){
            div1.style.display = 'block';
        }

        if(paymentTypeValue == "card"){
            div1.style.display = 'block';
        }
        

        if (paymentTypeValue == "bitcoin"){
            div2.style.display = 'block';
            div1.style.display = 'none';
        }else{
            div2.style.display = 'none';
        }
    }
    paymentType();
</script>


  
<script src="<?= ROOT_URL ?>js/bootstrap.min.js"></script>


<!-- CUSTOM JAVASCRIPT -->
<?php
    require 'partials/script.php';
?>

<!-- BOOTSTRAP JS SCRIPT  -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>