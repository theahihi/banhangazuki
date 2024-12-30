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
    height: 50px; /* Chiếm lớn nhất */
}



/* Biểu đồ tỷ lệ sản phẩm bán chạy */
#productPieChart {
    grid-area: productPieChart;
    height: 250px;
}


</style>

    </head>
    <body>
        <div class="container">
            <h1>Báo Cáo Bán Hàng</h1>
            <div class="chart-wrapper">
                <!-- Biểu đồ Doanh thu theo sản phẩm -->
                <div class="chart-container">
                    <h3>Doanh Thu Theo Sản Phẩm</h3>
                    <canvas id="revenueByProductChart"></canvas>
                </div>

                <!-- Biểu đồ Tỷ lệ sản phẩm bán chạy -->
                <div class="chart-container">
                    <h3>Tỷ Lệ Sản Phẩm Bán Chạy</h3>
                    <canvas id="productPieChart"></canvas>
                </div>
            </div>
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

    // Hàm rút ngắn tên sản phẩm
    function shortenLabel(label, maxLength = 15) {
        return label.length > maxLength ? label.slice(0, maxLength) + '...' : label;
    }

    // Dữ liệu từ PHP
    const financialData = {
        productDistribution: <?php echo $sanphambanchay_json; ?>,
        revenueByProduct: <?php echo $doanhthutheosanpham_json; ?>
    };

    const randomColors = generateRandomColors(financialData.productDistribution.length);

    // Tạo mảng tên đầy đủ và tên rút gọn cho sản phẩm
    const fullProductNames = financialData.revenueByProduct.map(item => item.product);
    const shortProductNames = fullProductNames.map(name => shortenLabel(name));

    // Biểu đồ Doanh thu theo sản phẩm
    const revenueByProductCtx = document.getElementById('revenueByProductChart').getContext('2d');
    new Chart(revenueByProductCtx, {
        type: 'line',
        data: {
            labels: shortProductNames,
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
            scales: { y: { beginAtZero: true } },
            plugins: {
                tooltip: {
                    callbacks: {
                        title: function(tooltipItems) {
                            const index = tooltipItems[0].dataIndex;
                            return fullProductNames[index]; // Hiển thị tên đầy đủ khi hover
                        }
                    }
                }
            }
        }
    });

    // Biểu đồ Tỷ lệ sản phẩm bán chạy
    const productPieCtx = document.getElementById('productPieChart').getContext('2d');
    new Chart(productPieCtx, {
        type: 'pie',
        data: {
            labels: financialData.productDistribution.map(item => shortenLabel(item.name)),
            datasets: [{
                data: financialData.productDistribution.map(item => item.sold),
                backgroundColor: randomColors
            }]
        },
        options: {
            responsive: true,
            plugins: {
                tooltip: {
                    callbacks: {
                        title: function(tooltipItems) {
                            const index = tooltipItems[0].dataIndex;
                            return financialData.productDistribution[index].name; // Hiển thị tên đầy đủ khi hover
                        }
                    }
                },
                legend: { display: true, position: 'bottom' }
            }
        }
    });
</script>

    </body>
    </html>
</div>
