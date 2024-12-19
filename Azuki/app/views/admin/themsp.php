<div class="container">
  <div class="sidebar">
  <h2>Danh sách quản lý</h2>
  <ul class="listtab">
    <a href="/azuki/admin/quanlybanhang"><li >Tổng quan Azuki</li></a>
          <a href="/azuki/admin/listsp"><li class="active"> Danh sách sản phẩm</li></a>
          <a href="/azuki/admin/listkh"><li >Danh sách khách hàng</li></a>
          <?php if($_SESSION['role']==2){?>
            <a href="/azuki/admin/listtv"><li >Danh sách thành viên</li></a>
            <?php } ?>
            <a href="/azuki/admin/dondathang"> <li  >Đơn đặt hàng</li></a>
            <a href="/azuki/admin/danhgiakh"><li  >Đánh giá của khách hàng</li></a>
          
    </ul>
  </div>

  <div class="main-content">
    <div class="tab-content active">
      <a href="/azuki/admin/listsp"><h3> ◀ Quay về danh sách</h3> </a>
      <h1>Thêm mới sản phẩm </h1>
      <form action="/azuki/admin/addsp" method="post" enctype="multipart/form-data">
      <div class="form-group">
          <label for="masp">Mã sản phẩm:</label>
           <input type="text" name="masp" id="masp" placeholder="Nhập mã sản phẩm" required>
           <div id="masp-error" style="color: red; display: none;">Mã sản phẩm đã tồn tại!</div>
      </div>

        <div class="form-group">
          <label for="product-name">Tên sản phẩm:</label>
          <input type="text" id="product-name" name="tensp" placeholder="Nhập tên sản phẩm" required>
        </div>

        <div class="form-group">
             <label for="price">Đơn giá:</label>
             <input type="number" id="price" min="0" name="dongia" placeholder="Nhập giá sản phẩm" required>
            </div>
          <div class="form-group">
             <label for="quantity">Số lượng:</label>
             <input type="number" id="quantity" min="0" name="soluong" placeholder="Nhập số lượng sản phẩm" required>
            </div>


        <div class="form-group">
          <label for="room" >Thuộc phòng:</label>
          <select id="room" name="phong">
            <?php while($rowphong=mysqli_fetch_array($phong)){?>
              <option value="<?php echo $rowphong['maphong'] ?>"
             
              ?><?php echo $rowphong['tenphong'] ?></option>
            <?php } ?>
          </select>
        </div>

        <div class="form-group">
          <label for="category">Thuộc loại:</label>
          <select id="category" name="loai" >
           <option value="" hidden>Chọn loại</option>
            <?php while($rowloai=mysqli_fetch_array($loai)){?>
              <option value="<?php echo $rowloai['maloai'] ?>"
              <?php  
              if($rowloai['maloai']==1){
                echo "selected";
              }
              ?>><?php echo $rowloai['tenloai'] ?></option>
            <?php } ?>
          </select>
        </div>

        <div class="form-group">
          <label for="main-image">Ảnh chính:</label>
          <input type="file" id="main-image" name="anh_main" accept="image/*" onchange="previewImage(this, 'main-image-preview')">
          <img id="main-image-preview" src="" alt="" style="display:none;">
        </div>

        <!-- Ảnh chi tiết -->
        <div class="form-group">
          <label for="detail-image-1">Ảnh chi tiết 1:</label>
          <input type="file" id="detail-image-1" name="anh_detail_1" accept="image/*" onchange="previewImage(this, 'detail-image-1-preview')">
          <img id="detail-image-1-preview" src="" alt="" style="display:none;">
        </div>

        <div class="form-group">
          <label for="detail-image-2">Ảnh chi tiết 2:</label>
          <input type="file" id="detail-image-2" name="anh_detail_2" accept="image/*" onchange="previewImage(this, 'detail-image-2-preview')">
          <img id="detail-image-2-preview" src="" alt="" style="display:none;">
        </div>

        <div class="form-group">
          <label for="detail-image-3">Ảnh chi tiết 3:</label>
          <input type="file" id="detail-image-3" name="anh_detail_3" accept="image/*" onchange="previewImage(this, 'detail-image-3-preview')">
          <img id="detail-image-3-preview" src="" alt="" style="display:none;">
        </div>

        <div class="form-group">
          <label for="detail-image-4">Ảnh chi tiết 4:</label>
          <input type="file" id="detail-image-4" name="anh_detail_4" accept="image/*" onchange="previewImage(this, 'detail-image-4-preview')">
          <img id="detail-image-4-preview" src="" alt="" style="display:none;">
        </div>

        <div class="form-group">
          <label for="detail-image-5">Ảnh chi tiết 5:</label>
          <input type="file" id="detail-image-5" name="anh_detail_5" accept="image/*" onchange="previewImage(this, 'detail-image-5-preview')">
          <img id="detail-image-5-preview" src="" alt="" style="display:none;">
        </div>

        <div class="form-group">
          <label for="detail-image-5">Thông tin sản phẩm:</label>
          <textarea class="mytextarea" name="thongtin" placeholder="Nhập thông tin sản phẩm"></textarea>
        </div>
        <div class="form-group">
          <label for="detail-image-5">Mô tả chi tiết sản phẩm:</label>
          <textarea class="mytextarea" name="motact" style="height: 700px;" placeholder="Nhập mô tả chi tiết sản phẩm"></textarea>
        </div>
        <div class="form-actions">
          <button type="submit" id="submit-btn" class="btn btn-save">Lưu</button>
          <button type="reset" class="btn btn-reset" onclick="resetImages()">Hủy</button>
        </div>
      </form>
    </div>
  </div>
</div>

<link rel="stylesheet" href="<?php echo WEBROOT . 'public/admin/Css/editsp1.css' ?>">
<script src="<?php echo WEBROOT . 'public/admin/js/addsp2.js' ?>"></script>
<?php 
if (isset($_SESSION['thongbaodacoma'])) {
  echo $_SESSION['thongbaodacoma'] ;
  echo "     <script>
  window.onload = function() {
    alert('" . $_SESSION['thongbaodacoma'] . "');
                          }
             </script>";
    unset($_SESSION['thongbaodacoma']);
}
?>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
 $(document).ready(function() {
  $('form').submit(function(e) {
    e.preventDefault(); 

    var formData = new FormData(this); 

    $.ajax({
      url: '/azuki/admin/addsp',
      type: 'POST',
      data: formData,
      processData: false, 
      contentType: false, 
      success: function(response) {
        console.log('Success Response:', response); 

        try {
          var res = JSON.parse(response); 
          if (res.success) {
            alert(res.message); 
            window.location.href = '/azuki/admin/listsp'; 
          } else {
            alert(res.message); 
          }
        } catch (e) {
          console.error("Error parsing JSON:", e); 
          alert('Invalid response format.'); 
        }
      },
      error: function(xhr, status, error) {
        console.error('AJAX error:', error); 
        alert('Something went wrong! Please try again.'); 
      }
    });
  });
});

</script>




<link rel="stylesheet" href="<?php echo WEBROOT . 'public/admin/Css/editsp1.css' ?>">
<script src="<?php echo WEBROOT . 'public/admin/js/addsp2.js' ?>"></script>
