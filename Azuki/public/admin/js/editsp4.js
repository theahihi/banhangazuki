document.addEventListener("DOMContentLoaded", function () {
  const fileInputs = document.querySelectorAll('input[type="file"]');

  fileInputs.forEach((input) => {
    input.addEventListener("change", function () {
      const file = this.files[0];
      const previewId =
        this.id
          .replace("main-image", "main-image-preview")
          .replace("detail-image-", "detail-image-") + "-preview";
      const previewImage = document.getElementById(previewId);
      const originalSrc = previewImage.getAttribute("data-original-src"); // Get the original image source

      // Check file size and type before previewing
      if (file) {
        const maxSizeMB = 2;
        const validFormats = [
          "image/jpeg",
          "image/png",
          "image/gif",
          "image/webp",
        ];

        if (file.size > maxSizeMB * 1024 * 1024) {
          alert(
            `File "${file.name}" vượt quá ${maxSizeMB}MB. Vui lòng chọn file nhỏ hơn.`
          );
          this.value = ""; // Clear the file input
          previewImage.src = originalSrc; // Restore original image if file is too large
          return;
        }

        if (!validFormats.includes(file.type)) {
          alert(
            `File "${file.name}" không phải là định dạng ảnh hợp lệ. Vui lòng chọn file JPG, PNG, GIF hoặc WebP.`
          );
          this.value = ""; // Clear the file input
          previewImage.src = originalSrc; // Restore original image if format is invalid
          return;
        }

        // If the file is valid, proceed to preview the image
        const reader = new FileReader();
        reader.onload = function (e) {
          previewImage.src = e.target.result;
        };
        reader.readAsDataURL(file); // Convert image file to base64 and preview it
      }
    });
  });
});

function previewImage(input, previewId) {
  const file = input.files[0];
  const previewImage = document.getElementById(previewId);

  // Save the original image src as a data attribute if it's not already saved
  if (!previewImage.hasAttribute("data-original-src")) {
    previewImage.setAttribute("data-original-src", previewImage.src);
  }

  // If no file is selected, restore the original image
  if (!file) {
    previewImage.src = previewImage.getAttribute("data-original-src");
    return;
  }

  // Validate the file before previewing
  const maxSizeMB = 2;
  const validFormats = ["image/jpeg", "image/png", "image/gif", "image/webp"];

  if (file.size > maxSizeMB * 1024 * 1024) {
    alert(
      `File "${file.name}" vượt quá ${maxSizeMB}MB. Vui lòng chọn file nhỏ hơn.`
    );
    input.value = ""; // Clear the file input
    previewImage.src = previewImage.getAttribute("data-original-src"); // Restore original image if file is too large
    return;
  }

  if (!validFormats.includes(file.type)) {
    alert(
      `File "${file.name}" không phải là định dạng ảnh hợp lệ. Vui lòng chọn file JPG, PNG, GIF hoặc WebP.`
    );
    input.value = ""; // Clear the file input
    previewImage.src = previewImage.getAttribute("data-original-src"); // Restore original image if format is invalid
    return;
  }

  // Proceed to preview the image if it's valid
  const reader = new FileReader();
  reader.onload = function (e) {
    previewImage.src = e.target.result;
  };
  reader.readAsDataURL(file); // Convert image file to base64 and preview it
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
