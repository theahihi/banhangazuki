<style>
  
</style>
<?php
if(isset($mahd)){
if(mysqLi_num_rows($mahd)>0){
$rowmahd=mysqLi_fetch_array($mahd);
$mahd=$rowmahd['mahd'];
} }

?> 
<hr>
<br>
<div class="luachon">
      <div class="chon_giohang">
        <h2 id="chon" style="font-size: 50px;">GIỎ HÀNG</h2>
      </div>
    </div>
<?php if(mysqLi_num_rows($giohang)>0){?>
<div class="khunggiohang">
      <div class="sanphamtronggiohang">
        <div class="table_san_pham">
          <table style="border-collapse: collapse">
            <tr class="dongtieude">
              <td style=" text-align: center">
                <h3>Sản Phẩm</h3>
              </td>
              <td style="text-align: center"><h3>Giá</h3></td>
              <td style="text-align: center"><h3>Số lượng</h3></td>
              <td style="text-align: center"><h3>Tạm tính</h3></td>
            </tr>
            <?php 
$i = 1; // Khởi tạo chỉ số sản phẩm
$quantities = []; 
while ($row = mysqli_fetch_array($giohang)) { 

    if(isset($_SESSION['soluong'][$row['masp']])){
    $quantities[$row['masp']]=$_SESSION['soluong'][$row['masp']]; }
   else{
    $quantities[$row['masp']] = 1;
   }

?>
<form action="/azuki/muahang/thanhtoangiohang" method="POST"  >
  <?php if($row['soluong']>0){?>
  <tr>
    <td>
      <div class="dong_san_pham">
      <div class="huysp">
    <a 
      href="<?php echo WEBROOT . 'muahang/xoasptronggiohang/' . $row['masp']; ?>" 
      onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm <?php echo $row['tensp']?> ra khỏi giỏ hàng không?');">
      <p>X</p>
    </a>
  </div>
        <div class="anhsp">
          <img
            src="<?php echo WEBROOT . 'public/client/Picture/anhsanpham/' . $row['anhhienthi1']; ?>"
            alt=""
          />
        </div>
        <div class="tensp">
          <a href=""><?php echo $row['tensp']; ?></a>
        </div>
      </div>
    </td>
    <td>
      <b id="price<?php echo $i; ?>" data-price="<?php echo $row['dongia']; ?>">
        <?php echo number_format($row['dongia'], 0, '', '.'); ?>₫
      </b>
    </td>
    <td>

      <div class="soluongsp_giohang">
        <!-- Truyền $i để nhận diện sản phẩm -->
        <p onclick="decreaseQuantity(<?php echo $i; ?>)" class="giamsp">
         -
        </p>
        <input
          type="number"
          id="sp<?php echo $i; ?>"
          name="quantity_<?php echo $row['masp']; ?>"
          min="1"
          max="<?php echo $row['soluong']; ?>"
          value="<?php if(isset($_SESSION['soluong'])){ 
           if(isset($_SESSION['soluong'][$row['masp']])){
            echo $_SESSION['soluong'][$row['masp']]; }
            else{ echo '1';}
            
            
            } else{ echo '1';}?>"
          step="1"
          class="soluong"
          oninput="updateQuantity('<?php echo $row['masp']; ?>', this.value)"
          style="
          width:33px;
          height:33px;
          margin-top:-10px;
          "
        />
        <p onclick="increaseQuantity(<?php echo $i; ?>)" class="tangsp">
          +
        </p>
      </div>
    </td>
    <td>
      <b id="total_price<?php echo $i; ?>">
        <?php echo number_format($row['dongia'] * 1, 0, '', '.'); ?>₫
      </b>
    </td>
  </tr>
  <?php } else{?>


    <tr>
    <td>
      <div class="dong_san_pham">
      <div class="huysp">
    <a 
      href="<?php echo WEBROOT . 'muahang/xoasptronggiohang/' . $row['masp']; ?>" 
      onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm <?php echo $row['tensp']?> ra khỏi giỏ hàng không?');">
      <p>X</p>
    </a>
  </div>
        <div class="anhsp">
          <img
            src="<?php echo WEBROOT . 'public/client/Picture/anhsanpham/' . $row['anhhienthi1']; ?>"
            alt=""
          />
        </div>
        <div class="tensp">
          <a href="/azuki/products/productdetail/<?php echo $row['masp'] ?>"><?php echo $row['tensp']; ?></a>
        </div>
      </div>
    </td>
    <td>
      <b  >
        <?php echo number_format($row['dongia'], 0, '', '.'); ?>₫
      </b>
    </td>
    <td>

      <div class="soluongsp_giohang">
        <!-- Truyền $i để nhận diện sản phẩm -->
        <p onclick="decreaseQuantity(<?php echo $i; ?>)" class="giamsp">
         -
        </p>
        <input
          type="number"
          id="sp<?php echo $i; ?>"
          name="quantity_<?php echo $row['masp']; ?>"
          min="1"
          max="<?php echo $row['soluong']; ?>"
          value="<?php if(isset($_SESSION['soluong'])){ 
           if(isset($_SESSION['soluong'][$row['masp']])){
            echo $_SESSION['soluong'][$row['masp']]; }
            else{ echo '1';}
            
            
            } else{ echo '1';}?>"
          step="1"
          class="soluong"
          oninput="updateQuantity('<?php echo $row['masp']; ?>', this.value)"
          style="
          width:33px;
          height:33px;
          margin-top:-10px;
          "
            readonly

        />
        <p onclick="increaseQuantity(<?php echo $i; ?>)" class="tangsp">
          +
        </p>
      </div>
    </td>
    <td>
      <b id="total_price<?php echo $i; ?>">
        <?php echo number_format($row['dongia'] * 1, 0, '', '.'); ?>₫
      </b>
    </td>
  </tr>








  <?php }$i++; 

} ?>
  
              <tr class="ngatdong">
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
            </table>
          </div>
          <div class="xemsp_capnhat">
            <div class="tieptucxemsp" style="max-width:300px">
              <a href="/azuki/trangchu/shop" style="width:300px "><h3>← Xem thêm sản phẩm</h3></a>
            </div>
          </div>
        </div>
        <div class="tongtientronggiohang">
          <div class="tieudetongtien">
            <h2 >Tổng tiền trong giỏ hàng</h2>
            <hr />
          </div>
          <div class="tamtinh">
    <div class="loptamtinh">
      <div class="tieudetamtinh"><p>Tạm tính</p></div>
      <div class="tientamtinh"><p id="tempSubtotal">0₫</p></div>
    </div>
    <hr />
  </div>
  <div class="tamtinh">
    <div class="loptamtinh">
      <div class="tieudetamtinh"><p>Tổng tiền</p></div>
      <div class="tientamtinh"><p id="tempTotal">0₫</p></div>
    </div>
    <hr />
  </div>
  
          <div class="thanhtoan">
          <input type="hidden" id="quantities_input" name="quantities" value='<?php echo json_encode($quantities); ?>'>
          <input type="hidden" name="mahd" value="<?php echo $mahd?>">
            <input type="submit" value="Thanh toán giỏ hàng ">
          </div>
   </form>




        
      </div>
    </div>
  </div>
  <?php  $_SESSION['quantities'] = $quantities;
 

} else { ?>
  <h1 style="text-align: center;">BẠN CHƯA CÓ SẢN PHẨM NÀO TRONG GIỎ HÀNG</h1>
  <h3 style="text-align: center;">
      <a href="/azuki/trangchu/shop" class="hover-link">← Chọn sản phẩm</a>
  </h3>
  <?php } ?>
  
  <div class="button-container" style="display: flex;
    justify-content: center; 
    align-items: center; 
     ">
    <button class="xemlichsu" onclick="showPopup()">Xem lịch sử mua hàng</button>
</div>
  
  <div class="popup-overlay" id="popup">
      <div class="popup-content">
          <div class="popup-header">
              <h3>Lịch sử mua hàng</h3>
              <button class="popup-close" id="closePopupBtn">×</button>
          </div>
          <table class="popup-table">
              <thead>
                  <tr>
                      <th>STT</th>
                      <th>Mã hoá đơn</th>
                      <th>Người mua</th>
                      <th>Tổng tiền</th>
                      <th>Phương thức</th>
                      <th>Ngày đặt</th>
                      <th>Trạng thái</th>
                      <th>Thao tác</th>
                  </tr>
              </thead>
              <tbody>
                  <?php if (mysqli_num_rows($lichsumua) > 0) {
                      $i = 1;
                      while ($row = mysqli_fetch_array($lichsumua)) { ?>
                          <tr>
                              <td><?php echo $i++; ?></td>
                              <td>azuki<?php echo $row['mahd']; ?></td>
                              <td><?php echo $row['hoten']; ?></td>
                              <td><?php echo number_format($row['tongtien'], 0, '', '.'); ?>₫</td>
                              <td><?php echo $row['phuongthuc']; ?></td>
                              <td><?php echo $row['ngaydat']; ?></td>
                              <td><?php  if($row['trangthai']==0){?> 
                              <p style="color:orange">Đang vận chuyển</p>
                              <?php }
                                         elseif($row['trangthai']==1){ ?>
                                          <p style="color:green">Hoàn thành</p>

                                        <?php  }else{
                                          ?>

                                        <p style="color:red">Đơn bị huỷ</p>
                                        <?php }
                              
                              ?></td>
                              <td><a href="<?php echo WEBROOT . 'muahang/chitietmuahang/' . $row['mahd']; ?>"><button class="btn-chi-tiet">Chi tiết</button>
                              </a></td>
                          </tr>
                      <?php }
                  } else { ?>
                      <tr>
                          <td colspan="7">Không có lịch sử mua hàng</td>
                      </tr>
                  <?php } ?>
              </tbody>
          </table>
      </div>
  </div>
  
  <script>
  function showPopup() {
      document.getElementById("popup").style.display = "flex";
  }
  
  function closePopup() {
      document.getElementById("popup").style.display = "none";
  }
  
  document.getElementById("closePopupBtn").addEventListener("click", closePopup);
  document.getElementById("popup").addEventListener("click", function (e) {
      if (e.target === this) {
          closePopup();
      }
  });
  </script>