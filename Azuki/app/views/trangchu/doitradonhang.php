<div class="content" style="margin-left: 250px; padding: 20px;">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đổi Trả Sản Phẩm</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <style>

body {
        font-family: 'Arial', sans-serif;
        background-color: #f4f6f8;
        margin: 0;
        padding: 0;
    }

    .container {
        max-width: 1350px;
        margin: 20px auto;
        background-color: #ffffff;
        padding: 25px;
        border-radius: 12px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);
        position: relative; /* Đặt vị trí tương đối cho container */

    }

    h2 {
        text-align: center;
        margin-bottom: 15px;
    }

    h2 {
        font-size: 24px;
        font-weight: bold;
        color: #007bff;
    }

    h3 {
        font-size: 20px;
        font-weight: bold;
        color: #555555;
    }

    /* Bố cục */
    .doitra {
    display: flex;
    gap: 20px;
    justify-content: space-between;
}

.left, .right {
    width: 50%; /* Each div will take up 50% of the container's width */
    background: #ffffff;
    padding: 10px;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

.left {
    margin-right: 5px;
}

.right {
    margin-left: 5px;
}


    /* Bảng */
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 15px;
    }

    table th, table td {
        border: 1px solid #dddddd;
        padding: 10px;
        text-align: center;
        font-size: 14px;
        color: #555555;
    }

    table th {
        background-color: #007bff;
        color: #ffffff;
        font-weight: bold;
        text-transform: uppercase;
    }

    table tbody tr:hover {
        background-color: #f9f9f9;
    }

    table input[type="number"] {
        width: 60px;
        padding: 5px;
        font-size: 14px;
        text-align: center;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    /* Thanh tìm kiếm */
    .search-bar {
        display: flex;
        gap: 10px;
        margin-top: 10px;
        position: relative;
    }

    .search-bar input {
        flex: 1;
        padding: 10px 15px;
        border: 1px solid #ccc;
        border-radius: 6px;
        font-size: 14px;
    }

    .search-bar input:focus {
        outline: none;
        border-color: #007bff;
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.4);
    }

    .search-bar button {
        background-color: #007bff;
        color: #ffffff;
        padding: 10px 15px;
        font-size: 14px;
        border: none;
        border-radius: 6px;
        cursor: pointer;
    }

    .search-bar button:hover {
        background-color: #0056b3;
    }

    #searchResults {
        position: absolute;
        top: 45px;
        left: 0;
        right: 0;
        background-color: #ffffff;
        border: 1px solid #cccccc;
        max-height: 150px;
        overflow-y: auto;
        border-radius: 6px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        z-index: 10;
        margin-top:6px
    }

    #searchResults div {
        padding: 10px;
        cursor: pointer;
        font-size: 14px;
        color: #333333;
    }

    #searchResults div:hover {
        background-color: #f4f6f8;
    }

    /* Nút lưu */
   

    @media (max-width: 768px) {
        .doitra {
            flex-direction: column;
        }

        .left, .right {
            margin: 0;
        }

        .save-button {
            width: 100%;
        }
    }
    .thongtin{
        display:flex;
        gap: 20px;
    justify-content: space-between;
    }
    .trai,.phai{
        width: 50%; /* Each div will take up 50% of the container's width */ 
    }
    .save-button {
    background-color: #28a745; /* Màu xanh lá */
    color: white; /* Màu chữ trắng */
    padding: 12px 24px; /* Kích thước nút */
    font-size: 16px; /* Kích thước chữ */
    font-weight: bold; /* In đậm chữ */
    border: none; /* Xóa viền */
    border-radius: 8px; /* Bo tròn góc */
    cursor: pointer; /* Trỏ chuột dạng click */
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15); /* Đổ bóng */
}

.save-button:hover {
    background-color: #218838; /* Màu xanh đậm hơn khi hover */
    transform: scale(1.05); /* Tăng kích thước nhẹ khi hover */
}

.save-button:active {
    background-color: #1e7e34; /* Màu khi nhấn giữ */
    transform: scale(0.98); /* Nhỏ đi khi click */
}

.save {
    display: flex;
    justify-content: flex-end; 
    align-items: right; 
}

</style>

    </styl>
</head>
<body>
    <a href="/azuki/trangchu/listdonhang" style=""> <i style="font-size:20px;" class="fa fa-arrow-left"></i>
    </a>
<div class="container">
    <h2>Đổi Trả Sản Phẩm</h2>
   <div class="thongtin">
        <div class="trai">
            <h3>Thông Tin khách hàng</h3>
            <?php $rowtt=mysqLi_fetch_array($thongtinkh) ?>
            <p>Khách hàng: <b><?php echo $rowtt['hoten']; ?></b></p>
            <p>Số điện thoại: <b><?php echo $rowtt['sodienthoai']; ?></b></p>
        </div>
        <div class="phai" >
        <div class="inphai" style="display:flex; width: 630px; margin-top: 70px; margin-l">
    <h3>Chọn Sản Phẩm Thay Thế : </h3>
    <div class="search-bar">
        <input id="searchInput" style="width:315px" type="text" placeholder="Nhập tên sản phẩm cần tìm">
        <div id="searchResults"></div>
    </div>
</div>

                    </div>
   </div>
<div class="doitra" style="display: flex">
    
        <div class="left">
            <h3>Sản Phẩm khách hàng trả </h3>
            <table>
                <thead>
                <tr>
                    <th>Tên Sản Phẩm</th>
                    <th>Số Lượng</th>
                    <th>Đơn Giá</th>
                </tr>
                </thead>
                <tbody>
             <form action="/azuki/trangchu/xulydoitra" method="post">
                    <?php while ($row = mysqli_fetch_array($chitiet)) { ?>
                        <?php if (in_array($row['masp'], $selectedProducts)) { ?>
            <tr>
                <td><?php echo htmlspecialchars($row['tensp']); ?></td>
                <td>
                    <input type="number" name="soluong[<?php echo $row['masp']; ?>]" 
                           value="<?php echo $row['soluong']; ?>" 
                           min="1" max="<?php echo $row['soluong']; ?>" 
                           style="width: 45px; text-align: center;" 
                           oninput="validateInput(this)">
                </td>
                <td><?php echo number_format($row['dongia'], 0, ',', '.'); ?> ₫</td>
            </tr>
        <?php } ?>
    <?php } ?>
                    </tbody>
        
            </table>
            </div>
            
           <div class="right">
                
            
                <h3>Sản Phẩm Thay Thế Đã Chọn</h3>
                <table>
                    <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tên Sản Phẩm</th>
                        <th>Giá</th>
                        <th>Số Lượng</th>
                        <th>Thành Tiền</th>
                    </tr>
                    </thead>
                    <tbody id="productTableBody"></tbody>
                </table>
        <input type="hidden" id="productDataInput" name="productData" value="">
        <input type="hidden" id="orderProductsInput" name="orderProductsData" value="">

         <input type="hidden" name="mahd" value="<?php echo $mahd ; ?>">
            
             
        </div>
</div>
<div class="save"><button type="submit" class="save-button">Lưu</button></div>
</form>

       </div>

<script>
let productArray = []; // Mảng lưu sản phẩm thay thế

// Hiển thị kết quả tìm kiếm sản phẩm thay thế
document.getElementById("searchInput").addEventListener("keyup", function () {
    const query = this.value.trim();
    const searchResults = document.getElementById("searchResults");

    if (query.length > 0) {
        const xhr = new XMLHttpRequest();
        xhr.open("POST", "/azuki/trangchu/goiytimkiem", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                const responseHTML = xhr.responseText;
                const parser = new DOMParser();
                const tempDiv = parser.parseFromString(responseHTML, "text/html");

                // Lọc bỏ sản phẩm đã chọn trước đó
                const existingProductIds = productArray.map((item) => item.productId);
                const filteredResults = Array.from(tempDiv.querySelectorAll(".search-item"))
                    .filter((item) => !existingProductIds.includes(item.dataset.productId))
                    .map((item) => item.outerHTML)
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

// Xử lý khi chọn sản phẩm thay thế
document.getElementById("searchResults").addEventListener("click", function (event) {
    const target = event.target.closest(".search-item");
    if (target) {
        const productId = target.dataset.productId;
        const productName = target.dataset.productName;
        const productPrice = target.dataset.productPrice;

        // Thêm sản phẩm vào bảng và mảng
        addProductToTable(productId, productName, productPrice);

        // Ẩn thanh gợi ý và xóa nội dung tìm kiếm
        this.style.display = "none";
        document.getElementById("searchInput").value = "";
    }
});

// Thêm sản phẩm thay thế vào bảng và mảng
function addProductToTable(productId, productName, productPrice) {
    const tableBody = document.getElementById("productTableBody");
    const rowCount = tableBody.rows.length + 1;

    // Tạo hàng mới
    const newRow = document.createElement("tr");
    newRow.innerHTML = `
        <td>${rowCount}</td>
        <td>${productName}</td>
        <td>${parseFloat(productPrice).toLocaleString()} ₫</td>
        <td><input type="number" value="1" min="1" style="width: 60px;" class="quantity-input"></td>
        <td class="total-price">${parseFloat(productPrice).toLocaleString()} ₫</td>
        <td><button type="button" class="remove-btn"><i class="fa fa-trash" ></i></button></td>
    `;

    tableBody.appendChild(newRow);

    // Thêm sản phẩm vào mảng
    productArray.push({
        productId: productId,
        name: productName,
        price: parseFloat(productPrice),
        quantity: 1
    });

    // Sự kiện thay đổi số lượng
    newRow.querySelector(".quantity-input").addEventListener("input", function () {
        const newQuantity = parseInt(this.value) || 1;
        const totalPriceCell = newRow.querySelector(".total-price");
        totalPriceCell.textContent = (newQuantity * parseFloat(productPrice)).toLocaleString() + " ₫";

        const product = productArray.find((item) => item.productId === productId);
        if (product) product.quantity = newQuantity;
        updateHiddenInputs();
    });

    // Sự kiện xóa sản phẩm
    newRow.querySelector(".remove-btn").addEventListener("click", function () {
        newRow.remove();
        productArray = productArray.filter((item) => item.productId !== productId);
        updateHiddenInputs();
    });

    updateHiddenInputs();
}

const orderProductsArray = [];
const orderRows = document.querySelectorAll(".left table tbody tr");

// Thu thập thông tin sản phẩm khách hàng trả
orderRows.forEach((row) => {
    const productId = row.querySelector("input[type='number']").name.match(/\[(.*?)\]/)[1]; // Lấy mã sản phẩm
    const quantityInput = row.querySelector("input[type='number']"); // Trường nhập số lượng
    const productName = row.querySelector("td:nth-child(1)").textContent.trim(); // Tên sản phẩm
    const price = row.querySelector("td:nth-child(3)").textContent.trim(); // Giá sản phẩm

    // Thêm sản phẩm vào mảng
    orderProductsArray.push({
        productId: productId,
        name: productName,
        price: price,
        quantity: parseInt(quantityInput.value), // Giá trị ban đầu
    });

    // Sự kiện thay đổi số lượng
    quantityInput.addEventListener("input", function () {
        const newQuantity = parseInt(this.value) || 1;
        const product = orderProductsArray.find((item) => item.productId === productId);
        if (product) product.quantity = newQuantity;

        // Cập nhật giá trị input ẩn
        document.getElementById("orderProductsInput").value = JSON.stringify(orderProductsArray);
        console.log("Sản phẩm khách hàng trả (đã cập nhật):", orderProductsArray);
    });
});

// Cập nhật input ẩn lần đầu
document.getElementById("orderProductsInput").value = JSON.stringify(orderProductsArray);

// Cập nhật hai input ẩn
// Cập nhật hai input ẩn
function updateHiddenInputs() {
    document.getElementById("productDataInput").value = JSON.stringify(productArray);
    console.log("Sản phẩm thay thế:", productArray);
}




// Kiểm tra và xác thực form trước khi gửi
document.querySelector("form").addEventListener("submit", function (event) {
    let errorMessage = "";

   
    if (productArray.length === 0) {
        errorMessage += "Vui lòng chọn ít nhất một sản phẩm thay thế.\n";
    }

    if (errorMessage) {
        alert(errorMessage);
        event.preventDefault();
    } else {
        updateHiddenInputs();
    }
});


    function validateInput(input) {
        const max = input.getAttribute('max'); // Lấy giá trị max từ thuộc tính
        if (parseInt(input.value) > parseInt(max)) {
            input.value = max; // Nếu giá trị nhập vào lớn hơn max, set lại giá trị bằng max
        }
    }




</script>
</body>
</html>



</div>