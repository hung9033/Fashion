
    function showOptions() {
        // Lấy phần tử div chứa chọn size và màu
        var sizeColorOptions = document.getElementById("sizeColorOptions");

        // Kiểm tra trạng thái hiển thị
        if (sizeColorOptions.style.display === "none") {
            // Nếu đang ẩn, hiển thị
            sizeColorOptions.style.display = "block";
        } else {
            // Nếu đang hiển thị, ẩn đi
            sizeColorOptions.style.display = "none";
        }
    }
