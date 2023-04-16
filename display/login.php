
  <?php
  include("header_2.php")
  ?>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
  .error_login {
    color: red;
    font-size: 12px;
  }
</style>
<section class="login-block">
  <div class="container">
    <div style="margin:50px 0;" class="row">
      <div class="col-md-4 login-sec">
        <h2 class="text-center">Đăng Nhập</h2>
        <form class="login-form">
          <div class="form-group">
            <label for="exampleInputEmail1" class="text-uppercase">Tên Đăng Nhập</label>
            <input type="text" class="form-control name_login" placeholder="">
            <span class="error_login"></span>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1" class="text-uppercase">Mật Khẩu</label>
            <input type="password" class="form-control password_login" placeholder="">
            <span class="error_logi"></span>
          </div>


          <div class="form-check">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input">
              <small>Nhớ mật khẩu</small>
            </label>
            <a href="./client/login.php" class="btn btn-login btn_login float-right">Đăng nhập</a>
            <?php 
            if(isset($_COOKIE["account_ibus"])){
             echo ' <input type="hidden" class="malichtrinh" value="'.$_GET["malichtrinh"].'">';
             echo ' <input type="hidden" class="sotoa" value="'.$_GET["sotoa"].'">';
             echo ' <input type="hidden" class="soghe" value="'.$_GET["soghe"].'">';

            }
            ?>
            <div class="input-form">
              <p>Bạn Chưa Có Tài Khoản? <a href="index.php?page=register">Đăng Ký</a></p>
            </div>
          </div>
        </form>
      </div>
      <div class="col-md-8 banner-sec">
        <div style="height:380px;overflow:hidden;" id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="http://thacobus.net/Content/UserFiles/Images/Thaco/Tintuc/Tin-hoat-dong/2020/Thang8/mobihome_1.jpg" alt="First slide">
              
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="https://anphucar.vn/wp-content/uploads/2020/08/Xe-Giuong-Nam-Tong-Quan.jpg" alt="First slide">
              
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="https://photo2.tinhte.vn/data/attachment-files/2022/05/5994115_merbus_ghengoi_phoicanh.jpg" alt="First slide">
              
            </div>
          </div>


        </div>
      </div>
    </div>
</section>