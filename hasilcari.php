<?php
include 'helper/connection.php';

session_start();
$q = "";

if (isset($_GET['q'])) {
    $q = $_GET['q'];
}
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

    <div id="index-banner" class="parallax-container">
      <div class="section no-pad-bot">
        <div class="container">
          <br /><br />
          <h1
            class="header center brown-text text-lighten-2"
            style="margin-bottom: 5px; font-family: 'Pacifico', cursive;"
          >D Cake Shop and Bakery
          </h1>
          <div class="row center">
            <h5
              class="header col s12 light white-text"
              style="padding-top : -1%;"
            >
              <b>Toko Kue dan Roti Pilihan Anda</b>
            </h5>
          </div>
          <nav>
            <div class="nav-wrapper center-align brown lighten-3">
              <form action="hasilcari.php" autocomplete="off">
                <div class="input-field">
                  <input
                    id="search"
                    type="search"
                    placeholder="Cari Kue"
                    name="q"
                    required
                  />
                  <label class="label-icon" for="search"
                    ><i class="material-icons">search</i></label
                  >
                  <i class="material-icons">close</i>
                </div>
              </form>
            </div>
          </nav>
          <br /><br />
        </div>
      </div>
      <div class="parallax">
        <img src="img/bg0.jpg" alt="Unsplashed background img 1" />
      </div>
    </div>
    <br />
    <h4 class="center-align red-text" style="font-size: 30px; font-family: 'Pacifico', cursive;">Hasil Pencarian</h4><br>
    <div class="container">
    <div class="row">
    <?php
        $query = "SELECT * FROM products WHERE nama_produk LIKE '%$q%'";
        $result = mysqli_query($con, $query);
        while($row = mysqli_fetch_assoc($result)) {
      ?>
      <div class="col s4">
      <a href="detailproduk.php?id=<?=$row['id_produk']?>">
        <div class="card hoverable">
          <div class="card-image">
            <img src="img/<?=$row['gambar']?>" />
            <span class="card-title"><?=$row['nama_produk']?></span>
            <a class="btn-floating halfway-fab waves-effect waves-light red"
              ><i class="material-icons">add_shopping_cart</i></a
            >
          </div>
          <div class="card-content">
            <p>Rp.<?=$row['harga']?></p>
            <p><?=$row['deskripsi']?></p>
          </div>
        </div>
      </div>
        <?php } ?>
      </div>
      </div>
    </div>  
    </div>
    

    <div class="parallax-container valign-wrapper">
      <div class="section no-pad-bot">
        <div class="container"><div class="row center"></div></div>
      </div>
      <div class="parallax">
        <img src="img/bg2.jpg" alt="Unsplashed background img 2" />
      </div>
    </div>

    <?php include "footer.php";?>
    <!-- Scripts -->
    <script src="js/init.js"></script>
  </body>
</html>