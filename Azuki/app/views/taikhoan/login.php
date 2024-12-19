
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
    <link rel="stylesheet" href="<?php echo WEBROOT . 'public/client/css/login.css'?>">
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
</head>
<body>
    <div class="all-container">
        <div class="box-picture">
            <div class="box-text">
                <h1>Chào mừng quay trở lại</h1>
                <div class="content">
                    <div class="content-1">Hãy đăng nhập thông tin của bạn</div>
                    <div class="content-2">Chưa có tài khoản hãy đăng ký tại đây</div>
                </div>
                <div class="content-button">
                   <a href="<?php echo WEBROOT . 'taikhoan/signup'?>"><button>Sign up</button></a>
                </div>
            </div>
        </div>

        <form action="<?php echo WEBROOT . 'taikhoan/checktk'?>" method="post" style="margin-top: -600px;">
            <div class="box-login">
                <h2>Sign in</h2>
                <?php if (isset($_SESSION['loidangnhap'])): ?>
                    <div class="error-message">
                        <?php
                       echo $_SESSION['loidangnhap'];
                        ?>
                    </div>
                <?php endif; ?>

                <div class="box-input">
                    <div class="box-user" style="position: relative;">
                        <i class="fa-solid fa-user"></i>
                        <input 
                            id="username" 
                            class="user" 
                            type="text" 
                            placeholder="User" 
                            name="user" 
                            autocomplete="off" 
                            required
                            value="<?php 
                            
                            
                            if(isset($_SESSION['hienthiusername'])){
                                echo $_SESSION['hienthiusername'] ; 
                            }elseif(isset($_COOKIE['user_login'])){
                               echo $_COOKIE['user_login'] ;
                                
                            }
                            
                            ?>"
                        >
                        <div id="suggestions" class="suggestions"></div>
                    </div>
                    <div class="box-user">
                        <i class="fa-solid fa-lock"></i>
                        <input 
                            id="password" 
                            class="user" 
                            type="password" 
                            placeholder="Password" 
                            name="password" 
                            required
                            value="<?php
                            
                            if(isset($_SESSION['saipass'])){
                                echo $_SESSION['saipass'] ; 
                            }elseif(isset($_COOKIE['user_password'])){
                                echo $_COOKIE['user_password'] ; 
                            }   ?>"
                        >
                    </div>
                </div>

                <div class="box-forgot-password">
                    <input type="checkbox" name="remember" id="remember">
                    <label for="remember" style="color:white;">Nhớ mật khẩu</label>
                    <div>
                        <a href="<?php echo WEBROOT . 'taikhoan/quenmk'?>">Forgot your password?</a>
                    </div>
                    <div>
                        <a href="<?php echo WEBROOT . 'trangchu/'?>">Quay về trang chủ</a>
                    </div>
                </div>

                <div class="button-login">
                    <button type="submit" name="btn">Sign in</button>
                </div>
            </div>
        </form>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const usernameInput = document.getElementById('username');
            const passwordInput = document.getElementById('password');
            const suggestionsBox = document.getElementById('suggestions');

            const savedUser = "<?php echo $saved_user; ?>";
            const savedPassword = "<?php echo $saved_password; ?>";

            usernameInput.addEventListener('focus', function () {
                if (savedUser) {
                    suggestionsBox.innerHTML = `<div>${savedUser}</div>`;
                    suggestionsBox.style.display = 'block';
                }
            });

            suggestionsBox.addEventListener('click', function () {
                usernameInput.value = savedUser;
                passwordInput.value = savedPassword;
                suggestionsBox.style.display = 'none';
            });

            document.addEventListener('click', function (event) {
                if (!usernameInput.contains(event.target) && !suggestionsBox.contains(event.target)) {
                    suggestionsBox.style.display = 'none';
                }
            });
        });
    </script>
</body>
</html>
