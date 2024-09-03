<?php

//lOAD SẢN PHẨM MỚI
//    function load_spnew_home1(){
//     $sql = "SELECT * FROM product WHERE 1 order by id DESC limit 0,4";
//     $listsanpham = pdo_query($sql);
//     return $listsanpham;
// }
// function load_spnew_home2(){
//     $sql = "SELECT * FROM product WHERE 1 order by id DESC limit 4,8";
//     $listsanpham = pdo_query($sql);
//     return $listsanpham;
// }

// //LOAD SẢN PHẨM THEO LƯỢT XEM 
// function load_spview_top1(){
//     $sql = "SELECT * FROM product WHERE 1 order by view  DESC limit 0,4";
//     $listsanpham = pdo_query($sql);
//     return $listsanpham;
// } 
// function load_spview_top2(){
//     $sql = "SELECT * FROM product WHERE 1 order by view  DESC limit 4,8";
//     $listsanpham = pdo_query($sql);
//     return $listsanpham;
// } 
function test_spnew1(){
    $sql="       SELECT
    p.id AS product_id,
    p.name AS product_name,
    p.price,
    p.img AS product_image,
    p.mota AS product_description,
    p.view AS product_views,
    GROUP_CONCAT(DISTINCT s.id, ':', s.size) AS size_list,
    GROUP_CONCAT(DISTINCT c.id, ':', c.color) AS color_list,
    GROUP_CONCAT(DISTINCT CONCAT_WS(':', pv.idsize, pv.idmau, pv.soluong)) AS variation_list,
    MAX(pv.idbt) AS max_idbt
FROM
    product AS p
JOIN
    productvariation AS pv ON p.id = pv.idsp
JOIN
    size AS s ON pv.idsize = s.id
JOIN
    color AS c ON pv.idmau = c.id
WHERE
    pv.soluong > 0
GROUP BY
    p.id
ORDER BY
    pv.idbt DESC
LIMIT 0,4";
    $sp = pdo_query($sql);
    return $sp;
}

function test_spnew2(){
    $sql="       SELECT
    p.id AS product_id,
    p.name AS product_name,
    p.price,
    p.img AS product_image,
    p.mota AS product_description,
    p.view AS product_views,
    GROUP_CONCAT(DISTINCT s.id, ':', s.size) AS size_list,
    GROUP_CONCAT(DISTINCT c.id, ':', c.color) AS color_list,
    GROUP_CONCAT(DISTINCT CONCAT_WS(':', pv.idsize, pv.idmau, pv.soluong)) AS variation_list
FROM
    product AS p
JOIN
    productvariation AS pv ON p.id = pv.idsp
JOIN
    size AS s ON pv.idsize = s.id
JOIN
    color AS c ON pv.idmau = c.id
WHERE
    pv.soluong > 0
GROUP BY
    p.id
ORDER BY
    pv.idbt DESC
LIMIT 4,8";
    $sp = pdo_query($sql);
    return $sp;
}

function load_spview_top1(){
    $sql="       SELECT
    p.id AS product_id,
    p.name AS product_name,
    p.price,
    p.img AS product_image,
    p.mota AS product_description,
    p.view AS product_views,
    GROUP_CONCAT(DISTINCT s.id, ':', s.size) AS size_list,
    GROUP_CONCAT(DISTINCT c.id, ':', c.color) AS color_list,
    GROUP_CONCAT(DISTINCT CONCAT_WS(':', pv.idbt, pv.idsize, pv.idmau, pv.soluong)) AS variation_list
FROM
    product AS p
JOIN
    productvariation AS pv ON p.id = pv.idsp
JOIN
    size AS s ON pv.idsize = s.id
JOIN
    color AS c ON pv.idmau = c.id
WHERE
-- kiểm tra sô lương nêsu > sẽ hiển thị sp
    pv.soluong > 0
GROUP BY
    p.id
ORDER BY
    p.view DESC
LIMIT 0,4";
    $sp = pdo_query($sql);
    return $sp;
}
function load_spview_top2(){
    $sql="       SELECT
    p.id AS product_id,
    p.name AS product_name,
    p.price,
    p.img AS product_image,
    p.mota AS product_description,
    p.view AS product_views,
    GROUP_CONCAT(DISTINCT s.id, ':', s.size) AS size_list,
    GROUP_CONCAT(DISTINCT c.id, ':', c.color) AS color_list,
    GROUP_CONCAT(DISTINCT CONCAT_WS(':', pv.idsize, pv.idmau, pv.soluong)) AS variation_list
FROM
    product AS p
JOIN
    productvariation AS pv ON p.id = pv.idsp
JOIN
    size AS s ON pv.idsize = s.id
JOIN
    color AS c ON pv.idmau = c.id
WHERE
    pv.soluong > 0
GROUP BY
    p.id
ORDER BY
    p.view DESC
LIMIT 4,8";
    $sp = pdo_query($sql);
    return $sp;
}
//TÌM KIẾM SẢN PHẨM
function search_sp($kyw,$iddm){
    $sql="SELECT * FROM product where 1";
    if($kyw!=""){
        $sql.=" and name like '%".$kyw."%'";
    }
    if($iddm > 0){
        $sql.=" and iddm = '".$iddm."'";
    }
    $sql.=" order by id desc ";
    $listsp = pdo_query($sql);
    return $listsp;
}
function loadsp_dm($iddm){
    
        $sql="       SELECT
        p.id AS product_id,
        p.name AS product_name,
        p.price,
        p.img AS product_image,
        p.mota AS product_description,
        p.view AS product_views,
        GROUP_CONCAT(DISTINCT s.id, ':', s.size) AS size_list,
        GROUP_CONCAT(DISTINCT c.id, ':', c.color) AS color_list,
        GROUP_CONCAT(DISTINCT CONCAT_WS(':', pv.idsize, pv.idmau, pv.soluong)) AS variation_list
    FROM
        product AS p
    JOIN
        productvariation AS pv ON p.id = pv.idsp
    JOIN
        size AS s ON pv.idsize = s.id
    JOIN
        color AS c ON pv.idmau = c.id
    WHERE
        pv.soluong > 0
    GROUP BY
        p.id
    ORDER BY
        p.iddm = '.$iddm.' DESC
    LIMIT 4,8";
        $sp = pdo_query($sql);
        return $sp;
    
}

//load all sản phẩm
function loadall_sp(){
    $sql1="SELECT *FROM product order by id";
    $sp = pdo_query($sql1);
    return $sp;

    $sql="SELECT *FROM productvariation order by idbt";
    $sp = pdo_query($sql);
    return $sp;
 }
 function loadall_sptest(){
    $sql="SELECT *FROM product order by id";
    $sp = pdo_query($sql);
    return $sp;
 }
 

 function loadall_sp_bienthe(){
    $sql="SELECT *FROM productvariation order by idbt";
    $sp = pdo_query($sql);
    return $sp;
 }

 
//THÊM SP
 function insert_sp( $ten, $gia, $img,$mota,$view,$iddm){
    $sql = "INSERT INTO product ( name, price, img, mota, view, iddm) 
    VALUES ('$ten','$gia','$img','$mota', '$view', '$iddm')";
    pdo_execute($sql);
 }

//DELETE SP
// function xoa_sp(){
    
//         $sql = "DELETE from product where id=".$_GET['id'];
//         pdo_execute($sql);
    
// }
function deleteProduct() {
    // Xóa biến thể của sản phẩm từ bảng 'productvariation'
    $sqlDeleteVariation = "DELETE FROM `productvariation` WHERE `idbt` =".$_GET['idbt'];
    pdo_execute($sqlDeleteVariation);

    // Xóa sản phẩm từ bảng 'product'
    $sqlDeleteProduct = "DELETE FROM `product` WHERE `id` =".$_GET['id'];
    pdo_execute($sqlDeleteProduct);
}




//SỬA SẢN PHẨM
function update_sp($id,$iddm,$ten, $gia,$mota,$view,$img){
    if($img!= "")
    $sql= "UPDATE product set  iddm='".$iddm."',name='".$ten."',price='".$gia."',mota='".$mota."', view='".$view."' , img='".$img."' WHERE id=".$id;
    
else 
    $sql= "UPDATE product set  iddm='".$iddm."',name='".$ten."',price='".$gia."',mota='".$mota."', view='".$view."'  where id=".$id;
    pdo_execute($sql);

}

// chi tiêt sản phẩm
//HIỂN THỊ THÔNG TIN SẢN PHẨM
function loadone_sanpham($id){
    $sql = "SELECT * FROM product where id =".$id;
    $sp=pdo_query_one($sql);
    return $sp;
}
function load_sanpham_cungloai($id, $iddm){
    $sql = "select * from product where iddm = $iddm and id <> $id";
    $sp = pdo_query($sql);
    return $sp;
}

////tesst///
function testt($id){
    $sql="       SELECT 
    product.id AS product_id,
    product.name AS product_name,
    product.price,
    product.img AS product_image,
    product.mota AS product_description,
    product.view AS product_views,
    size.size,
    color.color,
    variationimage.img AS variation_image
FROM 
    product
JOIN 
    productvariation ON product.id = productvariation.idsp
JOIN 
    size ON productvariation.idsize = size.id
JOIN 
    color ON productvariation.idmau = color.id
LEFT JOIN 
    variationimage ON product.id = variationimage.idsp AND color.id = variationimage.idmau
WHERE 
    product.id =".$id;


    $sp = pdo_query($sql);
    return $sp;
}
///đếm sản phẩm
function dem_sp(){
    $sql = "SELECT COUNT(*) AS total_sp FROM product";
    $sp = pdo_query($sql);
    return $sp;
}

?>