<?php
include 'helper/connection.php';
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Keranjang - DCake</title>
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
    
    <div class="container">
            <h2 class="mt-3 center-align">Keranjangku</h2>
            <?php
            $message = '';
            if(isset($_GET["error"])) {
                $message = $_GET["error"];
                echo "
                <p style='color:red; font-style:italic'>$message</p>
                ";
            }
            ?>
            <div class="row center-align">
                <table class="table table-stripped mt-3">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Gambar</th>
                            <th>Nama Produk</th>
                            <th>Kategori</th>
                            <th>Harga Satuan</th>
                            <th>Jumlah</th>
                            <th>Total</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    $id_user = $_SESSION['user'];
                    $query = "SELECT p.nama_produk as nama_produk, k.nama_kategori as namakategori, p.harga as harga, p.gambar as gambar, o.jumlah_psn as jumlahpesan, o.total as total, o.id_produk as id_produk, o.id_order as id_order  FROM orders o INNER JOIN products p ON o.id_produk = p.id_produk INNER JOIN kategori k ON k.id_kategori = p.id_kategori WHERE id_user = $id_user AND o.status = 0";
                    
                    $result = mysqli_query($con, $query);

                    if (mysqli_num_rows($result) > 0){
                        $index = 1;
                        $total = 0;
                        while($row = mysqli_fetch_assoc($result)){
                            $id_barang = $row["id_produk"];
                            $id_order = $row["id_order"];
                            $image = $row["gambar"];
                            $total += $row["total"];
                            echo "
                            <tr>
                                <td>" . $index++ . "</td>
                                <td>" ."<img src='upload/".$image."' width='150'  height='auto' alt='gambar'>"."</td>
                                <td>" .$row["nama_produk"]. "</td>
                                <td>" .$row["namakategori"]. "</td>
                                <td>" .$row["harga"]. "</td>
                                <td>" .$row["jumlahpesan"]. "</td>
                                <td>" .$row["total"]. "</td>
                                <td>
                                    <a href='action/delete_keranjang.php?id=$id_order' class='btn red'>Delete</a>
                                </td>
                            </tr>
                            ";
                        }
                    }
                    mysqli_close($con); 
                    ?>
                    </tbody>
                </table>
                <div class="right-align">
                <?php
                $message = '';
                if(!isset($total)) {
                    echo "<p style='font-size : 40px'>Total : Rp. 0</p>";
                } else { ?>
                    <p style="font-size : 40px">Total : Rp.<?=$total?></p>
                <?php } ?>

                <div class="center-align">
                <a href="cekout.php" class="btn btn-success modal-trigger" style="width: 40%; height: 60px; font-size: 25px; padding-top: 12px;">Check Out</a>
                </div>
                
                </div>
            </div>
        </div>

    <?php include "footer.php";?>
    </div>
    <!-- Scripts -->
    <script src="js/init.js"></script>
  </body>
</html>