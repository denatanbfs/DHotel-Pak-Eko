<?php
include 'helper/connection.php';
session_start();

?>
<!DOCTYPE html>
<html>
  <head>
    <title>D-CAKE APP</title>
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
        background: url("img/bg5.jpg");
      }
    </style>
  </head>
  <body class="grey lighten-5">
    <?php include "navbar.php";?>

    <div class="row center-align" style="margin:50px">
        <div class="col s7">
            <a class="red-text text-darken-3" style="font-size: 50px"><i class="fas fa-store"></i></a><br>
            <a class="red-text text-darken-3" style="font-size: 25px; font-family: 'Pacifico'">Tentang DCake</a>
            <div class = "row white-text">
              <div class = "col s4">
              <p style="font-size: 18px">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae dolorem mollitia ullam molestias, aliquid harum, commodi magni vitae modi nostrum similique quam neque deleniti incidunt ex dicta. Itaque, est eos.</p>
              </div>
              <div class = "col s4">
              <p style="font-size: 18px">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae dolorem mollitia ullam molestias, aliquid harum, commodi magni vitae modi nostrum similique quam neque deleniti incidunt ex dicta. Itaque, est eos.</p>
              </div>
              <div class = "col s4">
              <p style="font-size: 18px">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae dolorem mollitia ullam molestias, aliquid harum, commodi magni vitae modi nostrum similique quam neque deleniti incidunt ex dicta. Itaque, est eos.</p>
              </div>
            </div>
        </div>
        <div class="col s1">
        </div>
        <div class="col s4">
          <div class="carousel carousel-slider">
          <a class="carousel-item" ><img src="img/tentang2.jpg"></a>
          <a class="carousel-item" ><img src="img/tentang4.jpg"></a>
          <a class="carousel-item" ><img src="img/tentang1.jpg"></a>
          <a class="carousel-item" ><img src="img/tentang5.jpg"></a>
          </div>
        </div>
    </div>
      
    <?php include "footer.php";?>
    <!-- Scripts -->
    <script src="js/init.js"></script>
  </body>
</html>
