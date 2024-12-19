<h1>DANH SÁCH ĐƠN HÀNG</h1>
    <?php if(mysqLi_num_rows($dondathang)>0){?>
      <div class="order-table-container">
    <table class="product-table" >
      <thead>
        <tr>
          <th >STT</th>
          <th >Tên khách hàng nhận</th>
          <th >Số  điện thoại</th>
          <th >Email</th>
          <th>Ghi chú</th>
          <th>Tổng tiền</th>
          <th>Phương thức</th>
          <th>Ngày mua</th>
          <th >Thao tác </th>
        </tr>
      </thead>
      <tbody>
      <?php 
      $i=1 ;
      while($row=mysqLi_fetch_array($dondathang)){
        mysqli_data_seek($chitietsanphammua, 0); 

    ?>
    
  <tr>
    <td><?php echo $i ?></td>
    <td><?php echo $row['hoten'] ?></td>
    <td><?php echo $row['sodienthoai'] ?></td>
    <td><?php echo $row['email'] ?></td>
    <td><?php if($row['ghichu']==''){echo "không có" ;}else{echo $row['ghichu'] ; }  ?></td>
    <td><?php echo $row['tongtien'] ?></td>
    <td><?php echo $row['phuongthuc'] ?></td>
    <td><?php echo $row['ngaydat'] ?></td>
   
    <td>
    <button onclick="openPopup('<?php echo $row['mahd']; ?>')"
    style="background-color: #16A085; color: white; border: none; padding: 10px 15px; border-radius: 6px; cursor: pointer;">
    Chi tiết
</button>
<a href="/azuki/trangchu/doitra/<?php echo $row['mahd']?>">
    <button 
        style="background-color:rgb(29, 51, 198); color: white; border: none; padding: 10px 15px; border-radius: 6px; cursor: pointer;">
        <i class="fa-solid fa-sync-alt"></i>
    
    </button>
</a>
 </td> 
  </tr>

   
  <div id="orderDetailsPopup<?php echo $row['mahd']; ?>" class="popup" style="display: none;">
    <div class="popup-content">
        <span class="close" onclick="closePopup('<?php echo $row['mahd']; ?>')">&times;</span>
        <h2>Chi tiết đơn hàng azuki:<?php echo  $row['mahd']; ?></h2>
        <div class="table">
    <div class="table-header">
        <div class="table-cell">Sản phẩm</div>
        <div class="table-cell">Đơn giá</div>
        <div class="table-cell">Số lượng</div>

    </div>
    <?php while($rowctsp=mysqLi_fetch_array($chitietsanphammua)) {?>

      <?php if($rowctsp['mahd']==$row['mahd'] ){?>
    <div class="table-row">
        <div class="table-cell" style="display:flex">
          <?php echo $rowctsp['tensp'] ?>
          <img  style=" width: 80px; height: 80px;"src="<?php echo WEBROOT . 'public/client/Picture/anhsanpham/' . $rowctsp['anhhienthi1']; ?>" alt="">
      </div>
        <div class="table-cell"><?php echo number_format($rowctsp['dongia'], 0, '', ','); ?>₫</div>
        <div class="table-cell"><?php echo $rowctsp['soluong'] ?></div>

    </div>
    <?php }}?>
    
</div>
        <button onclick="closePopup('<?php echo $row['mahd']; ?>')" 
                style="background-color: #3498DB; color: white; border: none; padding: 10px 15px; border-radius: 6px; cursor: pointer;">
            Đóng
        </button>
    </div>
</div>
    <?php 
     $i++ ; }
?>

      </tbody>
    </table>
      </div>
    <?php } else{?>
 
   <h3>Không có dữ liệu cần tìm</h3>
<?php }?>
  </div>
</div>
</div>