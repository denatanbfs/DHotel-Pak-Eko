<?php
include 'helper/connection.php';
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Produk - DCake</title>
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
    <style>
      body {
        height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        background: url("img/bg1.jpg");
      }
    </style>
  </head>
  <body class="grey lighten-5">
    <?php include "navbar.php";?>
    
    <h4 class="center-align red-text" style="font-size: 50px; font-family: 'Pacifico', cursive;">Produk Kami</h4>
    <div class="container">
    <div class="row">
    <div class ="ku col s6 right-align brown-text text-darken-2" style="font-size: 20px"><a href="produkkategori.php?search=1" class="red-text">Kue Kering</a></div>
    <div class ="ku col s6 left-align brown-text text-darken-2" style="font-size: 20px"><a href="produkkategori.php?search=2" class="red-text">Kue Party</a></div><br><br><br>
    <?php
        $query = "SELECT * FROM products p INNER JOIN kategori k on p.id_kategori = k.id_kategori";
        $result = mysqli_query($con, $query);
        while($row = mysqli_fetch_assoc($result)) {
          if($row['jumlah'] == 0){
            $red = "red-text";
          } else{
            $red = "black-text";
          }
      ?>
      <div class="col s4">
      <a href="detailproduk.php?id=<?=$row['id_produk']?>">
        <div class="card hoverable">
          <div class="card-image">
            <img src="img/<?=$row['gambar']?>" />
            <span class="card-title"><?=$row['nama_produk']?></span>
            <a href="detailproduk.php?id=<?=$row['id_produk']?>" class="btn-floating halfway-fab waves-effect waves-light red"
              ><i class="material-icons">add_shopping_cart</i></a
            >
          </div>
          <div class="card-content">
            <p>Rp.<?=$row['harga']?></p>
            <p><?=$row['deskripsi']?></p>
            <p class="<?=$red?>">Stok : <?=$row['jumlah']?></p>
            <p style="red-text">Kategori : <?=$row['nama_kategori']?></p>
          </div>
        </div>
      </div>
      </a>
        <?php } ?>
      </div>
      </div>
    <div>
    </div>
      <?php include "footer.php";?>
    </div>
    <!-- Scripts -->
    <script src="js/init.js"></script>
  </body>
</html>