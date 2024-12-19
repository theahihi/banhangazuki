// Mảng lưu số lượng sản phẩm
const quantities = {};

// Hàm cập nhật số lượng
function updateQuantity(masp, value) {
  if (value >= 1) {
    quantities[masp] = parseInt(value);
    document.getElementById("quantities_input").value =
      JSON.stringify(quantities); // Cập nhật giá trị hidden input
    console.log("Cập nhật số lượng:", quantities); // Kiểm tra dữ liệu trong console
  }
}

// Hàm giảm số lượng sản phẩm
function decreaseQuantity(index) {
  const input = document.getElementById(`sp${index}`);
  if (input.value > 1) {
    input.value = parseInt(input.value) - 1; // Giảm số lượng
    updateQuantity(input.name.split("_")[1], input.value); // Cập nhật mảng và hidden input

    // Cập nhật giá hiển thị
    updateTotalPrice(index, input.value);
    updateCartTotal();
  }
}

// Hàm tăng số lượng sản phẩm
// Hàm tăng số lượng sản phẩm
function increaseQuantity(index) {
  const input = document.getElementById(`sp${index}`);
  const maxQuantity = parseInt(input.max); // Lấy giá trị tối đa từ thuộc tính max của input
  let currentQuantity = parseInt(input.value);

  if (currentQuantity < maxQuantity) {
    input.value = currentQuantity + 1; // Tăng số lượng
    updateQuantity(input.name.split("_")[1], input.value); // Cập nhật mảng và hidden input

    // Cập nhật giá hiển thị
    updateTotalPrice(index, input.value);
    updateCartTotal();
  } else {
    alert("Sản phẩm đã đạt tối đa số lượng!"); // Thông báo nếu số lượng tối đa đã đạt
  }
}

// Hàm cập nhật tổng giá sản phẩm
function updateTotalPrice(index, quantity) {
  const unitPrice = parseInt(
    document.getElementById(`price${index}`).dataset.price
  ); // Giá đơn vị
  const totalPriceElement = document.getElementById(`total_price${index}`);

  const totalPrice = unitPrice * quantity;
  totalPriceElement.textContent = totalPrice.toLocaleString("vi-VN") + "₫"; // Hiển thị giá theo định dạng
}

// Hàm cập nhật tổng giá trị giỏ hàng
function updateCartTotal() {
  let total = 0;

  // Tìm tất cả các phần tử giá sản phẩm
  const totalPriceElements = document.querySelectorAll('[id^="total_price"]');

  // Cộng dồn giá trị từng sản phẩm
  totalPriceElements.forEach((element) => {
    const priceText = element.textContent.replace(/[^\d]/g, ""); // Lấy số từ chuỗi
    const price = parseInt(priceText);
    total += price;
  });

  // Cập nhật Tạm tính và Tổng tiền
  const tempSubtotalElement = document.getElementById("tempSubtotal");
  const formattedSubtotal = total.toLocaleString("vi-VN") + "₫";
  tempSubtotalElement.textContent = formattedSubtotal;

  const tempTotalElement = document.getElementById("tempTotal");
  const formattedTotal = total.toLocaleString("vi-VN") + "₫";
  tempTotalElement.textContent = formattedTotal;
}

// Khởi tạo giỏ hàng khi tải trang
function initializeCart() {
  const productRows = document.querySelectorAll('[id^="sp"]'); // Tìm tất cả sản phẩm
  productRows.forEach((input, index) => {
    const quantity = parseInt(input.value); // Lấy số lượng mặc định từ input
    const productId = input.name.split("_")[1]; // Lấy mã sản phẩm
    quantities[productId] = quantity; // Lưu vào mảng quantities
    updateTotalPrice(index + 1, quantity); // Cập nhật tổng tiền của sản phẩm
  });
  updateCartTotal(); // Cập nhật tổng tiền giỏ hàng
  document.getElementById("quantities_input").value =
    JSON.stringify(quantities); // Cập nhật hidden input
}

// Gọi hàm khi trang tải xong
window.onload = initializeCart;

// Xử lý cập nhật hidden input khi submit form
document.querySelector("form").addEventListener("submit", function () {
  document.getElementById("quantities_input").value =
    JSON.stringify(quantities);
});
