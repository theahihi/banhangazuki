
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
                <h1>Welcome !</h1>
                <div class="content">
                    <div class="content-1">Đăng ký tài khoản tại đây</div>
                    <div class="content-2">Hãy trở thành Khách hàng của azuki</div>
                </div>
                
            </div>
        </div>
        <form action="<?php echo WEBROOT . 'taikhoan/xulydangky'?>" method="post" style="margin-top: -600px;"  onsubmit="return validateForm()">
            <div class="box-login" style="height: 700px;">
                <h2>Sign up</h2>
                <div class="box-input">
                    <div class="box-user">
                    <i class="fa-solid fa-user"></i>
                        <input class="user" type="text" placeholder="Tạo tên đăng nhập" value="<?php if(isset($_SESSION['hienthiuser'])){ 
                          echo $_SESSION['hienthiuser'];
                        }?>"  name="user" id="user" style="font-size: 15px;" required >
                    </div>
                    <?php if (isset($_SESSION['trunguser'])): ?>
                    <div class="error-message">
                        <?php
                        echo $_SESSION['trunguser'];
                        unset($_SESSION['trunguser']);
                        ?>
                    </div>
                <?php endif; ?>
                    <div class="box-user">
                        <i class="fa-solid fa-lock"></i>
                        <input class="user" class="pass" type="password" placeholder="Tạo mật khẩu" value="<?php if(isset($_SESSION['hienthipass'])){ 
                          echo $_SESSION['hienthipass'];
                        }?>"  name="password9" id="password9" style="font-size: 15px;" required>
                    </div>
                    <div class="box-forgot-password" style="margin-top: -15px;" >
                    <label for="remember" style="color:white; font-size:9px;">Mật khẩu phải có ít nhất 8 ký tự, bao gồm chữ hoa, chữ thường, số và ký tự đặc biệt </label>
                    
                </div>
                    <div class="box-user">
                        <i class="fa-solid fa-lock"></i>
                        <input class="user" class="pass" type="password" value="<?php if(isset($_SESSION['hienthipass'])){ 
                          echo $_SESSION['hienthipass'];
                        }?>" placeholder="Nhập lại mật khẩu" name="password8" id="password8" style="font-size: 15px;" required>
                    </div>
                    <div class="box-user">
                    <i class="fa-solid fa-user"> </i>
                        <input class="user" class="pass" type="text" placeholder="Họ và tên" value="<?php if(isset($_SESSION['hienthiten'])){ 
                          echo $_SESSION['hienthiten'];
                        }?>"  name="hoten" id="hoten" style="font-size: 15px;" required>
                    </div>
                    <div class="box-user">
                    <i class="fa-solid fa-phone"></i>
                        <input class="user" class="pass" type="text" placeholder="Số điện thoại" name="sodienthoai" value="<?php if(isset($_SESSION['hienthisdt'])){ 
                          echo $_SESSION['hienthisdt'];
                        }?>" id="sodienthoai" style="font-size: 15px;" required onkeypress="return isNumberKey(event)">
                    </div>
                    <?php if (isset($_SESSION['trungsdt'])): ?>
                    <div class="error-message">
                        <?php
                        echo $_SESSION['trungsdt'];
                        unset($_SESSION['trungsdt']);
                        ?>
                    </div>
                    <?php endif; ?>
                    <div class="box-user">
                    <i class="fa-solid fa-envelope"></i>
                        <input class="user" class="pass" type="text" placeholder="Email" name="email" value="<?php if(isset($_SESSION['hienthiemail'])){ 
                          echo $_SESSION['hienthiemail'];
                        }?>" id="email" style="font-size: 15px;" required>
                    </div>
                    <?php if (isset($_SESSION['trungemail'])): ?>
                    <div class="error-message">
                        <?php
                        echo $_SESSION['trungemail'] ;
                        unset($_SESSION['trungemail']);

                        ?>
                    </div>
                    <?php endif; ?>
                </div>
                <div class="button-login">
                    
                        <button type="submit" name="btn">Sign in</button>
                   
                </div>
                <div class="box-forgot-password">
                    <div>
                        <a href="<?php echo WEBROOT . 'trangchu/'?>">Quay về trang chủ</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
<script src="https://kit.fontawesome.com/eda05fcf5c.js" crossorigin="anonymous"></script>
<script src="js/main.js"></script>
<script>
function validateForm() {
    var email = document.getElementById("email").value;
    var password9 = document.getElementById("password9").value;
    var password8 = document.getElementById("password8").value;
    var sodienthoai = document.getElementById("sodienthoai").value;
    var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    if (!emailPattern.test(email)) {
        alert("Email không hợp lệ.");
        return false;
    }
    if (password9 !== password8) {
        alert("Mật khẩu không khớp. Vui lòng nhập lại.");
        return false;
    }
    var phonePattern = /^0[0-9]{9,10}$/;
if (!phonePattern.test(sodienthoai)) {
    alert("Số điện thoại không hợp lệ. Vui lòng nhập đúng định dạng.");
    return false;
}
var passwordPattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{10,}$/;
    if (!passwordPattern.test(password9)) {
        alert("Mật khẩu phải có ít nhất 10 ký tự, bao gồm chữ hoa, chữ thường, số và ký tự đặc biệt.");
        return false;
    }
    return true; 
}
function isNumberKey(evt) {
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            return false; 
        }
        return true; 
    }
</script>