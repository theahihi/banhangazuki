
<div class="container">
      <!-- Sidebar -->
      <div class="sidebar">
      <h2>Danh sách quản lý</h2>
      <ul class="listtab">
        <a href="/azuki/admin/quanlybanhang"><li >Tổng quan Azuki</li></a>
          <a href="/azuki/admin/listsp"><li> Danh sách sản phẩm</li></a>
          <a href="/azuki/admin/listkh"><li >Danh sách khách hàng</li></a>
          <?php if($_SESSION['role']==2){?>
            <a href="/azuki/admin/listtv"><li >Danh sách thành viên</li></a>
            <?php } ?>
            <a href="/azuki/admin/dondathang"> <li  >Đơn đặt hàng</li></a>
            <a href="/azuki/admin/danhgiakh"><li class="active" >Đánh giá của khách hàng</li></a>
          
        </ul>
      </div>


<div class="main-content">
    <div  class="tab-content active "> 
    

    <div class="containerdanhgia">
        <h1>Bình luận của khách hàng</h1>
        <form action="/azuki/admin/danhgiakh_loc" method="post">
    <select name="loc_tensp" id="productSelect">
        <option value="" hidden>chọn sản phẩm</option>
        <?php While($row = mysqli_fetch_array($sanpham)) { ?>
            <option value="<?php echo $row['masp']; ?>">
                <?php echo $row['tensp']; ?>
            </option>
        <?php } ?>
    </select>
    <input type="submit" value="Lọc" id="filterButton" disabled>
    <a href="/azuki/admin/danhgiakh"> Xem tất cả</a>
</form>


        <?php if(mysqLi_num_rows($binhluan)>0){?>
        <table>
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Tên Khách Đánh Giá</th>
                    <th>Bình Luận</th>
                    <th>Tên Sản Phẩm</th>
                    <th>Số Sao</th>
                    <th>Email</th>
                    <th>Đăng Ký</th>
                    <th>Thao Tác</th>
                </tr>
            </thead>
            <tbody>
              <?php 
                $i=1;
               While($row=mysqLi_fetch_array($binhluan)){ ?>
                <tr>
                    <td><?php echo $i;?></td>
                    <td><?php echo $row['hoten'];?></td>
                    <td><?php echo $row['binhluan'];?></td>
                    <td><?php echo $row['tensp'];?></td>
                    <td><?php echo $row['rate'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['is_registered'];?></td>
                    <?php if($row['trangthai']==0){?>
                    <td><a href="/azuki/admin/hienbl/<?php echo $row['id']?>"  onclick="return confirmCustom('Bạn có chắc chắn muốn hiện bình luận : <?php echo $row['binhluan']; ?>')"><button class="btn" >Hiện</button></a></td>
                    <?php } else{?>
                      <td><a href="/azuki/admin/anbl/<?php echo $row['id']?>"  onclick="return confirmCustom('Bạn có chắc chắn muốn ẩn bình luận : <?php echo $row['binhluan']; ?>')"><button class="btn hidden"  style="background-color: red;" >Ẩn</button></a></td>
                      <?php }?>
                </tr>
                 
                <?php $i++;} ?>
               
            </tbody>
        </table>
        <?php } else{?>
           <br>
           <?php $row= mysqLi_fetch_array($tensp);           ?>
           <h1>Chưa có bình luận nào cho sản phẩm: <?php echo $row['tensp'];  ?></h1>
          <?php }?>
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
        <?php 

if (isset($_SESSION['thongbaohiensp'])) {
  echo "<script>
          window.onload = function() {
            alert('" . $_SESSION['thongbaohiensp'] . "');
          }
        </script>";
  unset($_SESSION['thongbaohiensp']);
}
if (isset($_SESSION['thongbaoansp'])) {
  echo "<script>
          window.onload = function() {
            alert('" . $_SESSION['thongbaoansp'] . "');
          }
        </script>";
  unset($_SESSION['thongbaoansp']);
}




?>

        