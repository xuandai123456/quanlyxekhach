
<?php
            if($_SERVER["REQUEST_METHOD"]=="POST")
            {
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
                    $query = "insert into xe(maxe, tenxe, tinhtrang ,noixuatphat ) values('$maxe', '$tenxe', '$tinhtrang', '$noixuatphat')";
                    $count=$db->exec($query);
                }
            }
        ?>
                 <div class="span9">
                     <div class="content">
                       <div class="module">
                          <div class="module-head">
                            <h3>Thêm mới xe</h3>
                          </div>
                           <form action="" method="post" enctype="multipart/form-data" class="form-horizontal row-fluid">
                               
                                <div class="control-group">
                                    <label class="control-label">Mã Xe</label>
                                        <div class="controls">
                                            <input type="text" name="maxe" class="span6"/>
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
                                            <input type="text" name="tenxe" class="span6"/>
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
                                    <label class="control-label" >Tình Trạng</label>
                                    <div class="controls">
                                       
                                            <input type="text" class="span6" name="tinhtrang"/>
                                            <span class="errors">
                                                <?php
                                                    if(!empty($error) && in_array('tinhtrang', $error))
                                                    {
                                                        echo "Mời nhập thông tin!";
                                                    }
                                                ?>
                                             </span>
                                        
                                    </div>
                              </div>
                               
                               <div class="control-group">
                                    <label class="control-label">Nơi Xuất Phát</label>
                                        <div class="controls">
                                            <input type="text" name="noixuatphat" class="span6"/>
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
                                        <button type="submit" class="btn-inverse">Thêm mới</button>      
                                    </div>
                                </div>
                           </form>
                        </div> 
                </div>
             </div>
 