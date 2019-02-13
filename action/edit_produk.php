<?php
include '../helper/connection.php';

$id = $_POST["id"];
$nama_produk = $_POST["namaproduk"];
$har_ga = $_POST["harga"];
$deskripsi = $_POST["descproduk"];
$jum_lah = $_POST["jumlah"];

    $query = "UPDATE products SET nama_produk = '$nama_produk', harga = '$har_ga', deskripsi = '$deskripsi', jumlah = '$jum_lah' WHERE id_produk = '$id'";

    if (mysqli_query($con, $query)) {
        header("Location:../produkadmin.php");
    } else {
        $error = urldecode("Data tidak berhasil ditambahkan");
        header("Location:../produkadmin.php?error=$error");
    }

mysqli_close($con);
?>