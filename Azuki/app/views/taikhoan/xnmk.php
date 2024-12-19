<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
    <link rel="stylesheet" href="../Public/client/Css/login.css">
    <title>Xác nhận mật khẩu</title>
</head>
<body>
    <div class="all-container">
        <div class="box-picture">
            <div class="box-text">
                <h1>Welcome !</h1>
                <div class="content">
                    <div class="content-1">Xác nhận mật khẩu </div>
                </div>
                
            </div>
        </div>
        <form 
        action="/azuki/taikhoan/checkmk" method="post" style="margin-top: -600px; "  onsubmit="return validateForm()">
            <div class="box-login"  style="heigh: 300px " >
                <h2>Xác nhận mật khẩu</h2>
                <div class="box-input">
                    <div class="box-user">
                    <i class="fa-solid fa-lock"></i>
                        <input class="user" type="password" placeholder="Nhập mật khẩu"  name="pass"  style="font-size: 15px;" required >
                    </div>
                    <p style="color:red">
                     <?php if(isset($_SESSION['tbsaimk'])){ 
                      echo $_SESSION['tbsaimk'] ;
                     }?>
                    </p>
                    
                </div>
                <div class="box-forgot-password">
                    <div>
                        <a href="/azuki/trangchu/home">Trang chủ</a>
                    </div>
                </div>
                <div class="box-forgot-password">
                    <div>
                        <a href="/azuki/taikhoan/signup">Đăng ký tài khoản</a>
                    </div>
                </div>
                <div class="button-login">
                    
                        <button type="submit" name="btn">Gửi</button>
                   
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