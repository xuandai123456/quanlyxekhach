<?php
include './connect.php';
$sql = "SELECT * FROM KHACHHANG";
$arr_client = $conn->query($sql)->fetch_all();
if (isset($_GET["account"])) {
    $account = $_GET["account"];
    $password = $_GET["password"];
    $account_client = $conn->query("SELECT * FROM KHACHHANG WHERE tenkh='" . $account . "' ")->fetch_all();
    if (count($account_client) == 0) {
        echo "<script type='text/javascript'>alert('Tài khoản không tồn tại !');</script>";
    } else if (count($account_client) > 0) {
        if ($account_client[0][6] != $password) {
            echo "<script type='text/javascript'>alert('Mật khẩu không trùng khớp !');</script>";
        } else {
            $cookie_name = "account_ibus";
            $cookie_value = [$account_client[0][0], $account_client[0][6]];
            setcookie($cookie_name, implode(",", $cookie_value), time() + (86400 * 30), "/");

            $_SESSION['user_name'] = $account_client['tenkh'];
            $_SESSION['user_email'] = $account_client['email'];
            $_SESSION['user_id'] = $account_client['id'];
            $message = "Đăng nhập thành công !";
            echo '<input type="hidden" class="login_success"/>';
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
    }
}
?>