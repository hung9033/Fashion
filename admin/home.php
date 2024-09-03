

           
            <!-- ================ Order Details List ================= -->
            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Order</h2>
                        <!-- <a href="#" class="btn"></a> -->
                    </div>
                <?php if (isset($thongbao)) {
                    echo $thongbao;
                } ?>
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
                                foreach ($load_dh as $dh) :
                                    $class = '';
                                    if ($dh['idstt'] == 1) {
                                        $class="status_pending"; 
                                    } elseif ($dh['idstt'] == 2) {
                                        $class="status_inProgress"; 
                                    } elseif ($dh['idstt'] == 3) {
                                        $class="status_inProgress"; 
                                    } elseif ($dh['idstt'] == 4) {
                                        $class="status_delivered"; 
                                    } elseif ($dh['idstt'] == 5) {
                                        $class="status_return"; 
                                    } else {
                                        $class = 'default-class'; 
                                    }
                            ?>
                                <td><img src="../<?=$dh['img']?>" alt="" width="50px" height="50px"></td>
                                <td><?=$dh['tensp']?></td>
                                <td><?=$dh['dongia']?></td>
                                <td><?=$dh['soluong']?></td>
                                <td><?=$dh['size']?></td>
                                <td><?=$dh['color']?></td>                                                                                                       
                                <td><span class="<?=$class?>"><a href="index.php?act=suatrangthai&iddh=<?=$dh['iddh']?>"><?=$dh['status']?></a></span></td>
                                
                            </tr>

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

                        <?php endforeach ?>
                        </tbody>
                    </table>
                    
                </div>
                <?php
        include "boxright.php";
    ?>
                <!-- =============================new custom=========================== -->
                <!-- <div class="recenCustomers">
                    <div class="cardHeader">
                        <h2>Recent Customers</h2>
                        <a href="#" class="btn">View All</a>
                    </div>
                    <table>
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="../image/img_LOGO/avt.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Hoàng Hùng <br><span>VietNam</span> </h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="../image/img_LOGO/avt.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Hoàng Hùng <br><span>VietNam</span> </h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="../image/img_LOGO/avt.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Hoàng Hùng <br><span>VietNam</span> </h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="../image/img_LOGO/avt.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Hoàng Hùng <br><span>VietNam</span> </h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="../image/img_LOGO/avt.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Hoàng Hùng <br><span>VietNam</span> </h4>
                            </td>
                        </tr>

                    </table>

                </div> -->
            </div>
        </div>
        