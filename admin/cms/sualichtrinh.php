
 <?php
        
            $id=$_REQUEST['id'];
           // Lấy dữ liệu cũ
            $q= "select * from lichtrinh where id=$id";
            $rows = $db->query($q);
            $r=$rows->fetch();
            
            
        if($_SERVER["REQUEST_METHOD"]=='POST')
        {
            //Validate du lieu
            $error = array(); //Khoi tao mang loi rong
                if(empty($_POST['malichtrinh']))
                {
                    $error[]='malichtrinh';
                }
                else
                {
                    $malichtrinh=$_POST['malichtrinh']; 
                }
                if(empty($_POST['bendi_id']))
                {
                    $error[]='bendi_id';
                }
                else
                {
                    $bendi_id=$_POST['bendi_id']; 
                }
                if(empty($_POST['benden_id']))
                {
                    $error[]='benden_id';
                }
                else
                {
                    $benden_id=$_POST['benden_id']; 
                }
                 if(empty($_POST['ngaydi']))
                {
                    $error[]='ngaydi';
                }
                else
                {
                    $ngaydi=$_POST['ngaydi'];
                }
                if(empty($_POST['ngayve']))
                {
                    $error[]='ngayve';
                }
                else
                {
                    $ngayve=$_POST['ngayve'];
                }
                if(empty($_POST['maxe']))
                {
                    $error[]='maxe';
                }
                else
                {
                    $maxe=$_POST['maxe'];
                }
                if(empty($_POST['chieudi']))
                {
                    $error[]='chieudi';
                }
                else
                {
                    $khuhoi=$_POST['chieudi'];
                }
                if(empty($_POST['khoihanh']))
                {
                    $error[]='khoihanh';
                }
                else
                {
                    $khoihanh=$_POST['khoihanh'];
                }
                
   
                 if (empty($error))
                 {
                    //Lay du lieu tu form
                    $query = "update lichtrinh"
                            . " set malichtrinh='$malichtrinh', bendi_id='$bendi_id', benden_id='$benden_id', ngaydi='$ngaydi', ngayve='$ngayve',khoihanh='$khoihanh', maxe='$maxe', chieudi='$chieudi' where id=$id";

                    //Thuc thi cau truy van
                    $count=$db->exec($query);
                     if($count>0){
                         header("location:index.php?page=dslt");
                     }
                     }
        }
   ?>
                 <div class="span9">
                     <div class="content">
                       <div class="module">
                          <div class="module-head">
                            <h3> Cập nhật Lịch Trình</h3>
                          </div>
                           <form action="" method="post" enctype="multipart/form-data" class="form-horizontal row-fluid">
                               
                                <div class="control-group">
                                   <label class="control-label">Mã Lịch Trình</label>
                                    <div class="controls">
                                        <input type="text" name="malichtrinh" class="span6" value="<?php if(isset($r)) echo $r['malichtrinh']; ?>"/>
                                            <span class="errors">
                                                <?php
                                                    if(!empty($error) && in_array('malichtrinh', $error))
                                                    {
                                                        echo "Mời nhập thông tin !";
                                                    }
                                                ?>
                                             </span>
                                        </div>
                                </div>   
                               
                               <div class="control-group">
                                    <label class="control-label">Bến Đi</label>
                                        <div class="controls">
                                            <input type="text" name="bendi_id" class="span6" value="<?php if(isset($r)) echo $r['bendi_id']; ?>"/>
                                            <span class="errors">
                                                <?php
                                                    if(!empty($error) && in_array('bendi_id', $error))
                                                    {
                                                        echo "Mời nhập thông tin !";
                                                    }
                                                ?>
                                             </span>
                                        </div>
                                </div> 
                               
                               <div class="control-group">
                                <label class="control-label">Bến Đến</label>
                                  <div class="controls">
                                <input type="text" name="benden_id" class="span6" value="<?php if(isset($r)) echo $r['benden_id']; ?>"/>
                                            <span class="errors">
                                                <?php
                                                    if(!empty($error) && in_array('benden_id', $error))
                                                    {
                                                        echo "Mời nhập thông tin !";
                                                    }
                                                ?>
                                             </span>
                                        </div>
                                </div> 
                               
                                <div class="control-group">
                                   <label class="control-label">Ngày Đi</label>
                                    <div class="controls">
                                    <input type="date" name="ngaydi" class="span6" value="<?php if(isset($r)) echo $r['ngaydi']; ?>"/>
                                            <span class="errors">
                                                <?php
                                                    if(!empty($error) && in_array('ngaydi', $error))
                                                    {
                                                        echo "Mời nhập thông tin !";
                                                    }
                                                ?>
                                             </span>
                                        </div>
                                </div> 
                                <div class="control-group">
                                   <label class="control-label">Ngày Về</label>
                                    <div class="controls">
                                        <input type="date" name="ngayve" class="span6" value="<?php if(isset($r)) echo $r['ngayve']; ?>"/>
                                            <span class="errors">
                                                <?php
                                                    if(!empty($error) && in_array('ngayve', $error))
                                                    {
                                                        echo "Mời nhập thông tin !";
                                                    }
                                                ?>
                                             </span>
                                        </div>
                                </div>   
                               <div class="control-group">
                                   <label class="control-label">Khởi Hành</label>
                                    <div class="controls">
                                    <input type="text" name="khoihanh" class="span6" value="<?php if(isset($r)) echo $r['khoihanh']; ?>"/>
                                            <span class="errors">
                                                <?php
                                                    if(!empty($error) && in_array('khoihanh', $error))
                                                    {
                                                        echo "Mời nhập thông tin !";
                                                    }
                                                ?>
                                             </span>
                                        </div>
                                </div> 
                               <div class="control-group">
                                    <label class="control-label">Mã Tàu</label>
                                        <div class="controls">
                                            <input type="text" name="maxe" class="span6" value="<?php if(isset($r)) echo $r['maxe']; ?>"/>
                                            <span class="errors">
                                                <?php
                                                    if(!empty($error) && in_array('maxe', $error))
                                                    {
                                                        echo "Mời nhập thông tin !";
                                                    }
                                                ?>
                                             </span>
                                        </div>
                                </div> 
                               
                               <div class="control-group">
                                <label class="control-label">Chiều đi</label>
                                  <div class="controls">
                                    <input type="text" name="chieudi" class="span6" value="<?php if(isset($r)) echo $r['chieudi']; ?>"/>
                                            <span class="errors">
                                                <?php
                                                    if(!empty($error) && in_array('chieudi', $error))
                                                    {
                                                        echo "Mời nhập thông tin !";
                                                    }
                                                ?>
                                             </span>
                                        </div>
                                </div> 
                               
                                 
                               
                               
                               <div class="control-group">
                                    <div class="controls">
                                        <button type="submit" class="btn-inverse">Cập nhật</button>      
                                    </div>
                                </div>
                           </form>
                        </div> 
                </div>
             </div>
