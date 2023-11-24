<?php

require 'config/database.php';

// check if form sign up button was clicked
if(isset($_POST['submit'])){

    $firstname = filter_var($_POST['firstname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $lastname = filter_var($_POST['lastname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $phone= filter_var($_POST['phone'], FILTER_SANITIZE_NUMBER_INT);
    $password = filter_var($_POST['password'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $cpassword = filter_var($_POST['cpassword'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);



    // validate inputs
    if(!$firstname){
        $_SESSION['signup'] = 'Please enter your first name';
    } elseif (!$lastname){
        $_SESSION['signup'] = 'Please enter  your lastname';
    } elseif (!$email){
        $_SESSION['signup'] = 'Please enter a valid email';
    } elseif (strlen($password) < 8 || strlen($cpassword) < 8){
        $_SESSION['signup'] = 'Password should be more than 8 characters';
    } else{
        // if password do not match
        if($password !== $cpassword){
            $_SESSION['signup'] = 'Passwords do not match';
        } else{
            // hash password
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            // check if username or email already exist in the database
            $user_check_query = "SELECT * FROM admin WHERE email = '$email' ";
            $user_check_result = mysqli_query($conn, $user_check_query);
            if(mysqli_num_rows($user_check_result) > 0){
                $_SESSION['signup'] = 'Email already exist';
            }
        }
    }


    // redirect back to signup page if there was any problem
    if(isset($_SESSION['signup'])){
        // pass form data back to sign up page
        $_SESSION['signup-data'] = $_POST;
        header('location:' . ROOT_URL . 'admin/signup.php' );
        die();
    }else{
        // insert new user into database
        $insert_user_query = "INSERT INTO admin(firstname, lastname, email, phone, password)  VALUES('$firstname', '$lastname', '$email', $phone, '$hashed_password')";

        $insert_users_result = mysqli_query($conn,$insert_user_query);

        if (!mysqli_errno($conn)){
            // redirect to login page with success message
            $_SESSION['signup-success'] = 'Registration successful. please log in';
            header('location:' . ROOT_URL . 'admin/');
            die();
        }
    }

}else{
    header('location:' .ROOT_URL . 'admin/signup.php');
    die();
}