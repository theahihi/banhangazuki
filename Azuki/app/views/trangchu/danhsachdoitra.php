
<style>
body {
    margin: 0;
    font-family: 'Poppins', Arial, sans-serif;
    background-color: #f8f9fa;
    color: #333;
}

.content {
    margin-left: 250px;
    padding: 20px;
    max-width: 1200px;
    margin: auto;
}

h1 {
    font-size: 28px;
    color: #2c3e50;
    margin-bottom: 20px;
    text-align: center;
    text-transform: uppercase;
    letter-spacing: 1px;
}

form {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: center;
    margin-bottom: 30px;
    align-items: center;
    padding: 15px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

form label {
    font-size: 16px;
    font-weight: bold;
    color: #34495e;
    margin-right: 10px;
}

form input, form select {
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 6px;
    font-size: 14px;
    width: 250px;
    transition: all 0.3s ease;
}

form input:focus, form select:focus {
    border-color: #3498db;
    box-shadow: 0 0 5px rgba(52, 152, 219, 0.4);
}

form button {
    background-color: #3498db;
    color: white;
    border: none;
    border-radius: 6px;
    padding: 12px 20px;
    cursor: pointer;
    font-size: 16px;
    text-transform: uppercase;
    font-weight: bold;
    transition: all 0.3s ease;
}

form button:hover {
    background-color: #2980b9;
}

.order-table-container {
    max-height: 600px;
    overflow-y: auto;
    border: 1px solid #ddd;
    border-radius: 8px;
    background-color: #fff;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    margin-top: 30px;
}

.product-table {
    width: 100%;
    border-collapse: collapse;
    font-size: 14px;
    text-align: center;
}

.product-table thead th {
    background-color: #34495e;
    color: white;
    padding: 15px;
    text-transform: uppercase;
    font-size: 14px;
    border: 1px solid #ddd;
    position: sticky;
    top: 0;
    z-index: 2;
}

.product-table tbody td {
    padding: 12px;
    border: 1px solid #ddd;
    background-color: #ffffff;
}

.product-table tbody tr:nth-child(even) td {
    background-color: #ecf0f1;
}

.product-table tbody tr:hover {
    background-color: #f0f8ff;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.product-table tbody td input[type="checkbox"] {
    transform: scale(1.2);
    cursor: pointer;
}

.product-table tbody td button {
    padding: 8px 12px;
    border: none;
    border-radius: 4px;
    background-color: #27ae60;
    color: white;
    font-size: 14px;
    cursor: pointer;
    transition: all 0.3s ease;
}

.product-table tbody td button:hover {
    background-color: #1e8449;
}

.alert {
    background-color: #e74c3c;
    color: white;
    padding: 15px;
    border-radius: 6px;
    text-align: center;
    margin-bottom: 20px;
    font-size: 16px;
}

.search-bar input {
    width: 100%;
    padding: 12px;
    border: 1px solid #ddd;
    border-radius: 6px;
    font-size: 16px;
    transition: all 0.3s ease;
}

.search-bar input:focus {
    border-color: #3498db;
    box-shadow: 0 0 5px rgba(52, 152, 219, 0.4);
}

.search-bar button {
    padding: 12px 20px;
    background-color: #2ecc71;
    color: white;
    font-size: 14px;
    font-weight: bold;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    transition: all 0.3s ease;
}

.search-bar button:hover {
    background-color: #27ae60;
}

.order-table-container::-webkit-scrollbar {
    width: 10px;
}

.order-table-container::-webkit-scrollbar-thumb {
    background: #3498db;
    border-radius: 6px;
}

.order-table-container::-webkit-scrollbar-thumb:hover {
    background: #2980b9;
}

@media (max-width: 768px) {
    form {
        flex-direction: column;
        align-items: stretch;
    }

    .product-table {
        font-size: 12px;
    }

    form input, form select, form button {
        width: 100%;
    }
}
/* CSS cho nút "Tạo đổi trả" */
input[type="submit"] {
    background-color: #3498db; /* Màu xanh dương chủ đạo */
    color: white; /* Màu chữ trắng */
    padding: 12px 25px; /* Kích thước padding */
    font-size: 16px; /* Kích thước chữ */
    font-weight: bold; /* Chữ in đậm */
    border: none; /* Loại bỏ viền */
    border-radius: 8px; /* Bo tròn góc */
    cursor: pointer; /* Con trỏ dạng bàn tay khi hover */
    transition: all 0.3s ease; /* Hiệu ứng mượt mà */
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1); /* Đổ bóng nhẹ */
    text-transform: uppercase; /* Chữ in hoa */
    letter-spacing: 1px; /* Khoảng cách giữa các chữ cái */
}

/* Hiệu ứng khi hover */
input[type="submit"]:hover {
    background-color: #2c81ba; /* Màu xanh dương đậm hơn khi hover */
    box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.2); /* Tăng độ bóng */
    transform: translateY(-2px); /* Nút nâng lên nhẹ */
}

/* Hiệu ứng khi nhấn */
input[type="submit"]:active {
    background-color: #1f5a8b; /* Màu xanh tối hơn khi nhấn */
    box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.15); /* Giảm độ bóng */
    transform: translateY(1px); /* Nút hạ thấp khi nhấn */
}

/* Responsive - Điều chỉnh kích thước trên màn hình nhỏ */
@media (max-width: 768px) {
    input[type="submit"] {
        width: 100%; /* Nút chiếm toàn bộ chiều rộng */
        font-size: 14px; /* Kích thước chữ nhỏ hơn */
        padding: 10px 20px; /* Padding nhỏ hơn */
    }
}

</style>





<div class="content" style="margin-left: 250px; padding: 20px;">
<div class="main-content">
    <div  class="tab-content active "> 
    <form id="filterForm" action="/azuki/trangchu/danhsachdoitra" method="post" style="margin-bottom: 20px;">
    <div style="display: flex; gap: 15px; align-items: center;">
        <div>
            <label for="madonhang">Số Hoá đơn cần đổi trả:</label>
            <input type="tel" id="sdt" name="mahd" placeholder="Nhập số hoá đơn" oninput="validatePhoneNumber(this)">
        </div>
        <div>
            
        </div>
    </div>
</form>
      
<div id="orderList">

    <?php if(mysqLi_num_rows($danhsachdoitra)>0){?>
        <h1>DANH SÁCH ĐƠN HÀNG</h1>
    <div class="order-table-container">
    <table class="product-table" >
      <thead>
        <tr>
          <th >STT</th>
          <th>Số hoá đơn</th>
          <th >Mã sản phẩm</th>
          <th >Tên sản phẩm</th>
          <th>Đơn giá</th>
          <th>Số lượng</th>
          <th >Chọn đổi trả</th>
        </tr>
      </thead>
      <form action="/azuki/trangchu/doitra" method="post">
      <input type="hidden" name="mhd" value="<?php echo $mahd?>">
      <tbody>
      <?php 
      $i=1 ;
      while($row=mysqLi_fetch_array($danhsachdoitra)){
      

    ?>

      <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $row['mahd'] ?></td>
        <td><?php echo $row['masp'] ?></td>
        <td><?php echo $row['tensp'] ?></td>
        <td><?php echo $row['dongia'] ?></td>
        <td><?php echo $row['soluong']  ?></td>
        <td><input type="checkbox"></td>
      </tr>
    
       
    
        <?php  $i++ ; } ?>
          </tbody>
        </table>
        <input type="submit" value="Tạo đổi trả ">
          </div>
          
  </form>
  </div>
  <?php 
    }else{
?>
<h1>Nhập mã hoá đơn để tìm sản phẩm cần đổi</h1>
<?php } ?>
</div>
</div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const checkboxes = document.querySelectorAll('input[type="checkbox"]');
    const form = document.querySelector('form[action="/azuki/trangchu/doitra"]');
    const selectedProductsInput = document.createElement('input');
    selectedProductsInput.type = 'hidden';
    selectedProductsInput.name = 'selectedProducts';
    form.appendChild(selectedProductsInput);

    // Mảng lưu mã sản phẩm đã chọn
    const selectedProducts = [];

    // Xử lý khi checkbox thay đổi trạng thái
    checkboxes.forEach((checkbox) => {
        checkbox.addEventListener('change', function () {
            const productId = this.closest('tr').querySelector('td:nth-child(3)').textContent.trim();
            if (this.checked) {
                if (!selectedProducts.includes(productId)) {
                    selectedProducts.push(productId);
                }
            } else {
                const productIndex = selectedProducts.indexOf(productId);
                if (productIndex !== -1) {
                    selectedProducts.splice(productIndex, 1);
                }
            }

            // Cập nhật giá trị của input ẩn
            selectedProductsInput.value = JSON.stringify(selectedProducts);
        });
    });

    // Xử lý khi form được gửi đi
    form.addEventListener('submit', function (e) {
        // Kiểm tra nếu không có sản phẩm nào được chọn
        if (selectedProducts.length === 0) {
            e.preventDefault();
            alert('Vui lòng chọn ít nhất một sản phẩm để đổi trả.');
            return;
        }

        // Cập nhật giá trị mảng trước khi gửi
        selectedProductsInput.value = JSON.stringify(selectedProducts);
    });
});

</script>

<?php
if(isset($_SESSION['thongbao'])){
$thongbao = addslashes($_SESSION['thongbao']);
echo "<script>
    window.onload = function() {
        alert('$thongbao');
    }
</script>";
unset($_SESSION['thongbao']);
}
?>

        