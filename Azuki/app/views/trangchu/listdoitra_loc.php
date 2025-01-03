<h1>DANH SÁCH ĐƠN HÀNG</h1>
<a style="margin-top:200px" href="/azuki/trangchu/danhsachdoitra"><button style="background-color:rgb(52, 28, 185); color: white; border: none; border-radius: 6px; padding: 8px 15px; cursor: pointer; display: inline-block;">Thêm đơn đổi trả</button></a>
<?php ?>
    <div class="order-table-container">
    <table class="product-table" >
      <thead>
        <tr>
          <th >STT</th>
          <th>Mã đổi trả</th>
          <th >Số hoá hơn</th>
          <th >Tên khách </th>
          <th >Số điện thoại</th>
          <th >Ngày đổi trả</th>
          <th >Thao tác </th>
        </tr>
      </thead>
      <tbody>
      <?php 
      $i=1 ;
      while($row=mysqLi_fetch_array($listdoitra)){
        mysqli_data_seek($chitietdoitra, 0); 

    ?>
  <tr>
    <td><?php echo $i ?></td>
    <td><?php echo $row['madt'] ?></td>
    <td><?php echo $row['mahd'] ?></td>
    <td><?php echo $row['hoten'] ?></td>
    <td><?php echo $row['sodienthoai'] ?></td>
    <td><?php echo $row['ngaydoitra'] ?></td>
    <td>
    <button onclick="openPopup('<?php echo $row['madt']; ?>')"
    style="background-color: #16A085; color: white; border: none; padding: 10px 15px; border-radius: 6px; cursor: pointer;">
    <i class="fa fa-eye"></i>
</button>

</a>
 </td> 
  </tr>

   
  <div id="orderDetailsPopup<?php echo $row['madt']; ?>" class="popup" style="display: none;">
    <div class="popup-content">
        <span class="close" onclick="closePopup('<?php echo $row['madt']; ?>')">&times;</span>
        <h2>Chi tiết đơn đổi trả mã :<?php echo  $row['madt']; ?></h2>
        <div class="table">
    <div class="table-header">
        <div class="table-cell">Sản phẩm</div>
        <div class="table-cell price" >Đơn giá</div>
        <div class="table-cell quantity ">Số lượng đổi trả</div>
    </div>
    <?php while($rowctsp=mysqLi_fetch_array($chitietdoitra)) {?>

      <?php if($rowctsp['madt']==$row['madt'] ){?>
    <div class="table-row">
        <div class="table-cell" style="display:flex">
          <?php echo $rowctsp['tensp'] ?>
          <img  style=" width: 80px; height: 80px;"src="<?php echo WEBROOT . 'public/client/Picture/anhsanpham/' . $rowctsp['anhhienthi1']; ?>" alt="">
      </div>
        <div class="table-cell price "><?php echo number_format($rowctsp['dongia'], 0, '', ','); ?>₫</div>
        <div class="table-cell quantity "><?php echo $rowctsp['soluong'] ?></div>

    </div>
    <?php }}?>
    
</div>
        <button onclick="closePopup('<?php echo $row['madt']; ?>')" 
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
   
  </div>
</div>
</div>