<?php
include '../helper/connection.php';

session_start();

if (isset($_POST['login'])) {
    if (!empty($_POST['email']) || !empty($_POST['password'])) {

        $email = $_POST['email'];
        $password = md5($_POST['password']);
        $query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
        $result = mysqli_query($con, $query);
        
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['status'] == 2) {
                $_SESSION["user"] = $row['id_user'];
                $_SESSION["fname"] = $row['fname'];
                $_SESSION["level"] = $row['status'];
                header('Location: ../dashadmin.php');
            } else {
                $_SESSION["user"] = $row['id_user'];
                $_SESSION["fname"] = $row['fname'];
                $_SESSION["level"] = $row['status'];
                header('Location: ../dashuser.php');   
            }
        } else {
            $error = urldecode("Email or password is wrong");
            header("Location: ../login.php?error=$error");
        }
    
        mysqli_close($con);
    } else {
        $error = urldecode("Email or password is empty");
        header("Location: ../login.php?error=$error");
    }
}