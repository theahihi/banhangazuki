document.querySelector("form").addEventListener("submit", function (e) {
  e.preventDefault(); // Ngăn gửi form mặc định

  // Lấy giá trị từ các trường input
  const password = document.querySelector('input[name="password"]').value;
  const confirmPassword = document.querySelector(
    'input[name="confirm_password"]'
  ).value;
  const phone = document.querySelector('input[name="phone"]').value;
  const email = document.querySelector('input[name="email"]').value;

  // Kiểm tra mật khẩu
  if (!isValidPassword(password)) {
    alert(
      "Mật khẩu không hợp lệ! Mật khẩu phải có ít nhất 8 ký tự, bao gồm chữ hoa, chữ thường, số và ký tự đặc biệt."
    );
    return;
  }

  // Kiểm tra mật khẩu khớp
  if (password !== confirmPassword) {
    alert("Mật khẩu và nhập lại mật khẩu không khớp!");
    return;
  }

  // Kiểm tra số điện thoại
  if (!isValidPhoneNumber(phone)) {
    alert("Số điện thoại không hợp lệ! Vui lòng nhập đúng định dạng.");
    return;
  }

  // Kiểm tra email
  if (!isValidEmail(email)) {
    alert("Email không hợp lệ! Vui lòng nhập đúng định dạng.");
    return;
  }
  this.submit(); // Gửi form nếu tất cả kiểm tra đều hợp lệ
});

// Hàm kiểm tra mật khẩu hợp lệ
function isValidPassword(password) {
  // Ít nhất 8 ký tự, bao gồm chữ hoa, chữ thường, số và ký tự đặc biệt
  const passwordRegex =
    /^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
  return passwordRegex.test(password);
}

// Hàm kiểm tra số điện thoại hợp lệ
function isValidPhoneNumber(phoneNumber) {
  // Số điện thoại Việt Nam hợp lệ (10 chữ số, bắt đầu bằng 03, 05, 07, 08, hoặc 09)
  const phoneRegex = /^(03|05|07|08|09)\d{8}$/;
  return phoneRegex.test(phoneNumber);
}

// Hàm kiểm tra email hợp lệ
function isValidEmail(email) {
  // Định dạng email cơ bản
  const emailRegex = /^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/;
  return emailRegex.test(email);
}
