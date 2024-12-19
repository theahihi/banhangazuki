function previewImage(input, previewId) {
  const file = input.files[0];
  const previewImage = document.getElementById(previewId);

  // Define the maximum allowed file size (2MB)
  const maxSizeMB = 2;

  // Valid file formats
  const validFormats = ["image/jpeg", "image/png", "image/gif", "image/webp"];

  if (file) {
    // Check if the file is too large
    if (file.size > maxSizeMB * 1024 * 1024) {
      alert(`File quá lớn. Vui lòng chọn file nhỏ hơn ${maxSizeMB}MB.`);
      input.value = ""; // Clear the input field
      previewImage.src = ""; // Clear the preview image
      previewImage.style.display = "none"; // Hide the preview image
      return;
    }

    // Check if the file format is valid
    if (!validFormats.includes(file.type)) {
      alert(
        `Định dạng file không hợp lệ. Vui lòng chọn ảnh JPEG, PNG, GIF hoặc WebP.`
      );
      input.value = ""; // Clear the input field
      previewImage.src = ""; // Clear the preview image
      previewImage.style.display = "none"; // Hide the preview image
      return;
    }

    // If file is valid, preview the image
    const reader = new FileReader();
    reader.onload = function (e) {
      previewImage.src = e.target.result;
      previewImage.style.display = "block"; // Show the preview image
    };
    reader.readAsDataURL(file); // Convert image file to base64 and preview it
  }
}

function resetImages() {
  document.getElementById("main-image").value = "";
  document.getElementById("detail-image-1").value = "";
  document.getElementById("detail-image-2").value = "";
  document.getElementById("detail-image-3").value = "";
  document.getElementById("detail-image-4").value = "";
  document.getElementById("detail-image-5").value = "";

  document.getElementById("main-image-preview").src = "";
  document.getElementById("main-image-preview").style.display = "none";
  document.getElementById("detail-image-1-preview").src = "";
  document.getElementById("detail-image-1-preview").style.display = "none";
  document.getElementById("detail-image-2-preview").src = "";
  document.getElementById("detail-image-2-preview").style.display = "none";
  document.getElementById("detail-image-3-preview").src = "";
  document.getElementById("detail-image-3-preview").style.display = "none";
  document.getElementById("detail-image-4-preview").src = "";
  document.getElementById("detail-image-4-preview").style.display = "none";
  document.getElementById("detail-image-5-preview").src = "";
  document.getElementById("detail-image-5-preview").style.display = "none";
}

document.addEventListener("DOMContentLoaded", function () {
  const preventNegativeInput = (event) => {
    if (event.key === "-" || event.key === "e") {
      event.preventDefault();
    }
  };

  // Lấy các input cần chặn
  const priceInput = document.getElementById("price");
  const quantityInput = document.getElementById("quantity");

  // Gắn sự kiện
  priceInput.addEventListener("keydown", preventNegativeInput);
  quantityInput.addEventListener("keydown", preventNegativeInput);
});
