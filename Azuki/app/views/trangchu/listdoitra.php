
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
        padding: 2px; /* Giảm padding để tối ưu chữ nhỏ */
        text-align: center;
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
    /* Container chính của bảng */
.order-table-container {
    max-height: 500px; /* Chiều cao tối đa của bảng */
    overflow-y: auto; /* Thanh cuộn theo chiều dọc */
    border: 1px solid #ddd;
    border-radius: 8px;
    margin-top: 20px;
}

/* Tiêu đề bảng cố định */
.product-table thead th {
    position: sticky;
    top: 0; /* Cố định phần tiêu đề trên cùng */
    z-index: 2;
    background-color: #34495e; /* Màu nền tiêu đề */
    color: white; /* Màu chữ tiêu đề */
    padding: 10px;
    text-align: center;
    border: 1px solid #ddd;
    font-size: 14px;
}

/* Dòng dữ liệu trong bảng */
.product-table tbody td {
    padding: 10px;
    text-align: center;
    font-size: 14px;
    border: 1px solid #ddd;
}

/* Dòng xen kẽ màu nền */
.product-table tbody tr:nth-child(even) {
    background-color: #ecf0f1;
}

.product-table tbody tr:hover {
    background-color: #f0f8ff;
    cursor: pointer;
}

/* Tùy chỉnh thanh cuộn */
.order-table-container::-webkit-scrollbar {
    width: 8px;
}

.order-table-container::-webkit-scrollbar-thumb {
    background: #3498db;
    border-radius: 4px;
}

.order-table-container::-webkit-scrollbar-thumb:hover {
    background: #2980b9;
}

<style>
  /* Giảm kích thước các cột "Đơn giá" và "Số lượng" */
  .table-cell.price, 
  .table-cell.quantity {
      width: 100px; /* Đặt chiều rộng cụ thể cho cột */
      text-align: center; /* Căn giữa nội dung */
      font-size: 12px; /* Giảm kích thước chữ */
      padding: 5px; /* Giảm padding để nhỏ gọn */
  }

  /* Giảm kích thước ảnh trong cột sản phẩm */
  .table-cell img {
      max-width: 60px; /* Giảm kích thước ảnh */
      max-height: 60px;
      margin-left: 10px;
  }
</style>


</style>


<div class="content" style="margin-left: 250px; padding: 20px;">
<div class="main-content">
    <div  class="tab-content active "> 
    <form id="filterForm" style="margin-bottom: 20px;" onsubmit="return false;">
    <div style="display: flex; gap: 15px; align-items: center;">
        <div>
            <label for="khachhang">Nhập thông tin tìm kiếm:</label>
            <input style="width:215px" type="text" id="khachhang" name="noidung" placeholder="Tên khách hàng/SĐT/Số hoá đơn">
        </div>
        <div>
            <label for="madonhang">Từ:</label>
            <input type="date" id="tungay" name="tungay">
        </div>
        <div>
            <label for="madonhang">Đến:</label>
            <input type="date" id="denngay" name="denngay">
        </div>
        
    </div>
</form>
      <a href="/azuki/trangchu/listdoitra" style="text-decoration: none;">
                    <button type="button" style="background-color: #16A085; color: white; border: none; border-radius: 6px; padding: 8px 15px; cursor: pointer; display: inline-block;">
                       Xem tất cả
                    </button>
                </a>
<div  id="orderListdoitra" >
    <h1>DANH SÁCH ĐƠN HÀNG</h1>
    <a style="margin-top:200px" href="/azuki/trangchu/danhsachdoitra"><button style="background-color:rgb(52, 28, 185); color: white; border: none; border-radius: 6px; padding: 8px 15px; cursor: pointer; display: inline-block;">Thêm đơn đổi trả</button></a>
    <?php ?>
    <div class="order-table-container">
    <table class="product-table" >
      <thead>
        <tr>
          <th >STT</th>
          <th>Mã đổi trả</th>
          <th >Số hoá hơn</th>
          <th >Tên khách </th>
          <th >Số điện thoại</th>
          <th >Ngày đổi trả</th>
          <th >Thao tác </th>
        </tr>
      </thead>
      <tbody>
      <?php 
      $i=1 ;
      while($row=mysqLi_fetch_array($listdoitra)){
        mysqli_data_seek($chitietdoitra, 0); 

    ?>
  <tr>
    <td><?php echo $i ?></td>
    <td><?php echo $row['madt'] ?></td>
    <td><?php echo $row['mahd'] ?></td>
    <td><?php echo $row['hoten'] ?></td>
    <td><?php echo $row['sodienthoai'] ?></td>
    <td><?php echo $row['ngaydoitra'] ?></td>
    <td>
    <button onclick="openPopup('<?php echo $row['madt']; ?>')"
    style="background-color: #16A085; color: white; border: none; padding: 10px 15px; border-radius: 6px; cursor: pointer;">
    <i class="fa fa-eye"></i>
</button>

</a>
 </td> 
  </tr>

   
  <div id="orderDetailsPopup<?php echo $row['madt']; ?>" class="popup" style="display: none;">
    <div class="popup-content">
        <span class="close" onclick="closePopup('<?php echo $row['madt']; ?>')">&times;</span>
        <h2>Chi tiết đơn đổi trả mã :<?php echo  $row['madt']; ?></h2>
        <div class="table">
    <div class="table-header">
        <div class="table-cell">Sản phẩm</div>
        <div class="table-cell price" >Đơn giá</div>
        <div class="table-cell quantity ">Số lượng đổi trả</div>
    </div>
    <?php while($rowctsp=mysqLi_fetch_array($chitietdoitra)) {?>

      <?php if($rowctsp['madt']==$row['madt'] ){?>
    <div class="table-row">
        <div class="table-cell" style="display:flex">
          <?php echo $rowctsp['tensp'] ?>
          <img  style=" width: 80px; height: 80px;"src="<?php echo WEBROOT . 'public/client/Picture/anhsanpham/' . $rowctsp['anhhienthi1']; ?>" alt="">
      </div>
        <div class="table-cell price "><?php echo number_format($rowctsp['dongia'], 0, '', ','); ?>₫</div>
        <div class="table-cell quantity "><?php echo $rowctsp['soluong'] ?></div>

    </div>
    <?php }}?>
    
</div>
        <button onclick="closePopup('<?php echo $row['madt']; ?>')" 
                style="background-color: #3498DB; color: white; border: none; padding: 10px 15px; border-radius: 6px; cursor: pointer;">
            Đóng
        </button>
    </div>
</div>
    <?php 
     $i++ ; }
?>

      </tbody>
    </table>
      </div>
   
  </div>
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
    




    // Hàm hiển thị popup
// Hàm hiển thị popup với ID đơn hàng động
function openPopup(mahd) {
      const popup = document.getElementById('orderDetailsPopup' + mahd);
      popup.style.display = 'flex'; // Hiển thị popup
  }

  // Hàm đóng popup với ID đơn hàng động
  function closePopup(mahd) {
      const popup = document.getElementById('orderDetailsPopup' + mahd);
      popup.style.display = 'none'; // Ẩn popup
  }


  document.getElementById('filterForm').addEventListener('submit', function (e) {
    e.preventDefault(); // Ngăn chặn hành động mặc định của form

    // Thu thập dữ liệu từ form
    const formData = new FormData(document.getElementById('filterForm'));

    // Gửi yêu cầu AJAX
    fetch('/azuki/trangchu/listdoitra_loc', {
        method: 'POST',
        body: formData
    })
        .then(response => response.text()) // Nhận phản hồi từ server (HTML)
        .then(data => {
            document.getElementById('orderListdoitra').innerHTML = data; // Cập nhật kết quả vào #orderList
        })
        .catch(error => console.error('Error:', error));
});

// Lắng nghe sự kiện nhấn Enter từ các trường đầu vào
document.querySelectorAll('#filterForm input').forEach(input => {
    input.addEventListener('keypress', function (event) {
        if (event.key === 'Enter') { // Kiểm tra nếu nhấn phím Enter
            event.preventDefault(); // Ngăn chặn hành vi mặc định
            document.getElementById('filterForm').dispatchEvent(new Event('submit')); // Gửi form
        }
    });
});

// Nút lọc vẫn hoạt động nếu cần
document.getElementById('filterButton').addEventListener('click', function () {
    document.getElementById('filterForm').dispatchEvent(new Event('submit'));
});





</script>



        