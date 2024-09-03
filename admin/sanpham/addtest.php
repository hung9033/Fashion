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
        <select name="" >
                               <?php foreach ($dsdm as $value){
                                extract($value);
                                echo'<option value="'.$id.'">'.$name.'</option>';
                                    
                                } ?>
                        </select> <br><br>
        </div>
        <button type="button" onclick="addVariation()">Add Variation</button>

        <!-- Submit button -->
        <button type="submit">Add Product</button>
    </form>

    
</body>

</html>
