
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
         <a href="/azuki/admin/dondathang"> <li class="active" >Đơn đặt hàng</li></a>
          <a href="/azuki/admin/danhgiakh"><li >Đánh giá của khách hàng</li></a>
        </ul>
      </div>

</style>
<div class="main-content">
    <div  class="tab-content active "> 
    

    



    
  </div>
</div>
</div>
        <link rel="stylesheet" href="<?php echo WEBROOT . 'public/admin/Css/listsp.css' ?>">
        <link rel="stylesheet" href="<?php echo WEBROOT . 'public/admin/Css/danhgia.css' ?>">

<script>



</script>
   

        