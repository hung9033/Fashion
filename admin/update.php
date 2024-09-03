<?php
    if(is_array($dm)){
        extract($dm);
    }
?>

<div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Cập nhập danh mục</h2>
                        <a href="#" class="btn">View All</a>
                    </div>
                <div class="input-add">
                    <form action="index.php?act=updatedm" method="post">
            
                        Mã loại: <br>
                        <input class="input_adddm" type="text" name="maloai" placeholder="Nhập mã loại hàng" value="<?php echo $id;?>"><br>
                    
                    
                        Tên loại: <br>
                            <input class="input_adddm" type="text" name="tenloai" placeholder="Nhập tên loại hàng" value="<?php echo $name;?>"><br>
                            <div style="color: red; margin-bottom: 10px;">
                                <?php 
                                    if(isset($thongbao) && ($thongbao != '')){
                                        echo $thongbao;
                                    }
                                ?>
                            </div>

                                  
                                    
                         <input type="hidden" name="id" value="<?php echo $id;?>">   
                        <input  type="submit" name="capnhat" value="Cập nhập">
                        <input type="reset" value="Nhập lại">
                        <a href="index.php?act=listdm"><input type="button" value="Danh sách"></a>
                    </form>
                </div>
    </div>  

    <?php

    include "boxright.php";
    ?>
