<?php
// Database connection
try {
    $pdo = new PDO("mysql:host=:3307; dbname=da1", "root" , " " );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process form data

    // Retrieve product details from the form
    $productName = htmlspecialchars($_POST['product_name']);
    $productPrice = floatval($_POST['product_price']);
    $productImage = htmlspecialchars($_POST['product_image']);
    $productDescription = htmlspecialchars($_POST['product_description']);
    $categoryId = intval($_POST['category_id']);

    // Insert product into the 'product' table
    $insertProductQuery = "INSERT INTO product (name, price, img, mota, iddm) VALUES ('$productName', $productPrice, '$productImage', '$productDescription', $categoryId)";
    $pdo->exec($insertProductQuery);

    // Get the ID of the last inserted product
    $lastProductId = $pdo->lastInsertId();

    // Process variations
    foreach ($_POST['variations']['size'] as $key => $sizeId) {
        $colorId = intval($_POST['variations']['color'][$key]);
        $quantity = intval($_POST['variations']['quantity'][$key]);

        // Insert variation into 'productvariation' table
        $insertVariationQuery = "INSERT INTO productvariation (idsp, idsize, idmau, soluong) VALUES ($lastProductId, $sizeId, $colorId, $quantity)";
        $pdo->exec($insertVariationQuery);
    }

    // Redirect to a success page or do further processing
}

// Fetch sizes and colors from the database
$sizeQuery = "SELECT * FROM size";
$colorQuery = "SELECT * FROM color";

$sizeResult = $pdo->query($sizeQuery);
$colorResult = $pdo->query($colorQuery);

$sizes = $sizeResult->fetchAll(PDO::FETCH_ASSOC);
$colors = $colorResult->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
</head>

<body>
    <h2>Add Product</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <!-- Product details -->
        <label for="product_name">Product Name:</label>
        <input type="text" name="product_name" required><br>

        <label for="product_price">Product Price:</label>
        <input type="text" name="product_price" required><br>

        <label for="product_image">Product Image:</label>
        <input type="text" name="product_image" required><br>

        <label for="product_description">Product Description:</label>
        <textarea name="product_description" required></textarea><br>

        <label for="category_id">Category ID:</label>
        <input type="text" name="category_id" required><br>

        <!-- Product variations -->
        <h3>Variations</h3>
        <div id="variations-container">
            <!-- Variation fields will be added dynamically using JavaScript -->
        </div>
        <button type="button" onclick="addVariation()">Add Variation</button>

        <!-- Submit button -->
        <button type="submit">Add Product</button>
    </form>

    <script>
        function addVariation() {
            // Add variation fields dynamically using JavaScript
            var container = document.getElementById('variations-container');
            var variationFields = '<div>';
            variationFields += '<label for="size">Size:</label>';
            variationFields += '<select name="variations[size][]">';
            <?php
            // Populate size dropdown with values from the database
            foreach ($sizes as $size) {
                echo "variationFields += '<option value=\"{$size['id']}\">{$size['size']}</option>';";
            }
            ?>
            variationFields += '</select>';
            variationFields += '<label for="color">Color:</label>';
            variationFields += '<select name="variations[color][]">';
            <?php
            // Populate color dropdown with values from the database
            foreach ($colors as $color) {
                echo "variationFields += '<option value=\"{$color['id']}\">{$color['color']}</option>';";
            }
            ?>
            variationFields += '</select>';
            variationFields += '<label for="quantity">Quantity:</label>';
            variationFields += '<input type="text" name="variations[quantity][]">';
            variationFields += '<button type="button" onclick="removeVariation(this)">Remove</button></div>';
            container.innerHTML += variationFields;
        }

        function removeVariation(button) {
            // Remove the variation fields when the "Remove" button is clicked
            var variationDiv = button.parentNode;
            variationDiv.parentNode.removeChild(variationDiv);
        }
    </script>
</body>

</html>
