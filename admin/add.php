==========form add dm===============
<div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Thêm danh mục</h2>
                        <a href="#" class="btn">View All</a>
                    </div>
                <div class="input-add">
                    <form action="index.php?act=adddm" method="post">
            
                        Mã loại: <br>
                        <input class="input_adddm" type="text" name="maloai" placeholder="Nhập mã loại hàng"><br>
                    
                        Danh mục:
                        <select name="idg" >
                               <?php foreach ($dsgender as $value){
                                extract($value);
                                echo'<option value="'.$id.'">'.$name.'</option>';
                                    
                                } ?>
                        </select> <br><br>
                        Tên loại: <br>
                            <input class="input_adddm" type="text" name="tenloai" placeholder="Nhập tên loại hàng"><br>
                            <div style="color: red; margin-bottom: 10px;">
                                <?php 
                                    if(isset($thongbao) && ($thongbao != '')){
                                        echo $thongbao;
                                    }
                                ?>
                            </div>

                                  
                                    
                            
                        <input  type="submit" name="themmoi" value="Thêm mới">
                        <input type="reset" value="Nhập lại">
                        <a href="index.php?act=listdm"><input type="button" value="Danh sách"></a>
                    </form>
                </div>
    </div>  

    <?php

    include "boxright.php";
    ?>