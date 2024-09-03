
<!-- ================ Order Details List ================= -->
<div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Recent Orders</h2>
                        <a href="index.php?act=addsp" class="btn">Thêm sản phẩm</a>
                    </div>
                  
                    <form action="index.php?act=listsp" method="post">
                        <input type="text" name="kyw">
                        <select name="iddm" >
                            <option value="0" selected>Tất cả</option>
                               <?php foreach ($dsdm as $value){
                                extract($value);
                                echo'<option value="'.$id.'">'.$name.'</option>';
                                    
                                } ?>
                        </select>
                        <input type="submit" name="listtim" value="Tìm">
                    </form>
                    <table>
                        <thead>
                            <tr> 
                                <td>ID</td>
                                <td>Ảnh</td>
                                <td>Tên</td>
                                <td>Giá</td>
                                <td>Lượt xem</td>
                                <td>Hành động</td>
                               
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
                                <?php 
                                $dsspall = array_map(null, $dssp, $spbt);
                                foreach ($dsspall as [$value1, $value2]) :

                                    // extract($item);
                                    // var_dump($item);
                                    
                                   
                                            // $xoasp ="index.php?act=xoasp&id=".$id ."index.php?act=xoasp&idbt=";
                                            $xoasp= "index.php?act=xoasp&id={$value1['id']}&idbt={$value2['idbt']}";
                                            
                                            $suasp ="index.php?act=suasp&id=".$value1['id']; 
                                            $hinhpath="../images/products/ao_polo/".$value1['img'];
                                                if(is_file($hinhpath)){
                                                    $hinh="<img src= '".$hinhpath."' width='50px' height='50px'>";
                                                }else{
                                                    $hinhpath="No file img!";
                                                }               ?>

                                            <tr><td><?= $value1['id']?></td>
                                            <?php
                                            if(isset($hinh)){
                                                
                                            
                                            ?>
                                            <td><?=$hinh?></td>
                                            <?php }else{?>
                                        <td>Không có hình Ảnh</td>
                                            <?php }?>
                                        <td><?= $value1['name']?>
                                        </td>
                                         <td><?= $value1['price']?></td>
                                         <td><?= $value1['view']?></td>
                                        
                                         <td >
                                    <span class="status_return" ><a onclick="return confirm('Bạn có  muốn xóa không')"; href="<?php   echo $xoasp?>" >Delete</a></span>
                                    <span class="status_delivered"><a href="<?php   echo $suasp?>">Edit</a></span>

                            
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

                        </tbody></div>
                <div style="color: red; ">
                                <?php 
                                    if(isset($thongbao) && ($thongbao != '')){
                                        echo $thongbao;
                                    }
                                ?>
                            </div>
                    </table>
                
</div>
    <?php
        include "boxright.php";
    ?>