

<div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Thêm sản phẩm</h2>
                        <a href="index.php?act=listsp" class="btn">View All</a>
                    </div>
                <div class="input-add">
                    <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
                    <div style="color: red; margin-bottom: 10px;">
                                
                                
                                <?php 
                                    if(isset($thongbao) && ($thongbao != '')){
                                        echo $thongbao;
                                    }
                                ?> <br>                      
                    </div>
                    
                        Tên: <br>
                            <input class="input_adddm" type="text" name="name" placeholder="Nhập tên loại hàng" required><br>
                            
                        Ảnh:
                        <input class="input_adddm" type="file" name="img" required> <br>            <br>         
                                  
                        Giá:
                        <input class="input_adddm" type="text" name="price" placeholder="Nhập giá hàng hóa" required><br>     <br>       
                        
                        Danh mục:
                        <select name="iddm" required >
                        <option value="" disabled selected>-- Chọn một --</option>
                               <?php foreach ($dsdm as $value){
                                extract($value);
                                echo'<option value="'.$id.'">'.$name.'</option>';
                                    
                                } ?>
                        </select> <br><br>
                             
                        Số lượng
                        <input type="text" name="quantity" id="" required><br><br>
                        Mô tả:
                        <textarea style="resize: none; 
                                            padding: 10px;
                                            overflow: auto;
                                            
                                            border: none;
                                            outline: none;
                                            border-bottom: #D4CCCC solid 1px;" 
                                            name="mota" id="" cols="90" rows="3" ></textarea>  <br><br>  
                                            
                        <!-- Input fields for product variations -->
                        <label for="size">Size:</label>
                        <select name="size"required>
                        <option value="" disabled selected>-- Chọn một --</option>
                            <?php
                            // Lấy danh sách kích thước từ Model và hiển thị trong dropdown
                            $sizes = getSizes();
                            foreach ($sizes as $size) {
                                extract($size);
                                echo "
                                
                                <option value=\"$id\">$size</option>";
                            }
                            ?>
                        </select>
                        
                        <label for="color">Color:</label>
                        <select name="color"required >
                        <option value="" disabled selected>-- Chọn một --</option>
                            <?php
                            // Lấy danh sách màu sắc từ Model và hiển thị trong dropdown
                            $colors = getColors();
                            foreach ($colors as $color) {
                                extract($color);
                                echo "<option value=\"$id\">$color</option>";
                            }
                            ?>
                        </select><br><br><br>
                        
                        <input  type="submit"  value="Thêm mới">
                        <input type="reset" value="Nhập lại">
                        <a href="index.php?act=listsp"><input type="button" value="Danh sách"></a>
                    </form>
                </div>
    </div>  

    <?php

    include "./boxright.php";
    ?>
