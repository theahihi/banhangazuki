
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
    <link rel="stylesheet" href="../Public/client/Css/login.css">
    <style>
        .error-message {
            color: red;
            font-size: 14px;
            margin-bottom: 10px;
            text-align: center;
        }
        .suggestions {
            display: none;
            position: absolute;
            top: 110%;
            left: 0;
            width: calc(100% - 2px);
            margin-top: -20px;
            background-color: white;
            border: 1px solid #ccc;
            border-radius: 4px;
            z-index: 1000;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .suggestions div {
            padding: 12px;
            cursor: pointer;
        }

        .suggestions div:hover {
            background-color: #e0e0e0;
        }
    </style>
    <title>Đăng nhập</title>
</head>
<body>
    <div class="all-container">
        <div class="box-picture">
            <div class="box-text">
                <h1>Bảo mật thông tin người dùng</h1>
                <div class="content">
                    <div class="content-1">Đảm bảo chính chủ tài khoản cập nhật thông tin</div>
                    <div class="content-2">Chưa có tài khoản hãy đăng ký tại đây</div>
                </div>
               
            </div>
        </div>
        <?php $row=mysqLi_fetch_array($thongtin);?>
        <form action="/azuki/taikhoan/xulycapnhattt" method="post" style="margin-top: -600px;" onsubmit="return validateForm()">
            <div class="box-login">
                <h2>Cập nhật thông tin</h2>
                <div class="noti">Các thông tin có thể được cập nhật.</div>
               
                <div class="box-input">
                    <div class="box-user">
                    <i class="fa-solid fa-user"> </i>
                        <input class="user" class="pass" id="hoten" type="text" placeholder="Họ tên" value="<?php echo $row['hoten']?>" name="hoten" style="font-size: 15px;" required>
                    </div>
                </div>
                <div class="box-input">
                    <?php if(isset($_SESSION['trungemail'])){?>
                <span style="color:red"> <?php echo $_SESSION['trungemail'] ?></span>
                <?php }?>
                    <div class="box-user">
                    <i class="fa-solid fa-envelope"></i>
                        <input class="user" class="pass" id="email" type="text" placeholder="Email" 
                        value="<?php 
                        if(isset($_SESSION['hienthiemail'])){
                            echo $_SESSION['hienthiemail'];
                        }else{ echo $row['email'];}
                        ?>
                        
                        "
                         name="email" style="font-size: 15px;" required>
                    </div>
                </div>
                <div class="box-input">
                <?php if(isset($_SESSION['trungsdt'])){?>
                <span style="color:red"> <?php echo $_SESSION['trungsdt'] ?></span>
                <?php }?>
                    <div class="box-user">
                    <i class="fa-solid fa-phone"></i>
                        <input class="user" class="pass" id="phone" type="text" placeholder="Số điện thoại"
                         value="<?php 
                        if(isset($_SESSION['hienthisdt'])){
                            echo $_SESSION['hienthisdt'];
                        }else{ echo $row['sdt'];}
                        ?>"
                        
                        name="phone" style="font-size: 15px;" required>
                    </div>
                </div>
                <div class="button-login">
                        <button type="submit" name="btn_xn" value="capnhat">Cập nhật</button>                   
                </div>
            </div>
        </form>
        

    </div>
</body>
</html>
<script src="https://kit.fontawesome.com/eda05fcf5c.js" crossorigin="anonymous"></script>
<script src="js/main.js"></script>
<script>
 
</script>