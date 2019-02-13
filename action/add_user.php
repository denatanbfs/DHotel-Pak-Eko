<?php
include '../helper/connection.php';

session_start();

if (isset($_POST['register'])) {
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    // die($password);
    $query = "INSERT INTO users (fname, lname, email, password) 
            VALUES ('$first_name','$last_name','$email','$password')";
        // die($query);
    if (mysqli_query($con, $query)) {
        $id = mysqli_insert_id($con);
        $_SESSION['user'] = $id;
        header('Location: ../login.php');
    } else {
        $error = urldecode("There is something wrong with the registration");
        header("Location: ../register.php?error=$error");
    }
    mysqli_close($con);
}