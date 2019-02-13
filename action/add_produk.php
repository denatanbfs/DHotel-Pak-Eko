<?php

include '../helper/connection.php';

$nama_produk = $_POST["namaproduk"];
$har_ga = $_POST["harga"];
$jum_lah = $_POST["jumlah"];
$deskripsi = $_POST["descproduk"];
$id_kategori = $_POST["kategori"];

$code = $_FILES['file']['error'];
    if ($code === 0) {     

        $destination_path = getcwd();

        $error = "";
        $nama_folder = "upload";
        $tmp = $_FILES['file']['tmp_name'];
        $nama_file = $_FILES['file']['name'];
        $path = $destination_path . "\\..\\$nama_folder\\$nama_file";


        if (file_exists($path)) {
            $error = urldecode("File dengan nama yang sama sudah tersimpan, coba lagi");
            header("Location:../produkadmin.php?error=$error");
        }

        $ukuran = $_FILES['file']['size'];
        if ($ukuran > 2000000) {
            $error = urldecode("Ukuran melebihi 2 MB");
            header("Location:../produkadmin.php?error=$error");
        }

        $tipe_file = array('image/jpeg', 'image/gif', 'image/png');
        if (!in_array($_FILES['file']['type'], $tipe_file)) {
            $error = urldecode("Cek Kembali Ekstensi File Anda (*jpeg, *jpg, *gif, *png)");
            header("Location:../produkadmin.php?error=$error");
        }

        if(move_uploaded_file($tmp, $path)) {
            $query = "INSERT INTO products (id_kategori, nama_produk, harga, jumlah, deskripsi, gambar) 
            VALUES ($id_kategori, '$nama_produk', '$har_ga', '$jum_lah', '$deskripsi', '$nama_file')";

            if (mysqli_query($con, $query)) {
                header("Location:../produkadmin.php");
            } else {
                $error = urldecode("Data tidak berhasil ditambahkan");
                header("Location:../produkadmin.php?error=$error");
            }
        }
    } else {
        $error = urldecode("Foto tidak berhasil terupload");
        header("Location:../produkadmin.php?error=$error");
    }

mysqli_close($con);

?>