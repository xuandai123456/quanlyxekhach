<header>
  <nav class="navbar navbar-expand-lg navbar-light " style="overflow:hidden; background-color: rgb(16 185 129)">
    <div class="container-fluid col-2" style="margin-left: 100px; margin-right: 0px;">
      <a href="index.php" style="text-decoration: none;" class="">
        <img class="d-inline-block align-top img-fluid" src="hinh_xe/LogoITBus.png" width="50" height="50">

        <span class="text-warning  h2 "> ITBus</span>
      </a>
    </div>
    <div class="container-fluid col-8">
      <div class="collapse navbar-collapse row">
        <style>
          .nav-item {
            display: flex;
            align-items: center;
          }

          .nav-item a {
            margin-bottom: 0;
          }

          .main_menu.navbar-nav {
            padding-top: 10px;
            display: flex;
            align-items: center;
          }
        </style>
        <ul class="main_menu navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item col-md-2">

          </li>
          <li class="nav-item col-md-2">
            <a style="font-size: 15px;" class="nav-link active h2 text-uppercase text-light"
              href="index.php?page=gioithieu">Giới thiệu</a>
          </li>
          <li class="nav-item col-md-2">
            <a style="font-size: 15px;" class="nav-link h2 text-uppercase text-light"
              href="index.php?page=lichtrinh">Lịch trình</a>
          </li>
          <li class="nav-item col-md-2">
            <a style="font-size: 15px;" class="nav-link h2 text-uppercase text-light " href="index.php?page=tintuc">Tin
              tức</a>
          </li>
          <li class="nav-item col-md-2">
          <?php
            if (isset($_COOKIE["account_ibus"])) {
              echo '<a style="font-size: 15px;" class="nav-link h2 text-uppercase text-light "
              href="index.php?page=phieudatve">Phiếu đặt vé</a>';
              
            } else {
              echo ' ';
            }
            ?>
          </li>
          <li class="nav-item col-md-2">
            
          </li>
          
          <li class="nav-item col-md-2">
            
            <?php
            if (isset($_COOKIE["account_ibus"])) {
              
              echo '<a style="font-size: 15px;" class="nav-link h2 text-uppercase text-light" href="index.php?page=profile">Tài Khoản</a>';
            } else {
              echo '<a style="font-size: 15px;" class="nav-link h2 text-uppercase text-light" href="index.php?page=login">Đăng nhập</a>';
            }
            ?>

          </li>
          <!-- <li class="nav-item col-md-2">
              <a style="font-size: 15px;" class="nav-link h2 text-uppercase text-light " href="index.php?page=register">Đăng Ký</a> 
          </li> -->
        </ul>
      </div>
    </div>
    <div class="container-fluid col-2"> </div>
  </nav>
</header>