<?php
    function thongke(){
        $sql = "SELECT DATE_FORMAT(ngaydathang, '%Y-%m') AS thang, SUM(tongdonhang) AS tong_doanh_thu FROM bill GROUP BY thang";
        $sp = pdo_query($sql);
    return $sp;
}
    
?>