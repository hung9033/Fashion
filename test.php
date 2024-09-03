<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>

    <style>
        /* CSS để ẩn chọn size và màu ban đầu */
        #sizeColorOptions {
            display: none;
        }
    </style>
</head>
<body>

<!-- Nút "Thêm vào giỏ hàng" -->
<button id="addToCartBtn" onclick="showOptions()">Thêm vào giỏ hàng</button>

<!-- Phần chọn size và màu -->
<div id="sizeColorOptions">
    <label for="size">Size:</label>
    <select id="size">
        <option value="small">Small</option>
        <option value="medium">Medium</option>
        <option value="large">Large</option>
    </select>
    <br>
    <label for="color">Màu sắc:</label>
    <select id="color">
        <option value="red">Đỏ</option>
        <option value="blue">Xanh</option>
        <option value="green">Xanh lá</option>
    </select>
</div>

<script>
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
</script>

</body>
</html>

