<style>


    /* Container layout */
    .container {
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
    }

    /* Header */
  


    /* Profile info */
    .profile-info {
      background-color: #ecf0f1;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .profile-info .info-item {
      margin-bottom: 15px;
      font-size: 18px;
      color: #2c3e50;
    }

    .profile-info .info-item span {
      font-weight: bold;
      color: #FF652D;
    }


    .buttons {
      margin-top: 20px;
      display: flex;
      justify-content: space-between;
    }

    .buttons button {
      padding: 10px 20px;
      font-size: 16px;
      background-color:#FF652D;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .buttons button:hover {
      background-color:#FF652D;
    }

  </style>
<hr>
  <div class="container">
    <header class="header">
      <h1>Thông tin cá nhân</h1>
    </header>
<?php $row=mysqLi_fetch_array($thongtin) ;?>
    <div class="profile-info">
      <div class="info-item">
        <span>Username:</span> <?php echo $row['username'] ?>
      </div>
      <div class="info-item">
        <span>Họ và tên:</span> <?php echo $row['hoten'] ?>
      </div>
      <div class="info-item">
        <span>Số điện thoại:</span> <?php echo $row['sdt'] ?>
      </div>
      <div class="info-item">
        <span>Email:</span> <?php echo $row['email'] ?>
      </div>
    </div>
    <div class="buttons" style="margin-top:20px" sty>
     <form action="/azuki/taikhoan/xacnhanmk" method="post"> <button name="capnhat" value="capnhat" >Cập nhật tài khoản</button></form>

     <form action="/azuki/taikhoan/xacnhanmk" method="post"> <button name="doimk" value="doimk" style="margin-left:20px" >Đổi mật khẩu</button></form>
    </div>
  </div>
<?php 
  if (isset( $_SESSION['capnhatthanhcong'])) {
  echo "<script>
            alert('" . $_SESSION['capnhatthanhcong'] . "');
        </script>";
  unset($_SESSION['capnhatthanhcong']);
}
?>