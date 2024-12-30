<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Báo Cáo Bảo Hành</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>

.content { margin: auto; padding: 20px; max-width: 1200px; background-color: white; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); }
        h1 { text-align: center; color: #333; font-size: 2em; margin-bottom: 20px; }
        .chart-wrapper { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; }
        .chart-container { background: #fff; border-radius: 8px; padding: 20px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); }
        canvas { width: 100%; height: 300px; }
        .filter { margin-bottom: 20px; }




       
        .content {
            margin: auto;
            padding: 20px;
            max-width: 1200px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
            font-size: 2em;
            margin-bottom: 20px;
        }
        .chart-wrapper {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }
        .chart-container {
            background: #fff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        canvas {
            width: 100%;
            height: 300px;
        }
    </style>
</head>
<div class="content" style="margin-left: 250px; padding: 20px;">

<body>
    <div class="content">
    <h1>Báo Cáo Bảo Hành</h1>
    <form method="GET" action="">
    <label for="thang">Tháng:</label>
    <input type="number" id="thang" name="thang" min="1" max="12" value="<?php echo isset($_GET['thang']) ? $_GET['thang'] : ''; ?>">
    <label for="nam">Năm:</label>
    <input type="number" id="nam" name="nam" min="2000" max="2100" value="<?php echo isset($_GET['nam']) ? $_GET['nam'] : ''; ?>">
    <button type="submit">Lọc</button>
</form>
    <div class="chart-wrapper">
        <div class="chart-container">
            <h3>Bảo Hành So Với Đơn Hàng</h3>
            <canvas id="chart1"></canvas>
        </div>
        <div class="chart-container">
            <h3>Sản Phẩm Bảo Hành Nhiều Nhất Trong Tháng</h3>
            <canvas id="chart2"></canvas>
        </div>
    </div>
</div>
<script>
const data = {
    warrantyByMonth: <?php echo $baohanh_thang_json; ?> || [],
    mostWarrantyProduct: <?php echo $sanpham_baohanh_nhieu_json; ?> || []
};

// Biểu đồ bảo hành so với đơn hàng
if (data.warrantyByMonth.length > 0) {
    const ctx1 = document.getElementById('chart1').getContext('2d');
    new Chart(ctx1, {
        type: 'bar',
        data: {
            labels: data.warrantyByMonth.map(item => `${item.thang}-${item.nam}`),
            datasets: [
                {
                    label: 'Số lượng bảo hành',
                    data: data.warrantyByMonth.map(item => item.tong_so_bao_hanh),
                    backgroundColor: 'rgba(52, 152, 219, 0.7)',
                    borderColor: '#3498db',
                    borderWidth: 1
                },
                {
                    label: 'Số đơn hàng',
                    data: data.warrantyByMonth.map(item => item.tong_so_don_hang),
                    backgroundColor: 'rgba(46, 204, 113, 0.7)',
                    borderColor: '#2ecc71',
                    borderWidth: 1
                }
            ]
        },
        options: {
            responsive: true,
            scales: {
                x: { title: { display: true, text: 'Tháng-Năm' } },
                y: { beginAtZero: true, title: { display: true, text: 'Số lượng' } }
            }
        }
    });
} else {
    document.getElementById('chart1').parentNode.innerHTML = '<p>Không có dữ liệu bảo hành và đơn hàng.</p>';
}

// Biểu đồ sản phẩm bảo hành nhiều nhất trong tháng
if (data.mostWarrantyProduct.length > 0) {
    const ctx2 = document.getElementById('chart2').getContext('2d');
    new Chart(ctx2, {
        type: 'bar',
        data: {
            labels: data.mostWarrantyProduct.map(item => `${item.masp} (${item.thang}-${item.nam})`),
            datasets: [
                {
                    label: 'Số lượng bảo hành',
                    data: data.mostWarrantyProduct.map(item => item.tong_so_bao_hanh),
                    backgroundColor: 'rgba(231, 76, 60, 0.7)',
                    borderColor: '#e74c3c',
                    borderWidth: 1
                }
            ]
        },
        options: {
            responsive: true,
            scales: {
                x: { title: { display: true, text: 'Sản phẩm (Tháng-Năm)' } },
                y: { beginAtZero: true, title: { display: true, text: 'Số lượng bảo hành' } }
            }
        }
    });
} else {
    document.getElementById('chart2').parentNode.innerHTML = '<p>Không có dữ liệu sản phẩm bảo hành nhiều nhất.</p>';
}
</script>
</body>
</html>

