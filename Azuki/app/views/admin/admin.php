
    <div class="container">
      <!-- Sidebar -->
      <div class="sidebar">
        <h2>Danh sách quản lý</h2>
        <ul class="listtab">
          <a href="/azuki/admin/quanlybanhang"><li class="active">Tổng quan Azuki</li></a>
          <a href="/azuki/admin/listsp"><li> Danh sách sản phẩm</li></a>
          <a href="/azuki/admin/listkh"><li >Danh sách khách hàng</li></a>
          <?php if($_SESSION['role']==2){?>
            <a href="/azuki/admin/listtv"><li >Danh sách thành viên</li></a>
            <?php } ?>
            <a href="/azuki/admin/dondathang"> <li  >Đơn đặt hàng</li></a>
            <a href="/azuki/admin/danhgiakh"><li >Đánh giá của khách hàng</li></a>
          
        </ul>
      </div>

      <div class="main-content">
        <div id="tongquanbanhang" class="tab-content active">
            <h1 class="tq">Tổng quan</h1>
        <div class="container">
      <div class="overview">
        <div class="overview-item">
          <h3>Sản Phẩm Còn Tồn</h3>
          <?php $row1=mysqLi_fetch_array($tongsp)?>
          <p class="value"><?php echo $row1['tongsl'] ; ?></p>
          <p class="label">Số lượng sản phẩm còn lại trong kho</p>
        </div>
        <div class="overview-item">
          <h3>Sản Phẩm Đã Bán</h3>
          <?php $row1=mysqLi_fetch_array($tongslban)?>
          <p class="value"><?php echo $row1['tongslban'] ; ?></p>
          <p class="label">Tổng số lượng sản phẩm đã bán được</p>
        </div>
        <div class="overview-item">
          <h3>Tổng Doanh Thu</h3>
          <?php $row1=mysqLi_fetch_array($doanhthu)?>
          <p class="value"><?php echo number_format($row1['tong_giatri'], 0, '', ','); ?>₫</p>
          <p class="label">Tổng doanh thu từ các đơn hàng</p>
        </div>
        <div class="overview-item">
          <h3>Tổng Khách Hàng Đăng Ký</h3>
          <?php $row1=mysqLi_fetch_array($tongkh)?>
          <p class="value"><?php echo $row1['tongtk'] ; ?></p>
          <p class="label">Số lượng khách hàng đã đăng ký tài khoản</p>
        </div>
        </div>
      </div>






    






        <div id="products" class="tab-content ">
          <h2>Danh sách sản phẩm</h2>
        </div>






        <div id="customers" class="tab-content">
          <h2>Danh sách khách hàng</h2>
          <p>Hiển thị danh sách các khách hàng...</p>
        </div>






        <div id="members" class="tab-content">
          <h2>Danh sách thành viên</h2>
          <p>Hiển thị danh sách các thành viên...</p>
        </div>





        <!-- Lịch sử mua hàng -->
        <div id="history" class="tab-content">
          <h2>Lịch sử mua hàng</h2>
          <p>Hiển thị lịch sử mua hàng...</p>
        </div>





        <div id="statistics" class="tab-content">
          <h2>Thống kê bán hàng</h2>
          <p>Hiển thị thống kê bán hàng...</p>
        </div>





        <div id="hihi" class="tab-content">
          <h2>Thống kê bán hàng</h2>
          <p>hé hé</p>
        </div>




        <div id="haha" class="tab-content">
          <h2>hehehehehe</h2>
          <p>hé hé</p>
        </div>





        <div id="xexe" class="tab-content">
          <h2>hehehehehe</h2>
          <p>héaNCONIC hé</p>
        </div>
      </div>
    </div>

    
  </body>
</html>
<link rel="stylesheet" href="<?php echo WEBROOT . 'public/admin/Css/tongquanazuki.css' ?>">