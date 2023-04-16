<!DOCTYPE html>
<html lang="vi" prefix="og: http://ogp.me/ns#" class="no-js no-svg">

<body class="archive post-type-archive post-type-archive-route wpb-js-composer js-comp-ver-4.11.2.1 vc_responsive">
    <header>
        <?php include "header_2.php" ?>
    </header>

    <form class="form2" onsubmit="return validateContact()" action="" method="get">


        <div class="single-contact">
            <h1 id="titlel">Liên hệ</h1>
            <i class="fa fa-map-marker"></i> Địa chỉ: 10, Đường 3/2, Phường Hưng Lợi, Quận Ninh Kiều, TP.Cần Thơ<br><br>
            <i class="fa fa-phone"></i> Số điện thoại: 0910101202<br><br>
            <i class="fa fa-envelope"></i> Email: hkt@gmail.com <br><br>
        </div>
        <h1 id="titlel">Phản hồi</h1>
        <div class="single-contact1">
            <table>
                <tr>
                    <td><i class="fa fa-user"></i></td>
                    <td><input class="username" placeholder="Tên đăng nhập" type="text" id="username"></td>
                </tr>
                <tr>
                    <td><i class="fa fa-solid fa-envelope"></i></td>
                    <td><input class="email" placeholder="Email" type="text" id="email"></td>
                </tr>
                <tr>
                    <td><i class="fa fa-gears"></i></td>
                    <td> <select class="problem" id="problem">
                            <option value="">-Vấn đề gặp phải-</option>
                            <option id="Thức ăn">Thức ăn</option>
                            <option id="Phục vụ">Phục vụ</option>
                            <option id="Giá cả">Giá cả</option>
                            <option id="khác ">Khác</option>
                        </select></td>
                </tr>
                <tr>
                    <td class="td1"><i class="fa fa-commenting"></i></td>
                    <td>
                        <textarea class="message" name="message" type="text" id="message" placeholder="Phản hồi"></textarea>
        </div>
        </td>

        </tr>
        </table>

        <button class="button2" type="submit">Gửi</button>
        </div>
        <footer>
            <?php include "footer.php" ?>
        </footer>
</body>

</html>