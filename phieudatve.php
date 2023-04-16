

<!DOCTYPE html>
<html lang="vi" prefix="og: http://ogp.me/ns#"> <!--<![endif]-->
<head>
<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="prerender" href="index.html"/>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

<link rel="icon" type="image/png" href="hinh_xe/favicon.ico"/>
    <link rel="stylesheet" href="wp-content/themes/sterling/open-sans-gh-pages/open-sans.css" /> 
    
<!-- This site is optimized with the Yoast SEO plugin v7.3 - https://yoast.com/wordpress/plugins/seo/ -->
<title>ITBus</title>
<meta name="description" content="Hành trình đảm bảo an toàn">
<meta property="og:locale" content="vi_VN" />
<meta property="og:type" content="website" />
</head>
<body class="archive post-type-archive post-type-archive-route wpb-js-composer js-comp-ver-4.11.2.1 vc_responsive">
<?php include("display/header_2.php")?>

<?php
  $db=new PDO("mysql:host=localhost;dbname=quanlyvexe",
  "root","");
$db->exec("set names utf8");
    

            if($_SERVER["REQUEST_METHOD"]=="GET")
            {
              
                if(isset($_GET['id'])){
                    $madatve = $_GET['id'];
                }
                  
                
                     $sql = "SELECT phieudatve.id,khachhang.tenkh,khachhang.sdt,khachhang.cmt,khachhang.email,xe.tenxe,toa.tentoa,ghe_id FROM phieudatve,khachhang,lichtrinh,toa,xe where phieudatve.khachhang_id=khachhang.id and phieudatve.lichtrinh_id = lichtrinh.id and lichtrinh.maxe=xe.id and phieudatve.tentoa_id =toa.id and  phieudatve.id=$madatve limit 1";
                   $rows=$db->query($sql);
                   
                    foreach($rows as $r) 
                    {                

?>

<br>
<br>
<br>
<br>
<br>
<br>
<section id="content-container" class="clearfix">
    <div class="row"></div>
    <div class="row"></div>
    <div class="enter-wrap tt-relative clearfix row ">

        <div class="col-md-2"></div>
        <div class="col-md-8">
        <table class="table  table-responsive" width=500px ,height=100px >
                    <thead>
                        <tr class="text-white bg-success">
                            <th>Tên Khách Hàng</th>
                            <th data-toggle="true">SĐT</th>
                            <th>Số CMT</th>
                            <th >Gmail</th>
                            <th >Tên Xe khách</th>
                            <th >Tầng</th>
                            <th >Số Ghế</th>
                            
                           
                        </tr>
                    </thead>
                    <tbody>
                         <tr class="route-row532">
                            <td><?php echo $r[1]; ?></td>
                            <td><?php echo $r[2]; ?></td>
                            <td><?php echo $r[3]; ?></td>
                            <td><?php echo $r[4]; ?></td>
                            <td><?php echo  $r[5]; ?></td>
                            <td style="text-align: center;"><?php echo  $r[6]; ?></td>
                            <td style="text-align: center;"><?php echo  $r[7]; ?></td>
                        </tr>
                        </tbody> 
                </table>
        </div>
        <div class="col-md-2"> </div>
    </div>    
</section>

<br>
<br>
<br>
<br>

<?php 
            }
        }
        
        ?>
<footer>
<?php include("display/footer.php") ?> 
</footer>
