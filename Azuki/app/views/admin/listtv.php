
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
</style>
<div class="main-content">
    <div  class="tab-content active "> 
    

    <div class="containerdanhgia">
        <?php if(mysqLi_num_rows($taikhoan)>0){?>
          <h1>Danh sách thành viên của azuki </h1>
        <table>
            <thead>
                <tr>
                    <th>STT</th>
                    <th>username</th>
                    <th>Họ tên</th>
                    <th>Số điện thoại</th>
                    <th>Email</th>
                    <th>Trạng thái</th>
                    <th <?php if($_SESSION['role']==2){?> 
                      colspan="3"  
                      <?php } ?>>Thao Tác</th>
                </tr>
            </thead>
            <tbody>
              <?php 
                $i=1;
               While($row=mysqLi_fetch_array($taikhoan)){ ?>
                <tr>
                <td><?php echo $i ?></td>
                 <td><?php echo $row['username']?></td>
                 <td><?php echo $row['hoten']?></td>
                 <td><?php echo $row['sdt']?></td>
                 <td><?php echo $row['email']?></td>
                 <td><?php
                 if($row['trangthai']==1){ ?>
                    <span style="color:green;"> Hoạt động </span>
                <?php } else{ ?>
                    <span style="color: red;"> Bị khoá </span>
                <?php  }
                 ?></td>
                 <?php if($row['trangthai']==1){?>
                 <td style=" text-align: center; "><a href="/azuki/admin/khoatktv/<?php echo $row['id_taikhoan'];?>" onclick="return confirmCustom('Bạn có chắc chắn muốn khoá tài khoản : <?php echo $row['username']; ?>')"><button>Khoá</button></a></td>
                 <?php } else{?>
                    <td style=" text-align: center; "><a href="/azuki/admin/mokhoatktv/<?php echo $row['id_taikhoan'];?>" onclick="return confirmCustom('Bạn có chắc chắn muốn mở khoá tài khoản : <?php echo $row['username']; ?>')"><button> Mở khoá</button></a></td>
                    <?php }?>
                
                    <td style=" text-align: center; "><a href="/azuki/admin/xoatktv/<?php echo $row['id_taikhoan'];?>" onclick="return confirmCustom('Bạn có chắc chắn muốn Xoá tài khoản : <?php echo $row['username']; ?>')"><button> Xoá</button></a></td>

                  <?php if($_SESSION['role']==2){ ?>
                 <td style=" text-align: center; " ><a href="/azuki/admin/boquyentv/<?php echo $row['id_taikhoan'];?>" onclick="return confirmCustom('Bạn có chắc chắn muốn bỏ quyền thành viên cho tài khoản : <?php echo $row['username']; ?>')""><button>Bỏ quyền tv</button></a></td>
                 <?php }?>
                 
                </tr>
                 
                <?php $i++;} ?>
               
            </tbody>
        </table>
        <?php } else{?>
           <br>
           <h1>Chưa có tài khoản thành viên nào</h1>
          <?php }?>
       <a href="/azuki/admin/themtv"> <button >Thêm thành viên</button></a>
    </div>



    
  </div>
</div>
</div>
        <link rel="stylesheet" href="<?php echo WEBROOT . 'public/admin/Css/listsp.css' ?>">
        <link rel="stylesheet" href="<?php echo WEBROOT . 'public/admin/Css/danhgia.css' ?>">

<script>
  function confirmCustom(message) {
    const isConfirmed = window.confirm(message);
    return isConfirmed;
}


    document.addEventListener("DOMContentLoaded", function () {
        const productSelect = document.getElementById("productSelect");
        const filterButton = document.getElementById("filterButton");

        // Kiểm tra giá trị ban đầu
        filterButton.disabled = !productSelect.value;

        // Lắng nghe sự kiện thay đổi
        productSelect.addEventListener("change", function () {
            filterButton.disabled = !productSelect.value; // Vô hiệu nếu giá trị rỗng
        });
    });



</script>
   

        