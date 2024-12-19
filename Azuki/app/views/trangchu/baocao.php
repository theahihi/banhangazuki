<div class="content" style="margin-left: 250px; padding: 20px;">
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Báo Cáo Tài Chính</title>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <style>
  

h1 {
    text-align: center;
    color: #333;
    margin-bottom: 20px;
}

.chart-wrapper {
    display: grid;
    grid-template-areas:
        "revenueByProduct revenueByProduct"
        "monthlyRevenueChart monthlyRevenueChart"
        "productPieChart ordersByCustomerChart";
    grid-template-rows: auto; /* Chiều cao tự động */
    gap: 20px; /* Khoảng cách giữa các biểu đồ */
    height: 90vh; /* Chiếm 90% chiều cao màn hình */
}

.chart-container {
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    background-color: white;
    padding: 15px;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

/* Biểu đồ doanh thu theo sản phẩm chiếm lớn nhất */
#revenueByProductChart {
    grid-area: revenueByProduct;
    height: 300px; /* Chiếm lớn nhất */
}

/* Biểu đồ doanh thu theo tháng chiếm hàng ngang dưới */
#monthlyRevenueChart {
    grid-area: monthlyRevenueChart;
    height: 250px;
}

/* Biểu đồ tỷ lệ sản phẩm bán chạy */
#productPieChart {
    grid-area: productPieChart;
    height: 50px;
}

/* Biểu đồ tổng đơn hàng theo khách hàng */
#ordersByCustomerChart {
    grid-area: ordersByCustomerChart;
    height: 200px;
}


</style>

    </head>
    <body>
       <div class="container">
    <h1>Báo Cáo Doanh Thu</h1>
    <div class="chart-wrapper">
    <div class="chart-container line-chart">
            <h3>Doanh Thu Theo Sản Phẩm</h3>
            <canvas id="revenueByProductChart"></canvas>
        </div>
        <!-- Biểu đồ 1: Doanh thu theo tháng -->
        <div class="chart-container revenue-chart">
            <h3>Doanh Thu Theo Tháng</h3>
            <canvas id="monthlyRevenueChart"></canvas>
        </div>
        <div class="chart-container orders-chart">
            <h3>Doanh thu Theo Khách Hàng</h3>
            <canvas id="ordersByCustomerChart"></canvas>
        </div>
        <!-- Biểu đồ 2: Tỷ lệ sản phẩm bán chạy -->
        <div class="chart-container product-chart">
            <h3>Tỷ Lệ Sản Phẩm Bán Chạy</h3>
            <canvas id="productPieChart"></canvas>
        </div>

        <!-- Biểu đồ 3: Tổng số đơn hàng theo khách hàng -->
       

        <!-- Biểu đồ 4: Doanh thu theo sản phẩm -->
        
    </div>



        <script>
    // Hàm tạo màu sắc ngẫu nhiên
    function generateRandomColors(count) {
        const colors = [];
        for (let i = 0; i < count; i++) {
            const color = `rgb(${Math.floor(Math.random() * 255)}, 
                              ${Math.floor(Math.random() * 255)}, 
                              ${Math.floor(Math.random() * 255)})`;
            colors.push(color);
        }
        return colors;
    }

    // Dữ liệu từ PHP
    const financialData = {
        revenueByMonth: <?php echo $doanhthutheothang_json; ?>,
        productDistribution: <?php echo $sanphambanchay_json; ?>,
        ordersByCustomer: <?php echo $khachhang_json; ?>,
        revenueByProduct: <?php echo $doanhthutheosanpham_json; ?>
    };

    const randomColors = generateRandomColors(financialData.productDistribution.length);

    // Biểu đồ 1: Doanh thu theo tháng
    const revenueCtx = document.getElementById('monthlyRevenueChart').getContext('2d');
    new Chart(revenueCtx, {
        type: 'bar',
        data: {
            labels: financialData.revenueByMonth.map(item => item.month),
            datasets: [{
                label: 'Doanh Thu (VNĐ)',
                data: financialData.revenueByMonth.map(item => item.revenue),
                backgroundColor: 'rgba(52, 152, 219, 0.7)',
                borderColor: '#3498db',
                borderWidth: 1
            }]
        },
        options: { responsive: true, scales: { y: { beginAtZero: true } } }
    });

    // Biểu đồ 2: Tỷ lệ sản phẩm bán chạy
    const productPieCtx = document.getElementById('productPieChart').getContext('2d');
    new Chart(productPieCtx, {
        type: 'pie',
        data: {
            labels: financialData.productDistribution.map(item => item.name),
            datasets: [{
                data: financialData.productDistribution.map(item => item.sold),
                backgroundColor: randomColors
            }]
        },
        options: { responsive: true, plugins: { legend: { display: true, position: 'bottom' } } }
    });

    // Biểu đồ 3: Tổng doanh thu theo khách hàng
    const ordersByCustomerCtx = document.getElementById('ordersByCustomerChart').getContext('2d');
    new Chart(ordersByCustomerCtx, {
        type: 'bar',
        data: {
            labels: financialData.ordersByCustomer.map(item => item.name),
            datasets: [{
                label: 'Tổng Doanh Thu (VNĐ)',
                data: financialData.ordersByCustomer.map(item => item.total_revenue),
                backgroundColor: 'rgba(41, 128, 185, 0.7)',
                borderColor: '#2980b9',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            indexAxis: 'y',
            scales: { x: { beginAtZero: true } }
        }
    });

    // Biểu đồ 4: Doanh thu theo sản phẩm
    const revenueByProductCtx = document.getElementById('revenueByProductChart').getContext('2d');
    new Chart(revenueByProductCtx, {
        type: 'line',
        data: {
            labels: financialData.revenueByProduct.map(item => item.product),
            datasets: [{
                label: 'Doanh Thu (VNĐ)',
                data: financialData.revenueByProduct.map(item => item.revenue),
                borderColor: '#e74c3c',
                backgroundColor: 'rgba(231, 76, 60, 0.2)',
                fill: true
            }]
        },
        options: {
            responsive: true,
            scales: { y: { beginAtZero: true } }
        }
    });
</script>



    </body>
    </html>
</div>
