<style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f7fc;
    color: #333;
}

/* Bố cục container chính */
.containerdanhgia {
    background-color: #ffffff;
    padding: 20px;
    margin: 20px auto;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    max-width: 1200px;
}

.containerdanhgia h1 {
    font-size: 24px;
    color: #003366;
    margin-bottom: 20px;
    text-align: center;
}

/* Định dạng bảng */
table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
}

table thead {
    background-color: #003366;
    color: #ffffff;
}

table thead th {
    padding: 10px;
    text-align: center;
    font-size: 16px;
}

table tbody tr {
    border-bottom: 1px solid #ddd;
}

table tbody tr:nth-child(even) {
    background-color: #f9f9f9;
}

table tbody tr:hover {
    background-color: #eaf2ff;
}

table tbody td {
    padding: 10px;
    text-align: center;
    font-size: 14px;
    vertical-align: middle;
}

/* Nút Thao Tác */
button {
    background-color: #0056b3;
    color: white;
    border: none;
    padding: 8px 12px;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button:hover {
    background-color: #004494;
}

button img {
    width: 20px;
    height: 20px;
}

/* Trạng thái hoạt động */
span {
    font-weight: bold;
}

span[style="color:green;"] {
    color: #28a745;
}

span[style="color:red;"] {
    color: #dc3545;
}

/* Nút Thêm thành viên */
a button {
    display: inline-block;
    margin-top: 20px;
    background-color: #0069d9;
    padding: 10px 15px;
    font-size: 14px;
    text-decoration: none;
    transition: background-color 0.3s ease;
}

a button:hover {
    background-color: #0056b3;
}

/* Đáp ứng màn hình nhỏ */
@media (max-width: 768px) {
    .containerdanhgia {
        padding: 10px;
    }

    table thead th,
    table tbody td {
        font-size: 12px;
        padding: 8px;
    }

    button {
        font-size: 12px;
        padding: 6px 10px;
    }
}
</style>
<div class="content" style="margin-left: 250px; padding: 20px;">
   
<div class="containerdanhgia">
        <?php if(mysqLi_num_rows($dstk)>0){?>
          <h1>Danh sách thành viên của AZUKI </h1>
        <table>
            <thead>
                <tr>
                    <th>STT</th>
                    <th>username</th>
                    <th>Họ tên</th>
                    <th>Số điện thoại</th>
                    <th>Email</th>
                    <th>Trạng thái</th>
                    <th <?php if($_SESSION['role']==2){?> 
                      colspan="3"  
                      <?php } ?>>Thao Tác</th>
                </tr>
            </thead>
            <tbody>
              <?php 
                $i=1;
               While($row=mysqLi_fetch_array($dstk)){ ?>
                <tr>
                <td><?php echo $i ?></td>
<td><?php echo $row['username']?></td>
                 <td><?php echo $row['hoten']?></td>
                 <td><?php echo $row['sdt']?></td>
                 <td><?php echo $row['email']?></td>
                 <td><?php
                 if($row['trangthai']==1){ ?>
                    <span style="color:green;"> Hoạt động </span>
                <?php } else{ ?>
                    <span style="color: red;"> Bị khoá </span>
                <?php  }
                 ?></td>
                 <?php if($row['trangthai']==1){?>
                 <td style=" text-align: center; "><a href="/azuki/trangchu/khoataikhoan/<?php echo $row['id_taikhoan'];?>" onclick="return confirmCustom('Bạn có chắc chắn muốn khoá tài khoản : <?php echo $row['username']; ?>')"><button><i class="fa fa-lock" aria-hidden="true"></i></button></a></td>
                 <?php } else{?>
                    <td style=" text-align: center; "><a href="/azuki/trangchu/motaikhoan/<?php echo $row['id_taikhoan'];?>" onclick="return confirmCustom('Bạn có chắc chắn muốn mở khoá tài khoản : <?php echo $row['username']; ?>')"><button><i class="fa fa-unlock" aria-hidden="true"></i></button></a></td>
                    <?php }?>
                
                    <td style=" text-align: center; "><a href="/azuki/trangchu/ xoataikhoan/<?php echo $row['id_taikhoan'];?>" onclick="return confirmCustom('Bạn có chắc chắn muốn Xoá tài khoản : <?php echo $row['username']; ?>')"><button> <i class="fa fa-trash" aria-hidden="true"></i></button></a></td>

                 
                 
                </tr>
                 
                <?php $i++;} ?>
               
            </tbody>
        </table>
        <?php } else{?>
           <br>
           <h1>Chưa có tài khoản thành viên nào</h1>
          <?php }?>
       <a href="/azuki/trangchu/themtaikhoan"> <button >Thêm thành viên</button></a>
    </div>

</div>

<script>
     function confirmCustom(message) {
    const isConfirmed = window.confirm(message);
    return isConfirmed;
}


    document.addEventListener("DOMContentLoaded", function () {
        const productSelect = document.getElementById("productSelect");
        const filterButton = document.getElementById("filterButton");

        // Kiểm tra giá trị ban đầu
        filterButton.disabled = !productSelect.value;

        // Lắng nghe sự kiện thay đổi
        productSelect.addEventListener("change", function () {
            filterButton.disabled = !productSelect.value; // Vô hiệu nếu giá trị rỗng
        });
    });


</script>