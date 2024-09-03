<?php

// var_dump($loadonedonhang);

?>
<!-- ================ Order Details List ================= -->
<div class="details" >
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Đơn hàng</h2>
                        <a href="#" class="btn">View All</a>
                    </div>

                    <table>
                        <thead>
                            <tr>
                                <td>Image</td>
                                <td>Name</td></td>
                                <td>Price</td>
                                <td>Quantyti</td>
                                <td>Size</td>
                                <td>Color</td>
                                <td>Status</td>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <?php
                                    if(count($loadonedonhang)>0){
                                ?>
                                <td><img src="../<?=$loadonedonhang[0]['img']?>" alt="" width="50px" height="50px"></td>
                                <td><?=$loadonedonhang[0]['tensp']?></td>
                                <td><?=$loadonedonhang[0]['dongia']?></td>
                                <td><?=$loadonedonhang[0]['soluong']?></td>
                                <td><?=$loadonedonhang[0]['size']?></td>
                                <td><?=$loadonedonhang[0]['color']?></td>
                                
                        
                                <td>
                                    <?=$loadonedonhang[0]['status']?>
                                </td>
                                                  
                            </tr>
                            <?php }?>
                            <!-- <tr>
                                <td>Dell Laptop</td>
                                <td>$110</td>
                                <td>Due</td>
                                <td><span class="status_pending">Pending</span></td>
                            </tr>

                            <tr>
                                <td>Apple Watch</td>
                                <td>$1200</td>
                                <td>Paid</td>
                                <td><span class="status_return">Return</span></td>
                            </tr>

                            <tr>
                                <td>Addidas Shoes</td>
                                <td>$620</td>
                                <td>Due</td>
                                <td><span class="status_inProgress">In Progress</span></td>
                            </tr> -->

                            <form action="index.php?act=updatetrangthai" method="post">
                                    <input type="hidden" value="<?=$loadonedonhang[0]['iddh']?>" name="iddh">
                                    <select name="idstt" id="">
                                    <!-- <option selected value="<?=$loadonedonhang[0]['idstt']?>" ><?=$loadonedonhang[0]['status']?></option> -->
                                    <?php                                    
                                        foreach ( $loadall_stt as  $value) :
                                            extract( $value);
                                            
                                    ?>
                                    <option value="<?=$id?>"><?=$status?></option>
                                    <?php endforeach ?>
                                </select>
                                
                                <input type="submit" value="Cập nhật" name="capnhat">
                               
                                </form>
                        </tbody>
                        
                    </table>
                    <table>
                        <thead>
                            <tr>
                            <td>ID ODER</td>
                            <td>Payment Methods</td>
                            <td>NAME</td>
                            <td>ADDRESS</td>
                            <td>EMAIL</td>
                            <td>TEL</td>
                            <td>DATE</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?=$loadonedonhang[0]['iddh']?></td>
                                <td><?=$loadonedonhang[0]['pttt']?></td>
                                <td><?=$loadonedonhang[0]['name']?></td>
                                <td><?=$loadonedonhang[0]['address']?></td>
                                <td><?=$loadonedonhang[0]['email']?></td>
                                <td><?=$loadonedonhang[0]['tel']?></td>
                                <td><?=$loadonedonhang[0]['ngaydathang']?></td>
                            </tr>
                        </tbody>
                    </table>
                    
                </div>
                <?php
        include "boxright.php";
    ?>

