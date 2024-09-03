<?php
function taodonhang($madh,$tongdonhang,$pttt,$iduser,$name,$address,$email,$tel,$ngaydathang){
   
        $sql = "INSERT INTO bill ( madh, tongdonhang, pttt, iduser, name, address, email,tel,ngaydathang) 
        VALUES ('$madh','$tongdonhang','$pttt', '$iduser','$name', '$address', '$email' , '$tel',NOW())";
       $lastid=pdo_execute_return_lastInsertId($sql);
       
       return $lastid;
    
}                  
// function addtocart($iddh, $idpro, $tensp, $soluong ,$gia,  $color, $size, $dongia, $img){
//     $sql = "INSERT INTO cart ( iddh, idpro,soluong, gia, dongia,tensp, color,size, img) 
//         VALUES ('$iddh', '$idpro','$soluong', '$gia','$dongia','$tensp', '$color','$size', '$img')";
//        pdo_execute($sql);
// }

function addtocart($iddh, $idpro, $tensp, $img, $gia, $soluong, $dongia, $color, $size) {
    /////////////////kiểm tra số lượng
    if ($soluong <= 0) {
       
        return;
    }
    // Chèn dữ liệu vào cart
    $sql = "INSERT INTO cart (iddh, idpro, tensp, img, gia, soluong, dongia, color, size) 
            VALUES ('$iddh', '$idpro', '$tensp', '$img', '$gia', '$soluong', '$dongia', '$color', '$size')";
            pdo_execute($sql);
    ////////////////////UPDATE SO lUONG khi đặt hàng///////////////////////
    $sql = "UPDATE productvariation SET soluong = soluong - '$soluong' WHERE idbt = '$idpro'";
    pdo_execute($sql);
}

function loadbcart($iddh){
    $sql="SELECT * FROM `cart` WHERE iddh=".$iddh;
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function loadbbill($iddh){
    $sql="SELECT * FROM `bill` WHERE id=".$iddh;
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
// ============LOAD ALL DON HANG ADMIN ==================
function loadall_donhang(){
    $sql="SELECT c.*, s.status
    FROM cart c
    JOIN status s ON c.idstt = s.id
    ORDER BY c.idstt ASC";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}   

//load ct 1 đơn hàng
 function  load_ctdh( $iddh){
    $sql="SELECT
    cart.*,
    bill.*,
    status.status
FROM
    cart
JOIN
    bill ON cart.iddh = bill.id
LEFT JOIN
    status ON cart.idstt = status.id
WHERE
    cart.iddh =".$iddh;

    $listsanpham = pdo_query($sql);
    return $listsanpham;
 }

 
function loadall_stt(){
    $sql="SELECT * FROM `status` WHERE id";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
//CẬP NHẬT TRẠNG THAI ĐƠN HANG


function update_trangthai($iddh,$idstt){
    $sql="UPDATE cart SET idstt = '".$idstt."' WHERE iddh ='".$iddh."'";
    pdo_execute($sql);
 }
// function updateSoluong($idpro,$soluong){
//     $sql="UPDATE productvariation SET soluong = soluong - $soluong WHERE idpro = ".$idpro;
//     pdo_execute($sql);
// }

//  model/cart 
function lsdonhang($iduser)
{
    $sql = 'SELECT
    b.madh,
    b.iduser,
    b.ngaydathang,
    b.address,
    b.tel,
    c.tensp,
    c.color,
    c.size,
    c.img,
    c.soluong,
    c.dongia,
    c.idstt
FROM
    bill as b
JOIN 
    cart as c
ON
    c.iddh = b.id
WHERE
    b.iduser = ' . $iduser . '
ORDER BY
    b.ngaydathang DESC';
    
    $lsdh = pdo_query($sql);
    return $lsdh;
}

function tong_doanhthu(){
    $sql="SELECT SUM(dongia) AS tong_doanh_thu FROM cart";
    $lsdh = pdo_query($sql);
    return $lsdh;
}


?>