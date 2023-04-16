<body class="archive post-type-archive post-type-archive-route wpb-js-composer js-comp-ver-4.11.2.1 vc_responsive">
    <header>
        <?php include "header.html" ?>
    </header>
    
    <form class="form1" onsubmit="return validateDangky()" action="" method="get">
        <h1 id="titlel">Đăng kí thành viên</h1>
        <table>
            <tr>
                <td><i class="fa fa-user"></i></td>
                <td><input class="name" id="name" placeholder="Họ và tên" type="text"></td>
            </tr>
            <tr>
                <td><i class="fa fa-user"></i></td>
                <td><input class="username" id="username" placeholder="Tên đăng nhập" type="text" ></td>
            </tr>
            <tr>
                <td><i class="fa fa-solid fa-key"></i></td>
                <td><input class="password" id="password" placeholder="Password" type="password" ></td>
            </tr>
            <tr>
                <td><i class="fa fa-solid fa-envelope"></i></td>
                <td><input class="email" id="email" placeholder="Email" type="text" ></td>
            </tr>
              <tr>
                <td><i class="fa fa-solid fa-phone"></i></td>
                <td><input class="telephone" id="telephone" placeholder="Số điện thoại" type="text" ></td>
              </tr>
        </table>

        <button class="button1" type="submit">Đăng ký</button>
        <button class="reset" name="reset" type="reset">Hủy</button>
      </form>

<footer> 
    <?php include "footer.php"?>
</footer>
</body>
</html>