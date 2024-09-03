<!-- =============================new custom=========================== -->
<?php



?>
<div class="recenCustomers">
                    <div class="cardHeader">
                        <h2>Recent Customers</h2>
                        <a href="index.php?act=taikhoan" class="btn">View All</a>
                    </div>
                    <table>
                        <?php
                            $load_tkuser=loadall_taikhoan();
                            foreach ($load_tkuser as  $value) :
                                
                            
                        ?>
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="../image/img_LOGO/avt.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4><?=$value['user']?> <br><span>VietNam</span> </h4>
                            </td>
                        </tr>
                        <?php endforeach?>
                        <!-- <tr>
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

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="../image/img_LOGO/avt.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Hoàng Hùng <br><span>VietNam</span> </h4>
                            </td>
                        </tr> -->

                    </table>

                </div>