<style>
    /* Đặt phông chữ và nền chung */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f7fc;
    color: #333;
}

/* Bố cục container chính */
.containerdanhgia, .tab-content {
    background-color: #ffffff;
    padding: 20px;
    margin: 20px auto;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    max-width: 850px;
}

.containerdanhgia h1, .tab-content h1 {
    font-size: 24px;
    color: #003366;
    margin-bottom: 20px;
    text-align: center;
}

/* Định dạng bảng */
table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
}

table thead {
    background-color: #003366;
    color: #ffffff;
}

table thead th {
    padding: 10px;
    text-align: center;
    font-size: 16px;
}

table tbody tr {
    border-bottom: 1px solid #ddd;
}

table tbody tr:nth-child(even) {
    background-color: #f9f9f9;
}

table tbody tr:hover {
    background-color: #eaf2ff;
}

table tbody td {
    padding: 10px;
    text-align: center;
    font-size: 14px;
    vertical-align: middle;
}

/* Nút Thao Tác */
button {
    background-color: #0056b3;
    color: white;
    border: none;
    padding: 8px 12px;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button:hover {
    background-color: #004494;
}

button img {
    width: 20px;
    height: 20px;
}

/* Trạng thái hoạt động */
span {
    font-weight: bold;
}

span[style="color:green;"] {
    color: #28a745;
}

span[style="color:red;"] {
    color: #dc3545;
}

/* Nút Thêm thành viên */
a button {
    display: inline-block;
    margin-top: 20px;
    background-color: #0069d9;
    padding: 10px 15px;
    font-size: 14px;
    text-decoration: none;
    transition: background-color 0.3s ease;
}

a button:hover {
    background-color: #0056b3;
}

/* Định dạng Form thêm thành viên */
form {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

form .form-group {
    display: flex;
    flex-direction: column;
    gap: 5px;
}

form .form-group input {
    width: 95%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

form .form-group p {
    font-size: 12px;
    color: #dc3545;
    margin: 0;
}

form button {
    background-color: #28a745;
    color: white;
    padding: 10px 15px;
    font-size: 16px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    align-self: left;

}

form button:hover {
    background-color: #218838;
}

/* Đáp ứng màn hình nhỏ */
@media (max-width: 768px) {
    .containerdanhgia, .tab-content {
        padding: 10px;
    }

    table thead th,
    table tbody td {
        font-size: 12px;
        padding: 8px;
    }

    button {
        font-size: 12px;
        padding: 6px 10px;
    }
}

</style>

<div class="content" style="margin-left: 250px; padding: 20px;">

<div class="tab-content active">
<a href="/azuki/trangchu/quanlytaikhoan" style="text-decoration: none; color: inherit;"><h3> ◀ Quay về danh sách</h3> </a>
    <h1>Thêm thành viên mới</h1>
    <form action="/azuki/admin/xulythemtv" method="post">
        <!-- Tên đăng nhập -->
        <div class="form-group">
           <p style="color:red">
                <?php 
                if(isset($_SESSION['trunguser'])){
                    echo $_SESSION['trunguser'];
                }
                ?>
           </p>
            <input type="text" name="username" placeholder="Tạo tên đăng nhập" value="<?php if(isset($_SESSION['hienthiuser'])){ echo $_SESSION['hienthiuser'] ; }?>" required>
        </div>
        
        <!-- Mật khẩu -->
        <div class="form-group">
            <input type="password" name="password" placeholder="Tạo mật khẩu" value="<?php if(isset($_SESSION['hienthipass'])){ echo $_SESSION['hienthipass']; }?>" required>
            <p>Mật khẩu phải có ít nhất 8 ký tự, bao gồm chữ hoa, chữ thường, số và ký tự đặc biệt</p>
        </div>
        
        <!-- Nhập lại mật khẩu -->
        <div class="form-group">
            <input type="password" name="confirm_password" placeholder="Nhập lại mật khẩu" value="<?php if(isset($_SESSION['hienthipass'])){ echo $_SESSION['hienthipass'] ; }?>" required>
        </div>
        
        <!-- Họ và tên -->
        <div class="form-group">
            <input type="text" name="fullname" placeholder="Họ và tên" value="<?php if(isset($_SESSION['hienthiten'])){ echo $_SESSION['hienthiten'] ; }?>" required>
        </div>
        
        <!-- Số điện thoại -->
        <div class="form-group">
       <p style="color:red" >
            <?php 
                if(isset($_SESSION['trungsdt'])){
                    echo $_SESSION['trungsdt'];
                }
                ?>
       </p>
            <input type="tel" name="phone" placeholder="Số điện thoại" value="<?php if(isset($_SESSION['hienthisdt'])){ echo $_SESSION['hienthisdt'] ; }?>" required>
        </div>
        
        <!-- Email -->
        <div class="form-group">
       <p style="color:red">
            <?php 
                if(isset($_SESSION['trungemail'])){
                    echo $_SESSION['trungemail'];
                }
                ?>
       </p>
            <input type="email" name="email" placeholder="Email" value="<?php if(isset($_SESSION['hienthiemail'])){ echo $_SESSION['hienthiemail'] ; }?>" required>
        </div>
        
        <!-- Nút gửi -->
        <div class="form-group">
            <button type="submit">Thêm </button>
        </div>
    </form>
</div>
            </div>