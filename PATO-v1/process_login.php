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
        // echo "<script>const userID = $userID;</script>";
        
        if (!isset($_SESSION['session_start_time'])) {
            $_SESSION['session_start_time'] = time(); // Store the session start time
        }
        
        // Calculate time elapsed since session start
        $timeElapsed = time() - $_SESSION['session_start_time'];
        
        // Convert the time elapsed to a more readable format (e.g., hours, minutes, seconds)
        $hours = floor($timeElapsed / 3600);
        $minutes = floor(($timeElapsed % 3600) / 60);
        $seconds = $timeElapsed % 60;
    
        $_SESSION['time_elapsed'] = "$hours hours, $minutes minutes, $seconds seconds";
    

        // Redirect to the home page
        header('Location: dashboard.php');

    }
    else{
        // Redirect to the login page
        header('Location: login.php?error=1');
    }



}
?>
