
<script>
    function check(id)
            {
                if(confirm("Bạn có muốn xóa phiếu đặt vé này không ?")==true)
                {
                    //chuyen den trang xoa
                    window.location="index.php?page=xoakhachhang&id="+id;
                }    
            }
    </script>
   
             <div class="span9">
                 <div class="content">
                   <div class="module">
                      <div class="module-head">
                        <h3>Quản lý danh sách đặt vé</h3>
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
                                                Khách hàng
                                            </th>
                                            <th>
                                                Tầng
                                            </th>
                                            <th>
                                                Ghế
                                            </th>
                                            <th>
                                                Lịch trình
                                            </th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $query = "select * from phieudatve";
                  
                                        $rows=$db->query($query);
                                        foreach($rows as $r) 
                                        {                
                                            echo "<tr>"
                                                    . "<td>$r[0]</td>"
                                                    . "<td>$r[1]</td>"
                                                    . "<td>$r[2]</td>"
                                                    . "<td>$r[3]</td>"
                                                    . "<td>$r[4]</td>"
                                                    
                                                    
                                                   
                                                    . "<td>"
                                                    . "<a href='index.php?page=suakhachhang&id=$r[0]' title='Edit'><img src='../cssjsadmin/images/edit.png' width='18px'/></a> "

                                                    ."<a onclick='check($r[0])' href='#' title='Delete'><img src='../cssjsadmin/images/delete.png'width='18px'/></a>"
                                                    . "</td>"
                                                 . "</tr>";

                                      }
                                      ?>
                                    </tbody> 
                                    <tfoot>
                                        <tr>
                                            <th>
                                                ID
                                            </th>
                                            
                                             <th>
                                                Khách hàng
                                            </th>
                                            <th>
                                                Tầng
                                            </th>
                                            <th>
                                                Ghế
                                            </th>
                                            <th>
                                                Lịch trình
                                            </th>
                                           
                                        </tr>
                                    </tfoot>
                                    </table>
                                    <a href='index.php?page=themkhachhang'><button type='submit' class='btn-inverse'>Thêm mới</button></a>
                 </div>

            </div> 
         </div>
     </div>

  