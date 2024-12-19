
<div class="container">
      <!-- Sidebar -->
      <div class="sidebar">
      <h2>Danh sách quản lý</h2>
      <ul class="listtab">
          <a href="/azuki/admin/quanlybanhang"><li >Tổng quan Azuki</li></a>
          <a href="/azuki/admin/listsp">  <li > Danh sách sản phẩm</li></a>
          <a href="/azuki/admin/listkh"><li  >Danh sách khách hàng</li></a>
          <?php if($_SESSION['role']==2){?>
            <a href="/azuki/admin/listtv"><li  >Danh sách thành viên</li></a>
            <?php } ?>
         <a href="/azuki/admin/dondathang"> <li class="active" >Danh sách đơn hàng</li></a>
          <a href="/azuki/admin/danhgiakh"><li >Đánh giá của khách hàng</li></a>
        </ul>
      </div>
<style>
  /* Phần nền tối của popup */
.popup {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    display: none; /* Ẩn popup ban đầu */
    justify-content: center;
    align-items: center;
    z-index: 1000;
}

/* Nội dung chính của popup */
.popup-content {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    width: 50%;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
    position: relative;
}

/* Nút đóng popup */
.close {
    position: absolute;
    top: 10px;
    right: 10px;
    font-size: 24px;
    font-weight: bold;
    color: #aaa;
    cursor: pointer;
}

.close:hover {
    color: #000;
}


/* Container chính của bảng */
.table {
    display: flex;
    flex-direction: column;
    border: 1px solid #ddd;
    border-radius: 6px;
    overflow: hidden;
    width: 100%;
}

/* Header của bảng */
.table-header {
    display: flex;
    background-color: #2c3e50;
    color: white;
    font-weight: bold;
}

/* Dòng trong bảng (dữ liệu) */
.table-row {
    display: flex;
    border-top: 1px solid #ddd;
}

/* Các ô trong bảng */
.table-cell {
    flex: 1;
    padding: 10px;
    text-align: left;
    border-right: 1px solid #ddd;
}

/* Căn chỉnh ô cuối cùng */
.table-row .table-cell:last-child {
    border-right: none;
}

/* Định dạng bảng header */
.table-header .table-cell {
    padding: 12px 15px;
    text-align: center;
}

/* Cải thiện màu nền cho các hàng */
.table-row:nth-child(even) {
    background-color: #ecf0f1;
}

</style>

<div class="main-content">
    <div  class="tab-content active "> 
    <form action="/azuki/admin/dondathang_loc" method="post" style="margin-bottom: 20px;">
            <div style="display: flex; gap: 15px; align-items: center;">
                <div>
                    <label for="trangthai">Trạng thái:</label>
                    <select id="trangthai" name="trangthai" style="padding: 5px; border-radius: 6px;">
                        <option value="" hidden>Tất cả</option>
                        <option value="0">Đang vận chuyển</option>
                        <option value="1">Hoàn thành</option>
                        <option value="2">Đã huỷ</option>
                    </select>
                </div>
                <div>
                    <label for="khachhang">Khách hàng:</label>
                    <input type="text" id="khachhang" name="khachhang" placeholder="Nhập tên khách hàng" style="padding: 5px; border-radius: 6px; width: 200px;">
                </div>
                <div>
                    <label for="madonhang">Số điện thoại:</label>
                    <input type="tel" id="sdt" name="sdt" placeholder="Nhập số điện thoại" style="padding: 5px; border-radius: 6px; width: 150px;" oninput="validatePhoneNumber(this)">
                    </div>
                <div>
                    <label for="madonhang">Mã đơn hàng azuki:</label>
                    <input type="number" id="madonhang" name="madonhang" placeholder="Nhập mã đơn hàng" style="padding: 5px; border-radius: 6px; width: 150px;">
                </div>
                
                <div>
                    <button type="submit" style="background-color: #3498DB; color: white; border: none; border-radius: 6px; padding: 8px 15px; cursor: pointer;  ">
                        Lọc
                    </button>
                </div>
                
            </div>
      </form>
      <a href="/azuki/admin/dondathang" style="text-decoration: none;">
                    <button type="button" style="background-color: #16A085; color: white; border: none; border-radius: 6px; padding: 8px 15px; cursor: pointer; display: inline-block;">
                       Xem tất cả
                    </button>
                </a>

    <h1>Danh Sách Đơn đặt hàng</h1>
    <?php if(mysqLi_num_rows($dondathang)>0){?>
    <table class="product-table">
      <thead>
        <tr>
          <th>STT</th>
          <th>Mã đơn hàng</th>
          <th>Tên người nhận</th>
          <th>Địa chỉ nhận</th>
          <th>Số  điện thoại</th>
          <th>email</th>
          <th>Ghi chú</th>
          <th>Đăng ký</th>
          <th>Tổng tiền</th>
          <th>Phương thức</th>
          <th>Ngày đặt</th>
          <th>Trạng thái</th>
          <th colspan=3>Thao tác </th>
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
    <td>azuki<?php echo $row['mahd'] ?></td>
    <td><?php echo $row['hoten'] ?></td>
    <td><?php echo $row['diachinhan'] ?></td>
    <td><?php echo $row['sodienthoai'] ?></td>
    <td><?php echo $row['email'] ?></td>
    <td><?php if($row['ghichu']==''){echo "không có" ;}else{echo $row['ghichu'] ; }  ?></td>
    <td><?php echo $row['user'] ?></td>
    <td><?php echo $row['tongtien'] ?></td>
    <td><?php echo $row['phuongthuc'] ?></td>
    <td><?php echo $row['ngaydat'] ?></td>
    <td><?php 
    if($row['trangthai']==0){ ?>
    <span style="color:orange">Đang vận chuyển</span>
    <?php
    } 
    if($row['trangthai']==1){ ?>
    <span style="color:green">Hoàn thành</span>
    
    <?php }  
    if($row['trangthai']==2){
     ?>
    <span style="color:red">Đã huỷ</span>

     <?php
    }
    ?></td>
    <?php ?>
     <?php if($row['trangthai']==0){?>
      <td>
<a href="/azuki/admin/xacnhandonhang/<?php echo $row['mahd'] ?>" onclick="return confirmCustom('Bạn có chắc chắn muốn Xác nhận đơn hàng mã: azuki <?php echo $row['mahd']; ?>')">
      <button  style="background-color:green; color:white;border: none; border-radius: 6px; padding: 4px 4px; cursor: pointer; font-size: 14px;">Xác nhận</button>
  
</a>    
<a href="/azuki/admin/huydonhang/<?php echo $row['mahd'] ?> " onclick="return confirmCustom('Bạn có chắc chắn muốn huỷ đơn hàng : azuki <?php echo $row['mahd']; ?>')">
      <button  style="margin-top:5px;background-color:red; color: white ;border: none; border-radius: 6px; padding: 4px 4px; cursor: pointer; font-size: 14px;">Huỷ đơn</button>
  
</a>     
</td>  
<?php }?>


 
    <td>
    <button onclick="openPopup('<?php echo $row['mahd']; ?>')"
    style="background-color: #16A085; color: white; border: none; padding: 10px 15px; border-radius: 6px; cursor: pointer;">
    Chi tiết
</button>
  
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
    <?php } else{?>
 
   <h3>Không có dữ liệu cần tìm</h3>
<?php }?>
  </div>
</div>
</div>
<link rel="stylesheet" href="<?php echo WEBROOT . 'public/admin/Css/dondathang.css' ?>">
<script>
  function confirmCustom(message) {
    const isConfirmed = window.confirm(message);
    return isConfirmed;
}

function validatePhoneNumber(input) {
        // Loại bỏ tất cả ký tự không phải số
        input.value = input.value.replace(/\D/g, '');
    }
    




    // Hàm hiển thị popup
// Hàm hiển thị popup với ID đơn hàng động
function openPopup(mahd) {
      const popup = document.getElementById('orderDetailsPopup' + mahd);
      popup.style.display = 'flex'; // Hiển thị popup
  }

  // Hàm đóng popup với ID đơn hàng động
  function closePopup(mahd) {
      const popup = document.getElementById('orderDetailsPopup' + mahd);
      popup.style.display = 'none'; // Ẩn popup
  }

</script>



        