<?php

include '../helper/connection.php';

$id = $_GET["id"];

$query = "UPDATE orders SET status = 1 WHERE id_user = $id";

if (mysqli_query($con, $query)) {
    header("Location:../keranjang.php");
} else {
    $error = urldecode("<div class='alert alert-danger' role='alert'>Payment Gagal</div>");
    header("Location:../cekout.php?error=$error");
}

mysqli_close($con); 

?>