
<div class="container">
      <!-- Sidebar -->
      <div class="sidebar">
      <h2>Danh sách quản lý</h2>
      <ul class="listtab">
        <a href="/azuki/admin/quanlybanhang"><li >Tổng quan Azuki</li></a>
          <a href="/azuki/admin/listsp"><li class="active"> Danh sách sản phẩm</li></a>
          <a href="/azuki/admin/listkh"><li >Danh sách khách hàng</li></a>
          <?php if($_SESSION['role']==2){?>
            <a href="/azuki/admin/listtv"><li  >Danh sách thành viên</li></a>
          <?php } ?>
          <a href="/azuki/admin/dondathang"> <li  >Đơn đặt hàng</li></a>
          <a href="/azuki/admin/danhgiakh"><li  >Đánh giá của khách hàng</li></a>
          
        </ul>
      </div>


<div class="main-content">
    <div  class="tab-content active "> 


    <h1>Danh Sách Sản Phẩm</h1>
    <table class="product-table">
      <thead>
        <tr>
          <th>STT</th>
          <th>Mã sản phẩm</th>
          <th>Tên Sản Phẩm</th>
          <th>Ảnh</th>
          <th>Giá</th>
          <th>Số Lượng tồn</th>
          <th>Số lượng đã bán</th>
          <th>Thao Tác</th>
        </tr>
      </thead>
      <tbody>
      <?php 
$i = 1; 
while ($rowsp = mysqli_fetch_array($sanpham)) { 
    $soluongban = 0; 
    mysqli_data_seek($slban, 0); 
    while ($rowslban = mysqli_fetch_array($slban)) {
        if ($rowsp['masp'] == $rowslban['masp']) {
            $soluongban = $rowslban['soluongban'];
            break;
        }
    }
    ?>
    <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $rowsp['masp']; ?></td>
        <td><?php echo $rowsp['tensp']; ?></td>
        <td><img src="<?php echo WEBROOT . 'public/client/Picture/anhsanpham/' . $rowsp['anhhienthi1']; ?>" alt="Ảnh sản phẩm"></td>
        <td><?php echo number_format($rowsp['dongia'], 0, '', ','); ?>₫</td>
        <td><?php echo $rowsp['soluong']; ?></td>
        <td><?php echo $soluongban; ?></td> 
        <td>
            <a href="/azuki/admin/editsp/<?php echo $rowsp['masp']; ?>"><button class="btn edit">Sửa</button></a>
            <a href="/azuki/admin/xoasp/<?php echo $rowsp['masp']; ?>" onclick="return confirmCustom('Bạn có chắc chắn muốn xoá sản phẩm  <?php echo $rowsp['tensp']; ?>')"><button class="btn delete">Xóa</button></a>
        </td>
    </tr>
    <?php 
    $i++; 
}
?>

      </tbody>
    </table>
    <a href="/azuki/admin/themsp"><button>Thêm sản phẩm mới</button></a>
  </div>
</div>
        <link rel="stylesheet" href="<?php echo WEBROOT . 'public/admin/Css/listsp.css' ?>">

<?php 

if (isset($_SESSION['thongbaothem'])) {
  echo "<script>
          window.onload = function() {
            alert('" . $_SESSION['thongbaothem'] . "');
          }
        </script>";
  unset($_SESSION['thongbaothem']);
}
if (isset($_SESSION['thongbaoxoa'])) {
  echo "<script>
          window.onload = function() {
            alert('" . $_SESSION['thongbaoxoa'] . "');
          }
        </script>";
  unset($_SESSION['thongbaoxoa']);
}

?>
<script>
  function confirmCustom(message) {
    const isConfirmed = window.confirm(message);
    return isConfirmed;
}
</script>


        