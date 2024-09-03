<?php

// function add_bienthe($lastProductId, $sizeId, $colorId, $quantity){
//     $sql = "INSERT INTO productvariation (idsp, idsize, idmau, soluong) VALUES ($lastProductId, $sizeId, $colorId, $quantity)";
//     pdo_execute($sql);
// }


// function insert_spp($productName, $productPrice, $productImage, $productDescription, $categoryId){
//     $sql = "INSERT INTO product (name, price, img, mota, iddm) VALUES ('$productName', $productPrice, '$productImage', '$productDescription', $categoryId)";

//     pdo_execute($sql);
// }

// function load_all_size(){
//     $sql =" SELECT * FROM size order by id desc ";
//     $listdanhmuc = pdo_query($sql);
//  return $listdanhmuc;
//  }

// function load_all_color(){
//     $sql =" SELECT * FROM color order by id desc ";
//     $listdanhmuc = pdo_query($sql);
//  return $listdanhmuc;
//  }






// Hàm để lấy thông tin về kích thước từ bảng 'size'
function getSizes() {
   
    $sql = "SELECT * FROM size size order by id desc";
    $listdanhmuc = pdo_query($sql);
  return $listdanhmuc;

    
}

// Hàm để lấy thông tin về màu sắc từ bảng 'color'
function getColors() {
    $sql =" SELECT * FROM color order by id desc ";
    $listdanhmuc = pdo_query($sql);
  return $listdanhmuc;
}


// function addProductWithVariation($productName, $productPrice, $productImage, $productDescription, $categoryId, $sizeId, $colorId, $quantity) {
//     $sqlProduct = "INSERT INTO product (name, price, img, mota, iddm) VALUES ('$productName', $productPrice, '$productImage', '$productDescription', $categoryId)";
//     pdo_execute($sqlProduct);

//     $productId = pdo_execute_return_lastInsertId($sqlProduct);

//     $sqlVariation = "INSERT INTO productvariation (idsp, idsize, idmau, soluong) VALUES ($productId, $sizeId, $colorId, $quantity)";
//     pdo_execute($sqlVariation);
// }

// Hàm để thêm sản phẩm và biến thể vào cơ sở dữ liệu
function addProductWithVariation($productName, $price, $img, $mota, $iddm, $sizeId, $colorId, $quantity) {
  

  // Thêm sản phẩm vào bảng 'product'
  $sqlProduct = "INSERT INTO `product` (`name`, `price`, `img`, `mota`, `iddm`) VALUES ('$productName', $price, '$img', '$mota', $iddm)";
  $productId = pdo_execute_return_lastInsertId($sqlProduct);

  // Lấy ID của sản phẩm vừa thêm vào
  

  // Lấy ID của kích thước từ tên kích thước
  $sqlSize = "SELECT `id` FROM `size` WHERE `size`='$sizeId'";
  pdo_query($sqlSize);

  // Lấy ID của màu sắc từ tên màu sắc
  $sqlColor = "SELECT `id` FROM `color` WHERE `color`='$colorId'";
  pdo_query($sqlColor);

  
  // Thêm biến thể vào bảng 'productvariation'
  $sqlVariation = "INSERT INTO `productvariation` (`idsp`, `idsize`, `idmau`, `soluong`) VALUES ($productId, $sizeId, $colorId, $quantity)";
  pdo_execute($sqlVariation);

  // if ($sizeId) {
  //   // Thêm biến thể vào bảng 'productvariation' với kích thước
  //   $sqlVariationSize = "INSERT INTO `productvariation` (`idsp`, `idsize`, `soluong`) VALUES ($productId, $sizeId, $quantity)";
  //   pdo_execute($sqlVariationSize);
  // }

  // // Kiểm tra xem giá trị của colorId có tồn tại không
  // if ($colorId) {
  //   // Thêm biến thể vào bảng 'productvariation' với màu sắc
  //   $sqlVariationColor = "INSERT INTO `productvariation` (`idsp`, `idmau`, `soluong`) VALUES ($productId, $colorId, $quantity)";
  //   pdo_execute($sqlVariationColor);
  // }
}


?>

