<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>This is about denatan love arif</title>
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
        <?php include "navbar.php";?>

        <div class="container">
            <div class="section">

            <br><br>
            <!-- Login Form -->
            <div class="row"> 
                <div class="col s12 m6 offset-m3">
                <a class="navbar-brand"><img src="img/logo1.png" style="margin-left: 100px; margin-bottom: 20px; height: 90px; width: 220px;"></a> 
                    <div class="card">
                        <div class="card-content">
                            <div id="LoginForm">
                                <form method="post" action="action/login.php">
                                    <h4 class="center red-text darken-3"><b>Login</b></h4>

                                    <div class="input-field">
                                        <i class="material-icons prefix">local_post_office</i>
                                        <input id="e_mail" name="email" type="email" class="validate" placeholder="Email" required>
                                        <span class="helper-text" data-error="wrong" data-success="right"></span>
                                    </div>

                                    <div class="input-field">
                                        <i class="material-icons prefix">lock</i>
                                        <input id="pass_word" name="password" type="password" class="validate" placeholder="Password" required>
                                    </div>

                                    <div class="row center">
                                        <button class="btn btn-large red darken-3 waves-effect waves-light button--rounded" type="submit" name="login" style="width: 95%">Sign in
                                        </button>
                                    </div>
                                    <?php
                                    $message = '';
                                    if(isset($_GET["error"]))
                                    $message = $_GET["error"];
                                    echo "
                                    <div class='center-align red-text'>
                                    <p>$message</p>
                                    </div>
                                    ";
                                    ?>

                                    <div class="row center">
                                        <p class="blue-grey-text lighten-2">Belum Punya Akun? <a href="register.php" class="red-text darken-3">Register</a></p>
                                        <h1>Dewa Coding Denatanbfs</h1>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           

            </div>
            <br><br>
        </div>
        <?php include "footer.php"; ?>
        <script src="js/init.js"></script>
    </body>
</html>
