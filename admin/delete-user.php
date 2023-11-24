<?php
require 'config/database.php';

if(isset($_GET['id'])){

$id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);

//  fetch user from data
$query = "SELECT * FROM users WHERE id = $id";
$sql = mysqli_query($conn, $query);
$user = mysqli_fetch_assoc($sql);




// delete user from database
$delete_user = "DELETE FROM users WHERE id = $id";
$delete_user_query = mysqli_query($conn, $delete_user);

if(mysqli_errno($conn)){
    $_SESSION['delete-user'] ="couldn't delete {$user['firstname']} {$user['lastname']}";
}else{
    $_SESSION['delete-user-success'] = "user {$user['firstname']} {$user['lastname']} deleted successfully";
}



    
}

header('location:' . ROOT_URL . 'admin/dashboard.php');
die();