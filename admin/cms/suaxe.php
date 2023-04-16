
 <?php
        
            $id=$_REQUEST['id'];
           // Lấy dữ liệu cũ
            $q= "select * from xe where id=$id";
            $rows = $db->query($q);
            $r=$rows->fetch();
            
            
        if($_SERVER["REQUEST_METHOD"]=='POST')
        {
            //Validate du lieu
            $error = array(); //Khoi tao mang loi rong
                if(empty($_POST['maxe']))
                {
                    $error[]='maxe';
                }
                else
                {
                    $maxe=$_POST['maxe']; 
                }
                if(empty($_POST['tenxe']))
                {
                    $error[]='tenxe';
                }
                else
                {
                    $tenxe=$_POST['tenxe']; 
                }
                if(empty($_POST['tinhtrang']))
                {
                    $error[]='tinhtrang';
                }
                else
                {
                    $tinhtrang=$_POST['tinhtrang']; 
                }
                 if(empty($_POST['noixuatphat']))
                {
                    $error[]='noixuatphat';
                }
                else
                {
                    $noixuatphat=$_POST['noixuatphat'];
                }
                
   
                 if (empty($error))
                 {
                    //Lay du lieu tu form
                    $query = "update xe"
                            . " set maxe='$maxe', tenxe='$tenxe', tinhtrang='$tinhtrang', noixuatphat='$noixuatphat' where id=$id";

                    //Thuc thi cau truy van
                    $count=$db->exec($query);
                     if($count>0){
                         header("location:index.php?page=dsxe");
                     }
                     }
        }
   ?>
                 <div class="span9">
                     <div class="content">
                       <div class="module">
                          <div class="module-head">
                            <h3> Cập nhật Xe</h3>
                          </div>
                           <form action="" method="post" enctype="multipart/form-data" class="form-horizontal row-fluid">
                               
                                <div class="control-group">
                                   <label class="control-label">Mã Xe</label>
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
                                    <label class="control-label">Tên xe</label>
                                        <div class="controls">
                                            <input type="text" name="tenxe" class="span6" value="<?php if(isset($r)) echo $r['tenxe']; ?>"/>
                                            <span class="errors">
                                                <?php
                                                    if(!empty($error) && in_array('tenxe', $error))
                                                    {
                                                        echo "Mời nhập thông tin !";
                                                    }
                                                ?>
                                             </span>
                                        </div>
                                </div> 
                               
                               <div class="control-group">
                                <label class="control-label">Tình Trạng</label>
                                  <div class="controls">
                                    <select name="tinhtrang">
                                      <option value="1" <?php echo ($r['tinhtrang']==1)?'selected':'';?>>Đã chạy</option>
                                      <option value="0"<?php echo ($r['tinhtrang']==0)?'selected':'';?>>Chưa Chạy</option>
                                    </select>
                                            <span class="errors">
                                                <?php
                                                    if(!empty($error) && in_array('tinhtrang', $error))
                                                    {
                                                        echo "Mời nhập thông tin !";
                                                    }
                                                ?>
                                             </span>
                                        </div>
                                </div> 
                               
                                <div class="control-group">
                                   <label class="control-label">Nơi Xuất Phát</label>
                                    <div class="controls">
                                    <input type="text" name="noixuatphat" class="span6" value="<?php if(isset($r)) echo $r['noixuatphat']; ?>"/>
                                            <span class="errors">
                                                <?php
                                                    if(!empty($error) && in_array('noixuatphat', $error))
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
