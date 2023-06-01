<?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['submit_button'])) {
            include "dbconfig.php";
            
            
            $id = rand(rand(1,34), rand(56, 600));
            $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
            $surname = mysqli_real_escape_string($conn, $_POST['surname']);
            $dob = mysqli_real_escape_string($conn, $_POST['dob']);
            $gender = mysqli_real_escape_string($conn, $_POST['gender']);
            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $phone = mysqli_real_escape_string($conn, $_POST['phone']);
            $password = mysqli_real_escape_string($conn, $_POST['password']);
            $conf_password = mysqli_real_escape_string($conn, $_POST['conf_password']);
            // $terms_acc = mysqli_real_escape_string($conn, $_POST['terms_acc']);

            if ($password !== $conf_password){
                echo "Error: password not matched";
            }


            // insert user data into database
            $sql = "INSERT INTO user (id, first_name, surname, dob, gender, email, phone, password, conf_password) VALUES ('$id', '$first_name', '$surname', '$dob', '$gender', '$email', '$phone', '$password', '$conf_password')";
            if (mysqli_query($conn, $sql)) {
                $_SESSION['email'] = $user['email'];
                $_SESSION['id'] = $id;
                // Redirect to the home page
                header('Location: signin.php');
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
    }
    }
?>