<?php
include 'helper/connection.php';
session_start();

$id = $_GET['id'];
@$error = $_GET['error'];

$query = "SELECT * FROM products p INNER JOIN kategori k on p.id_kategori = k.id_kategori WHERE id_produk=$id";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($result);

?>
<!DOCTYPE html>
<html>
  <head>
    <title>DCake</title>
    <link rel="shortcut icon" type="image/png" href="img/icon2.png" />

    <!-- CSS -->
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
      integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
      crossorigin="anonymous"
    />
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
    <!-- Compiled and minified CSS -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"
    />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link
      href="css/style.css"
      type="text/css"
      rel="stylesheet"
      media="screen,projection"
    />
  </head>
  <body class="grey lighten-5">
    <?php include "navbar.php";?>
    
    <!-- <h4 class="center-align red-text" style="font-size: 50px; font-family: 'Pacifico', cursive;">Produk Kami</h4><br> -->

    <div class="row" style="margin:50px 80px;">
        <div class="col s4">
            <img src="img/<?=$row['gambar']?>" alt="" class="responsive-img">
        </div>
        <div class="col s4">
            <h5>Kategori : <?=$row['nama_kategori']?></h5>
            <h4><?=$row['nama_produk']?></h4>
            <h5>Rp. <?=$row['harga']?></h5>
            <br>
            <p>
                <?=$row['deskripsi']?>
            </p>
            <p style="font-size: 30px; color: red"> Jumlah :
                <?=$row['jumlah']?>
            </p>
        </div>
        <div class="col s4">
            <form action="action/add_to_cart.php" method="post">
            <div class="row">
            </div>
                <input type="hidden" name="user" value="<?=$_SESSION['user']?>">
                <input type="hidden" name="barang" value="<?=$id?>">
                <input type="hidden" name="harga" value="<?=$row['harga']?>">
                <div class="col s6">
                    <input type="number" name="jumlah" placeholder="Jumlah" style="width: 100%">
                </div>
                <input type="hidden" name="jumlahstok" value="<?=$row['jumlah']?>">
                <div class="col s6">
                    <button type="submit" class="btn" style="width: 100%" name="tambah"><i class="material-icons">add_shopping_cart</i></button>
                </div>
            </form>
            <a href="produk.php" class="btn red" style="width:100%; margin-top:20px">Kembali</a>
            <p style="margin-left : 30%; color : red"><?php echo $error
            ?></p>
        </div>
    </div>
      
    <?php include "footer.php";?>
    <!-- Scripts -->
    <script src="js/init.js"></script>
  </body>
</html>