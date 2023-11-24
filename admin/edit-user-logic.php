<?php

require 'config/database.php';

// check if form update button was clicked
if(isset($_POST['submit'])){
    $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    $firstname = filter_var($_POST['firstname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $lastname = filter_var($_POST['lastname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $phone = filter_var($_POST['phone'], FILTER_SANITIZE_NUMBER_INT);
    $password = filter_var($_POST['password'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $cpassword = filter_var($_POST['cpassword'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);



    // validate inputs
    if(!$firstname){
        $_SESSION['admin-edit-user'] = 'Please enter your first name';
    } elseif (!$lastname){
        $_SESSION['admin-edit-user'] = 'Please enter  your lastname';
    } elseif (!$email){
        $_SESSION['admin-edit-user'] = 'Please enter a valid email';
    } elseif (strlen($password) < 8 || strlen($cpassword) < 8){
        $_SESSION['admin-edit-user'] = 'Password should be more than 8 characters';
    } else{
        // if password do not match
        if($password !== $cpassword){
            $_SESSION['admin-edit-user'] = 'Passwords do not match';
        } else{
            // hash password
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            // check if username or email already exist in the database
            // $user_check_query = "SELECT * FROM users WHERE email = '$email' ";
            // $user_check_result = mysqli_query($conn, $user_check_query);
            // if(mysqli_num_rows($user_check_result) > 0){
            //     $_SESSION['admin-edit-user'] = 'Email already exist';
            // }
        }
    }


    // redirect back to edit page if there was any problem
    if(isset($_SESSION['admin-edit-user'])){
        // pass form data back to edit  page
        $_SESSION['edit-user-data'] = $_POST;
        header('location:' . ROOT_URL . 'admin/edit-user.php' );
        die();
    }else{
        // update user details in database
        $update_user_query = "UPDATE users SET firstname = '$firstname', lastname = '$lastname', email = '$email', phone = $phone, password = '$hashed_password' WHERE id = $id LIMIT 1";

        $update_users_result = mysqli_query($conn, $update_user_query);

        if (!mysqli_errno($conn)){
            // redirect to login page with success message
            $_SESSION['edit-user-success'] = 'User details updated Successfully';
            header('location:' . ROOT_URL . 'admin/dashboard.php');
            die();
        }
    }

}else{
    header('location:' .ROOT_URL . 'admin/dashboard.php');
    die();
}