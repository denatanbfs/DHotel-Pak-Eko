<?php

include 'helper/connection.php';

$id_barang = $_GET["id"];

$query = "SELECT * FROM products WHERE id_produk = $id_barang";
$result = mysqli_query($con, $query);

$item = ''; 
if(mysqli_num_rows($result) == 1) {
    $item = mysqli_fetch_assoc($result);
} else {
    echo "Barang tidak ditemukan";
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Edit Produk - DCake</title>
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
<body style="background-image: url(img/bg.jpg);">
        <div class="container">
            <div class="section">

            <br><br>
            <!-- Register Form -->
            <div class="row">
                <div class="col m12">
                    <div class="card">
                        <div class="card-content">
                            <?php if (isset($_GET['error'])) { ?>
                                <div class="card red">
                                    <div class="card-content">
                                        <p class="center white-text"><?= $_GET['error'] ?></p>
                                    </div>
                                </div>
                            <?php } ?>
                            <form method="post" action="action/edit_produk.php" enctype="multipart/form-data">
                                <h4 class="center red-text darken-3"><b>Update Barang</b></h4>
                                <input type="hidden" name="id" value="<?=$id_barang?>">
                                <div class="row">
                                    <div class="input-field col s6">
                                        <input id="nama_produk" name="namaproduk" type="text" class="validate" placeholder="Nama Barang" value="<?= $item['nama_produk'] ?>" required>
                                    </div>

                                    <div class="input-field col s6">
                                        <input id="desc_produk" name="descproduk" type="text" class="validate" placeholder="Deskripsi" value="<?=$item['deskripsi']?>" required>
                                    </div>
                                </div>

                                <div class="input-field">
                                    <input id="har_ga" name="harga" type="number" class="validate" placeholder="Rp. 0" value="<?=$item['harga']?>" required>
                                </div>

                                <div class="input-field">
                                    <input id="jum_lah" name="jumlah" type="number" class="validate" placeholder="Jumlah" value="<?=$item['jumlah']?>" required>
                                </div><br>
                                <!-- <div class="file-field input-field">
                                    <div class="btn">
                                        <span><i class="material-icons right">insert_photo</i></span>
                                        <input type="file" name="file">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" name="gambar"  type="text" placeholder="Upload Gambar" value="<?=$item['gambar']?>">
                                    </div>
                                </div><br> -->
    
                                <div class="row center">
                                <button class="btn btn-large red darken-3 waves-effect waves-light button--rounded" type="submit" name="register" style="width: 95%">Update
                                    <i class="material-icons right">add_box</i>
                                </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
           

            </div>
            <br><br>
        </div>
    
        <script src="js/init.js"></script>
    </body>
</html>