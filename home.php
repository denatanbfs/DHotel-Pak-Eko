<?php
include 'helper/connection.php';
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Beranda - DCake</title>
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
          >
            D Cake Shop and Bakery
          </h1>
          <div class="row center">
            <h5
              class="header col s12 light white-text"
              style="padding-top : -1%;"
            >
              <b>Toko Kue dan Roti Pilihan Anda</b>
              <h5>Barber Shop and Cafe too</h5>
            </h5>
          </div>
          <nav>
            <div class="nav-wrapper center-align brown lighten-3">
              <form action='hasilcari.php' method="GET" autocomplete="off">
                <div class="input-field">
                  <input 
                    id="search"
                    type="search"
                    placeholder="Cari Kue"
                    name = 'q'
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
        </div>
      </div>
      <div class="parallax">
        <img src="img/bg0.jpg" alt="Unsplashed background img 1" />
      </div>
    </div><br>
    <div class="carousel"style="margin-bottom: 5%">
    <div><h4 class="header col s12 light red-text center-align" style="padding-top : -1%;font-family: 'Pacifico', cursive;"><b>Produk Terlaris</b></h4></div>
    <?php
        $query = "SELECT * FROM products";
        $result = mysqli_query($con, $query);
        while($row = mysqli_fetch_assoc($result)) {
      ?>
    <a class="carousel-item" style="width: 21%" href="#one!"><img src="img/<?=$row['gambar']?>"></a>
    <?php } ?>
    </div>
    
    <!-- <div class="container">
    <div class="row">
      <?php
        $query = "SELECT * FROM products limit 3";
        $result = mysqli_query($con, $query);
        while($row = mysqli_fetch_assoc($result)) {
      ?>
    
        <?php } ?> -->
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
