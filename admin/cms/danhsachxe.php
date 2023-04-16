
<script>
    function check(id)
            {
                if(confirm("Bạn có muốn xóa Xe khách này không ?")==true)
                {
                    //chuyen den trang xoa
                    window.location="index.php?page=xoaxe&id="+id;
                }    
            }
    </script>
   
             <div class="span9">
                 <div class="content">
                   <div class="module">
                      <div class="module-head">
                        <h3>Quản lý danh sách Xe khách</h3>
                      </div>
                       
                       <div class="module-body table">
                            <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table display"
                                width="100%">
                                    <thead>
                                        <tr>
                                            <th>
                                                ID
                                            </th>
                                            <th>
                                               Mã Xe khách
                                            </th>
                                             <th>
                                                Tên Xe khách
                                            </th>
                                            <th>
                                                Tình Trạng
                                            </th>
                                            <th>
                                                Nơi Xuất Phát
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $query = "select * from xe";
                                        $rows=$db->query($query);
                                        foreach($rows as $r) 
                                        {      
                                        ?>          
                                            <tr>
                                                    <td><?php echo $r[0]; ?></td>
                                                    <td><?php echo $r[1]; ?></td>
                                                    <td><?php echo $r[2]; ?></td>
                                                    <td><?php if($r[3]==1) {echo'đã chạy'; }else{ echo'chưa chạy';} ?></td>
                                                   <td><?php echo $r[4]; ?></td>
                
                                                    <td>
                                                    <a href='index.php?page=suaxe&id=<?php echo $r[0]?>' title='Edit'><img src='../cssjsadmin/images/edit.png' width='18px'/></a> 

                                                    <a onclick='check($r[0])' href='index.php?page=xoaxe&id=<?php echo $r[0]?>' title='Delete'><img src='../cssjsadmin/images/delete.png'width='18px'/></a>
                                                    </td>
                                                 </tr>
                                    <?php 
                                      }
                                      ?>
                                    </tbody> 
                                    <tfoot>
                                        <tr>
                                             <th>
                                                ID
                                            </th>
                                            <th>
                                               Mã Xe khách
                                            </th>
                                             <th>
                                                Tên Xe khách
                                            </th>
                                            <th>
                                                Tình Trạng
                                            </th>
                                            <th>
                                                Nơi Xuất Phát
                                            </th>
                                        </tr>
                                    </tfoot>
                                    </table>
                                    <a href='index.php?page=themxe'><button type='submit' class='btn-inverse'>Thêm mới</button></a>
                 </div>

            </div> 
         </div>
     </div>

  