
<div class="container">
      <!-- Sidebar -->
      <div class="sidebar">
      <h2>Danh sách quản lý</h2>
      <ul class="listtab">
          <a href="/azuki/admin/quanlybanhang"><li >Tổng quan Azuki</li></a>
          <a href="/azuki/admin/listsp">  <li > Danh sách sản phẩm</li></a>
          <a href="/azuki/admin/listkh"><li  >Danh sách khách hàng</li></a>
          <?php if($_SESSION['role']==2){?>
            <a href="/azuki/admin/listtv"><li class="active" >Danh sách thành viên</li></a>
            <?php } ?>
            <a href="/azuki/admin/dondathang"> <li  >Đơn đặt hàng</li></a>
            <a href="/azuki/admin/danhgiakh"><li >Đánh giá của khách hàng</li></a>
        </ul>
      </div>

<style>
    tr th {
    text-align: center; /* Căn giữa theo chiều ngang */
    vertical-align: middle; /* Căn giữa theo chiều dọc */
    padding: 10px; /* Tạo khoảng cách bên trong ô */
    font-weight: bold; /* In đậm chữ */
}
.tab-content a {
  text-decoration: none;
  color: black;
}
.tab-content a:hover {
  color: #16a085;
}
</style>

</styl>
<div class="main-content">
<div class="tab-content active"> 
<a href="/azuki/admin/listtv"><h3> ◀ Quay về danh sách thành viên</h3> </a>
    <h1>Thêm thành viên mới</h1>
    <form action="/azuki/admin/xulythemtv" method="post">
        <!-- Tên đăng nhập -->
        <div class="form-group">
           <p style="color:red">
                <?php 
                if(isset($_SESSION['trunguser'])){
                    echo $_SESSION['trunguser'];
                }
                ?>
           </p>
            <input type="text" name="username" placeholder="Tạo tên đăng nhập" value="<?php if(isset($_SESSION['hienthiuser'])){ echo $_SESSION['hienthiuser'] ; }?>" required>
        </div>
        
        <!-- Mật khẩu -->
        <div class="form-group">
            <input type="password" name="password" placeholder="Tạo mật khẩu" value="<?php if(isset($_SESSION['hienthipass'])){ echo $_SESSION['hienthipass']; }?>" required>
            <p>Mật khẩu phải có ít nhất 8 ký tự, bao gồm chữ hoa, chữ thường, số và ký tự đặc biệt</p>
        </div>
        
        <!-- Nhập lại mật khẩu -->
        <div class="form-group">
            <input type="password" name="confirm_password" placeholder="Nhập lại mật khẩu" value="<?php if(isset($_SESSION['hienthipass'])){ echo $_SESSION['hienthipass'] ; }?>" required>
        </div>
        
        <!-- Họ và tên -->
        <div class="form-group">
            <input type="text" name="fullname" placeholder="Họ và tên" value="<?php if(isset($_SESSION['hienthiten'])){ echo $_SESSION['hienthiten'] ; }?>" required>
        </div>
        
        <!-- Số điện thoại -->
        <div class="form-group">
       <p style="color:red" >
            <?php 
                if(isset($_SESSION['trungsdt'])){
                    echo $_SESSION['trungsdt'];
                }
                ?>
       </p>
            <input type="tel" name="phone" placeholder="Số điện thoại" value="<?php if(isset($_SESSION['hienthisdt'])){ echo $_SESSION['hienthisdt'] ; }?>" required>
        </div>
        
        <!-- Email -->
        <div class="form-group">
       <p style="color:red">
            <?php 
                if(isset($_SESSION['trungemail'])){
                    echo $_SESSION['trungemail'];
                }
                ?>
       </p>
            <input type="email" name="email" placeholder="Email" value="<?php if(isset($_SESSION['hienthiemail'])){ echo $_SESSION['hienthiemail'] ; }?>" required>
        </div>
        
        <!-- Nút gửi -->
        <div class="form-group">
            <button type="submit">Thêm </button>
        </div>
    </form>
</div>

</div>
</div>
        <link rel="stylesheet" href="<?php echo WEBROOT . 'public/admin/Css/listsp.css' ?>">
        <script src="<?php echo WEBROOT . 'public/admin/js/themtv.js' ?>"></script>
        <link rel="stylesheet" href="<?php echo WEBROOT . 'public/admin/Css/themtv.css' ?>">


   

        