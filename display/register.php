<?php include("header_2.php") ?>

<div class="motopress-wrapper content-holder clearfix">
    <div class="container">
        <div class="row">
            <div class="span12" data-motopress-wrapper-file="page.php" data-motopress-wrapper-type="content">
                <div class="row">
                    <div class="span12" data-motopress-type="static" data-motopress-static-file="static/static-title.php">
                        <section class="title-section">
                            <br><br>
                            <h1 class="title-header" style="margin-left: 540px;width:250px;border: 250px;color:black;text-align: center;">
                                Đăng ký thành viên </h1>
                            <style>
                                .errors {
                                    color: red;
                                    font-size: 12px;
                                }
                            </style>
                            <?php
                            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                $error = array(); //Khoi tao mang loi rong

                                if (empty($_POST['tenkh'])) {
                                    $error[] = 'tenkh';
                                } else {
                                    $tenkh = $_POST['tenkh'];
                                }
                                if (empty($_POST['cmt'])) {
                                    $error[] = 'cmt';
                                } else {
                                    $cmt = $_POST['cmt'];
                                }
                                if (empty($_POST['ngaysinh'])) {
                                    $error[] = 'ngaysinh';
                                } else {
                                    $ngaysinh = $_POST['ngaysinh'];
                                }
                                if (empty($_POST['sdt'])) {
                                    $error[] = 'sdt';
                                } else {
                                    $sdt = $_POST['sdt'];
                                }
                                if (empty($_POST['email'])) {
                                    $error[] = 'email';
                                } else {
                                    $email = $_POST['email'];
                                }
                                if (empty($_POST['password'])) {
                                    $error[] = 'password';
                                } else {
                                    $password = $_POST['password'];
                                }



                                if (empty($error)) {
                                    $query = "insert into khachhang( tenkh, cmt ,ngaysinh,sdt,email, password ) values('$tenkh', '$cmt', '$ngaysinh', '$sdt', '$email','$password')";
                                    $count = $db->exec($query);
                                }
                                echo "<script>alert('Đăng ký thành công!')</script>";
                                header('Location: index.php');
                            }
                            ?>
                            <div class="span9" style="margin-left: 550px;">
                                <div class="content">
                                    <div class="module">
                                        <div class="module-head">

                                        </div>
                                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal row-fluid">



                                            <div class="control-group">
                                                <br>
                                                <label class="control-label">Tên Khách Hàng</label>
                                                <div class="controls">
                                                    <input type="text" name="tenkh" class="span6 info_client" />
                                                    <span class="errors">
                                                        <?php
                                                        if (!empty($error) && in_array('tenkh', $error)) {
                                                            echo "Mời nhập thông tin !";
                                                        }
                                                        ?>
                                                    </span>
                                                </div>
                                            </div>

                                            <div class="control-group">
                                                <label class="control-label">Chứng Minh Nhân Dân</label>
                                                <div class="controls">
                                                    <input type="text" name="cmt" class="span6 info_client" />
                                                    <span class="errors">

                                                        <?php
                                                        if (!empty($error) && in_array('cmt', $error)) {
                                                            echo "Mời nhập thông tin !";
                                                        }
                                                        ?>
                                                    </span>
                                                </div>
                                            </div>

                                            <div class="control-group">
                                                <label class="control-label">Ngày Sinh</label>
                                                <div class="controls">
                                                    <input type="date" name="ngaysinh" class="span6 info_client" />
                                                    <span class="errors">

                                                        <?php
                                                        if (!empty($error) && in_array('ngaysinh', $error)) {
                                                            echo "Mời nhập thông tin !";
                                                        }
                                                        ?>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label">Số Điện Thoại</label>
                                                <div class="controls">
                                                    <input type="text" name="sdt" class="span6 info_client" />
                                                    <span class="errors">
                                                        <?php
                                                        if (!empty($error) && in_array('sdt', $error)) {
                                                            echo "Mời nhập thông tin !";
                                                        }
                                                        ?>
                                                    </span>
                                                </div>
                                            </div>

                                            <div class="control-group ">
                                                <label class="control-label tieude">Email</label>
                                                <div class="controls">
                                                    <input type="text" name="email" class="span6 info_client" />
                                                    <span class="errors">
                                                        <?php
                                                        if (!empty($error) && in_array('email', $error)) {
                                                            echo "Mời nhập thông tin !";
                                                        }
                                                        ?>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="control-group ">
                                                <label class="control-label tieude">NHẬP MẬT KHẨU</label>
                                                <div class="controls">
                                                    <input type="password" name="password" class="span6 info_client" />
                                                    <span class="errors">
                                                        <?php
                                                        if (!empty($error) && in_array('password', $error)) {
                                                            echo "Mời nhập thông tin !";
                                                        }
                                                        ?>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="control-group ">
                                                <label class="control-label tieude">XÁC NHẬN MẬT KHẨU</label>
                                                <div class="controls">
                                                    <input type="password" name="password" class="span6 info_client" />
                                                    <span class="errors">
                                                        <?php
                                                        if (!empty($error) && in_array('password', $error)) {
                                                            echo "Mời nhập thông tin !";
                                                        }
                                                        ?>
                                                    </span>
                                                </div>
                                            </div>



                                            <div class="control-group">
                                                <div class="controls">
                                                    <button type="submit" class="btn-inverse btn_confirm" style="width:100px;height: 40px;border: 100px;color:white;background-color: green">Đăng ký</button> <br>
                                                    <br>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <?php
                    //    include 'display/right.php';
                    ?>
                </div>
            </div>
        </div>
    </div>