<?php
include "dbconfig.php";
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the username and password from the form
    $email = $_POST['email'];
    $password = $_POST['password'];




    // Look up the user's credentials in the database
    $user =  $conn->query("SELECT * FROM user WHERE email = '$email' and password='$password'");
    if($user->num_rows != 0){
        $user = $user->fetch_assoc();
        // Set the session variables
        // $_SESSION['id'] = $user['id'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['user_name'] = $user['first_name']." ".$user['surname'];
        $_SESSION['userID'] = $user['id'];

        // Redirect to the home page
        header('Location: dashboard.php');

    }
    else{
        // Redirect to the login page
        header('Location: signin.php?error=1');
    }



}
?>
