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
            font-family: Arial, sans-serif;
            background-color: #f4f6f8;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 1000px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        h2, h3 {
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table th, table td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }

        table th {
            background-color: #007bff;
            color: white;
        }

        .search-bar {
            display: flex;
            margin-bottom: 10px;
            gap: 10px;
            margin-left:20px
        }

        .search-bar input {
            flex: 1;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .search-bar button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 4px;
            cursor: pointer;
        }

        .search-bar button:hover {
            background-color: #0056b3;
        }

        #searchResults {
            max-height: 150px;
            overflow-y: auto;
            border: 1px solid #ccc;
            background-color: #fff;
            display: none;
            position: absolute;
            z-index: 10;
            margin-top:40px
        }

        #searchResults div {
            padding: 10px;
            cursor: pointer;
        }

        #searchResults div:hover {
            background-color: #f0f0f0;
        }
        #searchInput{
            width:320px;
        }
        button[type="submit"] {
    background-color: #28a745;
    color: white;
    padding: 10px 20px;
    font-size: 16px;
    font-weight: bold;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button[type="submit"]:hover {
    background-color: #218838;
}

button[type="submit"]:focus {
    outline: none;
    box-shadow: 0 0 5px rgba(40, 167, 69, 0.5);
}
    </style>
</head>
<body>
    <a href="/azuki/trangchu/listdonhang" style=""> <i style="font-size:20px;" class="fa fa-arrow-left"></i>
    </a>
<div class="container">
    <h2>Đổi Trả Sản Phẩm</h2>
    <h3>Thông Tin Đơn Hàng</h3>
    <?php $rowtt=mysqLi_fetch_array($thongtinkh) ?>
    <p>Khách hàng: <b><?php echo $rowtt['hoten']; ?></b></p>
    <p>Số điện thoại: <b><?php echo $rowtt['sodienthoai']; ?></b></p>

    <h3>Sản Phẩm Trong Đơn Hàng</h3>
    <table>
        <thead>
        <tr>
            <th>Chọn</th>
            <th>Tên Sản Phẩm</th>
            <th>Số Lượng</th>
            <th>Đơn Giá</th>
        </tr>
        </thead>
        <tbody>
     <form action="/azuki/trangchu/xulydoitra" method="post">
            <?php while ($row = mysqli_fetch_array($chitiet)) { ?>
        <tr>
            <td><input type="checkbox" name="selected_products[]" value="<?php echo $row['serinumber']; ?>" data-product-id="<?php echo $row['masp']; ?>"></td>
            <td><?php echo htmlspecialchars($row['tensp']); ?></td>
            <td>
                <input type="number" name="soluong[<?php echo $row['serinumber']; ?>]" 
                       value="<?php echo $row['soluong']; ?>" min="1" max="<?php echo $row['soluong']; ?>" 
                       style="width: 45px; text-align: center;">
            </td>
            <td><?php echo number_format($row['dongia'], 0, ',', '.'); ?> ₫</td>
        </tr>
    <?php } ?>
            </tbody>
        </table>
    
        <div style="display:flex ; width: 630px; margin-top:20px ">
            <h3>Chọn Sản Phẩm Thay Thế</h3>
            <div class="search-bar">
                <input id="searchInput" type="text" placeholder="Nhập tên sản phẩm cần tìm">
                <div id="searchResults"></div>
            </div>
        </div>
    
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
        <input type="hidden" id="selectedProductsData" name="selectedProductsData" value="">
<input type="hidden" id="productDataInput" name="productData" value="">
 <input type="hidden" name="mahd" value="<?php echo $mahd ; ?>">
        <button type="submit">Lưu </button>
     </form>
</div>

<script>
let productArray = []; // Mảng lưu sản phẩm thay thế
let selectedProductsArray = []; // Mảng lưu sản phẩm đã chọn từ đơn hàng

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
        <td><button type="button" class="remove-btn">Xóa</button></td>
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

// Xử lý chọn sản phẩm trong đơn hàng
document.querySelectorAll('input[type="checkbox"][name="selected_products[]"]').forEach((checkbox) => {
    checkbox.addEventListener("change", function () {
        const row = this.closest("tr");
        const serinumber = this.value; // Số seri
        const productId = this.dataset.productId; // Mã sản phẩm
        const productName = row.children[1].innerText;
        const productPrice = row.children[3].innerText.replace(/[^\d]/g, "");
        const quantityInput = row.querySelector('input[type="number"]');
        const quantity = parseInt(quantityInput.value);

        if (this.checked) {
            // Thêm vào mảng khi được chọn
            selectedProductsArray.push({
                serinumber: serinumber,
                productId: productId, // Thêm mã sản phẩm
                name: productName,
                price: parseFloat(productPrice),
                quantity: quantity,
            });
        } else {
            // Xóa khỏi mảng nếu bỏ chọn
            selectedProductsArray = selectedProductsArray.filter(
                (item) => item.serinumber !== serinumber
            );
        }
        updateHiddenInputs();
    });

    checkbox.closest("tr").querySelector('input[type="number"]').addEventListener("input", function () {
        const row = this.closest("tr");
        const serinumber = row.querySelector('input[type="checkbox"]').value;
        const quantity = parseInt(this.value);

        const product = selectedProductsArray.find((item) => item.serinumber === serinumber);
        if (product) product.quantity = quantity;

        updateHiddenInputs();
    });
});

// Cập nhật hai input ẩn
// Cập nhật hai input ẩn
function updateHiddenInputs() {
    document.getElementById("selectedProductsData").value = JSON.stringify(selectedProductsArray);
    document.getElementById("productDataInput").value = JSON.stringify(productArray);
    console.log("Sản phẩm đã chọn:", selectedProductsArray);
    console.log("Sản phẩm thay thế:", productArray);
}


// Kiểm tra và xác thực form trước khi gửi
document.querySelector("form").addEventListener("submit", function (event) {
    let errorMessage = "";

    if (selectedProductsArray.length === 0) {
        errorMessage += "Vui lòng chọn ít nhất một sản phẩm cần đổi trả.\n";
    }

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


</script>
</body>
</html>



</div>