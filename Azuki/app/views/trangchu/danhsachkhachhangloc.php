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
         </tr>
         <?php $i++; } ?>
      </tbody>
    </table>
  

<?php } else{?>
 
   <h3>Không có dữ liệu cần tìm</h3>
<?php }?>