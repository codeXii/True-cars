<?php

require 'config/database.php';

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

    <link rel="stylesheet" href="<?= ROOT_URL ?>cssb/bootstrap.min.css">

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
                <?php if(isset($_SESSION['user-id'])):?>
                    
                    <li><a href="<?= ROOT_URL ?>" class="active" >Home</a></li>
                    <li><a href="<?= ROOT_URL ?>shop.php">Shop</a></li>
                    <li id="lg-bag"><a href="<?= ROOT_URL ?>dashboard.php"> <i class="fas fa-shopping-bag"></i> </a></li>
                    <li><a href="<?= ROOT_URL ?>logout.php">Logout</a></li>
                    <li><a href="#" id="close"> <i class="fas fa-times"></i> </a></li>

                    
                <?php else : ?>
                <li><a href="<?= ROOT_URL ?>" class="active" >Home</a></li>
                <li><a href="#offer-2">Services</a></li>
                <li><a href="#toyota-about">About</a></li>
                <li><a href="#footer">Contact</a></li>
                <li><a href="<?= ROOT_URL ?>shop.php">Shop</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="signup.php">Register</a></li>
                <li><a href="#" id="close"> <i class="fas fa-times"></i> </a></li>
                <?php endif; ?>
            </ul>
        </div>

        <div id="mobile">
            <a href="<?= ROOT_URL ?>dashboard.php"> <i class="fas fa-shopping-bag"></i> </a>
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
                 <b>TRUE-CARS</b>
            </div>
        </div>
        <div id="header2-ul">
            <ul>
                <li><a href="">Sales: (203) 621-5055 </a></li>
                <li><a href="">Service: (203) 621-5056</a></li>
            </ul>
        </div>
    </section> 