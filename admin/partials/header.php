<?php

require 'config/database.php';
if(!isset($_SESSION['user-id-1'])){
  header('location:' . ROOT_URL . 'admin');
}else{
  $user_id = $_SESSION['user-id-1'];
  $user_sql = "SELECT * FROM admin WHERE id = $user_id";
  $user_query = mysqli_query($conn, $user_sql);
  $user = mysqli_fetch_assoc($user_query);
}

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

    <title>TRUE-CARS</title>
</head>
<body>

        <!-- HEADERS / NAVBARS -->
    <section id="header">

        <div>
            <ul id="navbar">
                    <li><a href="<?= ROOT_URL ?>admin/dashboard.php">Dashboard</a></li>
                    <li><a href="<?= ROOT_URL ?>admin/shop.php">Shop</a></li>
                    <li id="lg-bag"><a href="<?= ROOT_URL ?>admin/dashboard.php"> <i class="fas fa-shopping-bag"></i> </a></li>
                    <li><a href="<?= ROOT_URL ?>admin/logout.php">Logout</a></li>
                    <li><a href="#" id="close"> <i class="fas fa-times"></i> </a></li>
            </ul>
        </div>

        <div id="mobile">
            <a href="cart.html"> <i class="fas fa-shopping-bag"></i> </a>
            <i id="bar" class="fas fa-outdent" ></i>
        </div>

        <div id="nav-location">
            <p><i class="fa-solid fa-location-dot"></i> Directions 75 E Putnam Ave, Cos Cob, CT 06807</p>
        </div>
    </section>

    <section id="header2">
        <div id="header2-images">
            <div>
                <img src="<?= ROOT_URL ?>images/toyota-dark-desktop-logo.png" alt="" id="img-1">
            </div>
            <div id="img-2">
                <img src="<?= ROOT_URL ?>images/toyotagreenwhichlogo.PNG" alt="">
            </div>
        </div>
        <div id="header2-ul">
            <ul>
                <li><a href="">Sales: (203) 621-5055 </a></li>
                <li><a href="">Service: (203) 621-5056</a></li>
            </ul>
        </div>
    </section> 