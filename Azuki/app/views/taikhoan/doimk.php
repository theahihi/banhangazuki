
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
        <form action="/azuki/taikhoan/xulydoimk" method="post" style="margin-top: -600px;" onsubmit="return validatePassword()">
            <div class="box-login">
                <h2>Đổi mật khẩu</h2>
                <div class="noti">Nhập mật khẩu mới tại đây.</div>
                <div class="box-input">
                    <div class="box-user">
                    <i class="fa-solid fa-lock"></i>
                    <input class="user" class="pass" id="newpass9" type="password" placeholder="Nhập mật khẩu mới" name="newpass9" style="font-size: 15px;" required>
                    </div>
                </div>
                <div class="box-input">
                    <div class="box-user">
                    <i class="fa-solid fa-lock"></i>
                    <input class="user" class="pass" id="newpass8" type="password" placeholder="Nhập lại mật khẩu mới" name="newpass8" style="font-size: 15px;" required>
                    </div>
                </div>
               
                <div class="button-login">
                        <button type="submit" name="btn_xn" value="capnhat">Đổi mật khẩu</button>                   
                </div>
            </div>
        </form>
        

    </div>
</body>
</html>
<script src="https://kit.fontawesome.com/eda05fcf5c.js" crossorigin="anonymous"></script>
<script src="js/main.js"></script>
<script>
 
 function checkPasswordMatch() {
    const newpass9 = document.getElementById('newpass9').value;
    const newpass8 = document.getElementById('newpass8').value;
    const errorElement = document.getElementById('passwordError');

    if (newpass9 !== newpass8) {
        errorElement.style.display = 'block';
    } else {
        errorElement.style.display = 'none';
    }
}

// Kiểm tra hợp lệ cho form Đổi mật khẩu
function validatePassword() {
    const newpass9 = document.getElementById('newpass9').value;
    const newpass8 = document.getElementById('newpass8').value;

    if (newpass9 !== newpass8) {
        alert('Mật khẩu không khớp.');
        return false;
    }

    var passwordPattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{10,}$/;
    if ( newpass9.includes(" ") ||!passwordPattern.test(newpass9)) {
        alert("Mật khẩu phải có ít nhất 10 ký tự, bao gồm chữ hoa, chữ thường, không có khoảng trắng,số và ký tự đặc biệt.");
        return false;
    }

    return true;
}
</script>