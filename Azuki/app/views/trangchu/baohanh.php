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
                <th>Ngày bảo hành</th>
                <th>Ngày trả</th>
                <th>Serinumber</th>
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
                    <td><?= htmlspecialchars($row['ngaybaohanh']) ?></td>
                    <td><?= htmlspecialchars($row['ngaytra']) ?></td>
                    <td><?= htmlspecialchars($row['serinumber']) ?></td>
                    <td><?= htmlspecialchars($row['loimota']) ?></td>
                    <td><?= htmlspecialchars($row['trangthai']) ?></td>
                    <td>
                        <button class="edit-btn" onclick="editWarranty(
                            '<?= $row['mabaohanh'] ?>',
                            '<?= $row['ngaybaohanh'] ?>',
                            '<?= $row['ngaytra'] ?>',
                            '<?= $row['serinumber'] ?>',
                            '<?= $row['loimota'] ?>',
                            '<?= $row['trangthai'] ?>'
                        )"><i class="fas fa-edit"></i></button>
                        <a href="/azuki/admin/xoabh/<?php echo $row['mabaohanh']; ?>"
    onclick="return confirm('Bạn có chắc chắn muốn xóa bảo hành mã <?php echo $row['mabaohanh']; ?>?');">
    <button class="delete-btn"><i class="fas fa-trash"></i> Xóa</button>
</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<!-- Popup -->
<div class="overlay" id="popupOverlay"></div>
<div class="popup" id="warrantyPopup">
    <h2 id="popupTitle">Thêm Đơn Bảo Hành</h2>
    <form id="warrantyForm">
        <input type="hidden" id="action" name="action" value="add">
        <input type="hidden" id="mabaohanh" name="mabaohanh">
        <input type="date" id="ngaybaohanh" name="ngaybaohanh" readonly>
        <input type="date" id="ngaytra" name="ngaytra" required>
        <input type="text" id="serinumber" name="serinumber" required placeholder="Serinumber">
        <textarea id="loimota" name="loimota" required placeholder="Lỗi mô tả"></textarea>
        <select id="trangthai" name="trangthai" required>
            <option value="đang xử lý">Đang xử lý</option>
            <option value="đã xử lý">Đã xử lý</option>
            <option value="đã hoàn trả">Đã hoàn trả</option>
        </select>
        <button type="submit" class="save-btn">Lưu</button>
        <button type="button" class="cancel-btn" onclick="closePopup()">Hủy</button>
    </form>
</div>

<script>
    const popup = document.getElementById('warrantyPopup');
    const overlay = document.getElementById('popupOverlay');

    document.getElementById('addWarrantyBtn').onclick = function () {
        resetForm();
        document.getElementById('action').value = 'add';
        document.getElementById('popupTitle').innerText = "Thêm Đơn Bảo Hành";
        document.getElementById('mabaohanh').value = 'BH' + Math.floor(Math.random() * 10000);
        document.getElementById('ngaybaohanh').value = new Date().toISOString().split('T')[0];
        document.getElementById('trangthai').value = 'đang xử lý';
        openPopup();
    };

    function editWarranty(mabaohanh, ngaybaohanh, ngaytra, serinumber, loimota, trangthai) {
        document.getElementById('action').value = 'edit';
        document.getElementById('popupTitle').innerText = "Chỉnh Sửa Đơn Bảo Hành";
        document.getElementById('mabaohanh').value = mabaohanh;
        document.getElementById('ngaybaohanh').value = ngaybaohanh;
        document.getElementById('ngaytra').value = ngaytra;
        document.getElementById('serinumber').value = serinumber;
        document.getElementById('loimota').value = loimota;
        document.getElementById('trangthai').value = trangthai;
        openPopup();
    }

    function openPopup() { popup.style.display = 'block'; overlay.style.display = 'block'; }
    function closePopup() { popup.style.display = 'none'; overlay.style.display = 'none'; }
    function resetForm() { document.getElementById('warrantyForm').reset(); closePopup(); }

    document.getElementById('warrantyForm').onsubmit = function (e) {
        e.preventDefault();
        fetch('', { method: 'POST', body: new FormData(this) })
            .then(() => location.reload());
    };
</script>
</body>
</html>
