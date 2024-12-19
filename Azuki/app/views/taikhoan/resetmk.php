


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
    <link rel="stylesheet" href="../Public/client/Css/login.css">
    <style>* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

html {
  font-family: "Questrial", sans-serif;
}

:root {
  --color-text_1: #868686;
  --color-text: #585858;
  --Hover-icon: #ff9b42;
}

.all-container {
  display: flex;
  align-items: center;
}

.box-picture {
  /* width: 55%; */
  width: 100%;
  height: 100vh;
  padding-right: 10%;
  background: url("<?php echo WEBROOT . 'public/client/Picture/login/slider-3.jpg'?>") no-repeat;
  background-size: cover;
  /* clip-path: polygon(100% 0%, 75% 50%, 100% 100%, 0 100%, 0% 50%, 0 0); */
  position: relative;
}

.box-text {
  position: absolute;
  top: 35%;
  left: 130px;
}

.box-text h1 {
  color: white;
  font-weight: 500;
  font-size: 60px;
  margin-bottom: 20px;
}

.box-text .content {
  /* text-align: center; */
  color: white;
  font-size: 27px;
  font-weight: 400;
  letter-spacing: 2px;
  margin-bottom: 20px;
}

/* .content-button {
    text-align: center;
} */

.content-button button {
  font-size: 25px;
  width: 230px;
  height: 55px;
  padding: 10px 40px;
  letter-spacing: 2px;
  background-color: var(--color-text);
  border: none;
  outline: none;
  color: white;
  border-radius: 15px;
  transition: all 0.4s ease-in-out;
  cursor: pointer;
}

.content-button button:hover {
  background-color: var(--Hover-icon);
}

.content-button button:active {
  font-size: 23px;
}

.box-login {
  position: absolute;
  width: 425px;
  height: 570px;
  padding: 60px 35px;
  background-color: var(--color-text);
  /* margin-left: 90px; */
  right: 120px;
  border-radius: 25px;
  box-shadow: 1px 1px 20px black;
}

.box-login h2 {
  text-align: center;
  font-size: 50px;
  color: white;
  letter-spacing: 3px;
  margin-bottom: 25px;
}

.box-login .box-login-icon {
  text-align: center;
  font-size: 30px;
  margin-bottom: 40px;
}

.box-login-icon a {
  text-decoration: none;
  color: white;
  transition: 0.4s;
}

.box-login-icon a:hover {
  color: var(--Hover-icon);
}

.box-login .box-login-icon i {
  margin: 0 10px;
}

.box-login .noti {
  color: white;
  font-size: 18px;
  text-align: center;
  margin-bottom: 40px;
}

.box-input .box-user {
  display: flex;
}

.box-user i {
  width: 55px;
  height: 45px;
  text-align: center;
  line-height: 45px;
  font-size: 20px;
  background-color: white;
  color: var(--color-text);
  border-radius: 10px 0 0 10px;
}

.box-input .user {
  width: 100%;
  height: 45px;
  padding: 15px;
  margin-bottom: 15px;
  outline: none;
  font-size: 20px;
  border: none;
  border-radius: 0 10px 10px 0;
  letter-spacing: 2px;
}

.box-forgot-password {
  text-align: center;
  margin-bottom: 15px;
}

.box-forgot-password a {
  color: white;
  text-decoration: none;
  line-height: 2;
  border-bottom: 1px solid white;
}

.button-login {
  text-align: center;
}

.button-login button {
  width: 250px;
  font-size: 25px;
  padding: 10px 20px;
  text-transform: uppercase;
  border-radius: 10px;
  border: none;
  background-color: var(--Hover-icon);
  color: white;
  transition: 0.3s;
  cursor: pointer;
}

.button-login button:hover {
  background-color: var(--color-text_1);
}

.button-login button:active {
  background-color: var(--Hover-icon);
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
                    <div class="content-1">Lấy lại mật khẩu</div>
                </div>
                
            </div>
        </div>
        
        <form action="/azuki/taikhoan/xulyresetmk" method="post" style="margin-top: -600px; " onsubmit="return validatePassword()"  >
            <div class="box-login"  style="heigh: 300px " >
                <h2>ĐỔi LẠI MẬT KHẨU</h2>
                <div class="box-input">
                    <div class="box-user">
                    <i class="fa-solid fa-lock"></i>
                    <input class="user" type="password" placeholder="Nhập mật khẩu mới"  name="newpass9" id="newpass9" style="font-size: 15px;" required >
                    </div>
                    
                </div>
                <div class="box-input">
                    <div class="box-user">
                    <i class="fa-solid fa-lock"></i>
                    <input class="user" type="password" placeholder="Nhập lại mật khẩu mới"  name="newpass8" id="newpass8" style="font-size: 15px;" required >
                    </div>
                    
                </div>
                <input type="hidden" name='token' value='<?php 
                $row=mysqLi_fetch_array($token);
                echo $row['forgottoken'];
                ?>'>
               <div class="box-forgot-password">
                    <div>
                        <a href="/azuki/taikhoan/login">Đăng nhập</a>
                    </div>
                </div>
                <div class="box-forgot-password">
                    <div>
                        <a href="/azuki/taikhoan/signup">Đăng ký tài khoản</a>
                    </div>
                </div>
                <div class="button-login">
                    
                        <button type="submit" name="btn">Đổi mật khẩu</button>
                   
                </div>
            </div>
        </form>
        </form>
    </div>
   
</body>
</html>

<script src="https://kit.fontawesome.com/eda05fcf5c.js" crossorigin="anonymous"></script>
<script src="js/main.js"></script>








 


<script>
function validatePassword() {
    let newPassword = document.getElementById('newpass9').value;
    let confirmPassword = document.getElementById('newpass8').value;
    if (newPassword !== confirmPassword) {
        alert("Mật khẩu không khớp. Vui lòng nhập lại.");
        return false;  
    }
        return true;
}
</script>

