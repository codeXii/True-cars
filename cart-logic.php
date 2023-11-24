<?php
require 'config/database.php';

if (!isset($_SESSION['user-id'])){
    $_SESSION['cart'] = 'Please login to add item to cart';
    header('location:' . ROOT_URL . 'shop.php' );
} elseif (isset($_POST['submit'])){
    
    $user_id = filter_var($_POST['user-id'], FILTER_SANITIZE_NUMBER_INT);
    $model = filter_var($_POST['model'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $year= filter_var($_POST['year'], FILTER_SANITIZE_NUMBER_INT);
    $price= filter_var($_POST['price'], FILTER_SANITIZE_NUMBER_INT);
    $image = filter_var($_POST['image'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    
    // insert car into user cart table
    $insert_cart_query = "INSERT INTO cart (user_id, name, model, year, price, image) VALUES($user_id, 'Toyota', '$model', $year, $price, '$image')"; 

    $insert_cart_result = mysqli_query($conn, $insert_cart_query);

    if (!mysqli_errno($conn)){
        // redirect to login page with success message
        $_SESSION['add-cart-success'] = 'Cart item added successfully.';
        header('location:' . ROOT_URL . 'dashboard.php');
        die();
    }

}