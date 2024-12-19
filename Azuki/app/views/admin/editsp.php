
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

<?php $row=mysqli_fetch_array($chitietsp) ;
    $masp= $row['masp'];
  ?>
<div class="main-content">
    <div  class="tab-content active ">
    <a href="/azuki/admin/listsp"><h3> ◀ Quay về danh sách</h3> </a>
    <h1>Sửa Sản Phẩm :  <span style="color:#16A085"><?php echo $row['tensp'] ?></span></h1>
    <form action="/azuki/admin/updatesp" method="post" enctype="multipart/form-data">
          <input type="hidden" name="masp" value="<?php echo $masp ?>">
            <div class="form-group">
                <label for="product-name">Tên sản phẩm:</label>
                <input type="text" id="product-name" name="tensp" value="<?php echo $row['tensp']; ?>" required>
            </div>

            <div class="form-group">
                <label for="price">Đơn giá:</label>
                <input type="number" id="price" name="dongia" value="<?php echo $row['dongia']; ?>" required>
            </div>
            <div class="form-group">
                <label for="price">Số lượng tồn:</label>
                <input type="number" id="quantity" name="soluong" value="<?php echo $row['soluong']; ?>" required>
            </div>

            <div class="form-group">
                <label for="room">Thuộc phòng:</label>
                <select id="room" name="phong">
                    <?php while($rowphong=mysqli_fetch_array($phong)){?>
                        <option value="<?php echo $rowphong['maphong'] ?>"
                        <?php  
                        if($row['maphong']==$rowphong['maphong']){
                            echo "selected";
                        }
                        ?>
                        ><?php echo $rowphong['tenphong'] ?></option>
                    <?php } ?>
                </select>
            </div>

        
            <div class="form-group">
                <label for="category">Thuộc loại:</label>
                <select id="category" name="loai">
                <?php while($rowloai=mysqli_fetch_array($loai)){?>
                        <option value="<?php echo $rowloai['maloai'] ?>"
                        <?php  
                        if($row['maloai']==$rowloai['maloai']){
                            echo "selected";
                        }
                        ?>
                        ><?php echo $rowloai['tenloai'] ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group">
    <label for="main-image">Ảnh chính:</label>
    <input type="file" id="main-image" name="anh_main" accept="image/*" onchange="previewImage(this, 'main-image-preview')">
    <img id="main-image-preview" src="<?php
    if($row['anhhienthi1'] != ''){
    echo WEBROOT . 'public/client/Picture/anhsanpham/' . $row['anhhienthi1'] ;
    
    } else{
        echo WEBROOT . 'public/client/Picture/themanh.jpg ' ;
    
    } ?>" alt="">
</div>

<!-- Ảnh chi tiết -->
<div class="form-group">
    <label for="detail-image-1">Ảnh chi tiết 1:</label>
    <input type="file" id="detail-image-1" name="anh_detail_1" accept="image/*" onchange="previewImage(this, 'detail-image-1-preview')">
    <img id="detail-image-1-preview" 
    src="<?php 
     if($row['anhdetail1'] != ''){
    echo WEBROOT . 'public/client/Picture/anhsanpham/' . $row['anhdetail1'] ;
    
     }else{
        echo WEBROOT . 'public/client/Picture/themanh.jpg' ;
    
    }?>" alt="">
</div>

<div class="form-group">
    <label for="detail-image-2">Ảnh chi tiết 2:</label>
    <input type="file" id="detail-image-2" name="anh_detail_2" accept="image/*" onchange="previewImage(this, 'detail-image-2-preview')">
    <img id="detail-image-2-preview" src="<?php 
    if($row['anhdetail2'] != ''){
    echo WEBROOT . 'public/client/Picture/anhsanpham/' . $row['anhdetail2'] ;
    }else{
        echo WEBROOT . 'public/client/Picture/themanh.jpg' ;
    
    }?>" alt="">
</div>

<div class="form-group">
    <label for="detail-image-3">Ảnh chi tiết 3:</label>
    <input type="file" id="detail-image-3" name="anh_detail_3" accept="image/*" onchange="previewImage(this, 'detail-image-3-preview')">
    <img id="detail-image-3-preview" src="<?php 
    if($row['anhdetail3'] != ''){
    echo WEBROOT . 'public/client/Picture/anhsanpham/' . $row['anhdetail3'] ;
    }else{
        echo WEBROOT . 'public/client/Picture/themanh.jpg' ;
    
    }?>" alt="">
</div>

<div class="form-group">
    <label for="detail-image-4">Ảnh chi tiết 4:</label>
    <input type="file" id="detail-image-4" name="anh_detail_4" accept="image/*" onchange="previewImage(this, 'detail-image-4-preview')">
    <img id="detail-image-4-preview" src="<?php 
    if($row['anhdetail4'] != ''){
    echo WEBROOT . 'public/client/Picture/anhsanpham/' . $row['anhdetail4'] ;
    
    }else{
        echo WEBROOT . 'public/client/Picture/themanh.jpg' ;
    
    }?>" alt="">
</div>

<div class="form-group">
    <label for="detail-image-5">Ảnh chi tiết 5:</label>
    <input type="file" id="detail-image-5" name="anh_detail_5" accept="image/*" onchange="previewImage(this, 'detail-image-5-preview')">
    <img id="detail-image-5-preview" src="<?php
     if($row['anhdetail5'] != ''){
    echo WEBROOT . 'public/client/Picture/anhsanpham/' . $row['anhdetail5'] ;
     }else{
        echo WEBROOT . 'public/client/Picture/themanh.jpg' ;
    
    }
    ?>" alt="">
</div>
            <div class="form-group">
                <label for="detail-image-5">Thông tin sản phẩm:</label>
                <textarea class="mytextarea" name="thongtin"><?php echo $row['thongtin']?></textarea>
            </div>
            <div class="form-group">
                <label for="detail-image-5">Mô tả chi tiết sản phẩm : </label>
                <textarea class="mytextarea" name="motact" style="height: 700px;" > <?php echo $row['motasp']?></textarea>

            </div>

            <!-- Nút submit -->
            <div class="form-actions">
                <button type="submit" class="btn btn-save">Lưu</button>
                <button type="reset" class="btn btn-reset" onclick="resetImages()">Hủy</button>
                </div>
        </form>

    
  </div>
</div>
</div>
        <link rel="stylesheet" href="<?php echo WEBROOT . 'public/admin/Css/editsp1.css' ?>">
         <script src="<?php echo WEBROOT . 'public/admin/js/editsp4.js' ?>"></script>
         <?php 
if (isset($_SESSION['thongbaosua'])) {
    echo "<script>
            window.onload = function() {
              alert('" . $_SESSION['thongbaosua'] . "');
            }
          </script>";
    unset($_SESSION['thongbaosua']);
}
?>

<script>
  

function resetImages() {
    // Reset lại các input file
    document.getElementById('main-image').value = "";
    document.getElementById('detail-image-1').value = "";
    document.getElementById('detail-image-2').value = "";
    document.getElementById('detail-image-3').value = "";
    document.getElementById('detail-image-4').value = "";
    document.getElementById('detail-image-5').value = "";

    // Reset lại hình ảnh trong thẻ <img> về ảnh cũ
    document.getElementById('main-image-preview').src = "<?php echo WEBROOT . 'public/client/Picture/anhsanpham/' . $row['anhhienthi1']; ?>";
    document.getElementById('detail-image-1-preview').src = "<?php echo WEBROOT . 'public/client/Picture/anhsanpham/' . $row['anhdetail1']; ?>";
    document.getElementById('detail-image-2-preview').src = "<?php echo WEBROOT . 'public/client/Picture/anhsanpham/' . $row['anhdetail2']; ?>";
    document.getElementById('detail-image-3-preview').src = "<?php echo WEBROOT . 'public/client/Picture/anhsanpham/' . $row['anhdetail3']; ?>";
    document.getElementById('detail-image-4-preview').src = "<?php echo WEBROOT . 'public/client/Picture/anhsanpham/' . $row['anhdetail4']; ?>";
    document.getElementById('detail-image-5-preview').src = "<?php echo WEBROOT . 'public/client/Picture/anhsanpham/' . $row['anhdetail5']; ?>";
  }

</script>




        