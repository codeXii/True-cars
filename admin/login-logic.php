<?php

require 'config/database.php';

if(isset($_POST['submit'])){
// get form data
$email = filter_var($_POST['email'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$password = filter_var($_POST['password'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

if(!$email){
    $_SESSION['login'] = 'Email required';
} elseif(!$password){
    $_SESSION['login'] = 'password is required';
}else{
    // fetch user from database
    $fetch_user = "SELECT * FROM admin WHERE email = '$email'";

    $fetch_user_result = mysqli_query($conn, $fetch_user);

    if(mysqli_num_rows($fetch_user_result) == 1){
        // convert the record into assoc array
        $user_record = mysqli_fetch_assoc($fetch_user_result);
        $db_password = $user_record['password'];
        // compare form password with database password
        if(password_verify($password,$db_password)){
            // set session for access control
            $_SESSION['user-id-1'] = $user_record['id'];
            // set session if user is an admin
            if($user_record['is_admin'] == 1){
                $_SESSION['user_is_admin'] = true;
            }

             // log user in if password match
             header('location:' . ROOT_URL . 'admin/dashboard.php');


        } else{
            $_SESSION['login'] = 'please check your password';
        }
    }else{
        $_SESSION['login'] = 'email or password not correct';
    }
}




// if any problem, redirect back to login page with login data
if(isset($_SESSION['login'])){
    $_SESSION['login-data'] = $_POST;
    header('location:' . ROOT_URL . 'admin');
    die();
}

} else{
    header('location:' . ROOT_URL . 'admin');
    die();
}