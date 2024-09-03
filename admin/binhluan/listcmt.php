

<!-- ================ Order Details List ================= -->
<div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Comment</h2>
                        <!-- <a href="index.php?act=addsp" class="btn">Thêm sản phẩm</a> -->
                    </div>
                    
                    <!-- <form action="index.php?act=listsp" method="post">
                        <input type="text" name="kyw">
                        <select name="iddm" >
                            <option value="0" selected>Tất cả</option>
                               
                        </select>
                        <input type="submit" name="listtim" value="Tìm">
                    </form> -->
                    <div style="color: red; margin-bottom: 10px;">
                                <?php 
                                    if(isset($thongbao) && ($thongbao != '')){
                                        echo $thongbao;
                                    }
                                ?>
                            </div>
                    <table>
                        <thead>
                            <tr> 
                                <td>Khách hàng</td>
                                <td>Sản phẩm</td>
                                <td>Nội dung bình luận</td>                                
                                
                                <td>Ngày bình luận</td>
                                <td></td>
                               
                               
                            </tr>
                        </thead>
                        <tbody>
                                <?php
                                    
                                //         foreach ($dssp as $key ) {
                                //             extract($key);
                                //             $xoasp ="index.php?act=xoasp&id=".$id;
                                //             $suasp ="index.php?act=suasp&id=".$id; 
                                //             $hinhpath="../upload/".$img;
                                //                 if(is_file($hinhpath)){
                                //                     $hinh="<img src= '".$hinhpath."' width='50px' height='50px'>";
                                //                 }else{
                                //                     $hinhpath="No file img!";
                                //                 }
                                       
                                //         echo'<tr><td>'.$id.'</td>
                                //         <td>'.$hinh.'</td>
                                //         <td>'.$name.'
                                //         </td>
                                //         <td>'.$price.'</td>
                                //         <td>'.$luotxem.'</td>
                                        
                                //         <td >
                                //     <span class="status_return" ><a  href="'.$xoasp.'" >Delete</a></span>
                                //     <span class="status_delivered"><a href="'.$suasp.'">Edit</a></span>
                                // </td>
                                //         </tr>';
                                //         }
                                
                                ?>
                                <?php foreach ($allCmt as $key ):
                                            
                                            $xoasp ="index.php?act=xoabinhluan&id=".$key['comment_id'];
                                           
                                            // $hinhpath="../upload/".$img;
                                                // if(is_file($hinhpath)){
                                                //     $hinh="<img src= '".$hinhpath."' width='50px' height='50px'>";
                                                // }else{
                                                //     $hinhpath="No file img!";
                                                // }               ?>

                                        <tr><td><?= $key['account_name']?></td>
                                        
                                        <td><?= $key['product_name']?></td>
                                        <td><?= $key['noidung']?></td>
                                         
                                         <td><?= $key['ngaybinhluan']?></td>
                                         
                                        
                                         <td >
                                    <span class="status_return" ><a onclick="return confirm('Bạn có  muốn xóa không')"; href="<?php   echo $xoasp?>" >Delete</a></span>
                                    

                            
                                 <?php  endforeach?>
<!-- 
                            <tr>
                                <td>2</td>
                                <td>$110</td>
                                <td>âsd</td>
                                <td>áds</td>
                                <td><img src="image/img_sanpham/sp11.jpg" alt="" width="70px"></td>
                                <td><span class="status_inProgress">Sửa</span>
                                <span class="status_inProgress">Xóa</span></td>
                            </tr> -->
<!-- 
                            <tr>
                                <td>2</td>
                                <td>$1200</td>
                                <td>âsd</td>
                                <td>áds</td>
                                <td><img src="image/img_sanpham/sp11.jpg" alt="" width="70px"></td>
                                <td><span class="status_inProgress">Sửa</span>
                                <span class="status_inProgress">Xóa</span></td>
                            </tr>

                            <tr>
                                <td>3</td>
                                <td>$620</td>
                                <td>âsd</td>
                                <td>áds</td>
                                <td><img src="image/img_sanpham/sp11.jpg" alt="" width="70px"></td>
                                <td><span class="status_inProgress">Sửa</span>
                                <span class="status_inProgress">Xóa</span></td>
                            </tr>
                            
                            <tr>
                                <td>3</td>
                                <td>$620</td>
                                <td>âsd</td>
                                <td>áds</td>
                                <td><img src="image/img_sanpham/sp11.jpg" alt="" width="70px"></td>
                                <td><span class="status_inProgress">Sửa</span>
                                <span class="status_inProgress">Xóa</span></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>$620</td>
                                <td>âsd</td>
                                <td>áds</td>
                                <td><img src="image/img_sanpham/sp11.jpg" alt="" width="70px"></td>
                                <td><span class="status_inProgress">Sửa</span>
                                <span class="status_inProgress">Xóa</span></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>$620</td>
                                <td>âsd</td>
                                <td>áds</td>
                                <td><img src="image/img_sanpham/sp11.jpg" alt="" width="70px"></td>
                                <td><span class="status_inProgress">Sửa</span>
                                <span class="status_inProgress">Xóa</span></td>
                            </tr> -->

                        </tbody>
                    </table>
                </div>

                <?php
                    include "boxright.php";
                ?>