<?php
function timdonhang($madh)
{
    $sql = 'SELECT
    b.madh,
    b.iduser,
    b.ngaydathang,
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
    b.madh ="'.$madh.'"';
    $tdh = pdo_query($sql);
    return $tdh;
}
?>