<?php
require 'config/database.php';

if(isset($_GET['id'])){
    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
    // var_dump($id);
    // die();

    // Fetch post from database in order to delete thumbnail from folder
    $query = "SELECT * FROM cart WHERE id = $id";
    $result = mysqli_query($conn, $query);

    // Making sure only 1 record is fetched from the database
    if(mysqli_num_rows($result) == 1){
        $cart = mysqli_fetch_assoc($result);
        $image_name = $cart['image'];
        $image_path = './images/' . $image_name;


        if($image_path){
            // unlink($image_path);


            // Delete post from database
            $delete_cart_query = "DELETE FROM cart WHERE id = $id";
            $delete_cart_result = mysqli_query($conn, $delete_cart_query);


            if(!mysqli_errno($conn)){
                $_SESSION['cart-delete-success'] = "Item was deleted from cart successfully";

            }
        }
    }
}

header('location:' . ROOT_URL . 'dashboard.php');
die();