// Lắng nghe sự kiện khi có radio button được chọn
document.addEventListener("DOMContentLoaded", function () {
  var radios = document.querySelectorAll(
    'input[type=radio][name="phuongthucthanhtoan"]'
  );
  // Gán sự kiện cho từng radio button
  radios.forEach(function (radio) {
    radio.addEventListener("change", function () {
      // Nếu radio button này đã được chọn, hủy chọn cho radio button khác
      if (this.checked) {
        radios.forEach(function (r) {
          if (r !== radio) {
            r.checked = false;
          }
        });
      }
    });
  });
});
// Lắng nghe sự kiện khi có radio button được chọn
// Lắng nghe sự kiện khi có radio button được chọn
document.addEventListener("DOMContentLoaded", function () {
  var tienmatRadio = document.getElementById("tienmat");
  var chuyenkhoanRadio = document.getElementById("chuyenkhoan");
  var hdchuyenkhoanDiv = document.querySelector(".hdchuyenkhoan");

  // Hiển thị hoặc ẩn phần hướng dẫn chuyển khoản khi thay đổi lựa chọn radio button
  tienmatRadio.addEventListener("change", function () {
    if (this.checked) {
      hdchuyenkhoanDiv.style.display = "none";
    }
  });

  chuyenkhoanRadio.addEventListener("change", function () {
    if (this.checked) {
      hdchuyenkhoanDiv.style.display = "grid";
    }
  });
});

document.querySelector(".dathang").addEventListener("click", function () {
  var name = document.getElementById("Name").value.trim();
  var address = document.getElementById("address").value.trim();
  var sdt = document.getElementById("sdt").value.trim();
  var email = document.getElementById("email").value.trim();

  if (name === "") {
    alert("Vui lòng nhập Họ và tên.");
    return;
  }

  if (address === "") {
    alert("Vui lòng nhập Địa chỉ.");
    return;
  }

  if (sdt === "") {
    alert("Vui lòng nhập Số điện thoại.");
    return;
  }

  var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (!emailPattern.test(email)) {
    alert("Vui lòng nhập đúng định dạng Email.");
    return;
  }

  var paymentMethod = document.querySelector(
    'input[name="phuongthucthanhtoan"]:checked'
  );
  if (!paymentMethod) {
    alert("Vui lòng chọn phương thức thanh toán.");
    return;
  }

  window.location.href = "./hoanthanhthanhtoan.html";
});
