<h1>DANH SÁCH KHÁCH HÀNG</h1>
    <?php if(mysqLi_num_rows($dskh)>0){
        ?>
    <table class="product-table" >
      <thead>
        <tr>
          <th style="width:50px" >STT</th>
          <th style="width:150px" >Tên khách hàng </th>
          <th style="width:100px">Số  điện thoại</th>
          <th style="width:200px">Email</th>
          <th style="width:100px">Tổng tiền mua</th>
          <th style="width:50px">Số lần mua</th>
          <th style="width:50px">Số lượng mua</th>
          <th style="width:50px">Thao tác</th>

        </tr>
      </thead>
      <tbody>
         <?php  $i=1; 
          while($row=mysqLi_fetch_array($dskh)){
            mysqli_data_seek($slmua, 0); 
            
            ?>
         <tr>
         <td><?php echo $i ;?></td>
         <td><?php echo $row['hoten'] ;?></td>
         <td><?php echo $row['sodienthoai'] ;?></td>
         <td><?php echo $row['email'] ;?></td>
         <td><?php echo number_format($row['tongtienmua'], 0, '', ','); ?>₫</td>
         <td><?php echo $row['solanmua']  ;?></td>
         <td><?php
         while($rowslmua=mysqLi_fetch_array($slmua)){
            if($rowslmua['sodienthoai']==$row['sodienthoai']){
                echo $rowslmua['soluong'];
            }
         }
         
         ?></td>
         <td>
    <button class="btn edit" onclick="openEditPopup('<?php echo $row['hoten']; ?>', '<?php echo $row['sodienthoai']; ?>', '<?php echo $row['email']; ?>')" style="background-color: #0056b3; color: white; border: none; padding: 8px 12px; border-radius: 4px; cursor: pointer;">
        <i class="fas fa-edit" style="color: white; cursor: pointer;"></i>
    </button>
</td>
         </tr>
         <div class="popup" id="editCustomerPopup">
    <div class="popup-content">
        <span class="close" onclick="closePopup()">&times;</span>
        <h2>Sửa Thông Tin Khách Hàng</h2>
        <form action="/azuki/trangchu/suakhachhang" method="post">
        <input type="hidden" id="id" name="id" required>
            <label for="editName">Tên khách hàng:</label>
            <input type="text" id="editName" name="name" required>

            <label for="editPhone">Số điện thoại:</label>
            <input type="text" id="editPhone" name="phone" required>

            <label for="editEmail">Email:</label>
            <input type="email" id="editEmail" name="email" required>

            <button type="submit" class="button-save" >Lưu</button>
        </form>
    </div>
</div>
         <?php $i++; } ?>
      </tbody>
    </table>
  

<?php } else{?>
 
   <h3>Không có dữ liệu cần tìm</h3>
<?php }?>