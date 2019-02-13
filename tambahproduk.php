<!DOCTYPE html>
<html>
<head>
    <title>Tambah Produk - DCake</title>
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
                            <form method="post" action="action/add_produk.php" enctype="multipart/form-data">
                                <h4 class="center red-text darken-3"><b>Tambah Barang</b></h4>

                                <div class="row">
                                    <div class="input-field col s6">
                                        <input id="nama_produk" name="namaproduk" type="text" class="validate" placeholder="Nama Barang" required>
                                    </div>

                                    <div class="input-field col s6">
                                        <input id="desc_produk" name="descproduk" type="text" class="validate" placeholder="Deskripsi" required>
                                    </div>
                                </div>

                                <div class="input-field">
                                    <input id="har_ga" name="harga" type="number" class="validate" placeholder="Rp. 0" required>
                                </div>

                                <div class="input-field">
                                    <input id="jum_lah" name="jumlah" type="number" class="validate" placeholder="Jumlah" required>
                                </div>
                                <div>
                                <select class="browser-default" name="kategori">
                                    <option value="" disabled selected>Pilih Kategori</option>
                                <?php
                                include 'helper/connection.php';
                                    $result = mysqli_query($con, "SELECT * from kategori");
                                    while ($row = mysqli_fetch_assoc($result)){ ?>
                                        <option value="<?=$row['id_kategori']?>"><?=$row['nama_kategori']?></option>
                                    <?php } ?>
                                </select>
                                </div>
                                <div class="file-field input-field">
                                    <div class="btn">
                                        <span><i class="material-icons right">insert_photo</i></span>
                                        <input type="file" name="file">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text" placeholder="Upload Gambar">
                                    </div>
                                </div><br>

                                <div class="row center">
                                <button class="btn btn-large red darken-3 waves-effect waves-light button--rounded" type="submit" name="register" style="width: 95%">Tambah
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