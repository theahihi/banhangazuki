<hr>
<br>
<br>
<style>
  /* Nút đặt hàng */
input[type="submit"] {
  background-color: #ff4500; /* Màu cam nổi bật */
  color: white; /* Màu chữ */
  font-size: 18px; /* Kích thước chữ */
  font-weight: bold;
  border: none;
  border-radius: 5px; /* Bo góc */
  padding: 12px 24px; /* Khoảng cách bên trong */
  cursor: pointer; /* Con trỏ dạng nút bấm */
  transition: background-color 0.3s ease, transform 0.2s ease; /* Hiệu ứng */
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Đổ bóng */
}

input[type="submit"]:hover {
  background-color: #e63900; /* Màu khi hover */
  transform: translateY(-2px); /* Hiệu ứng nhấn */
}

input[type="submit"]:active {
  transform: translateY(1px); /* Giảm hiệu ứng khi nhấn */
}


/* Phần phương thức thanh toán */
.phuongthucthanhtoan {
  padding: 15px;
  background-color: #f9f9f9; /* Màu nền nhạt */
  border: 1px solid #ddd; /* Viền */
  border-radius: 5px; /* Bo góc */
  margin-top: 20px;
}

.phuongthucthanhtoan h3 {
  font-size: 20px;
  margin-bottom: 15px;
}

.kieuthanhtoan label {
  display: flex;
  align-items: center;
  font-size: 16px;
  margin-bottom: 10px;
  cursor: pointer;
}

.kieuthanhtoan label:hover {
  color: #ff4500; /* Đổi màu khi hover */
}

/* Phần hướng dẫn thanh toán */
.hdchuyenkhoan {
  margin-top: 15px;
  font-size: 14px;
  color: #555; /* Màu chữ trung tính */
}

.hdchuyenkhoan p {
  font-weight: bold;
}

.hdchuyenkhoan ul {
  list-style: none;
  padding: 0;
}

.hdchuyenkhoan ul li {
  margin-bottom: 5px;
}

/* Ảnh QR */
.maqr img {
  width: 150px;
  height: auto;
  margin-top: 10px;
  border-radius: 5px; /* Bo góc cho ảnh */
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Đổ bóng */
}

</style>
<div class="luachon">
      <div class="chon_giohang">
        <a href="/azuki/muahang/giohang"><h2 style="font-size: 50px;">Giỏ hàng</h2></a>
      </div>
      <div class="muiten">
        <h2><i class="fas fa-angle-right"></i></h2>
      </div>
      <div class="chon_thanhtoan">
        <a href=""><h2 id="chon" style="font-size: 50px;">Chi tiết thanh toán</h2></a>
      </div>
      
      
    </div>
 <form action="/azuki/muahang/xulythanhtoankhongtaikhoan<?php 
 if(!isset($_POST['quantities'])){
  echo'ngay';
 }
 
 ?>" method="post"  onsubmit="return validateForm()" >
<div class="khungchitietthanhtoan">
      <div class="thongtindathang">
        <div class="title_thongtin">
          <h3>THÔNG TIN THANH TOÁN ĐƠN HÀNG</h3>
          <hr />
        </div>
        <div class="dienthongtin">
          <div class="thongtin">
            <p>Họ và tên*</p>
            <input type="text" id="Name" name="hoten" placeholder="Nhâp Họ và tên của bạn" required />
          </div>
          <div class="thongtin">
            <p>Địa chỉ nhận hàng*</p>
            <input
              type="text"
              id="address"
              name="diachinhan"
              placeholder="Nhâp địa chỉ nhận hàng"
              required
            />
          </div>
          <div class="thongtin">
            <p>Số điện thoại*</p>
            <input type="text" name="sodienthoai" id="sdt" placeholder="Nhâp số điện thoại" required  oninput="this.value = this.value.replace(/[^0-9]/g, '')"  />
          </div>
          <div class="thongtin">
            <p>Email*</p>
            <input type="email" name="email" id="email" placeholder="Nhâp Email của bạn" required />
          </div>
        </div>

        <div class="dienthongtinbosung">
          <div class="title_thongtin">
            <h3>THÔNG TIN BỔ SUNG</h3>
            <hr />
          </div>
          <div class="thongtin">
            <p>Thêm ghi chú cho đơn hàng</p>
            <textarea
              name="ghichu"
              id=""
              placeholder="thêm ghi chú cho đơn hàng(nếu có)"
            ></textarea>
          </div>
        </div>
      </div>
      <div class="motadonhang">
        <div class="title_motadonhang">
          <h3>ĐƠN HÀNG CỦA BẠN</h3>
        </div>
        <div class="bang_mota_donhang">
          <table>
            <tr class="tencot">
              <td style="width: 70%"><b>SẢN PHẨM</b></td>
              <td><b>SỐ LƯỢNG</b></td>
              <td><b>TẠM TÍNH</b></td>
            </tr>
            <?php
            if(isset($_POST['quantities'])){
            $_SESSION['soluong0tk'] = json_decode($_POST['quantities'], true);
            }
            $tongtien = 0;
            foreach ($_SESSION['giohang'] as $masp => $sanpham) {  
              ?>
            <tr>
              <td style="display: flex;">
                <img src="<?php echo WEBROOT . 'public/client/Picture/anhsanpham/' . $sanpham['hinhanh']; ?>" alt="" style="height: 50px; width: 50px;">
               <p style=" margin-left: 10px; "> <?php echo $sanpham['tensp']?> </p>
              </td>
              <td class="cangiua"><?php
              if(isset($_POST['quantities'])){
                
                if(isset($_SESSION['soluong0tk'][$masp])){
                  echo $_SESSION['soluong0tk'][$masp]; }
                  else{ echo '1';}
              } else{
                $slmuangay=$_POST['quantity'];
                echo $_POST['quantity'] ;
              }
              ?></td>
              <td class="cangiua" ><?php   
              $dongia = $sanpham['gia'];
              if(isset($_POST['quantities'])){
              if(isset($_SESSION['soluong0tk'][$masp])){
                $sl = $_SESSION['soluong0tk'][$masp]; }
                else{ $sl =1;} }
                else {
                  $sl=$_POST['quantity'];
                }
              $tamtinh = $dongia * $sl;
              echo number_format($tamtinh, 0, '', '.');
              ?>
              ₫
            </td>
            </tr>
           <?php $tongtien = $tongtien +$tamtinh; } ?> 
          </table>
        </div>
        <div class="tienphaitra">
          <div class="tientra">
            <div class="titlekieutien"><b>Tổng tiền</b></div>
            <div class="sotien"><?php echo number_format($tongtien, 0, '', '.'); ?>₫</div>
            <input type="hidden" value="<?php echo $tongtien;?>">
          </div>
          <hr />
        </div>
        <div class="phuongthucthanhtoan">
          <h3>CHỌN PHƯƠNG PHỨC THANH TOÁN</h3>
          <div class="kieuthanhtoan">
            <label>
              <input
                type="radio"
                id="tienmat"
                name="phuongthucthanhtoan"
                value="tienmat"
              />
              Tiền mặt
            </label>
          </div>
          <div class="kieuthanhtoan">
            <label>
              <input
                type="radio"
               
                name="phuongthucthanhtoan"
                value="vnpay"
              />
              <img style="width: 80px" src="<?php echo WEBROOT . 'public/client/Picture/vnpayy.png'; ?>" alt="">
            </label>
              </div>
          <hr style="margin-top: 10px" />
        </div>
        
          <?php 
           if(isset($_POST['quantities'])){
          $mahd =$_POST['mahd']; 
           }
          ?>
           <input type="hidden" name="slmuangay" value="<?php echo $slmuangay;?>">
           <input type="hidden" name="tongtien"value="<?php echo $tongtien;?>">
           <input type="hidden" name="maspmuangay" value="<?php echo $masp;?>">
           <input type="hidden" name="dongiamuangay" value="<?php echo $dongia;?>">
          
            <input type="submit" value="Đặt hàng"> 
         </form>
        
      </div>
    </div>
<script>
  function validateForm() {
    const phone = document.getElementById("sdt").value;
    const email = document.getElementById("email").value;
    const paymentMethods = document.getElementsByName("phuongthucthanhtoan");

    const phoneRegex = /^(0|\+84)[0-9]{9}$/;
    if (!phoneRegex.test(phone)) {
      alert("Số điện thoại không đúng định dạng. Vui lòng nhập số điện thoại hợp lệ.");
      return false;
    }

    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
      alert("Email không đúng định dạng. Vui lòng nhập email hợp lệ.");
      return false;
    }

    let isPaymentSelected = false;
    for (let i = 0; i < paymentMethods.length; i++) {
      if (paymentMethods[i].checked) {
        isPaymentSelected = true;
        break;
      }
    }

    if (!isPaymentSelected) {
      alert("Vui lòng chọn phương thức thanh toán.");
      return false;
    }

    return true;
  }


</script>