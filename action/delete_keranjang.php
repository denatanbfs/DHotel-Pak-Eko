<?php

include '../helper/connection.php';

    $id = $_GET["id"];
    $GLOBALS = $_POST['id'];
    $id_barang = $_POST['id_barang'];
    $stock = $_POST['stock'];
    $semua = $_POST['semua'];

$sql = "SELECT jumlah_psn, id_produk FROM orders WHERE id_order = $id";
$result = mysqli_fetch_assoc(mysqli_query($con, $sql));
$jumlah_pesan = $result['jumlah_psn'];
$idproduk = $result['id_produk'];

$query = "DELETE FROM orders WHERE id_order = $id";

if (mysqli_query($con, $query)) {
    $jumlah_saat_ini = mysqli_fetch_assoc(mysqli_query($con, "SELECT jumlah FROM products WHERE id_produk = $idproduk"))['jumlah'];
    $jumlah = $jumlah_saat_ini + $jumlah_pesan . "";
    mysqli_query($con, "UPDATE products SET jumlah = $jumlah where id_produk = $idproduk");
    header("Location:../keranjang.php");
} else {
    $error = urldecode("<div class='alert alert-danger' role='alert'>Data tidak berhasil di delete</div>");
    header("Location:../keranjang.php?error=$error");
}

mysqli_close($con); 

?>