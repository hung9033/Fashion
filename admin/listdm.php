


            <!-- ================ Order Details List ================= -->
            
            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Danh mục sản phẩm</h2>
                        <a href="#" class="btn">View All</a>
                    </div>

                    <table>
                        <thead>
                            <tr>
                                <td></td>
                                <td>Mã danh mục</td>
                                <td>Tên danh mục</td>
                                <td >Hàng động</td>
                            </tr>
                        </thead>

                        <tbody>



                                 <?php foreach ($dsdm as $key ) {
                                            extract ($key);
                                            $xoadm ="index.php?act=xoadm&id=".$id;
                                            $suadm ="index.php?act=suadm&id=".$id;                
                                            echo'<tr>        
                                                    <td><input type="checkbox" name="" id=""></td>       
                                                    <td>'.$id.'</td>
                                                    <td>'.$name.'</td>

                                                    <td >
                                                        <span class="status_return" ><a  href="'.$xoadm.'" >Delete</a></span>
                                                        <span class="status_delivered"><a href="'.$suadm.'">Edit</a></span>
                                                    </td>
                                                </tr>';    

                            
                                 }?>
                           
                           <div style="color: red; margin-bottom: 10px;">
                                <?php 
                                    if(isset($thongbao) && ($thongbao != '')){
                                        echo $thongbao;
                                    }
                                ?>
                            </div>
                        </tbody>
                    </table>
                    <div class="input-add">
                        <div>
                        
                        <input type="submit" name="" value="Xóa mục chọn">
                        <input type="submit" name="" value="Xóa tất cả">
                        <a href="index.php?act=adddm"><input type="button" value="Thêm mới"></a></div>
                    </div>
            </div>

               
<?php

include "boxright.php";
?>