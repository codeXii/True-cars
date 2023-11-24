<?php

require 'config/database.php';

// check if form sign up button was clicked
if(isset($_POST['submit'])){

    $carname = filter_var($_POST['carname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $model = filter_var($_POST['model'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $year= filter_var($_POST['year'], FILTER_SANITIZE_NUMBER_INT);
    $price= filter_var($_POST['price'], FILTER_SANITIZE_NUMBER_INT);
    $image = $_FILES['image'];



    // validate inputs
    if(!$carname){
        $_SESSION['add-car'] = 'Please enter car name';
    } elseif (!$model){
        $_SESSION['add-car'] = 'Please enter  car model';
    } elseif (!$year){
        $_SESSION['add-car'] = 'Please enter car year';
    } elseif (!$price){
        $_SESSION['add-car'] = 'Please enter car price';
    } elseif (!$image['name']){
        $_SESSION['add-car'] = 'Please upload image of car';
    }  else{
                // check avatar
                // rename avatar
                $time = time();  // make each avatar unique using the current timestamp
                $image_name = $time . $image['name'];
                $image_tmp_name = $image['tmp_name'];
                $image_destination = '../images/' . $image_name; 

                // make sure file is an image
                $allowed_files = ['png', 'jpg', 'jpeg'];
                $extension = explode('.', $image_name);
                $extension = end($extension);
                if(in_array($extension, $allowed_files)){
                    // make sure the file size is not too large
                    if($avatar['size'] < 2000000){
                        // upload avatar
                        move_uploaded_file($image_tmp_name, $image_destination);

                    }else{
                        $_SESSION['add-car'] = 'file size too big. Should be less than 2mb';
                    }
                } else{
                    $_SESSION['add-car'] = 'File should be png, jpg, or jpeg';
                }

            }

    // redirect back to signup page if there was any problem
    if(isset($_SESSION['add-car'])){
        // pass form data back to sign up page
        $_SESSION['add-car-data'] = $_POST;
        header('location:' . ROOT_URL . 'admin/add-car.php' );
        die();
    }else{
        // insert new car into database
        $insert_car_query = "INSERT INTO car (carname, model, year, price, image) VALUES('$carname', '$model', $year, $price, '$image_name')"; 

        $insert_car_result = mysqli_query($conn, $insert_car_query);

        if (!mysqli_errno($conn)){
            // redirect to login page with success message
            $_SESSION['add-car-success'] = 'Registration successful. please log in';
            header('location:' . ROOT_URL . 'admin/view-cars.php');
            die();
        }
    }

}else{
    header('location:' .ROOT_URL . 'admin');
    die();
}