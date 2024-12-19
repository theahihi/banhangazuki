<!-- <?php include __DIR__ . '/../header.php'; ?> -->
<style>
     .filter {
        display: flex;
        justify-content: center;
        margin-bottom: 20px;
    }
    .filter select {
        padding: 8px;
        font-size: 14px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }
    
    button[type="submit"] {
    background-color:#4C9AED; /* Màu nền xanh */
    color: #fff; /* Màu chữ trắng */
    border: none; /* Loại bỏ đường viền */
    padding: 10px 20px; /* Kích thước nút */
    font-size: 16px; /* Cỡ chữ */
    font-weight: bold; /* Chữ đậm */
    border-radius: 5px; /* Bo tròn góc */
    cursor: pointer; /* Con trỏ thành bàn tay khi hover */
    transition: background-color 0.3s ease, transform 0.2s ease; /* Hiệu ứng chuyển màu và chuyển động */
    box-shadow: 0 3px 5px rgba(0, 0, 0, 0.2); /* Hiệu ứng đổ bóng */
}

/* Hiệu ứng khi hover */
button[type="submit"]:hover {
    background-color:rgb(183, 175, 244); /* Màu nền xanh đậm hơn */
    transform: translateY(-2px); /* Hiệu ứng nâng nút lên */
}

/* Hiệu ứng khi nhấn (active) */
button[type="submit"]:active {
    background-color: #1f618d; /* Màu nền xanh tối */
    transform: translateY(1px); /* Nhấn nút xuống */
}
</style>
<div class="content" style="margin-left: 250px; padding: 20px;">
    <div class="stats" style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px;">
        <div class="stat-box" style="background: white; padding: 20px; border-radius: 8px; text-align: center; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);">
            <?php $rowdoanhthu= mysqLi_fetch_array($tongdoanhthu)?>
            <h2><?php echo number_format($rowdoanhthu['tong_giatri'], 0, '', '.'); ?>₫</h2>
            <p>Doanh thu</p>
        </div>
        <div class="stat-box" style="background: white; padding: 20px; border-radius: 8px; text-align: center; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);">
            <?php $rowsodonhang=mysqLi_fetch_array($donhangmoi) ?>
            <h2><?php echo $rowsodonhang['soluongdon'] ?></h2>
            <p>Đơn hàng trong ngày hôm nay </p>
        </div>
        <div class="stat-box" style="background: white; padding: 20px; border-radius: 8px; text-align: center; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);">
            <h2>0</h2>
            <p>Đơn trả hàng</p>
        </div>
        <div class="stat-box" style="background: white; padding: 20px; border-radius: 8px; text-align: center; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);">
            <h2>1</h2>
            <p>Đơn hủy</p>
        </div>
    </div>

    <div class="chart" style="background: white; padding: 20px; margin-top: 20px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);">
        <h2>Doanh thu bán hàng</h2>
        <div class="filter">
            <form id="filterForm">
                <select id="monthFilter" name="month">
                    <option value="">-- Chọn tháng --</option>
                    <option value="2024-01">Tháng 1</option>
                    <option value="2024-02">Tháng 2</option>
                    <option value="2024-03">Tháng 3</option>
                    <option value="2024-04">Tháng 4</option>
                    <option value="2024-05">Tháng 5</option>
                    <option value="2024-06">Tháng 6</option>
                    <option value="2024-07">Tháng 7</option>
                    <option value="2024-08">Tháng 8</option>
                    <option value="2024-09">Tháng 9</option>
                    <option value="2024-10">Tháng 10</option>
                    <option value="2024-11">Tháng 11</option>
                    <option value="2024-12">Tháng 12</option>
                </select>
                <button type="submit">Lọc</button>
            </form>
        </div>
        <canvas id="doanhThuChart"></canvas>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
   document.addEventListener("DOMContentLoaded", function () {
    const chartContainer = document.getElementById('doanhThuChart');
    let myChart;

    function updateChart(data) {
        // Extract labels and revenue data
        const labels = data.map(item => item.ngay);
        const revenueData = data.map(item => item.doanhthu);

        // Destroy existing chart if it exists
        if (myChart) {
            myChart.destroy();
        }

        // Create new chart
        const ctx = chartContainer.getContext('2d');
        myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Doanh thu theo ngày',
                    data: revenueData,
                    backgroundColor: 'rgba(52, 152, 219, 0.7)',
                    borderColor: '#3498db',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        display: true
                    }
                },
                scales: {
                    x: {
                        title: {
                            display: true,
                            text: 'Ngày'
                        }
                    },
                    y: {
                        title: {
                            display: true,
                            text: 'Doanh thu (VNĐ)'
                        },
                        beginAtZero: true
                    }
                }
            }
        });
    }

    // Fetch data via POST
    function fetchData(month) {
        const formData = new FormData();
        formData.append('month', month);

        fetch('/azuki/trangchu/getDoanhThuJSON', {
            method: 'POST',
            body: formData
        })
            .then(response => response.json())
            .then(data => {
                console.log("Received data:", data); // Debugging
                updateChart(data);
            })
            .catch(error => console.error('Error fetching data:', error));
    }

    // Initial load (all data)
    fetchData('');

    // Update chart on month change
    document.getElementById('filterForm').addEventListener('submit', function (e) {
        e.preventDefault(); // Prevent form submission
        const selectedMonth = document.getElementById('monthFilter').value;
        fetchData(selectedMonth);
    });
});

</script>
</body>
</html>
