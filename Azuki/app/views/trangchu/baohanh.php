<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lý Bảo Hành</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background-color: #f4f7fc;
            color: #333;
        }
        .content {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        h1 { text-align: center; color: #0056b3; }
        .add-btn {
            background-color: #28a745; color: #fff;
            padding: 8px 12px; border: none;
            border-radius: 4px; cursor: pointer;
        }
        table {
            width: 100%; border-collapse: collapse; margin-top: 10px;
        }
        table th, table td {
            text-align: center; padding: 8px; border: 1px solid #ddd;
        }
        table th { background-color: #0056b3; color: #fff; }
        .delete-btn, .edit-btn {
            padding: 5px 10px; border-radius: 4px; cursor: pointer; border: none;
        }
        .delete-btn { background-color: #dc3545; color: #fff; }
        .edit-btn { background-color: #ffc107; color: #000; }
        .popup, .overlay {
            display: none; position: fixed; z-index: 1000;
        }
        .popup {
            top: 50%; left: 50%; transform: translate(-50%, -50%);
            background: #fff; width: 400px; padding: 20px; border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }
        .popup input, .popup textarea, .popup select {
            width: 100%; padding: 8px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 4px;
        }
        .save-btn { background-color: #28a745; color: #fff; }
        .cancel-btn { background-color: #dc3545; color: #fff; }
        .overlay {
            top: 0; left: 0; width: 100%; height: 100%;
            background: rgba(0, 0, 0, 0.5);
        }


        
    </style>
</head>
<body>
<div class="content" style="margin-left: 250px; padding: 20px;">
<div class="content">
    <h1>Danh Sách Bảo Hành</h1>
    <button class="add-btn" id="addWarrantyBtn"><i class="fas fa-plus"></i> Thêm Mới</button>

    <!-- Bảng bảo hành -->
    <table>
        <thead>
            <tr>
                <th>STT</th>
                <th>Mã bảo hành</th>
                <th>Sản phẩm</th>
                <th>Ngày bảo hành</th>
                <th>Ngày trả</th>
                <th>Lỗi mô tả</th>
                <th>Trạng thái</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            <?php $stt = 1; foreach ($danhsach_baohanh as $row): ?>
                <tr>
                    <td><?= $stt++ ?></td>
                    <td><?= htmlspecialchars($row['mabaohanh']) ?></td>
                    <td><?= htmlspecialchars($row['tensp']) ?></td>
                    <td><?= htmlspecialchars($row['ngaybaohanh']) ?></td>
                    <td><?= htmlspecialchars($row['ngaytra']) ?></td>
                    <td><?= htmlspecialchars($row['loimota']) ?></td>
                    <td><?= htmlspecialchars($row['trangthai']) ?></td>
                    <td>
                    <button class="edit-btn" 
            onclick="editWarranty(
                '<?= htmlspecialchars($row['mabaohanh'], ENT_QUOTES, 'UTF-8') ?>', 
                '<?= htmlspecialchars($row['tensp'], ENT_QUOTES, 'UTF-8') ?>', 
                '<?= htmlspecialchars($row['ngaybaohanh'], ENT_QUOTES, 'UTF-8') ?>', 
                '<?= htmlspecialchars($row['ngaytra'], ENT_QUOTES, 'UTF-8') ?>', 
                '<?= htmlspecialchars($row['loimota'], ENT_QUOTES, 'UTF-8') ?>', 
                '<?= htmlspecialchars($row['trangthai'], ENT_QUOTES, 'UTF-8') ?>',
                '<?= htmlspecialchars($row['masp'], ENT_QUOTES, 'UTF-8') ?>'
            )">
        <i class="fas fa-edit"></i>
    </button>

                        <a href="/azuki/admin/xoabh/<?php echo $row['mabaohanh']; ?>"
    onclick="return confirm('Bạn có chắc chắn muốn xóa bảo hành mã <?php echo $row['mabaohanh']; ?>?');">
    <button class="delete-btn"><i class="fas fa-trash"></i></button>
</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<div class="overlay" id="popupOverlay"></div>
<div class="popup" id="warrantyPopup">
    <h2 id="popupTitle">Thêm Đơn Bảo Hành</h2>
    <form id="warrantyForm">
        <input type="hidden" id="action" name="action">
        <input type="hidden" id="mabaohanh" name="mabaohanh">

        <input type="text" id="mahd" name="mahd" placeholder="Nhập mã hóa đơn" onkeypress="checkInvoice(event)">
        <p id="notification" style="display:none;color:red;">Hóa đơn này hết hạn bảo hành!</p>

        <div id="productSelector" style="display:none;">
            <select id="productSelect" name="masp">
                <option value="">Chọn sản phẩm</option>
            </select>
        </div>

        <input type="date" id="ngaybaohanh" name="ngaybaohanh" readonly>
        <input type="date" id="ngaytra" name="ngaytra" required>
        <textarea id="loimota" name="loimota" required></textarea>
        <select id="trangthai" name="trangthai" required>
            <option value="đang xử lý">Đang xử lý</option>
            <option value="đã xử lý">Đã xử lý</option>
            <option value="đã hoàn trả">Đã hoàn trả</option>
        </select>

        <button type="submit">Lưu</button>
        <button type="button" onclick="closePopup()">Hủy</button>
    </form>
</div>

<script>
    const popup = document.getElementById('warrantyPopup');
    const overlay = document.getElementById('popupOverlay');
    const notification = document.getElementById('notification');
    const productSelector = document.getElementById('productSelector');
    const productSelect = document.getElementById('productSelect');
    const warrantyForm = document.getElementById('warrantyForm');

    document.getElementById('addWarrantyBtn').onclick = function () {
        resetForm();
        document.getElementById('action').value = 'add';
        document.getElementById('popupTitle').innerText = "Thêm Đơn Bảo Hành";
        document.getElementById('mabaohanh').value = 'BH' + Math.floor(Math.random() * 10000);
        document.getElementById('ngaybaohanh').value = new Date().toISOString().split('T')[0];
        document.getElementById('trangthai').value = 'đang xử lý';
        openPopup();
    };

    function editWarranty(mabaohanh, tensp, ngaybaohanh, ngaytra, loimota, trangthai, masp) {
        // Set form action to "edit"
        document.getElementById('action').value = 'edit';
        document.getElementById('popupTitle').innerText = "Chỉnh Sửa Đơn Bảo Hành";

        // Populate fields with warranty details
        document.getElementById('mabaohanh').value = mabaohanh;
        document.getElementById('mahd').value = mabaohanh;
        document.getElementById('ngaybaohanh').value = ngaybaohanh;
        document.getElementById('ngaytra').value = ngaytra;
        document.getElementById('loimota').value = loimota;
        document.getElementById('trangthai').value = trangthai;

        // Display the linked product
        productSelector.style.display = 'block';
        productSelect.innerHTML = `<option value="${masp}" selected>${tensp}</option>`;

        // Open the popup
        openPopup();
    }

    function openPopup() {
        popup.style.display = 'block';
        overlay.style.display = 'block';
    }

    function closePopup() {
        popup.style.display = 'none';
        overlay.style.display = 'none';
    }

    function resetForm() {
        warrantyForm.reset();
        notification.style.display = 'none';
        productSelector.style.display = 'none';
        closePopup();
    }

    document.getElementById('mahd').addEventListener('keypress', function (event) {
        if (event.key === 'Enter') {
            event.preventDefault();
            const mahd = event.target.value.trim();
            if (!mahd) {
                alert('Vui lòng nhập mã hóa đơn!');
                return;
            }

            fetch('/azuki/trangchu/checkInvoice', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({ mahd })
            })
                .then(response => response.json())
                .then(data => {
                    if (data.status === 'expired') {
                        notification.style.display = 'block';
                        productSelector.style.display = 'none';
                    } else if (data.status === 'valid') {
                        notification.style.display = 'none';
                        productSelector.style.display = 'block';
                        productSelect.innerHTML = '<option value="">Chọn sản phẩm</option>';
                        data.products.forEach(product => {
                            productSelect.innerHTML += `<option value="${product.masp}">${product.tensp}</option>`;
                        });
                    } else {
                        alert('Không tìm thấy hóa đơn!');
                        notification.style.display = 'none';
                        productSelector.style.display = 'none';
                    }
                })
                .catch(error => {
                    console.error('Lỗi:', error);
                    alert('Đã xảy ra lỗi khi kiểm tra hóa đơn.');
                });
        }
    });

    warrantyForm.onsubmit = function (e) {
    e.preventDefault();
    const action = document.getElementById('action').value;

    // Determine whether to add or edit
    const url = action === 'edit' ? '/azuki/trangchu/updateWarranty' : '/azuki/trangchu/addWarranty';

    fetch(url, {
        method: 'POST',
        body: new FormData(warrantyForm)
    })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // Tạo popup thông báo thành công
                const message = action === 'edit' ? 'Cập nhật bảo hành thành công!' : 'Thêm bảo hành thành công!';
                showPopup(message, 'success');

                // Tự động reload sau khi thông báo biến mất
                setTimeout(() => {
                    location.reload();
                }, 3000);
            } else {
                // Tạo popup thông báo lỗi
                showPopup('Đã xảy ra lỗi! Vui lòng thử lại.', 'error');
            }
        })
        .catch(error => {
            console.error('Lỗi:', error);
            // Tạo popup thông báo lỗi
            showPopup('Đã xảy ra lỗi khi xử lý yêu cầu.', 'error');
        });
};

// Hàm hiển thị popup thông báo
function showPopup(message, type) {
    // Tạo popup container
    const popup = document.createElement('div');
    popup.style.position = 'fixed';
    popup.style.top = '50%';
    popup.style.left = '50%';
    popup.style.transform = 'translate(-50%, -50%)';
    popup.style.backgroundColor = '#fff';
    popup.style.border = '1px solid #ddd';
    popup.style.borderRadius = '8px';
    popup.style.padding = '20px';
    popup.style.boxShadow = '0px 4px 8px rgba(0, 0, 0, 0.2)';
    popup.style.textAlign = 'center';
    popup.style.zIndex = '1000';
    popup.style.width = '300px';

    // Thêm biểu tượng và thông báo
    const icon = document.createElement('i');
    icon.style.fontSize = '40px';
    icon.style.marginBottom = '10px';
    icon.style.display = 'block';

    const messageText = document.createElement('p');
    messageText.style.fontSize = '16px';
    messageText.textContent = message;

    if (type === 'success') {
        icon.className = 'fa fa-check-circle';
        icon.style.color = '#28a745';
    } else if (type === 'error') {
        icon.className = 'fa fa-exclamation-circle';
        icon.style.color = '#dc3545';
    }

    popup.appendChild(icon);
    popup.appendChild(messageText);

    // Thêm popup vào document
    document.body.appendChild(popup);

    // Tự động xóa popup sau 3 giây
    setTimeout(() => {
        popup.remove();
    }, 2000);
}

</script>


</body>
</html>
