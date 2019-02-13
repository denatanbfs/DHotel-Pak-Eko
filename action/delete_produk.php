<?php

include '../helper/connection.php';

$id = $_GET["id"];

$query = "UPDATE products SET flag = 1 WHERE id_produk = $id";

if (mysqli_query($con, $query)) {
    header("Location:../produkadmin.php");
} else {
    $error = urldecode("<div class='alert alert-danger' role='alert'>Data tidak berhasil di delete</div>");
    header("Location:../produkadmin.php?error=$error");
}

mysqli_close($con); 

?>