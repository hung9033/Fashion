<?php
function load_one_bl($idpro){
    $sql="SELECT comment.noidung, comment.ngaybinhluan, account.user FROM comment
    LEFT JOIN account ON comment.iduser = account.id
    LEFT JOIN product ON comment.idpro = product.id
    WHERE product.id = $idpro ";
    $result= pdo_query($sql);
    return $result;
}

function insert_binhluan($idpro, $noidung,$iduser){
    $date = date('Y-m-d');
    $sql = "
        INSERT INTO `comment`(`noidung`, `iduser`, `idpro`, `ngaybinhluan`) 
        VALUES ('$noidung','$iduser','$idpro','$date');
    ";
    //echo $sql;
    //die;
    pdo_execute($sql);
}
function loadallCmt(){
    $sql ="SELECT
    comment.id as comment_id,
    comment.noidung,
    comment.ngaybinhluan,
    account.name as account_name,
    product.name as product_name,  -- Replace with actual fields from the product table
    product.id   -- Replace with actual fields from the product table
FROM
    comment
LEFT JOIN
    account ON comment.iduser = account.id
LEFT JOIN
    product ON comment.idpro = product.id
ORDER BY
    comment.id; ";
    $result= pdo_query($sql);
    return $result;
}
function xoa_binhluan(){
    $sql = "DELETE from comment where id=".$_GET['id'];
    pdo_execute($sql);
}
function dem_cmt(){
    $sql = "SELECT COUNT(*) AS total_cmt FROM comment";
    $sp = pdo_query($sql);
    return $sp;
}
?>