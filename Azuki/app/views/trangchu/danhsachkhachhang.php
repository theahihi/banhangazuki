
<style>
  /* Phần nền tối của popup */
.popup {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    display: none; /* Ẩn popup ban đầu */
    justify-content: center;
    align-items: center;
    z-index: 1000;
}

/* Nội dung chính của popup */
.popup-content {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    width: 50%;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
    position: relative;
}

/* Nút đóng popup */
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


/* Container chính của bảng */
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
</style>


<div class="content" style="margin-left: 250px; padding: 20px;">
<div class="main-content">
    <div  class="tab-content active "> 
    <form id="filterForm" style="margin-bottom: 20px;">
    <div style="display: flex; gap: 15px; align-items: center;">
        <div>
            <label for="khachhang">Khách hàng:</label>
            <input style="width:155px" type="text" id="khachhang" name="khachhang" placeholder="Nhập tên khách hàng">
        </div>
        <div>
            <label for="madonhang">Số điện thoại:</label>
            <input type="tel" id="sdt" name="sdt" placeholder="Nhập số điện thoại" oninput="validatePhoneNumber(this)">
        </div>
       
        
        <div>
            <button type="button" id="filterButton" style="background-color: #3498DB; color: white; border: none; border-radius: 6px; padding: 8px 15px; cursor: pointer;">
                Lọc
            </button>
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
         <td><?php echo $row['solanmua']  ;?></td>
         <td><?php
         while($rowslmua=mysqLi_fetch_array($slmua)){
            if($rowslmua['sodienthoai']==$row['sodienthoai']){
                echo $rowslmua['soluong'];
            }
         }
         
         ?></td>
         </tr>
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
    

  document.getElementById('filterButton').addEventListener('click', function () {
    // Thu thập dữ liệu từ form
    const formData = new FormData(document.getElementById('filterForm'));

    // Gửi yêu cầu AJAX
    fetch('/azuki/trangchu/danhsachkhachhang_loc', {
        method: 'POST',
        body: formData
    })
        .then(response => response.text()) // Nhận phản hồi từ server (HTML)
        .then(data => {
            document.getElementById('orderList2').innerHTML = data; // Cập nhật kết quả vào #orderList
        })
        .catch(error => console.error('Error:', error));
});



</script>



        