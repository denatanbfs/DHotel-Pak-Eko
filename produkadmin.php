<?php
include 'helper/connection.php';
session_start();
?>
<html>
    <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Data Produk - DCake</title>
    <link rel="shortcut icon" type="image/png" href="img/icon2.png" />

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    </head>
    <body>
    <?php include "navbaradmin.php" ?>
        <div class="container">
            <h2 class="mt-3 center-align">Daftar Produk</h2>
            <?php
            $message = '';
            if(isset($_GET["error"])) {
                $message = $_GET["error"];
                echo "
                <p style='color:red; font-style:italic'>$message</p>
                ";
            }
            ?>
            <a href="tambahproduk.php" class="btn btn-success mt-3">Tambah Barang</a>
            <div class="row">
                <table class="table table-stripped text-center mt-3">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Gambar</th>
                            <th>Nama Produk</th>
                            <th>Kategori</th>
                            <th>Harga Satuan</th>
                            <th>Jumlah</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    
                    $query = "SELECT * FROM products p INNER JOIN kategori k on p.id_kategori = k.id_kategori WHERE flag = 0";
                    
                    $result = mysqli_query($con, $query);

                    if (mysqli_num_rows($result) > 0){
                        $index = 1;
                        while($row = mysqli_fetch_assoc($result)){
                            $id_barang = $row["id_produk"];
                            $image = $row["gambar"];
                            echo "
                            <tr>
                                <td>" . $index++ . "</td>
                                <td>" ."<img src='upload/".$image."' width='150'  height='auto' alt='gambar'>"."</td>
                                <td>" .$row["nama_produk"]. "</td>
                                <td>" .$row["nama_kategori"]. "</td>
                                <td>" .$row["harga"]. "</td>
                                <td>" .$row["jumlah"]. "</td>
                                <td>
                                    <a href='produkeditform.php?id=$id_barang' class='btn btn-warning'>Edit</a>
                                    <a href='action/delete_produk.php?id=$id_barang' class='btn btn-danger'>Delete</a>
                                </td>
                            </tr>
                            ";
                        }
                    }


                    mysqli_close($con); 
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    <script src="js/init.js"></script>

    <body>
</html>