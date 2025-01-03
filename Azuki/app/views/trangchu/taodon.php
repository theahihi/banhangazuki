
<style>
    body {
        margin: 0;
        font-family: Arial, sans-serif;
        background-color: #f4f6f8;
    }

    .container {
        max-width: 1200px;
        margin: 20px auto;
        background: white;
        padding: 20px;
        border-radius: 8px;
        background-color: #f4f6f8;
    }

    h1 {
        font-size: 20px;
        margin-bottom: 15px;
        color: #333;
        text-align: center;
    }

    .main-content {
        display: flex;
        gap: 20px;
        flex-wrap: wrap;
    }

    .left-panel, .right-panel {
        background: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .left-panel {
        flex: 2;
        min-width: 60%;
    }

    .right-panel {
        flex: 1;
        min-width: 300px;
    }

    .search-bar {
        display: flex;
        gap: 10px;
        margin-bottom: 15px;
    }

    .search-bar input {
        flex: 1;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 4px;
    }

    .search-bar button {
        padding: 10px 20px;
        background-color: #007bff;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .search-bar button:hover {
        background-color: #0056b3;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 15px;
    }

    table th, table td {
        border: 1px solid #ddd;
        text-align: center;
        padding: 10px;
    }

    table th {
        background-color: #007bff;
        color: white;
        text-transform: uppercase;
    }

    .right-panel .summary {
        margin-bottom: 15px;
    }

    .right-panel .summary label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }

    .right-panel .summary input {
        width: 100%;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 4px;
    }

    .right-panel .actions button {
        width: 100%;
        padding: 10px;
        background-color: #28a745;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        margin-top: 10px;
    }

    .right-panel .actions button:hover {
        background-color: #218838;
    }

    .tabs {
        display: flex;
        gap: 10px;
        margin: 20px 0;
    }

    .tabs button {
        flex: 1;
        padding: 10px;
        border: none;
        border-bottom: 2px solid transparent;
        background: none;
        cursor: pointer;
        font-weight: bold;
    }

    .tabs button.active {
        border-bottom: 2px solid #007bff;
        color: #007bff;
    }

    .form-group {
        display: flex;
        flex-wrap: wrap;
        gap: 15px;
    }

    .form-group input, .form-group select {
        flex: 1;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 4px;
    }

    .form-group input {
        max-width: 63%;
        font-size: 10px
    }

    .form-group select {
        max-width: 30%;
    }

    @media (max-width: 768px) {
        .main-content {
            flex-direction: column;
        }

        .left-panel, .right-panel {
            width: 100%;
        }

        .form-group input, .form-group select {
            max-width: 100%;
        }

        .search-bar button {
            flex-grow: 1;
        }
    } 




    .search-bar {
    position: relative; /* Ensures child elements are positioned relative to this container */
    display: flex;
    gap: 10px;
    margin-bottom: 15px;
}

#searchResults {
    position: absolute; /* Positioned relative to .search-bar */
    top: calc(100% + 5px); /* Position just below the search bar */
    left: 0;
    width: 92%; /* Match the width of the input field */
    background: #fff;
    border: 1px solid #ccc;
    max-height: 300px;
    overflow-y: auto;
    z-index: 1000; /* Ensure it's above other elements */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    display: none; /* Initially hidden */
}

#searchResults div {
    padding: 10px;
    cursor: pointer;
    font-size: 14px;
}

#searchResults div:hover {
    background-color: #f0f0f0;
}






.container2 {
    max-width: 1200px;
    margin: 20px auto;
    background: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

h1 {
    font-size: 20px;
    margin-bottom: 15px;
    color: #333;
    text-align: center;
}

.form-group {
    display: flex;
    flex-wrap: wrap;
    gap: 15px;
}

.form-group input {
    flex: 1;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-size: 11.5px;
    width: 200px ;
}

.form-group input:focus {
    outline: none;
    border-color: #007bff;
}

/* Styling for suggestion box */
#searchResultsKh {
    position: absolute;
    width: 50%;
    max-height: 100px; /* Limit the height to 100px */
    overflow-y: auto; /* Enable vertical scrolling */
    overflow-x: hidden; /* Prevent horizontal scrolling */
    background: white;
    border: 1px solid #ddd;
    border-radius: 4px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    z-index: 1000;
    display: none; /* Hidden initially */
    animation: slide-up 0.3s ease-out; /* Animation for sliding up */
    top: calc(100% + 5px); /* Appear below the input field */
    left: 0;
    margin-top: -8px;
}

/* Slide-up animation */
@keyframes slide-up {
    from {
        opacity: 0;
        transform: translateY(20px); /* Start 20px below */
    }
    to {
        opacity: 1;
        transform: translateY(0); /* End at its normal position */
    }
}

/* Style for individual suggestion items */
#searchResultsKh .search-item {
    padding: 10px;
    cursor: pointer;
    display: flex;
    align-items: center;
    gap: 10px;
    border-bottom: 1px solid #ddd;
}

#searchResultsKh .search-item:last-child {
    border-bottom: none;
}

#searchResultsKh .search-item:hover {
    background-color: #f0f0f0;
}

#searchResultsKh img {
    width: 40px;
    height: 40px;
    border-radius: 4px;
}

#searchResultsKh span {
    font-size: 11.5px;
    color: #333;
    font-weight: bold;
}

.trong{
    color:rgb(183, 179, 179) ;
    font-size:30px;

}
.tongtien {
    display: flex;
    align-items: center;
    justify-content: flex-end; /* Đẩy nội dung sang bên phải */
    margin-top: 20px;
   
   
   
    font-family: Arial, sans-serif;
    font-size: 16px;
    font-weight: bold;
  
    width: auto; /* Chiều rộng tự động */
    max-width: 300px; /* Đặt giới hạn chiều rộng */
    margin-left: auto; /* Đẩy toàn bộ div sang bên phải */
}

.tongtien label {
    margin-right: 10px;
    font-size: 16px;
    color: #007bff;
    text-transform: capitalize;
}

.khungdonhang {
    height: 310px; /* Đặt chiều cao cố định */
    overflow-y: auto; /* Hiển thị thanh cuộn khi nội dung vượt quá chiều cao */
    border: 1px solid #ddd;
    border-radius: 4px;
    position: relative;
    margin-bottom: 10px; /* Khoảng cách với phần tổng tiền */
}

.tongtien {
    display: flex;
    align-items: center;
    justify-content: flex-end;
    margin-top: 10px; /* Đảm bảo khoảng cách với phần khung danh sách */
    font-family: Arial, sans-serif;
    font-size: 16px;
    font-weight: bold;
    width: auto;
    max-width: 300px;
    margin-left: auto; /* Đẩy về bên phải */
}

.tongtien input {
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 6px;
    font-size: 16px;
    font-weight: bold;
    color: #333;
    background-color: #ffffff;
    text-align: right;
    width: 150px;
    box-shadow: inset 0px 2px 4px rgba(0, 0, 0, 0.1);
}

.tongtien input[readonly] {
    background-color: #f4f6f8;
    cursor: not-allowed;
}

.tongtien input:hover {
    border-color: #007bff;
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.3);
}
table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 15px;
}

table th, table td {
    border: 1px solid #ddd;
    text-align: center;
    padding: 10px;
}

table th {
    background-color: #007bff;
    color: white;
    text-transform: uppercase;
    position: sticky; /* Giữ thẻ <th> cố định */
    top: 0; /* Cố định <thead> ở đầu bảng */
    z-index: 1; /* Đặt <th> trên các phần khác */
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Tạo hiệu ứng đổ bóng */
}


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






<body>

<form action="/azuki/trangchu/taodonhang" method="post" onsubmit="return validateForm(event)">

<div class="content" style="margin-left: 250px; padding: 20px;">
<div class="container">
        <div class="main-content">
                <!-- Left Panel -->
                <div class="left-panel">
                <div class="search-bar">
                
                    <input id="searchInput" type="text" placeholder=" 🔎 Nhập tên sản phẩm ">
                    <div id="searchResults"></div>
                </div>
    
                <div class="khungdonhang" style=" overflow-y: auto; border: 1px solid #ddd; border-radius: 4px;">
    <table>
        <thead>
            <tr>
                <th>STT</th>
                <th>Sản phẩm</th>
                <th>Giá</th>
                <th>SL</th>
                <th>Thành tiền</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody id="productTableBody">
            <tr id="emptyRow" >
    <td colspan="5" style="text-align: center; height: 230px; border: none;">
        <div class="trong">Đơn hàng trống, hãy chọn sản phẩm...</div>
    </td>
</tr>
        
        </tbody>
    </table>
   
</div>
             <div class=" tongtien" style="margin-top:-1px">
                        <label for="total">Tổng tiền : </label>
                        <input type="text" id="total" name="tongtien"  readonly value="0">
                    </div>

            </div>
    
                <!-- Right Panel -->
                <div class="right-panel">
    <div class="summary">
    <label for="total">Thông tin khách</label>
    <div class="thongtinkh">
            <div class="form-group" style="position: relative;">
                <input type="text" id="searchInputkh"  name="sdt" placeholder="Nhập số điện thoại">
                <div id="searchResultsKh"></div>
                <input type="text" id="hoten" name="hoten" placeholder="Tên khách">
            </div>
            
        </div>
    </div>
                    <div class="summary">
                        <label for="discount">Phương thức thanh toán</label>
                        <select name="phuongthuc" id="" style=" padding: 10px; border: 1px solid #ddd; border-radius: 6px; font-size: 16px; background-color: #fff; color: #2c3e50; cursor: pointer; outline: none; transition: all 0.3s ease;">
    <option value="Tiền mặt" style="background-color: #fff; color: #2c3e50; padding: 10px;">Tiền mặt</option>
    <option value="Chuyển khoản" style="background-color: #fff; color: #2c3e50; padding: 10px;">Chuyển khoản</option>
</select>
                    </div>
                
    <br>
                   <div class="summary">
                        <label for="total">Ghi chú (Nếu có)</label>
                         <textarea name="ghichu" style="width:100%; height:100px" id=""></textarea>
                    </div>

                    <div class="actions">
                        <button id="save">Tạo đơn hàng</button>
                    </div>
                </div>
            </div>
</div>

            
        </div>
    
            
        </div>
        <input type="hidden" id="productDataInput" name="productData" value="">

 </form>
 <?php 
if (isset($_SESSION['thanhcong'])) {
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
                let printExecuted = false; // Cờ để đảm bảo print chỉ chạy một lần
                
                // Hiển thị popup khi trang tải xong
                popup.style.display = 'flex';

                // Đóng popup khi nhấn nút close
                closeBtn.addEventListener('click', function () {
                    popup.style.display = 'none';
                    if (!printExecuted) {
                        showPrintContent(); // Hiển thị nội dung in khi đóng popup
                        printExecuted = true; // Đánh dấu đã in
                    }
                });

                // Tự động đóng popup sau 5 giây
                setTimeout(function () {
                    popup.style.display = 'none';
                    if (!printExecuted) {
                        showPrintContent(); // Hiển thị nội dung in sau 5 giây
                        printExecuted = true; // Đánh dấu đã in
                    }
                }, 5000);
            });

            function showPrintContent() {
                const printSection = document.getElementById('printSection');
                const originalDisplayStates = [];

                // Ẩn tất cả phần tử khác trừ phần cần in
                document.body.childNodes.forEach((node) => {
                    if (node !== printSection && node.nodeType === 1) {
                        originalDisplayStates.push({ node, display: node.style.display });
                        node.style.display = 'none';
                    }
                });

                // Hiển thị phần in
                printSection.style.display = 'block';

                // Gọi hộp thoại in
                window.print();

                // Khôi phục lại hiển thị ban đầu
                originalDisplayStates.forEach(({ node, display }) => {
                    node.style.display = display;
                });

                // Ẩn lại phần in
                printSection.style.display = 'none';
            }
          </script>";
    unset($_SESSION['thanhcong']);
    $hoadon = $_SESSION['print'];
    ?>
    <!-- Nội dung hiển thị cho chế độ in -->
    <div id="printSection" style="display: none; font-family: Arial, sans-serif; font-size: 14px; line-height: 1.6; width: 100%; max-width: 600px; margin: auto;">
    <div style="text-align: center; border-bottom: 2px solid #333; padding-bottom: 10px; margin-bottom: 20px;">
        <h2 style="margin: 0; font-size: 20px;">HÓA ĐƠN BÁN HÀNG</h2>
        <p style="margin: 5px 0;">Công ty XYZ</p>
        <p style="margin: 5px 0;">Địa chỉ: 123 Đường ABC, Quận 1, TP.HCM</p>
        <p style="margin: 5px 0;">Số điện thoại: 0909 123 456</p>
    </div>

    <div style="margin-bottom: 20px;">
        <p><strong>Số hóa đơn:</strong> <?php echo $hoadon['sohoadon']; ?></p>
        <p><strong>Họ tên khách hàng:</strong> <?php echo $hoadon['hoten']; ?></p>
        <p><strong>Số điện thoại khách hàng:</strong> <?php echo $hoadon['sdt']; ?></p>
        <p><strong>Phương thức thanh toán:</strong> <?php echo $hoadon['phuongthuc']; ?></p>
        <p><strong>Ghi chú:</strong> <?php echo $hoadon['ghichu'] ? $hoadon['ghichu'] : "Không có"; ?></p>
    </div>

    <table style="border-collapse: collapse; width: 100%; text-align: left; margin-bottom: 20px;">
        <thead>
            <tr style="background-color: #f2f2f2; text-align: center;">
                <th style="border: 1px solid #ddd; padding: 8px;">STT</th>
                <th style="border: 1px solid #ddd; padding: 8px;">Tên sản phẩm</th>
                <th style="border: 1px solid #ddd; padding: 8px;">Số lượng</th>
                <th style="border: 1px solid #ddd; padding: 8px;">Đơn giá</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $i = 1;
            while ($row = mysqli_fetch_array($sphd)) {
                if ($row['mahd'] == $hoadon['sohoadon']) { ?>
                    <tr>
                        <td style="border: 1px solid #ddd; padding: 8px; text-align: center;"><?php echo $i; ?></td>
                        <td style="border: 1px solid #ddd; padding: 8px;"><?php echo $row['tensp']; ?></td>
                        <td style="border: 1px solid #ddd; padding: 8px; text-align: center;"><?php echo $row['soluong']; ?></td>
                        <td style="border: 1px solid #ddd; padding: 8px; text-align: right;"><?php echo number_format($row['dongia'], 0, ',', '.'); ?>đ</td>
                    </tr>
                <?php $i++; }
            } ?>
        </tbody>
    </table>

    <div style="text-align: right; margin-top: 20px;">
        <p style="font-size: 16px; font-weight: bold;">Tổng tiền thanh toán: <?php echo $hoadon['tongtien'] ?>đ</p>
    </div>

    <div style="text-align: center; margin-top: 30px;">
        <p>Cảm ơn quý khách đã mua hàng!</p>
        <p style="font-size: 12px;">Hóa đơn này được tạo tự động, không cần chữ ký.</p>
    </div>
</div>


    <?php 
    unset($_SESSION['print']);
}
?>






<script>
// Fetch suggestions for customers
function fetchSuggestions(query) {
    const searchResults = document.getElementById("searchResultsKh");

    if (query.length > 0) {
        const xhr = new XMLHttpRequest();
        xhr.open("POST", "/azuki/trangchu/goiykhachhang", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                searchResults.innerHTML = xhr.responseText;
                searchResults.style.display = "block"; // Display suggestions
            }
        };

        xhr.send("sdt=" + encodeURIComponent(query));
    } else {
        searchResults.innerHTML = "";
        searchResults.style.display = "none";
    }
}

document.getElementById("searchInputkh").addEventListener("keyup", function () {
    fetchSuggestions(this.value.trim());
});

document.getElementById("searchInputkh").addEventListener("blur", function () {
    setTimeout(() => document.getElementById("searchResultsKh").style.display = "none", 200);
});

document.getElementById("searchResultsKh").addEventListener("click", function (event) {
    const target = event.target.closest(".search-item");
    if (target) {
        document.getElementById("searchInputkh").value = target.getAttribute("data-customer-sdt");
        document.getElementById("hoten").value = target.getAttribute("data-customer-name");
        document.getElementById("email").value = target.getAttribute("data-customer-email");
        document.getElementById("facebook").value = target.getAttribute("data-customer-facebook");
        this.innerHTML = "";
        this.style.display = "none";
    }
});

// Mảng lưu sản phẩm
let productArray = [];

// Hàm cập nhật tổng tiền hàng
function updateTotalAmount() {
    let totalAmount = 0;
    document.querySelectorAll(".total-price").forEach(cell => {
        totalAmount += parseFloat(cell.textContent.replace(/,/g, "")) || 0;
    });
    document.getElementById("total").value = totalAmount.toLocaleString();
    updateHiddenInput();
}

// Hàm kiểm tra và hiển thị hoặc ẩn dòng trống
function toggleEmptyRow() {
    const emptyRow = document.getElementById("emptyRow");
    const productRows = document.querySelectorAll("#productTableBody tr:not(#emptyRow)").length; // Chỉ đếm dòng không phải dòng trống

    if (productRows > 0) {
        emptyRow.style.display = "none"; // Ẩn dòng trống
    } else {
        emptyRow.style.display = ""; // Hiển thị dòng trống
    }
}

// Thêm sản phẩm vào bảng
function addProductToTable(productId, productName, productPrice) {
    const tableBody = document.getElementById("productTableBody");

    // Kiểm tra xem sản phẩm đã tồn tại chưa
    const existingProduct = productArray.find(item => item.productId === productId);
    if (existingProduct) {
        alert("Sản phẩm này đã được thêm!");
        return;
    }

    const newRow = document.createElement("tr");
    const currentRowCount = tableBody.querySelectorAll("tr").length;

    newRow.innerHTML = `
        <td>${currentRowCount}</td>
        <td>${productName}</td>
        <td>${parseFloat(productPrice).toLocaleString()}</td>
        <td><input type="number" style="width: 60px;" value="1" min="1" class="quantity-input"></td>
        <td class="total-price">${parseFloat(productPrice).toLocaleString()}</td>
        <td><button type="button" class="remove-btn"><i class="fa fa-trash" ></i></button></td>
    `;

    tableBody.appendChild(newRow);

    // Thêm sản phẩm vào mảng
    productArray.push({
        productId: productId,
        productName: productName,
        price: parseFloat(productPrice),
        quantity: 1
    });

    const quantityInput = newRow.querySelector(".quantity-input");
    const removeButton = newRow.querySelector(".remove-btn");

    quantityInput.addEventListener("input", function () {
        const quantity = parseInt(this.value) || 1;
        const totalPriceCell = newRow.querySelector(".total-price");
        totalPriceCell.textContent = (quantity * parseFloat(productPrice)).toLocaleString();

        const productIndex = productArray.findIndex(item => item.productId === productId);
        if (productIndex !== -1) {
            productArray[productIndex].quantity = quantity;
        }
        updateTotalAmount();
    });

    removeButton.addEventListener("click", function () {
        newRow.remove();
        productArray = productArray.filter(item => item.productId !== productId);
        updateRowNumbers();
        updateTotalAmount();
        toggleEmptyRow();
    });

    toggleEmptyRow();
    updateTotalAmount();
}

// Cập nhật input ẩn lưu productArray
function updateHiddenInput() {
    document.getElementById("productDataInput").value = JSON.stringify(productArray);
}

// Cập nhật lại số thứ tự hàng
// Hàm cập nhật lại số thứ tự hàng
function updateRowNumbers() {
    const rows = document.querySelectorAll("#productTableBody tr:not(#emptyRow)"); // Bỏ qua dòng trống
    rows.forEach((row, index) => {
        const cell = row.querySelector("td:first-child");
        if (cell) cell.textContent = index + 1; // Cập nhật số thứ tự
    });
    toggleEmptyRow();
}

// Gợi ý sản phẩm khi nhập
document.getElementById("searchInput").addEventListener("keyup", function () {
    const query = this.value.trim();
    const searchResults = document.getElementById("searchResults");

    if (query.length > 0) {
        const xhr = new XMLHttpRequest();
        xhr.open("POST", "/azuki/trangchu/goiytimkiem", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                const existingProductIds = productArray.map(item => item.productId);
                const parser = new DOMParser();
                const tempDiv = parser.parseFromString(xhr.responseText, "text/html");

                const filteredResults = Array.from(tempDiv.querySelectorAll(".search-item"))
                    .filter(item => !existingProductIds.includes(item.dataset.productId))
                    .map(item => item.outerHTML)
                    .join("");

                searchResults.innerHTML = filteredResults;
                searchResults.style.display = filteredResults ? "block" : "none";
            }
        };

        xhr.send("nd=" + encodeURIComponent(query));
    } else {
        searchResults.innerHTML = "";
        searchResults.style.display = "none";
    }
});

document.getElementById("searchResults").addEventListener("click", function (event) {
    const target = event.target.closest(".search-item");
    if (target) {
        addProductToTable(target.dataset.productId, target.dataset.productName, target.dataset.productPrice);
        this.style.display = "none";
        this.innerHTML = "";
        document.getElementById("searchInput").value = "";
    }
});

// Validate form trước khi submit
function validateForm(event) {
    event.preventDefault();

    if (productArray.length === 0) {
        alert("Vui lòng thêm ít nhất một sản phẩm.");
        return false;
    }

    const phoneNumber = document.getElementById("searchInputkh").value.trim();
    if (!phoneNumber) {
        alert("Vui lòng nhập số điện thoại.");
        return false;
    }

    const customerName = document.getElementById("hoten").value.trim();
    if (!customerName) {
        alert("Vui lòng nhập tên khách.");
        return false;
    }

    document.querySelector("form").submit();
}

document.querySelector("form").addEventListener("submit", validateForm);

</script>

</body>
</html>
