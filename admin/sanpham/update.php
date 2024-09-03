<?php
    if(is_array($sp)){
        extract($sp);
    }
    $hinhpath="../images/products/ao_polo/".$img;
                                                if(is_file($hinhpath)){
                                                    $hinh="<img src= '".$hinhpath."' width='50px' height='50px'>";
                                                }else{
                                                    $hinhpath="No file img!";
                                                }          
?>

<div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Sửa sản phẩm</h2>
                        <a href="#" class="btn">View All</a>
                    </div>
                <div class="input-add">
                    <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">

            
                       
                    
                    
                        Tên: <br>
                            <input class="input_adddm" type="text" name="ten" value="<?php echo $name;?>" placeholder="Nhập tên loại hàng"><br>
                            
                        Ảnh:
                        <input class="input_adddm" type="file" name="img" ><br>            <br>         
                            <?= $hinh;?>    <br><br>
                        Giá:
                        <input class="input_adddm" type="text" name="price" value="<?php echo $price;?>" placeholder="Nhập giá hàng hóa"><br>     <br>       
                        
                        Loại hàng:
                        <select name="iddm" >
                            <option value="0" selected>Tất cả</option>
                               <?php foreach ($dsdm as $value){
                                extract($value);
                                if($iddm==$id)
                                echo'<option value="'.$id.'" selected >'.$name.'</option>';
                                else     echo'<option value="'.$id.'"  >'.$name.'</option>';
                                } ?>
                        </select><br> <br>

                        Lượt xem:
                        <input type="text" name="view" value="<?php echo $view;?>" id=""><br><br>
                        Mô tả:
                        <input type="text" name="mota" value="<?php echo $mota;?>" id=""><br><br>
                        
                                            
                        <input type="hidden" name ="id" value="<?=$id;?>">
                        <input  type="submit" name="capnhat" value="Cập Nhật">
                        <input type="reset" value="Nhập lại">
                        <a href="index.php?act=listsp"><input type="button" value="Danh sách"></a>
                    </form>
                </div>
    </div>  

    <?php

    include "./boxright.php";
    ?>
