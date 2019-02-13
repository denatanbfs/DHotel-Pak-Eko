<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Register - DCake</title>
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
            <!-- Register Form -->
            <div class="row">
                <div class="col s12 m8 offset-m2">
                <a class="navbar-brand"><img src="img/logo1.png" style="margin-left: 179px; margin-bottom: 20px; height: 90px; width: 220px;"></a> 
                    <div class="card">
                        <div class="card-content">
                            <?php if (isset($_GET['error'])) { ?>
                                <div class="card red">
                                    <div class="card-content">
                                        <p class="center white-text"><?= $_GET['error'] ?></p>
                                    </div>
                                </div>
                            <?php } ?>
                            <form method="post" action="action/add_user.php">
                                <h4 class="center red-text darken-3"><b>Buat Akun</b></h4>

                                <div class="row">
                                    <div class="input-field col s6">
                                        <input id="first_name" name="firstname" type="text" class="validate" placeholder="Nama Depan" required>
                                    </div>

                                    <div class="input-field col s6">
                                        <input id="last_name" name="lastname" type="text" class="validate" placeholder="Nama Belakang" required>
                                    </div>
                                </div>

                                <div class="input-field">
                                    <input id="e_mail" name="email" type="email" class="validate" placeholder="Email" required>
                                    <span class="helper-text" data-error="wrong" data-success="right"></span>
                                </div>

                                <div class="input-field">
                                    <input id="pass_word" name="password" type="password" class="validate" placeholder="Password" required>
                                </div>

                                <div class="row center">
                                <button class="btn btn-large red darken-1 waves-effect waves-light button--rounded" type="submit" name="register" style="width: 95%">Sign Up
                                    <i class="material-icons right">send</i>
                                </button>
                                </div>

                                <div class="row center">
                                        <p class="blue-grey-text lighten-2">Sudah Punya Akun? <a href="login.php" class="red-text darken-3">Login</a></p>
                                    </div>
                            </form>
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