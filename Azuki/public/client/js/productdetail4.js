document.addEventListener("DOMContentLoaded", function () {
  // Hiển thị đánh giá sao (phần tổng quan)
  const renderStars = (elementId) => {
    const ratingElement = document.getElementById(elementId);
    if (!ratingElement) return;

    const rating = parseFloat(ratingElement.getAttribute("data-rating")) || 0;
    const maxStars = 5;

    // Tạo các ngôi sao
    let starsHtml = "";
    for (let i = 1; i <= maxStars; i++) {
      starsHtml += i <= Math.floor(rating) ? "★" : "☆"; // Sao đã đánh giá là '★', chưa đánh giá là '☆'
    }

    // Hiển thị kết quả
    ratingElement.innerHTML = `${starsHtml} (${rating.toFixed(1)}/5)`;
  };

  renderStars("anhnoiRatingSummary");
  renderStars("anhnoiRatingSummarycmt");

  // Mở popup đánh giá
  const openPopup = () => {
    document.getElementById("review_form").style.display = "block";
    document.querySelector(".popup-overlay").style.display = "block";
  };

  // Đóng popup đánh giá
  const closePopup = () => {
    document.getElementById("review_form").style.display = "none";
    document.querySelector(".popup-overlay").style.display = "none";
  };

  // Thêm sự kiện cho nút "ĐÁNH GIÁ NGAY"
  const reviewButton = document.querySelector(".chondanhgia");
  if (reviewButton) {
    reviewButton.addEventListener("click", openPopup);
  }

  // Thêm sự kiện cho nút đóng
  const closeButton = document.querySelector(".close-btn");
  if (closeButton) {
    closeButton.addEventListener("click", closePopup);
  }

  // Xử lý chọn số sao
  let selectedRating = 0;
  const stars = document.querySelectorAll(".chon_sao .sao");
  stars.forEach((star, index) => {
    star.addEventListener("click", function () {
      // Xóa trạng thái active của tất cả sao
      stars.forEach((item) => item.classList.remove("active"));

      // Gắn trạng thái active cho sao được chọn
      this.classList.add("active");

      // Cập nhật số sao được chọn
      selectedRating = index + 1;

      // Gán giá trị cho input ẩn
      document.getElementById("ratingInput").value = selectedRating;
      console.log("Số sao được chọn:", selectedRating);
    });
  });

  // Xử lý tăng/giảm số lượng sản phẩm
  const quantityInput = document.getElementById("quantity");
  const maxQuantity = parseInt(quantityInput.getAttribute("max")) || 1;

  // Giảm số lượng
  window.minusQuantity = function () {
    let currentValue = parseInt(quantityInput.value) || 1;
    if (currentValue > 1) {
      quantityInput.value = currentValue - 1;
    }
  };

  // Tăng số lượng
  window.plusQuantity = function () {
    let currentValue = parseInt(quantityInput.value) || 1;
    if (currentValue < maxQuantity) {
      quantityInput.value = currentValue + 1;
    } else {
      alert("Bạn đã đạt số lượng tối đa cho sản phẩm này!");
    }
  };
});
