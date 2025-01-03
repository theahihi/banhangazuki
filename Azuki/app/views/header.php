<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Azuki</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f6f8;
        }

        .sidebar {
            width: 250px;
            height: 100vh;
            background-color: #002060;
            color: white;
            position: fixed;
            display: flex;
            flex-direction: column;
        }

        .sidebar h2 {
            text-align: center;
            margin: 20px 0;
            font-size: 20px;
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
        }

        .sidebar ul li {
            padding: 15px 20px;
            cursor: pointer;
            border-bottom: 1px solid #004080;
        }

        .sidebar ul li:hover {
            background-color: #004080;
        }

        .sidebar ul li i {
            margin-right: 10px;
        }

        .header {
            height: 60px;
            background-color: #002060;
            color: white;
            display: flex;
            justify-content: flex-end;
            align-items: center;
            padding: 0 20px;
            margin-left: 250px;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .header .actions {
            display: flex;
            gap: 10px;
        }

        .header .actions a {
            color: white;
            text-decoration: none;
            font-size: 16px;
            display: flex;
            align-items: center;
            padding: 8px 16px;
            background-color: #007bff;
            border-radius: 5px;
        }

        .header .actions a:hover {
            background-color: #0056b3;
        }

        .header .actions button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 8px 16px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
            display: flex;
            align-items: center;
        }

        .header .actions button i {
            margin-right: 5px;
        }

        .header .actions button:hover {
            background-color: #0056b3;
        }

        


        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f6f8;
        }

        .sidebar {
            width: 250px;
            height: 100vh;
            background-color: #002060;
            color: white;
            position: fixed;
            display: flex;
            flex-direction: column;
        }

        .sidebar h2 {
            text-align: center;
            margin: 20px 0;
            font-size: 20px;
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .sidebar ul li {
            padding: 15px 20px;
            cursor: pointer;
            border-bottom: 1px solid #004080;
        }

        .sidebar ul li:hover {
            background-color: #004080;
        }

        .sidebar ul li i {
            margin-right: 10px;
        }

        .dropdown-menu {
            display: none;
            list-style: none;
            padding-left: 20px;
            background-color: #003080;
        }

        .dropdown-menu li {
            padding: 10px 20px;
            border-bottom: none;
        }

        .dropdown-menu li a {
            color: #ffffff;
            text-decoration: none;
        }

        .dropdown-menu li:hover {
            background-color: #004080;
        }

        .dropdown .dropdown-icon {
            float: right;
            transition: transform 0.3s;
        }

        .dropdown.open .dropdown-icon {
            transform: rotate(90deg);
        }

        .dropdown.open .dropdown-menu {
            display: block;
        }

        .header {
            height: 60px;
            background-color: #002060;
            color: white;
            display: flex;
            justify-content: flex-end;
            align-items: center;
            padding: 0 20px;
            margin-left: 250px;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .header .actions {
            display: flex;
            gap: 10px;
        }

        .header .actions a,
        .header .actions button {
            color: white;
            text-decoration: none;
            font-size: 16px;
            display: flex;
            align-items: center;
            padding: 8px 16px;
            background-color: #007bff;
            border-radius: 5px;
            border: none;
            cursor: pointer;
        }

        .header .actions a:hover,
        .header .actions button:hover {
            background-color: #0056b3;
        }




        
    </style>
</head>
<body>
    <div class="sidebar">
        <h2>Azuki</h2>
        <ul>
            <a href= "/azuki/trangchu/home" style="text-decoration: none; color: inherit;">
            <li 
            <?php if($trang=="tongquan"){?>
            style=" background-color: #4C9AED;"
            <?php } ?>>
                <i class="fa fa-home"></i> Tổng quan
            </li>
            </a>
            
            
            
            <script>
    function toggleDropdown(event) {
        event.preventDefault(); // Ngăn chặn hành động mặc định (nếu có)
        
        // Lấy phần tử chứa class 'dropdown'
        const dropdown = event.target.closest('.dropdown');
        
        // Kiểm tra và toggle class 'open' để hiển thị hoặc ẩn menu
        dropdown.classList.toggle('open');
    }
</script>




<li class="dropdown <?php if ($trang == 'taodonhang' || $trang == 'listdonhang') echo 'open'; ?>">
                <a href="#" onclick="toggleDropdown(event)" style="text-decoration: none; color: inherit;">
                    <i class="fa fa-box"></i> Đơn hàng
                    <i class="fa fa-caret-right dropdown-icon"></i>
                </a>
                <ul class="dropdown-menu">
                    
                    <a href= "/azuki/trangchu/taodon" style="text-decoration: none; color: inherit;">
                    <li
                    <?php if($trang=="taodonhang" ){?>
            style=" background-color: #4C9AED;"
            <?php } ?>>Tạo đơn hàng</li></a>

                    <a href= "/azuki/trangchu/listdonhang" style="text-decoration: none; color: inherit;">
                    <li
                    <?php if( $trang=="listdonhang" ){?>
            style=" background-color: #4C9AED;"
            <?php } ?>>Danh sách đơn hàng</li></a>
            <a href= "/azuki/trangchu/taodon" style="text-decoration: none; color: inherit;">
                  
                </ul>
            </li>

            <a href="/azuki/trangchu/danhsachsanpham" style="text-decoration: none; color: inherit;">
                <li
                <?php if($trang=="sanpham"){?>
                style=" background-color: #4C9AED;"
                <?php } ?>
                ><i class="fa fa-tag"></i> Sản phẩm</li>
           </a>
           <a href="/azuki/trangchu/danhsachkhachhang" style="text-decoration: none; color: inherit;">
            <li
            <?php if($trang=="khachhang"){?>
                style=" background-color: #4C9AED;"
                <?php } ?>
            ><i class="fa fa-user"></i> Khách hàng</li>
            </a>



          
            <li class="dropdown <?php if ($trang == 'baohanh' || $trang =='danhsachdoitra' ) echo 'open'; ?>">
                <a href="#" onclick="toggleDropdown(event)" style="text-decoration: none; color: inherit;">
                <i class="fa fa-bullhorn"></i> Bảo hành
                    <i class="fa fa-caret-right dropdown-icon"></i>
                </a>
                <ul class="dropdown-menu">
                    
                    <a href= "/azuki/trangchu/baohanh" style="text-decoration: none; color: inherit;">
                    <li 
            <?php if($trang=="baohanh"){?>
            style=" background-color: #4C9AED;"
            <?php } ?>>
                 Danh sách bảo hành
            </li>
            </a>
                    <a href= "/azuki/trangchu/listdoitra" style="text-decoration: none; color: inherit;">
                    <li
                    <?php if( $trang=="danhsachdoitra" ){?>
            style=" background-color: #4C9AED;"
            <?php } ?>>Danh sách đổi trả</li></a>                  
                </ul>
            </li>

            
            <li class="dropdown <?php if ($trang == 'baocaobanhang' || $trang =='baocaotaichinh' || $trang =='baocaobaohanh' ) echo 'open'; ?>">
                <a href="#" onclick="toggleDropdown(event)" style="text-decoration: none; color: inherit;">
                    <i class="fa fa-box"></i> Báo cáo
                    <i class="fa fa-caret-right dropdown-icon"></i>
                </a>
                <ul class="dropdown-menu">
                    
                    <a href= "/azuki/trangchu/baocaobanhang" style="text-decoration: none; color: inherit;">
                    <li
                    <?php if($trang=="baocaobanhang" ){?>
            style=" background-color: #4C9AED;"
            <?php } ?>>Báo cáo bán hàng</li></a>
            <a href= "/azuki/trangchu/baocaotaichinh" style="text-decoration: none; color: inherit;">
                    <li
                    <?php if($trang=="baocaotaichinh" ){?>
            style=" background-color: #4C9AED;"
            <?php } ?>>Báo cáo tài chính</li></a>
            <a href= "/azuki/trangchu/baocaobaohanh" style="text-decoration: none; color: inherit;">
                    <li
                    <?php if($trang=="baocaobaohanh" ){?>
            style=" background-color: #4C9AED;"
            <?php } ?>>Báo cáo bảo hành</li></a>
                  
                </ul>
            </li>
            <?php if($_SESSION['role']==2){?>
            <li
            <?php if($trang=="quanlytk"){?>
            style=" background-color: #4C9AED;"
            <?php } ?>
            
            >   <a href="/azuki/trangchu/quanlytaikhoan" style="text-decoration: none; color: inherit;"><i class="fa fa-file-alt"></i> Quản lý tài khoản </a> </li>
            <?php  }?>

        </ul>
    </div>
    <div class="header">
        <div class="actions">
            <?php if (isset($_COOKIE['username'])): ?>
                <a href="/azuki/taikhoan/thongtincanhan">
                    <i class="fa fa-user"></i> <?php echo $_COOKIE['name']; ?>
                </a>
                <a href="<?php echo WEBROOT . 'taikhoan/dangxuat'; ?>">
                    <i class="fa fa-sign-out-alt"></i> Đăng xuất
                </a>
            <?php else: ?>
                <a href="<?php echo WEBROOT . 'taikhoan/login'; ?>">
                    <i class="fa fa-sign-in-alt"></i> Đăng nhập
                </a>
            <?php endif; ?>
            <button>
                <i class="fa fa-bell"></i> Thông báo
            </button>
        </div>
    </div>
</body>
</html>
