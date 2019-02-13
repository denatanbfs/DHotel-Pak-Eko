<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Admin - DCake</title>
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
    <?php include "navbaradmin.php";?>
    
    <h4 class="center-align red-text darken-3" style="font-size: 50px; font-family: 'Pacifico', cursive;">Welcome! Admin.</h4>

    <div>
      <?php include "footer.php";?>
    </div>
    <!-- Scripts -->
    <script src="js/init.js"></script>
  </body>
</html>
