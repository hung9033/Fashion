<div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Tài khoản</h2>
                        <a href="#" class="btn">View All</a>
                    </div>

                    <table>
                        <thead>
                            <tr>
                                <td>Tên tài khoản</td>
                                <td>Mật khẩu</td>
                                <td >Email</td>
                                <td>Địa chỉ</td>
                                <td>SDT</td>
                                
                            </tr>
                        </thead>

                        <tbody>



                                 <?php foreach ($dstkadmin as $key ) :
                                            extract ($key);
                                            
                                                       ?>
                                            <tr>            
                                                    <td><?= $user?></td>
                                                    <td><?= $pass?></td>
                                                    <td><?= $email?></td>
                                                    <td><?= $address?></td>
                                                    <td><?= $tel?></td>
                                                   
                                                    

                                                </tr>   

                            
                                <?php endforeach ?>
                           
                           <div style="color: red; margin-bottom: 10px;">
                                
                            </div>
                        </tbody>
                    </table>
                    <!-- <div class="input-add">
                        <div>
                        
                        <input type="submit" name="" value="Xóa mục chọn">
                        <input type="submit" name="" value="Xóa tất cả">
                        <a href="index.php?act=adddm"><input type="button" value="Thêm mới"></a></div>
                    </div> -->
            </div>

               
<?php

include "boxright.php";
?>