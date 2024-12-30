
<style>

.table {
    display: flex;
    flex-direction: column;
    border: 1px solid #ddd;
    border-radius: 6px;
    overflow: hidden;
    width: 100%;
}

/* Header của bảng */
.table-header {
    display: flex;
    background-color: #2c3e50;
    color: white;
    font-weight: bold;
}

/* Dòng trong bảng (dữ liệu) */
.table-row {
    display: flex;
    border-top: 1px solid #ddd;
}

/* Các ô trong bảng */
.table-cell {
    flex: 1;
    padding: 10px;
    text-align: left;
    border-right: 1px solid #ddd;
}

/* Căn chỉnh ô cuối cùng */
.table-row .table-cell:last-child {
    border-right: none;
}

/* Định dạng bảng header */
.table-header .table-cell {
    padding: 12px 15px;
    text-align: center;
}

/* Cải thiện màu nền cho các hàng */
.table-row:nth-child(even) {
    background-color: #ecf0f1;
}


    body {
        margin: 0;
        font-family: Arial, sans-serif;
        background-color: #f4f6f8;
    }

    .content {
        margin-left: 250px;
        padding: 20px;
    }

    h1 {
        font-size: 24px;
        color: #34495e;
        margin-bottom: 20px;
        text-align: center;
    }

    form {
        display: flex;
        flex-wrap: wrap;
        gap: 15px;
        align-items: center;
        margin-bottom: 20px;
    }

    form label {
        font-size: 14px;
        font-weight: bold;
        color: #2c3e50;
        margin-right: 5px;
    }

    form input, form select {
        padding: 8px;
        border: 1px solid #ddd;
        border-radius: 6px;
        width: 200px;
    }

    form button {
        background-color: #3498db;
        color: white;
        border: none;
        border-radius: 6px;
        padding: 8px 15px;
        cursor: pointer;
        font-size: 14px;
    }

    form button:hover {
        background-color: #2980b9;
    }

    .product-table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
        font-size: 12px; /* Làm chữ trong bảng nhỏ hơn */
    }

    .product-table thead th {
        background-color: #34495e;
        color: white;
        padding: 8px; /* Giảm padding để phù hợp với chữ nhỏ */
        text-align: center;
        border: 1px solid #ddd;
    }

    .product-table tbody td {
        padding: 8px; /* Giảm padding để tối ưu không gian */
        text-align: center;
        border: 1px solid #ddd;
        background-color: #ffffff;
    }

    .product-table tbody tr:nth-child(even) td {
        background-color: #ecf0f1;
    }

    .product-table tbody tr:hover {
        background-color: #f0f8ff;
    }

    .button-group button {
        margin: 5px 5px;
        border: none;
        border-radius: 5px;
        padding: 8px 12px;
        color: white;
        font-size: 12px; /* Nút có chữ nhỏ hơn */
        cursor: pointer;
    }

    .button-group button.green {
        background-color: #27ae60;
    }

    .button-group button.green:hover {
        background-color: #1e8449;
    }

    .button-group button.red {
        background-color: #e74c3c;
    }

    .button-group button.red:hover {
        background-color: #c0392b;
    }

    .popup {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        display: none;
        justify-content: center;
        align-items: center;
        z-index: 1000;
    }

    .popup-content {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        width: 60%;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
        position: relative;
        overflow-y: auto;
        max-height: 90vh;
    }

    .popup-content h2 {
        font-size: 20px;
        color: #2c3e50;
        margin-bottom: 20px;
        text-align: center;
    }

    .close {
        position: absolute;
        top: 10px;
        right: 10px;
        font-size: 24px;
        font-weight: bold;
        color: #aaa;
        cursor: pointer;
    }

    .close:hover {
        color: #000;
    }

    .table {
        display: flex;
        flex-direction: column;
        border: 1px solid #ddd;
        border-radius: 6px;
        overflow: hidden;
        width: 100%;
    }

    .table-header {
        display: flex;
        background-color: #2c3e50;
        color: white;
        font-weight: bold;
    }

    .table-row {
        display: flex;
        border-top: 1px solid #ddd;
    }

    .table-cell {
        flex: 1;
        padding: 8px; /* Giảm padding để tối ưu chữ nhỏ */
        text-align: left;
        border-right: 1px solid #ddd;
        font-size: 12px; /* Giảm kích thước chữ */
    }

    .table-row:nth-child(even) {
        background-color: #ecf0f1;
    }

    .table-header .table-cell {
        padding: 10px; /* Padding nhỏ cho header */
        text-align: center;
    }

    @media (max-width: 768px) {
        form {
            flex-direction: column;
            gap: 10px;
        }

        form input, form select {
            width: 100%;
        }

        .product-table thead th, .product-table tbody td {
            font-size: 11px;
            padding: 6px; /* Giảm padding trên màn hình nhỏ */
        }

        .popup-content {
            width: 90%;
        }
    }
    .product-table tr th {
        background-color: #003366;
    }
    <style>
.popup {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    display: none;
    justify-content: center;
    align-items: center;
    z-index: 1000;
}

.popup-content {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    width: 50%;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
    position: relative;
    max-height: 90vh;
    overflow-y: auto;
}

.popup-content h2 {
    font-size: 20px;
    margin-bottom: 15px;
    text-align: center;
}

.popup-content label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
}

.popup-content input {
    width: 100%;
    padding: 8px;
    margin-bottom: 15px;
    border: 1px solid #ddd;
    border-radius: 4px;
}

.close {
    position: absolute;
    top: 10px;
    right: 10px;
    font-size: 24px;
    color: #aaa;
    cursor: pointer;
}

.close:hover {
    color: #000;
}

.button-save {
    background-color: #28a745;
    color: white;
    padding: 10px 15px;
    border: none;
    border-radius: 6px;
    cursor: pointer;
}

.button-save:hover {
    background-color: #218838;
}
</style>

</style>


<div class="content" style="margin-left: 250px; padding: 20px;">
<div class="main-content">
    <div  class="tab-content active "> 
    <form id="filterForm" style="margin-bottom: 20px;">
    <div style="display: flex; gap: 15px; align-items: center;">
        <div>
            <label for="khachhang">Nhập thông tin tìm kiếm:</label>
            <input style="width:200px;" type="text" id="khachhang" name="noidung" placeholder=" Khách hàng hoặc số điện thoại">
        </div>

       
       
        
      
    </div>
</form>
      <a href="/azuki/trangchu/danhsachkhachhang" style="text-decoration: none;">
                    <button type="button" style="background-color: #16A085; color: white; border: none; border-radius: 6px; padding: 8px 15px; cursor: pointer; display: inline-block;">
                       Xem tất cả
                    </button>
                </a>
<div id="orderList2">
    <h1>DANH SÁCH KHÁCH HÀNG</h1>
    <?php if(mysqLi_num_rows($dskh)>0){
        ?>
    <table class="product-table" >
      <thead>
        <tr>
          <th style="width:50px" >STT</th>
          <th style="width:150px" >Tên khách hàng </th>
          <th style="width:100px">Số  điện thoại</th>
          <th style="width:200px">Email</th>
          <th style="width:100px">Tổng tiền mua</th>
          <th style="width:50px">Số lần mua</th>
          <th style="width:50px">Số lượng mua</th>
          <th style="width:50px">Thao tác</th>

        </tr>
      </thead>
      <tbody>
         <?php  $i=1; 
          while($row=mysqLi_fetch_array($dskh)){
            mysqli_data_seek($slmua, 0); 
            
            ?>
         <tr>
         <td><?php echo $i ;?></td>
         <td><?php echo $row['hoten'] ;?></td>
         <td><?php echo $row['sodienthoai'] ;?></td>
         <td><?php echo $row['email'] ;?></td>
         <td><?php echo number_format($row['tongtienmua'], 0, '', ','); ?>₫</td>
         <td><?php echo $row['solanmua']  ;?>  </td>
         <td><?php
         while($rowslmua=mysqLi_fetch_array($slmua)){
            if($rowslmua['sodienthoai']==$row['sodienthoai']){
                echo $rowslmua['soluong'];
            }
         }
         
         ?></td>   
        <td>
    <button class="btn edit" onclick="openEditPopup('<?php echo $row['id']; ?>  ' ,'<?php echo $row['hoten']; ?>', '<?php echo $row['sodienthoai']; ?>', '<?php echo $row['email']; ?>')" style="background-color: #0056b3; color: white; border: none; padding: 8px 12px; border-radius: 4px; cursor: pointer;">
        <i class="fas fa-edit" style="color: white; cursor: pointer;"></i>
    </button>
</td>

                        <div class="popup" id="editCustomerPopup">
    <div class="popup-content">
        <span class="close" onclick="closePopup()">&times;</span>
        <h2>Sửa Thông Tin Khách Hàng</h2>
        <form action="/azuki/trangchu/suakhachhang" method="post">
        <input type="hidden" id="id" name="id" required>
            <label for="editName">Tên khách hàng:</label>
            <input type="text" id="editName" name="name" required>

            <label for="editPhone">Số điện thoại:</label>
            <input type="text" id="editPhone" name="phone" required>

            <label for="editEmail">Email:</label>
            <input type="email" id="editEmail" name="email" required>

            <button type="submit" class="button-save" >Lưu</button>
        </form>
    </div>
</div>

         <?php $i++; } ?>
      </tbody>
    </table>
  

<?php } else{?>
 
   <h3>Không có dữ liệu cần tìm</h3>
<?php }?>
</div>

</div>
</div>


<script>
  function confirmCustom(message) {
    const isConfirmed = window.confirm(message);
    return isConfirmed;
}

function validatePhoneNumber(input) {
        // Loại bỏ tất cả ký tự không phải số
        input.value = input.value.replace(/\D/g, '');
    }
    

    document.getElementById('filterForm').addEventListener('submit', function (event) {
    event.preventDefault(); // Ngăn không reload trang khi submit form
    const formData = new FormData(document.getElementById('filterForm'));

    // Gửi yêu cầu AJAX để lọc
    fetch('/azuki/trangchu/danhsachkhachhang_loc', {
        method: 'POST',
        body: formData
    })
        .then(response => response.text()) // Nhận phản hồi từ server (HTML)
        .then(data => {
            document.getElementById('orderList2').innerHTML = data; // Cập nhật kết quả vào #orderList2
        })
        .catch(error => console.error('Error:', error));
});

document.querySelectorAll('#filterForm input').forEach(input => {
    input.addEventListener('keypress', function (event) {
        if (event.key === 'Enter') {
            event.preventDefault();
            document.getElementById('filterForm').dispatchEvent(new Event('submit')); // Kích hoạt sự kiện submit
        }
    });
});
function openEditPopup(id,name, phone, email) {
    // Điền dữ liệu khách hàng vào form
    document.getElementById("id").value = id;
    document.getElementById("editName").value = name;
    document.getElementById("editPhone").value = phone;
    document.getElementById("editEmail").value = email;

    // Hiển thị popup
    document.getElementById("editCustomerPopup").style.display = "flex";
}

function closePopup() {
    // Ẩn popup
    document.getElementById("editCustomerPopup").style.display = "none";
}




</script>


<?php /* if (isset($_SESSION['message'])): ?>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            alert("<?php echo $_SESSION['message']; ?>");
        });
    </script>
    <?php unset($_SESSION['message']); ?>
<?php endif; */ ?>


<?php 
if (isset($_SESSION['message'])) {
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
              <p>" . $_SESSION['message'] . "</p>
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
    unset($_SESSION['message']);
}
?>



        