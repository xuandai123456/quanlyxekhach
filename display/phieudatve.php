<?php include "header_2.php" ?>
<section id="content-container" class="clearfix">
    <div class="center-wrap tt-relative clearfix">
        <div class="section-list" id="Star-ha-noi">

            <div class="table-responsive">
                <table class="table ">
                    <thead>
                        <tr class="text-white bg-success">
                            <th data-hide="phone">STT</th>

                            <th data-hide="phone">Tên Khách Hàng</th>
                            <th data-hide="phone">Email</th>
                            <th data-hide="phone">Tầng</th>
                            <th data-hide="phone">Số ghế</th>
                            <th data-hide="phone">Bến đi</th>
                            <th data-hide="phone">Bến đến</th>
                            <th data-hide="phone">Ngày đi</th>
                            <th data-hide="phone">Ngày về</th>
                            <th data-hide="phone">Giờ khởi hành</th>

                            <th></th>
                        </tr>
                        <?php
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "quanlyvexe";
                        $conn = mysqli_connect($servername, $username, $password, $dbname);

                        // Truy vấn dữ liệu
                        
                        $sql = "SELECT * FROM (phieudatve a JOIN khachhang b ON a.khachhang_id = b.id) JOIN ((lichtrinh c JOIN bendi d ON c.bendi_id = d.id) JOIN benden e ON c.benden_id = e.id) ON a.lichtrinh_id = c.id WHERE c.malichtrinh = 'LT01'";

                        ;





                        $result = mysqli_query($conn, $sql);
                        $stt = 1;
                        while ($row = mysqli_fetch_assoc($result)) {

                            echo
                                "<tr>
                                        
                                        <td>" . $stt++ . "</td>
                                        <td>" . $row["tenkh"] . "</td>
                                        <td>" . $row["email"] . "</td>
                                        <td>" . $row["tentoa_id"] . "</td>
                                        <td>" . $row["ghe_id"] . "</td>
                                        <td>" . $row["tenben"] . "</td>
                                        <td>" . $row["tenbendi"] . "</td>
                                        <td>" . $row["ngaydi"] . "</td>
                                        <td>" . $row["ngayve"] . "</td>
                                        <td>" . $row["khoihanh"] . "</td>
                                    </tr>";

                        }


                        ?>
                    </thead>


                    <!-- <?php
                    // Kết nối đến cơ sở dữ liệu
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "quanlyvexe";
                    $conn = mysqli_connect($servername, $username, $password, $dbname);

                    // Truy vấn dữ liệu
                    $sql = "SELECT * FROM (phieudatve a JOIN khachhang b ON a.khachhang_id = b.id) JOIN ((lichtrinh c JOIN bendi d ON c.bendi_id = d.id) JOIN benden e ON c.benden_id = e.id) ON a.lichtrinh_id = c.id WHERE c.malichtrinh = 'LT01'";
                    ;
                    $result = mysqli_query($conn, $sql);

                    // Hiển thị dữ liệu trong bảng HTML
                    echo "<table>";

                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>
                                <td>" . $stt++ . "</td>
                                        <td>" . $row["tenkh"] . "</td>
                                        <td>" . $row["email"] . "</td>
                                        <td>" . $row["tentoa_id"] . "</td>
                                        <td>" . $row["ghe_id"] . "</td>
                                        <td>" . $row["tenben"] . "</td>
                                        <td>" . $row["tenbendi"] . "</td>
                                        <td>" . $row["ngaydi"] . "</td>
                                        <td>" . $row["ngayve"] . "</td>
                                         <td>" . $row["khoihanh"] . "</td>
                                        
                            </tr>";
                    }
                    echo "</table>";

                    // Đóng kết nối
                    mysqli_close($conn);
                    ?>
                             -->


                </table>
            </div>
        </div>

        </table>
    </div>
    </div>
    </div><!-- end #main-wrap -->

</section><!-- END content-container -->
<?php

include './admin/includes/connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $diemdi = $_POST['diemdi'];
    $diemden = $_POST['diemden'];
    $date1 = strtr($_POST['ngaydi'], '/', '-');
    ;
    $ngaydi = date("Y-m-d", strtotime($date1));




    $loaive = $_POST['loaive'];
    echo $_POST['ngayve'];


    $sql = "Select tau.tentau,tenbendi,benden.tenben,khoihanh from lichtrinh,tau,benden,bendi where lichtrinh.bendi_id = bendi.id and lichtrinh.benden_id = benden.id and lichtrinh.matau = tau.id and benden_id=$diemden and bendi_id=$diemdi and chieudi=$loaive and ngaydi='$ngaydi'";

    if (isset($_POST['ngayve']) && !empty($_POST['ngayve'])) {

        $date2 = strtr($_POST['ngayve'], '/', '-');
        ;
        $ngayve = date("Y-m-d", strtotime($date2));
        $sql .= "and ngayve='$ngayve'";
    }
    $rows = $db->query($sql);
    foreach ($rows as $r) {

    ?>
    <?php
    }
}
?>