<?php 
session_start();
$db = mysqli_connect('localhost', 'admin', 'itec 327', 'users');


$email = "mail";
$pass = "password";
$update = false;

if (isset($_POST['signup'])) {
    $email = $_POST['mail'];
    $pass = $_POST['password'];

    mysqli_query($db, "INSERT INTO users (mail, password) VALUES ('$email', '$pass')"); 
    $_SESSION['message'] = "Signed Up"; 
    header('location: blog.html');
}

?>