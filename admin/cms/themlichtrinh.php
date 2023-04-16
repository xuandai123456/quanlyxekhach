
<?php
            if($_SERVER["REQUEST_METHOD"]=="POST")
            {
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
                    $query = "insert into lichtrinh(malichtrinh, bendi_id, benden_id ,ngaydi,ngayve,motchieu,khuhoi,khoihanh ) values('$malichtrinh','$bendi_id', '$benden_id', '$ngaydi', '$ngayve',  '$khoihanh','$maxe', '$chieudi')";
                    $count=$db->exec($query);
                }
            }
        ?>
                 <div class="span9">
                     <div class="content">
                       <div class="module">
                          <div class="module-head">
                            <h3>Thêm mới Lịch Trình</h3>
                          </div>
                           <form action="" method="post" enctype="multipart/form-data" class="form-horizontal row-fluid">
                               
                                <div class="control-group">
                                   <label class="control-label">Mã Lịch Trình</label>
                                    <div class="controls">
                                        <input type="text" name="malichtrinh" class="span6"/>
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
                                            <input type="text" name="bendi_id" class="span6"/>
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
                                <input type="text" name="benden_id" class="span6" />
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
                                    <input type="date" name="ngaydi" class="span6">
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
                                        <input type="date" name="ngayve" class="span6" />
                
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
                                    <input type="text" name="khoihanh" class="span6" >
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
                                            <input type="text" name="maxe" class="span6" />
                
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
                                <label class="control-label">Chiều Đi</label>
                                  <div class="controls">
                                    <input type="text" name="chieudi" class="span6" />
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
                                        <button type="submit" class="btn-inverse">Thêm mới</button>      
                                    </div>
                                </div>
                           </form>
                        </div> 
                </div>
             </div>
 