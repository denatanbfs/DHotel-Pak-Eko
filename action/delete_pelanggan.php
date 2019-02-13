<?php

include '../helper/connection.php';

$id = $_GET["id"];

$query = "DELETE FROM orders WHERE id_produk = $id";

if (mysqli_query($con, $query)) {
    header("Location:../datapenjualan.php");
} else {
    $error = urldecode("<div class='alert alert-danger' role='alert'>Data tidak berhasil di delete</div>");
    header("Location:../datapenjualan.php?error=$error");
}

mysqli_close($con); 

?>