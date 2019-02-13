<nav style="height:90px" class="brown lighten-4">
  <div class="nav-wrapper container" style="padding-top:10px">
    <a class="brand-logo"><img
        src="img/logo1.png"
        style="width:150px; height: auto; padding-top:5px"/></a>
    <ul class="right hide-on-med-and-down red-text">
      <?php if (isset($_SESSION["user"])) { ?>
      <li><a class="grey-text text-darken-3" href="dashuser.php" style="margin-top:18px;">Beranda</a></li>
      <?php } else { ?>

      <li><a class="grey-text text-darken-3" href="home.php" style="margin-top:18px;">Beranda</a></li>
      <?php } ?>

      <li><a class="grey-text text-darken-3" href="tentang.php" style="margin-top:18px;">Tentang Kami</a></li>

      <li><a class="grey-text text-darken-3" href="produk.php" style="margin-top:18px;">Produk Kami</a></li>

      <?php
      if (isset($_SESSION["user"]) && $_SESSION['level'] != 2) { ?>
      <?php $id_user = $_SESSION["user"]; ?>
      <li><a class="grey-text text-darken-3" href="keranjang.php" style="margin-top:18px;"><i class="material-icons left" style="margin-top: -18px;">shopping_cart</i>
      <?php $query2 = "SELECT sum(jumlah_psn) as jumlah from orders WHERE id_user = $id_user AND status = 0";
          $result1 = mysqli_query($con, $query2);
          $row1 = mysqli_fetch_array($result1); ?>
          <p style="float: left; margin-top: 0px; font-size: 18px"><?= $row1[0] ?> item(s)</p></a>
      </li>
      <?php } ?>

      <?php if(isset($_SESSION['fname'])) { ?>
        <li>
          <a class="dropdown-trigger grey-text text-darken-3" href="#" style="margin-top:18px;" data-target="akun"><i class="material-icons left" style="margin-top: -18px;">person</i><?=$_SESSION['fname']?><i class="material-icons right" style="margin-top: -18px;">arrow_drop_down</i></a>
        </li>
      <?php } else { ?>
        <li>
          <a class="dropdown-trigger grey-text text-darken-3" href="#" style="margin-top:18px;" data-target="akun"><i class="material-icons left" style="margin-top: -18px;">person</i>Akun<i class="material-icons right" style="margin-top: -18px;">arrow_drop_down</i></a>
        </li>
      <?php } ?>

      <ul id="akun" class="dropdown-content">
        <?php if (isset($_SESSION["user"])) { ?>
        <li>
          <a href="action/logout.php" style="red-text darken-3">Logout</a>
        </li>
        <?php } else { ?>
        <li><a href="login.php">Login</a></li>
        <li class="divider"></li>
        <li><a href="register.php">Register</a></li>
        <?php }?>
      </ul>
    </ul>
  </div>
</nav>  