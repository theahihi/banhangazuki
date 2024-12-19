
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
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
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
        max-width: 48%;
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
    font-size: 14px;
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
    font-size: 14px;
    color: #333;
    font-weight: bold;
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
                    <input id="searchInput" type="text" placeholder="Tìm sản phẩm">
                    <div id="searchResults"></div>
                </div>
    
                <div style="max-height: 400px; overflow-y: auto; border: 1px solid #ddd; border-radius: 4px;">
    <table>
        <thead>
            <tr>
                <th>STT</th>
                <th>Sản phẩm</th>
                <th>Giá</th>
                <th>SL</th>
                <th>Thành tiền</th>
            </tr>
        </thead>
        <tbody id="productTableBody">
            <!-- Hàng mẫu -->
        </tbody>
    </table>
</div>

            </div>
    
                <!-- Right Panel -->
                <div class="right-panel">
                    <div class="summary">
                        <label for="total">Tổng tiền hàng</label>
                        <input type="text" id="total" name="tongtien" readonly value="0">
                    </div>
    <br>
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
                        <button id="save">Lưu</button>
                    </div>
                </div>
            </div>
</div>
<div class="container2">
    <h1>Khách hàng</h1>
    <div class="form-group" style="position: relative;">
        <input type="text" id="searchInputkh"  name="sdt" placeholder="Nhập số điện thoại">
        <div id="searchResultsKh"></div>
        <input type="text" id="hoten" name="hoten" placeholder="Tên khách">
    </div>
    <div class="form-group">
        <input type="text" id="email" name="email" placeholder="Email">
        <input type="text" id="facebook" name="facebook" placeholder="Facebook">
    </div>
</div>
            
        </div>
    
            
        </div>
        <input type="hidden" id="productDataInput" name="productData" value="">

 </form>
 <?php 
if (isset($_SESSION['thanhcong'])) {
    echo "<script>
            window.onload = function() {
              alert('" . $_SESSION['thanhcong'] . "');
            }
          </script>";
    unset($_SESSION['thanhcong']);
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

// Thêm sản phẩm vào bảng
function addProductToTable(productId, productName, productPrice) {
    const tableBody = document.getElementById("productTableBody");
    const newRow = document.createElement("tr");
    const currentRowCount = tableBody.querySelectorAll("tr").length;

    newRow.innerHTML = `
        <td>${currentRowCount + 1}</td>
        <td>${productName}</td>
        <td>${parseFloat(productPrice).toLocaleString()}</td>
        <td><input type="number" style="width: 60px;" value="1" min="1" class="quantity-input"></td>
        <td class="total-price">${parseFloat(productPrice).toLocaleString()}</td>
        <td><button type="button" class="remove-btn">X</button></td>
    `;

    tableBody.appendChild(newRow);

    productArray.push({
        productId: productId,
        productName: productName,
        price: parseFloat(productPrice),
        quantity: 1
    });

    const quantityInput = newRow.querySelector(".quantity-input");
    const totalPriceCell = newRow.querySelector(".total-price");
    const removeButton = newRow.querySelector(".remove-btn");

    quantityInput.addEventListener("input", function () {
        const quantity = parseInt(this.value) || 1;
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
    });

    updateTotalAmount();
}

// Cập nhật input ẩn lưu productArray
function updateHiddenInput() {
    document.getElementById("productDataInput").value = JSON.stringify(productArray);
}

// Cập nhật lại số thứ tự hàng
function updateRowNumbers() {
    document.querySelectorAll("#productTableBody tr").forEach((row, index) => {
        row.querySelector("td:first-child").textContent = index + 1;
    });
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
