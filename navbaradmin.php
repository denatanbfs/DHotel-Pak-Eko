<nav style="height:90px" class="brown lighten-4"> 
    <div class="nav-wrapper container" style="padding-top:10px">
      <a class="brand-logo"><img src="img/logo1.png" style="width:150px; height: auto; padding-top:5px"></a>
      <ul class="right hide-on-med-and-down">
        <li><a class="grey-text text-darken-3" href="dashadmin.php" style="margin-top:18px;">Beranda</a></li>

        <li><a class="grey-text text-darken-3" href="datapenjualan.php" style="margin-top:18px;">Data Penjualan</a></li>

        <li><a class="grey-text text-darken-3" href="produkadmin.php" style="margin-top:18px;">Data Produk</a></li>
        
        <li><a class="dropdown-trigger grey-text text-darken-3" href="#" style="margin-top:18px;" data-target="akun"><i class="material-icons left" style="margin-top: -18px;">person</i>Admin<i class="material-icons right" style="margin-top: -18px;">arrow_drop_down</i></a>
      </li>
        <ul id="akun" class="dropdown-content">
        <?php
         if (isset($_SESSION["user"])) {
            ?>
          <li><a href="action/logout.php" style="brown-text darken-1">Logout</a></li>
          <?php } else {
          ?>
        <li><a href="login.php">Login</a></li>
        <li class="divider"></li>
        <li><a href="register.php">Register</a></li>
        <?php }?>
        </ul>
      </ul>
    </div>
</nav>