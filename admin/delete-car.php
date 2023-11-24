<?php
require 'config/database.php';

if(isset($_GET['id'])){
    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);

    // Fetch car from database in order to delete image from folder
    $query = "SELECT * FROM car WHERE id = $id";
    $result = mysqli_query($conn, $query);

    // Making sure only 1 record is fetched from the database
    if(mysqli_num_rows($result) == 1){
        $car = mysqli_fetch_assoc($result);
        $image_name = $car['image'];
        $image_path = '../images/' . $image_name;


        if($image_path){
            unlink($image_path);


            // Delete post from database
            $delete_car_query = "DELETE FROM car WHERE id = $id";
            $delete_car_result = mysqli_query($conn, $delete_car_query);


            if(!mysqli_errno($conn)){
                $_SESSION['delete-car-success'] = "car was deleted successfully";

            }
        }
    }
}

header('location:' . ROOT_URL . 'admin/view-cars.php');
die();