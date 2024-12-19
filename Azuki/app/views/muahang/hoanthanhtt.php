
  <style>
    body {
      font-family: 'Arial', sans-serif;
      background-color: #f9f9f9;
      margin: 0;
      padding: 0;
      color: #333;
    }

    /* Phần điều hướng */
    .luachon {
      display: flex;
      justify-content: center;
      align-items: center;
      margin: 20px 0;
    }

    .luachon h2 {
      font-size: 20px;
      font-weight: bold;
      color: #555;
      margin: 0;
    }

    .luachon a {
      text-decoration: none;
      color: #007bff;
      transition: color 0.3s;
    }

    .luachon a:hover {
      color: #0056b3;
    }

    .muiten i {
      font-size: 20px;
      color: #888;
    }

    /* Đặt bố cục ngang cho phần hoàn thành thanh toán */
    .hoanthanhthanhtoan {
      display: flex;
      justify-content: space-between;
      align-items: flex-start;
      max-width: 1200px;
      margin: 20px auto;
      background: #ffffff;
      box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
      border-radius: 8px;
      padding: 20px;
      gap: 20px; /* Khoảng cách giữa các phần */
    }

    /* Chi tiết đơn hàng bên trái */
    .chitietdonhang {
      flex: 2; /* Chiếm nhiều không gian hơn */
    }

    /* Bảng chi tiết sản phẩm */
    .bang_mota_donhang table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 10px;
    }

    .bang_mota_donhang td {
      padding: 10px;
      border-bottom: 1px solid #ddd;
    }

    .bang_mota_donhang .tencot td {
      background-color: #f1f1f1;
      font-weight: bold;
    }

    .cangiua {
      text-align: center;
    }

    /* Phần tổng tiền */
    .tienphaitra .tientra {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin: 10px 0;
    }

    .tienphaitra .titlekieutienhoanthanh,
    .tienphaitra .titlekieuphươngthuc {
      font-size: 16px;
      font-weight: bold;
      color: #555;
    }

    .tienphaitra .sotien,
    .tienphaitra .phuongthuc {
      font-size: 16px;
      font-weight: bold;
      color: #007bff;
    }

    .phancach {
      border: none;
      border-bottom: 1px solid #ddd;
      margin: 10px 0;
    }

    /* Thông tin khách hàng */
    .ttkhachhang,
    .ttkhachhangbosung {
      background-color: #f9f9f9;
      padding: 15px;
      border: 1px solid #ddd;
      border-radius: 6px;
      margin-bottom: 15px;
    }

    .ttkhachhang p,
    .ttkhachhangbosung p {
      margin: 5px 0;
      font-size: 16px;
      color: #333;
    }

    .ttkhachhang b,
    .ttkhachhangbosung b {
      color: #555;
    }

    /* Cảm ơn khách hàng bên phải */
    .camonkhachhang {
      flex: 1; /* Chiếm ít không gian hơn */
      background-color: #e9fce9;
      border: 1px solid #4caf50;
      padding: 20px;
      border-radius: 6px;
      text-align: center;
      box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    }

    .camonkhachhang .noidungcamon b {
      font-size: 20px;
      color: #4caf50;
    }

    .camonkhachhang ul {
      list-style-type: none;
      padding: 0;
      margin-top: 15px;
      text-align: left;
    }

    .camonkhachhang ul li {
      font-size: 16px;
      color: #4caf50;
      margin-bottom: 8px;
    }

    .camonkhachhang ul li::before {
      content: "✔";
      color: #4caf50;
      margin-right: 10px;
      font-weight: bold;
    }

    /* Đáp ứng trên màn hình nhỏ */
    @media screen and (max-width: 768px) {
      .hoanthanhthanhtoan {
        flex-direction: column; /* Chuyển về dọc trên màn hình nhỏ */
      }

      .camonkhachhang {
        margin-top: 20px; /* Thêm khoảng cách giữa các phần */
      }
    }
  </style>
</head>
<hr>
<body>
  <div class="hoanthanhthanhtoan">
    <!-- Phần chi tiết đơn hàng bên trái -->
     
    <div class="chitietdonhang">
      <h2>Chi tiết đơn hàng</h2>
      <div class="bang_mota_donhang">
        <table>
          <tr class="tencot">
            <td style="width: 70%"><b>SẢN PHẨM</b></td>
            <td><b>SỐ LƯỢNG</b></td>
            <td><b>ĐƠN GIÁ</b></td>
          </tr>
          <?php while($row=mysqli_fetch_array($hoanthanhttsp)){
      ?>
          <tr>
            <td><?php echo $row['tensp']?></td>
            <td class="cangiua"><?php echo $row['soluong']?></td>
            <td class="cangiua"> <?php echo number_format($row['dongia'], 0, '', '.'); ?>₫</td>
          </tr>
          <?php } ?>
        </table>
      </div>
      <?php $row= mysqLi_fetch_array($hoanthanhttnd) ?>
      <div class="tienphaitra">
        <hr class="phancach" />
        <div class="tientra">
          <div class="titlekieuphươngthuc"><b>Phương thức thanh toán: </b></div>
          <div class="phuongthuc"><?php echo $row['phuongthuc'];?></div>
        </div>
        <hr class="phancach" />
        <div class="tientra">
          <div class="titlekieutienhoanthanh"><b>Tổng tiền thu:</b></div>
          <div class="sotien"> <?php echo number_format($row['tongtien'], 0, '', '.'); ?>₫</div>
        </div>
        <hr class="phancach" />
      </div>
      <h2 class="title_ttvadc">Thông tin & Địa chỉ nhận hàng</h2>
      <div class="ttkhachhang">
        <p><b>Họ và tên: </b> <?php echo $row['hoten'];?></p>
        <p><b>Địa chỉ nhận hàng: </b> <?php echo $row['diachinhan'];?></p>
        <p><b>Số điện thoại: </b><?php echo $row['sodienthoai'];?></p>
        <p><b>Email: </b> <?php echo $row['email'];?></p>
      </div>
      <h2 class="title_ttvadc">Thông tin bổ sung</h2>
      <div class="ttkhachhangbosung">
        <p><b>Nội dung:</b> <?php
        if($row['ghichu']=="") {
          echo "Không có";
        } else {
          echo $row['ghichu'];
        }
       
        
        ?></p>
      </div>
    </div>

    <!-- Phần cảm ơn khách hàng bên phải -->
    <div class="camonkhachhang">
      <div class="noidungcamon">
        <p class="candong" style="color: green">
          <b>Cảm ơn khách hàng đã tin tưởng và ủng hộ. Đơn hàng của bạn đã được tiếp nhận</b>
        </p>
        <ul class="candong">
          <li>Mã đơn hàng: azuki<?php echo $row['mahd'];?></li>
          <li>Ngày đặt hàng:  <?php echo $row['ngaydat'];?></li>
          <?php if($row['phuongthuc']=="Tiền mặt"){ ?>
          <li>Số tiền cần thanh toán: <?php echo number_format($row['tongtien'], 0, '', '.'); ?>₫ </li>
          <?php }
          if($row['phuongthuc']=="VNpay"){?>
          <li>Số tiền đã thanh toán: <?php echo number_format($row['tongtien'], 0, '', '.'); ?>₫ </li>

          <?php }?>
          <li>Phương thức thanh toán: <?php echo $row['phuongthuc'];?></li>
        </ul>
      </div>
    </div>
   
  </div>
  <hr>

