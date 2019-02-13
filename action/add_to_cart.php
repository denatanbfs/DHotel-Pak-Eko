<?php
include '../helper/connection.php';

$error='';
session_start();

if (!isset($_SESSION['user'])) {
    header('Location: ../login.php');
}

if(isset($_POST['tambah'])){
    $idproduk = $_POST['barang'];
    if(!empty($_POST["jumlah"])){
        $iduser = $_POST['user'];
        
        $jumlah_psn = $_POST['jumlah'];
        $stock = $_POST['jumlahstok'];
        $harga = $_POST['harga'];
        $totall = $jumlah_psn * $harga;
        $total = 0;

        if($jumlah_psn > $stock){
            $error = 'Jumlah stok tidak memenuhi';
            header("Location: ../detailproduk.php?error=$error&id=$idproduk");
        } else {
            $query = "INSERT INTO orders (id_produk, jumlah_psn, total, id_user) VALUES ($idproduk, $jumlah_psn, $totall, $iduser)";
            $total = $stock - $jumlah_psn;
            if(mysqli_query($con, $query)){
            $query2 = "UPDATE products set jumlah = $total where id_produk = $idproduk";
            if (mysqli_query($con, $query2)){
                header("Location: ../detailproduk.php?id=$idproduk");
            }else{
                $error = 'Error';
                header("Location: ../produk.php?error=$error&id=$idproduk");
            }
            }
        }
    }else {
        $error = 'Masukkan jumlah pembelian';
        header("Location: ../detailproduk.php?error=$error&id=$idproduk");
    }  
    
}    
?>