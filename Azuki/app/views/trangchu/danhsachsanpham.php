
<style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f7fc;
            color: #333;
        }

        .content {
            margin-left: 250px;
            padding: 20px;
        }

        .tab-content {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 95%;
            margin: auto;
        }

        .tab-content h1 {
            font-size: 24px;
            color: #003366;
            text-align: center;
            margin-bottom: 20px;
        }

        .product-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .product-table thead {
            background-color: #003366;
            color: #ffffff;
        }

        .product-table thead th {
            padding: 10px;
            text-align: center;
            font-size: 16px;
        }

        .product-table tbody tr {
            border-bottom: 1px solid #ddd;
        }

        .product-table tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .product-table tbody tr:hover {
            background-color: #eaf2ff;
        }

        .product-table tbody td {
            padding: 10px;
            text-align: center;
            font-size: 14px;
        }

        .product-table tbody td img {
            width: 50px;
            height: 50px;
            object-fit: cover;
            border-radius: 4px;
        }

        button {
            background-color: #0056b3;
            color: white;
            border: none;
            padding: 8px 12px;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #004494;
        }

        .popupchitietsp {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 50%;
            max-height: 80%;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            border-radius: 8px;
            z-index: 9999;
            overflow-y: auto;
            padding: 20px;
        }

        .popupchitietsp.active {
            display: block;
        }

        .popupchitietsp .form-actions {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .popupchitietsp .btn {
            padding: 10px 20px;
            border-radius: 4px;
        }

        .popupchitietsp .btn-save {
            background-color: #28a745;
            color: white;
        }

        .popupchitietsp .btn-reset {
            background-color: #dc3545;
            color: white;
        }

        .popupchitietsp .btn-save:hover {
            background-color: #218838;
        }

        .popupchitietsp .btn-reset:hover {
            background-color: #c82333;
        }

        @media (max-width: 768px) {
            .popupchitietsp {
                width: 90%;
            }
        }
        /* Styles for Popup */
.popupchitietsp {
    display: none;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 40%;
    width: 800px;
    height: 6500px;
    background-color: #ffffff;
    border-radius: 8px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    overflow-y: auto;
    padding: 20px;
    z-index: 1000;
}

/* Active state for popup */
.popupchitietsp.active {
    display: block;
}

/* Form styles inside popup */
.popupchitietsp .form-group {
    margin-bottom: 15px;
}

.popupchitietsp .form-group label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
    color: #333;
}

.popupchitietsp .form-group input,
.popupchitietsp .form-group textarea {
    width: 65%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 14px;
}

.popupchitietsp .form-group textarea {
    resize: none;
}

.popupchitietsp .form-actions {
    display: flex;
    justify-content: space-between;
    gap: 10px;
    margin-top: 20px;
}

/* Buttons */
.popupchitietsp .btn {
    padding: 10px 20px;
    border-radius: 4px;
    cursor: pointer;
    font-size: 14px;
    font-weight: bold;
    transition: background-color 0.3s ease;
    border: none;
}

.popupchitietsp .btn-save {
    background-color: #28a745;
    color: #fff;
}

.popupchitietsp .btn-save:hover {
    background-color: #218838;
}

.popupchitietsp .btn-reset {
    background-color: #dc3545;
    color: #fff;
}

.popupchitietsp .btn-reset:hover {
    background-color: #c82333;
}

/* Overlay */
.popup-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
    z-index: 999;
    display: none;
}

/* Active overlay */
.popup-overlay.active {
    display: block;
}

/* Responsive design */
@media (max-width: 768px) {
    .popupchitietsp {
        width: 90%;
        max-height: 90%;
    }

    .popupchitietsp .form-group input,
    .popupchitietsp .form-group textarea {
        font-size: 12px;
    }

    .popupchitietsp .btn {
        font-size: 12px;
    }
}
/* Close Button Styles */
.popupchitietsp .btn-reset {
    position: absolute;
    top: 10px;
    right: 10px;
    width: 5px;
    height: 10px;
    background: #ff4d4f;
    color: white;
    border: none;
    border-radius: 80%;
    font-size: 12px;
    font-weight: bold;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    transition: background-color 0.3s ease, transform 0.2s ease;
}


/* Hover Effect for Close Button */
.popupchitietsp .btn-reset:hover {
    background: #d9363e; /* Slightly darker red on hover */
    transform: scale(1.1); /* Slightly enlarge on hover */
}

/* Active Popup Container */


/* Display Popup When Active */
.popupchitietsp.active {
    display: block;
}

/* Popup Form Layout */
.popupchitietsp .form-row {
    display: flex;
    justify-content: space-between;
    gap: 20px; /* Adds space between the two fields */
}

.popupchitietsp .form-group {
    flex: 1; /* Ensures both inputs take equal width */
}

/* Align labels and inputs neatly */
.popupchitietsp .form-group label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
    color: #333;
}

.popupchitietsp .form-group input,
.popupchitietsp .form-group select,
.popupchitietsp .form-group textarea {
    width: 100%; /* Make inputs and selects fill their containers */
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 14px;
}

.popupchitietsp .form-group textarea {
    resize: none;
}

/* Form Actions */
.popupchitietsp .form-actions {
    display: flex;
    justify-content: space-between;
    gap: 10px;
    margin-top: 20px;
}








/* Popup styles for "Add New Product" */
.popupthem {
    display: none;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 839px;
    background-color: #ffffff;
    border-radius: 8px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    overflow: hidden;
    padding: 20px;
    z-index: 1000;
}

/* Active state for popup */
.popupthem.active {
    display: block;
}

/* Popup heading */
.popupthem h2 {
    text-align: center;
    font-size: 20px;
    color: #003366;
    margin-bottom: 20px;
}

/* Close button */
.popupthem .btn-reset {
    position: absolute;
    top: 10px;
    right: 10px;
    width: 5px;
    height: 10px;
    background: #ff4d4f;
    color: white;
    border: none;
    border-radius: 80%;
    font-size: 12px;
    font-weight: bold;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    transition: background-color 0.3s ease, transform 0.2s ease;
}

.popupthem .btn-reset:hover {
    background: #d9363e;
    transform: scale(1.1);
}

/* Form styles */
.popupthem form {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

.popupthem .form-row {
    display: flex;
    justify-content: space-between;
    gap: 20px;
}

.popupthem .form-group {
    flex: 1;
    display: flex;
    flex-direction: column;
    gap: 5px;
}

.popupthem .form-group label {
    font-weight: bold;
    color: #333;
}

.popupthem .form-group input,
.popupthem .form-group select,
.popupthem .form-group textarea {
    width: 95%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 14px;
}

.popupthem .form-group textarea {
    resize: none;
    height: 80px;
}

/* Actions */
.popupthem .form-actions {
    display: flex;
    justify-content: space-between;
}

.popupthem .btn {
    padding: 10px 20px;
    border-radius: 4px;
    cursor: pointer;
    font-size: 14px;
    font-weight: bold;
    border: none;
    transition: background-color 0.3s ease;
}

.popupthem .btn-save {
    background-color: #28a745;
    color: #fff;
}

.popupthem .btn-save:hover {
    background-color: #218838;
}

.popupthem .btn-reset {
    background-color: #dc3545;
    color: #fff;
}

.popupthem .btn-reset:hover {
    background-color: #c82333;
}

/* Responsive Design */
@media (max-width: 768px) {
    .popupthem {
        width: 90%;
    }

    .popupthem .form-group input,
    .popupthem .form-group textarea {
        font-size: 12px;
    }

    .popupthem .btn {
        font-size: 12px;
    }
}


.filter-form {
        display: flex;
        justify-content: flex-end; /* Đẩy form sang góc phải */
        margin-bottom: 20px;
    }

    .filter-form input[type="text"] {
        padding: 10px;
        font-size: 14px;
        border: 1px solid #ccc;
        border-radius: 4px;
        width: 300px;
        margin-right: 10px;
    }

    .filter-form button {
        padding: 10px 15px;
        font-size: 14px;
        color: white;
        background-color: #0056b3;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .filter-form button:hover {
        background-color: #004494;
    }

    button#addsp i {
    transition: transform 0.2s ease, color 0.2s ease;
}

button#addsp i:hover {
    transform: scale(1.2); /* Phóng to khi hover */
    color: #004494; /* Thay đổi màu sắc */
}

.product-table-container {
    max-height: 500px; /* Giới hạn chiều cao container */
    overflow-y: auto; /* Chỉ hiển thị thanh cuộn theo chiều dọc */
    border: 1px solid #ddd; /* Viền xung quanh bảng */
    border-radius: 8px;
    margin-bottom: 20px;
}

/* Tiêu đề bảng giữ cố định */
.product-table thead th {
    position: sticky;
    top: 0; /* Giữ cố định ở trên cùng */
    z-index: 2; /* Đảm bảo luôn hiển thị phía trên các hàng */
    background-color: #003366; /* Màu nền tiêu đề bảng */
    color: #ffffff; /* Màu chữ tiêu đề */
    padding: 10px;
    text-align: center;
    font-size: 16px;
    border-bottom: 2px solid #ddd; /* Đường phân cách tiêu đề */
}

/* Dòng dữ liệu trong bảng */
.product-table tbody td {
    padding: 10px;
    text-align: center;
    font-size: 14px;
    border-bottom: 1px solid #ddd;
}

/* Dòng xen kẽ màu sắc */
.product-table tbody tr:nth-child(even) {
    background-color: #f9f9f9;
}

.product-table tbody tr:hover {
    background-color: #eaf2ff;
    cursor: pointer;
}

/* Thu gọn thanh cuộn (tùy chọn) */
.product-table-container::-webkit-scrollbar {
    width: 8px; /* Độ rộng thanh cuộn */
}

.product-table-container::-webkit-scrollbar-thumb {
    background: #0056b3; /* Màu thanh cuộn */
    border-radius: 4px;
}

.product-table-container::-webkit-scrollbar-thumb:hover {
    background: #004494; /* Màu khi hover */
}

    </style>

<body>

<div class="content">
    <div class="tab-content active">
        <h1>Danh Sách Sản Phẩm</h1>

         <!-- Form lọc sản phẩm -->
    <form class="filter-form" method="GET" action="">
        <input type="text" name="search" placeholder="Nhập mã hoặc tên sản phẩm" value="<?= isset($_GET['search']) ? htmlspecialchars($_GET['search']) : '' ?>">
        <button type="submit">Lọc</button>
    </form>

        <div style="text-align: left; margin-bottom: 20px;">
    <button id="addsp" style="background: none; border: none; cursor: pointer;">
        <i class="fas fa-plus-circle" style="font-size: 24px; color: #0056b3;"></i>
    </button>
    <div class="product-table-container">

        <table class="product-table">
            <thead>
            <tr>
                <th>STT</th>
                <th>Mã sản phẩm</th>
                <th>Tên sản phẩm</th>
                <th>Ảnh</th>
                <th>Giá</th>
                <th>Số lượng tồn</th>
                <th>Số lượng đã bán</th>
                <th>Thao tác</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $i = 1;
            while ($rowsp = mysqli_fetch_array($sanpham)) {
                $soluongban = 0;
                mysqli_data_seek($slban, 0);
                mysqli_data_seek($loaisp, 0);
                while ($rowslban = mysqli_fetch_array($slban)) {
                    if ($rowsp['masp'] == $rowslban['masp']) {
                        $soluongban = $rowslban['soluongban'];
                        break;
                    }
                }
                ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $rowsp['masp']; ?></td>
                    <td><?php echo $rowsp['tensp']; ?></td>
                    <td><img src="<?php echo WEBROOT . 'public/client/Picture/anhsanpham/' . $rowsp['anhhienthi1']; ?>" alt="Ảnh sản phẩm"></td>
                    <td><?php echo number_format($rowsp['dongia'], 0, '', ','); ?>₫</td>
                    <td><?php echo $rowsp['soluong']; ?></td>
                    <td><?php echo $soluongban; ?></td>
                    <td>
                        <button class="btn edit" onclick="showPopup('popup-<?php echo $i; ?>')">
                            <i class="fas fa-edit" style="color: white; cursor: pointer;"></i>
                        </button>   
                        <a href="/azuki/admin/xoasp/<?php echo $rowsp['masp']; ?>"
                           onclick="return confirmCustom('Bạn có chắc chắn muốn xoá sản phẩm  <?php echo $rowsp['tensp']; ?>')">
                            <button class="btn delete" style="back-color: red;">
                                <i class="fas fa-trash" style="color: white; cursor: pointer;"></i>
                            </button>
                        </a>
                    </td>
                </tr>

                <!-- Popup -->
                <div class="popup-overlay" id="overlay"></div>
                <div class="popupchitietsp" id="popup-<?php echo $i; ?>">
    <h2 style="margin-top:-15px">Sửa sản phẩm: <span style="color: green"><?php echo $rowsp['tensp']; ?></span></h2>
    <form style="margin-top:-10px" action="/azuki/trangchu/updatesp" method="post" enctype="multipart/form-data">
        <button type="button" class="btn btn-reset" onclick="hidePopup('popup-<?php echo $i; ?>')">X</button>
        <input type="hidden" name="masp" value="<?php echo $rowsp['masp']; ?>">

        <div class="form-row">
            <div class="form-group">
                <label for="product-name">Tên sản phẩm:</label>
                <input style="width: 300px;" type="text" id="product-name" name="tensp" value="<?php echo $rowsp['tensp']; ?>" required>
            </div>
            <div class="form-group">
                <label for="price">Đơn giá:</label>
                <input style="width: 300px;" type="number" id="price" name="dongia" value="<?php echo $rowsp['dongia']; ?>" required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label for="quantity">Số lượng tồn:</label>
                <input style="width: 300px;" type="number" id="quantity" name="soluong" value="<?php echo $rowsp['soluong']; ?>" required>
            </div>
            <div class="form-group">
                <label for="main-image">Loại sản phẩm:</label>
                <select style="width: 300px;" name="loai" id="">
                    <?php while($rowloai=mysqLi_fetch_array($loaisp)){ ?>
                    <option value="<?php echo $rowloai['maloai'] ?>"
                     <?php if($rowsp['maloai']==$rowloai['maloai']){ 
                       echo "selected";
                     }
                     
                     ?>
                    ><?php echo $rowloai['tenloai'] ?></option>
                    <?php  } ?>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label for="detail-image-5">Thông tin sản phẩm:</label>
            <textarea class="mytextarea" name="thongtin" style="height: 50px;"><?php echo $rowsp['thongtin']; ?></textarea>
        </div>

        <div class="form-group">
            <label for="main-image">Ảnh sản phẩm:</label>
            <input
                style="width: 300px;"
                type="file"
                id="main-image-<?php echo $i; ?>"
                name="anh_main"
                accept="image/*"
                onchange="previewImage(event, '<?php echo $i; ?>')"
            >
            <p>
                <img
                    id="preview-<?php echo $i; ?>"
                    style="width: 150px; height: 150px;"
                    src="<?php echo WEBROOT . 'public/client/Picture/anhsanpham/' . $rowsp['anhhienthi1']; ?>"
                    alt="Ảnh sản phẩm hiện tại"
                >
            </p>
            <input type="hidden" id="original-image-<?php echo $i; ?>" value="<?php echo WEBROOT . 'public/client/Picture/anhsanpham/' . $rowsp['anhhienthi1']; ?>">
        </div>

        <div class="form-actions">
            <button type="submit" class="btn btn-save">Lưu</button>
            <button type="button"  onclick="resetImage('<?php echo $i; ?>')">Hoàn tác</button>
        </div>
    </form>
</div>

                <!-- End Popup -->

                <?php
                $i++;
            }
            ?>
            </tbody>
        </table>
        </div>
        <?php mysqli_data_seek($loaisp, 0); ?>
                        <!-- Popup thêm sản phẩm -->

        <div class="popupthem" >
    <h2 style="margin-top:-15px">Thêm sản phẩm mới </h2>
    <form style="margin-top:-10px" action="/azuki/trangchu/addsp" method="post" enctype="multipart/form-data">
        <button type="button" class="btn btn-reset" >X</button>
        <input type="hidden" name="masp" value="">

        <div class="form-row">
            <div class="form-group">
                <label for="product-name">Tên sản phẩm:</label>
                <input style="width: 300px;" type="text" id="product-name" name="tensp" value="" required>
            </div>
            <div class="form-group">
                <label for="price">Đơn giá:</label>
                <input style="width: 300px;" type="number" id="price" name="dongia" value="" required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label for="quantity">Số lượng:</label>
                <input style="width: 300px;" type="number" id="quantity" name="soluong" value="" required>
            </div>
            <div class="form-group">
                <label for="main-image">Loại sản phẩm:</label>
                <select style="width: 300px;" name="loai" id="">
                    <?php while($rowloai=mysqLi_fetch_array($loaisp)){ ?>
                    <option value="<?php echo $rowloai['maloai'] ?>"
                
                    ><?php echo $rowloai['tenloai'] ?></option>
                    <?php  } ?>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label for="detail-image-5">Thông tin sản phẩm:</label>
            <textarea class="mytextarea" name="thongtin" style="height: 50px;"></textarea>
        </div>

        <div class="form-group">
    <label for="main-image">Ảnh sản phẩm:</label>
    <input
        style="width: 300px;"
        type="file"
        id="main-image-add"
        name="anh_main"
        accept="image/*"
        onchange="previewImageAdd(event)"
    >
    <p>
        <img
            id="preview-image-add"
            style="width: 150px; height: 150px; display: none; "
            alt="Xem trước ảnh"
        >
    </p>
</div>


        <div class="form-actions">
            <button type="submit" class="btn btn-save">Thêm</button>
            <button type="reset" class="hoantac"   >Hoàn tác</button>
        </div>
    </form>
</div>
                        <!-- end Popup thêm sản phẩm -->


    </div>
</div>

<script>
       function confirmCustom(message) {
    const isConfirmed = window.confirm(message);
    return isConfirmed;
}
    function showPopup(id) {
        document.getElementById(id).classList.add('active');
        document.getElementById("overlay").classList.add("active");

    }

    function hidePopup(id) {
        document.getElementById(id).classList.remove('active');
        document.getElementById("overlay").classList.remove("active");

    }


     // Preview uploaded image
     function previewImage(event, id) {
        const inputFile = event.target;
        const previewImg = document.getElementById(`preview-${id}`);

        if (inputFile.files && inputFile.files[0]) {
            const reader = new FileReader();

            reader.onload = function (e) {
                previewImg.src = e.target.result; // Set preview to new image
            };

            reader.readAsDataURL(inputFile.files[0]); // Read the uploaded file
        }
    }

    // Reset image to the original
    function resetImage(id) {
        const previewImg = document.getElementById(`preview-${id}`);
        const originalImg = document.getElementById(`original-image-${id}`).value;

        previewImg.src = originalImg; // Reset preview to the original image
        document.getElementById(`main-image-${id}`).value = ""; // Clear file input
    }



    document.addEventListener("DOMContentLoaded", function () {
        const addButton = document.getElementById("addsp");
        const addPopup = document.querySelector(".popupthem");
    const closePopupButton = addPopup.querySelector(".btn-reset");
    const overlay = document.createElement("div");
    overlay.className = "popup-overlay";
    document.body.appendChild(overlay);

    // Show the popup
    addButton.addEventListener("click", function () {
        addPopup.classList.add("active");
        overlay.classList.add("active");
    });

    // Hide the popup
    function hidePopup() {
        addPopup.classList.remove("active");
        overlay.classList.remove("active");
    }

    closePopupButton.addEventListener("click", hidePopup);
    overlay.addEventListener("click", hidePopup);
});




    // Hàm xem trước ảnh khi thêm
    function previewImageAdd(event) {
        const inputFile = event.target; // Lấy input file
        const previewImg = document.getElementById("preview-image-add"); // Lấy thẻ img

        // Kiểm tra nếu có ảnh được chọn
        if (inputFile.files && inputFile.files[0]) {
            const reader = new FileReader();

            // Khi đọc file hoàn tất
            reader.onload = function (e) {
                previewImg.src = e.target.result; // Đặt ảnh xem trước
                previewImg.style.display = "block"; // Hiển thị thẻ img
            };

            reader.readAsDataURL(inputFile.files[0]); // Đọc file ảnh
        }
    }

    // Hàm hoàn tác ảnh
    document.querySelector(".hoantac").addEventListener("click", function () {
        const inputFile = document.getElementById("main-image-add"); // Lấy input file
        const previewImg = document.getElementById("preview-image-add"); // Lấy thẻ img

        inputFile.value = ""; // Xóa giá trị file input
        previewImg.src = ""; // Xóa nguồn ảnh
        previewImg.style.display = "none"; // Ẩn thẻ img
    });


    document.addEventListener("DOMContentLoaded", function () {
        const searchInput = document.querySelector('.filter-form input[name="search"]');
        const filterForm = document.querySelector('.filter-form');
        const tableRows = document.querySelectorAll('.product-table tbody tr');

        // Thêm sự kiện khi form được submit
        filterForm.addEventListener("submit", function (e) {
            e.preventDefault(); // Ngăn form gửi yêu cầu

            const searchValue = searchInput.value.trim().toLowerCase(); // Lấy giá trị tìm kiếm
            if (!searchValue) {
                // Nếu không có giá trị tìm kiếm, hiện toàn bộ sản phẩm
                tableRows.forEach(row => row.style.display = '');
                return;
            }

            // Lọc sản phẩm
            tableRows.forEach(row => {
                const productCode = row.children[1].textContent.toLowerCase(); // Mã sản phẩm
                const productName = row.children[2].textContent.toLowerCase(); // Tên sản phẩm

                if (productCode.includes(searchValue) || productName.includes(searchValue)) {
                    row.style.display = ''; // Hiện nếu khớp
                } else {
                    row.style.display = 'none'; // Ẩn nếu không khớp
                }
            });
        });
    });



</script>

</body>
</html>


<?php 
if (isset($_SESSION['thanhcong'])) {
  ?>
<style>
    /* Nền tối của popup */
.popup {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    display: none; /* Ẩn popup mặc định */
    justify-content: center;
    align-items: center;
    z-index: 1000;
}

/* Nội dung chính của popup */
.popup-content {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    width: 400px;
    text-align: center;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    position: relative;
    border: 2px solid #6a0dad; /* Đường viền tím */
}

/* Biểu tượng thành công */
.popup-content i {
    font-size: 50px;
    color: #28a745; /* Màu xanh lá cây */
    margin-bottom: 10px;
}

/* Tiêu đề của popup */
.popup-content h3 {
    font-size: 20px;
    font-weight: bold;
    color: #00cc00; /* Màu xanh lá cây */
    margin: 10px 0;
}

/* Nội dung thông báo */
.popup-content p {
    font-size: 16px;
    color: #333;
    margin: 10px 0;
}

/* Nút đóng popup */
.popup .close {
    position: absolute;
    top: 10px;
    right: 10px;
    font-size: 18px;
    font-weight: bold;
    color: #ff0000; /* Màu đỏ */
    cursor: pointer;
}

.popup .close:hover {
    color: #000;
}
</style>
  <?php
    echo "<div id='popup' class='popup'>
            <div class='popup-content'>
              <span class='close'>&times;</span>
              <i class='fa fa-check-circle'></i>
              <h3>THÔNG BÁO</h3>
              <p>" . $_SESSION['thanhcong'] . "</p>
            </div>
          </div>
          <script>
            document.addEventListener('DOMContentLoaded', function () {
                const popup = document.getElementById('popup');
                const closeBtn = document.querySelector('.popup .close');
                
                // Hiển thị popup khi trang tải xong
                popup.style.display = 'flex';

                // Đóng popup khi nhấn nút close
                closeBtn.addEventListener('click', function () {
                    popup.style.display = 'none';
                });

                // Tự động đóng popup sau 5 giây
                setTimeout(function () {
                    popup.style.display = 'none';
                }, 5000);
            });
          </script>";
    unset($_SESSION['thanhcong']);
}
?>