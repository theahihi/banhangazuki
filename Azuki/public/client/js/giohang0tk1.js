// Hàm giảm số lượng
function updateQuantity(masp, value) {
  if (value >= 1) {
    quantities[masp] = parseInt(value);
    document.getElementById("quantities_input").value =
      JSON.stringify(quantities);
  }
}

// Hàm giảm số lượng
function decreaseQuantity(index) {
  const input = document.getElementById(`sp${index}`);
  if (input.value > 1) {
    input.value = parseInt(input.value) - 1;
    updateQuantity(input.name.split("_")[1], input.value);

    // Cập nhật tổng giá tiền sản phẩm và tổng giỏ hàng
    updateTotalPrice(index, input.value);
    updateCartTotal();
  }
}

// Hàm tăng số lượng
function increaseQuantity(index) {
  const input = document.getElementById(`sp${index}`);
  const maxQuantity = parseInt(input.max); // Lấy giá trị tối đa từ thuộc tính max của input
  let currentQuantity = parseInt(input.value);

  if (currentQuantity < maxQuantity) {
    input.value = currentQuantity + 1;
    updateQuantity(input.name.split("_")[1], input.value);

    // Cập nhật tổng giá tiền sản phẩm và tổng giỏ hàng
    updateTotalPrice(index, input.value);
    updateCartTotal();
  } else {
    alert("Sản phẩm đã đạt tối đa số lượng!"); // Thông báo nếu số lượng tối đa đã đạt
  }
}

// Hàm cập nhật tổng giá tiền sản phẩm
function updateTotalPrice(index, quantity) {
  const unitPrice = parseInt(
    document.getElementById(`price${index}`).dataset.price
  ); // Giá đơn vị
  const totalPriceElement = document.getElementById(`total_price${index}`);

  const totalPrice = unitPrice * quantity;
  totalPriceElement.textContent = totalPrice.toLocaleString("vi-VN") + "₫";
}

// Hàm cập nhật tổng giá trị giỏ hàng
function updateCartTotal() {
  let total = 0;

  // Lấy tất cả các phần tử có id bắt đầu bằng "total_price"
  const totalPriceElements = document.querySelectorAll('[id^="total_price"]');

  // Duyệt qua từng phần tử và cộng dồn giá trị
  totalPriceElements.forEach((element) => {
    const priceText = element.textContent.replace(/[^\d]/g, ""); // Lấy số từ chuỗi
    const price = parseInt(priceText);
    total += price;
  });

  // Cập nhật Tạm tính
  const tempSubtotalElement = document.getElementById("tempSubtotal");
  const formattedSubtotal = total.toLocaleString("vi-VN") + "₫";
  tempSubtotalElement.textContent = formattedSubtotal;

  // Cập nhật Tổng tiền (ở đây có thể bao gồm thêm phí hoặc giảm giá nếu cần)
  const tempTotalElement = document.getElementById("tempTotal");
  const formattedTotal = total.toLocaleString("vi-VN") + "₫";
  tempTotalElement.textContent = formattedTotal;
}

// Hàm khởi tạo để tính tổng ngay khi trang tải xong
function initializeCart() {
  const productRows = document.querySelectorAll('[id^="sp"]'); // Tìm tất cả các sản phẩm
  productRows.forEach((input, index) => {
    const quantity = parseInt(input.value); // Lấy số lượng mặc định từ input
    updateTotalPrice(index + 1, quantity); // Cập nhật tổng tiền của từng sản phẩm
  });
  updateCartTotal(); // Cập nhật tổng tiền toàn bộ giỏ hàng
}

// Gọi hàm initializeCart khi trang tải xong
window.onload = initializeCart;
