


<div class="clearfix"></div>
         <div class="hom-slider">
            <div class="container">
               <div id="sequence">
                  <div class="sequence-prev"><i class="fa fa-angle-left"></i></div>
                  <div class="sequence-next"><i class="fa fa-angle-right"></i></div>
                  <ul class="sequence-canvas">
                     <li class="animate-in">
                        <div class="flat-caption caption1 formLeft delay300 text-center"><span class="suphead">Paris show 2014</span></div>
                        <div class="flat-caption caption2 formLeft delay400 text-center">
                           <h1>Collection For Winter</h1>
                        </div>
                        <div class="flat-caption caption3 formLeft delay500 text-center">
                           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                        </div>
                        <div class="flat-button caption4 formLeft delay600 text-center"><a class="more" href="#">More Details</a></div>
                        <div class="flat-image formBottom delay200" data-duration="5" data-bottom="true"><img src="images/slider-image-01.png" alt=""></div>
                     </li>
                     <li>
                        <div class="flat-caption caption2 formLeft delay400">
                           <h1>Collection For Winter</h1>
                        </div>
                        <div class="flat-caption caption3 formLeft delay500">
                           <h2>Etiam velit purus, luctus vitae velit sedauctor<br>egestas diam, Etiam velit purus.</h2>
                        </div>
                        <div class="flat-button caption5 formLeft delay600"><a class="more" href="#">More Details</a></div>
                        <div class="flat-image formBottom delay200" data-bottom="true"><img src="images/slider-image-02.png" alt=""></div>
                     </li>
                     <li>
                        <div class="flat-caption caption2 formLeft delay400 text-center">
                           <h1>New Fashion of 2013</h1>
                        </div>
                        <div class="flat-caption caption3 formLeft delay500 text-center">
                           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. <br>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                        </div>
                        <div class="flat-button caption4 formLeft delay600 text-center"><a class="more" href="#">More Details</a></div>
                        <div class="flat-image formBottom delay200" data-bottom="true"><img src="images/slider-image-03.png" alt=""></div>
                     </li>
                  </ul>
               </div>
            </div>
            <div class="promotion-banner">
               <div class="container">
                  <div class="row">
                     <div class="col-md-4 col-sm-4 col-xs-4">
                        <div class="promo-box"><img src="images/promotion-01.png" alt=""></div>
                     </div>
                     <div class="col-md-4 col-sm-4 col-xs-4">
                        <div class="promo-box"><img src="images/promotion-02.png" alt=""></div>
                     </div>
                     <div class="col-md-4 col-sm-4 col-xs-4">
                        <div class="promo-box"><img src="images/promotion-03.png" alt=""></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="clearfix"></div>
<div class="container_fullwidth">
            <div class="container">
               <div class="hot-products">
                  
                  <h3 class="title"><strong>Hot</strong> Products</h3>
                  <div class="control"><a id="prev_hot" class="prev" href="#">&lt;</a><a id="next_hot" class="next" href="#">&gt;</a></div>
                  <ul id="hot">
                     <li>
                           
                        <div class="row">
                                    <?php
                                       foreach ($spnew1 as  $value) :
                                       extract ($value);
                                       // $hinhpath="images/products/ao_polo/".$value['product_image'];
                                       //                            if(is_file($hinhpath)){
                                       //                               $hinh="<img src= '".$hinhpath."' width='150px' height='180px'>";
                                       //                            }else{
                                       //                               $hinhpath="No file img!";
                                       //                            } 
                                 
                                       $hinh =  $img_path_products.$value['product_image'];     
                                       ?>
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 
                                 <?php
                                       if(isset($hinh)){
                                 ?>                                                                               
                                 <div class="thumbnail"><a href="index.php?act=chitietsp&idsp=<?= $value['product_id'] ?>"><img src="<?php echo $hinh; ?>" alt="" width='150px' height='180px'></a></div>
                                 <?php }else{?>
                                    <div class="thumbnail"><a href="index.php?act=chitietsp&idsp=<?= $id ?>"></a></div>
                                 <?php }?>
                                 <div class="productname"><?= $value['product_name']?></div>
                                 <h4 class="price">$<?=$price?></h4>
                                 <!-- <h4 class="productname">view:<?=$value['product_views']?></h4> -->
                                 <!-- <h4 class="productname">view:<?=$value['size_list']?></h4> -->
                                 <!-- <h4 class="productname">view:<?=$value['variation_list']?></h4> -->
                                 <form action="index.php?act=addtocart" method="post" style="display-flex">
                                 
                                    <select name="color" id="colorSelect" required style="margin:0 0 5px 35px" >
                                       <option value="" selected>Chọn màu</option>
                                       <?php 
                                       $colors = explode(",", $value['color_list']);                     
                                       foreach ($colors as $color)  :
                                          list($color_id, $color_name) = explode(':', $color);
                                       ?>                  
                                       <option value="<?= $color_name?>"><?= $color_name //. $color_id ?></option>                                      
                                       <?php endforeach?>                    
                                    </select>
                                    <select name="size"  id="sizeSelect"required >
                                       <option value="" selected>Chọn size</option>
                                       <?php 
                                       $sizes = explode(",", $value['size_list']);                      
                                       foreach ($sizes as $size)  :
                                          list($size_id, $size_name) = explode(':', $size);
                                       ?>                   
                                       <option value="<?= $size_name?>"><?=$size_name?></option>                                    
                                       <?php endforeach?>                    
                                    </select>
                           <div class="button_group">                          
                              <label for="">Qty</label>
                              <input type="number" name="sl" min=1 max=10 value="1">
                              <input type="hidden" name="id" value="<?= $value['max_idbt'] ?>">
                              <input type="hidden" name="id" value="<?= $value['product_id'] ?>">
                              <input type="hidden" name="name" value="<?= $value['product_name'] ?>">
                              <input type="hidden" name="img" value="<?= $hinh ?>">
                              <input type="hidden" name="price" value="<?= $price ?>">
                              <!-- <input type="hidden" name="size" value="<?= $value['size_list'] ?>">
                              <input type="hidden" name="color" value="<?= $value['color_list'] ?>"> -->
                              <input type="hidden" name="selectedColor" id="selectedColorInput">
                              <input type="hidden" name="selectedSize" id="selectedSizeInput">
                              <button class="button add-cart"  type="submit">Add To Cart</button>
                              
                           </form>
                           </div>
                              </div>
                           </div>
                           <!-- <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <div class="thumbnail"><a href="details.html"><img src="images/products/small/products-02.png" alt="Product Name"></a></div>
                                 <div class="productname">Iphone 5s Gold 32 Gb 2013</div>
                                 <h4 class="price">$451.00</h4>
                                 <div class="button_group"><button class="button add-cart" type="button">Add To Cart</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                              </div>
                           </div>
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <div class="offer">New</div>
                                 <div class="thumbnail"><a href="details.html"><img src="images/products/small/products-03.png" alt="Product Name"></a></div>
                                 <div class="productname">Iphone 5s Gold 32 Gb 2013</div>
                                 <h4 class="price">$451.00</h4>
                                 <div class="button_group"><button class="button add-cart" type="button">Add To Cart</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                              </div>
                           </div>
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <div class="thumbnail"><a href="details.html"><img src="images/products/small/products-04.png" alt="Product Name"></a></div>
                                 <div class="productname">Iphone 5s Gold 32 Gb 2013</div>
                                 <h4 class="price">$451.00</h4>
                                 <div class="button_group"><button class="button add-cart" type="button">Add To Cart</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                              </div>
                           </div> -->
                           <?php endforeach ?>
                        </div>
                        
                     </li>
                     <li>
                        <div class="row">
                        <?php
                              foreach ($spnew2 as  $value) :
                              extract ($value);
                                 // $hinhpath="imgaes/products/ao_polo/".$value['product_image'];
                              //       if(is_file($hinhpath)){
                              //              $hinh="<img src= '".$hinhpath."' width='150px' height='180px'>";
                              //       }else{
                              //             $hinhpath="No file img!";
                              //       } 
                                    $hinh =  $img_path_products.$value['product_image'];                      
                                       ?>
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 
                                 <?php
                                       if(isset($hinh)){
                                 ?>                                                                               
                                 <div class="thumbnail"><a href="index.php?act=chitietsp&idsp=<?= $value['product_id'] ?>"><img src="<?php echo $hinh; ?>" alt="" width='150px' height='180px'></a></div>
                                 <?php }else{?>
                                    <div class="thumbnail"><a href="index.php?act=chitietsp&idsp=<?= $id ?>"></a></div>
                                 <?php }?>
                                 <div class="productname"><?= $value['product_name']?></div>
                                 <h4 class="price">$<?=$price?></h4>
                                 <!-- <h4 class="productname">view:<?=$value['product_views']?></h4>   -->
                                 <!-- <h4 class="productname">view:<?=$value['size_list']?></h4> -->
                                 <!-- <h4 class="productname">view:<?=$value['variation_list']?></h4> -->
                                 <form action="index.php?act=addtocart" method="post" style="display-flex">
                                    <select name="color" id="colorSelect" required style="margin:0 0 5px 35px" >
                                       <option value="" selected>Chọn màu</option>
                                       <?php 
                                       $colors = explode(",", $value['color_list']);                     
                                       foreach ($colors as $color)  :
                                          list($color_id, $color_name) = explode(':', $color);
                                       ?>                  
                                       <option value="<?= $color_name?>"><?=$color_name //. $color_id?></option>                                      
                                       <?php endforeach?>                    
                                    </select>
                                    <select name="size"  id="sizeSelect"required >
                                       <option value="" selected>Chọn size</option>
                                       <?php 
                                       $sizes = explode(",", $value['size_list']);                      
                                       foreach ($sizes as $size)  :
                                          list($size_id, $size_name) = explode(':', $size);
                                       ?>                   
                                       <option value="<?= $size_name?>"><?=$size_name?></option>                                    
                                       <?php endforeach?>                    
                                    </select>
                                    <input type="text" name="id" value="<?= $value['idbt'] ?>">
                           <div class="button_group">                          
                              <label for="">Qty</label>
                             
                              <input type="number" name="sl" min=1 max=10 value="1">
                              <input type="hidden" name="id" value="<?= $value['product_id'] ?>">
                              <input type="hidden" name="name" value="<?= $value['product_name'] ?>">
                              <input type="hidden" name="img" value="<?= $hinh ?>">
                              <input type="hidden" name="price" value="<?= $price ?>">
                              <!-- <input type="hidden" name="size" value="<?= $value['size_list'] ?>">
                              <input type="hidden" name="color" value="<?= $value['color_list'] ?>"> -->
                              <input type="hidden" name="selectedColor" id="selectedColorInput">
                              <input type="hidden" name="selectedSize" id="selectedSizeInput">
                              <button class="button add-cart"  type="submit">Add To Cart</button>
                              
                           </form>
                           </div>
                              </div>
                           </div>
                           <!-- <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <div class="thumbnail"><a href="details.html"><img src="images/products/small/products-02.png" alt="Product Name"></a></div>
                                 <div class="productname">Iphone 5s Gold 32 Gb 2013</div>
                                 <h4 class="price">$451.00</h4>
                                 <div class="button_group"><button class="button add-cart" type="button">Add To Cart</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                              </div>
                           </div>
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <div class="offer">New</div>
                                 <div class="thumbnail"><a href="details.html"><img src="images/products/small/products-03.png" alt="Product Name"></a></div>
                                 <div class="productname">Iphone 5s Gold 32 Gb 2013</div>
                                 <h4 class="price">$451.00</h4>
                                 <div class="button_group"><button class="button add-cart" type="button">Add To Cart</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                              </div>
                           </div>
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <div class="thumbnail"><a href="details.html"><img src="images/products/small/products-04.png" alt="Product Name"></a></div>
                                 <div class="productname">Iphone 5s Gold 32 Gb 2013</div>
                                 <h4 class="price">$451.00</h4>
                                 <div class="button_group"><button class="button add-cart" type="button">Add To Cart</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                              </div>
                           </div> -->
                           <?php endforeach ?>
                        </div>
                     </li>
                     
                  </ul>
               </div>
               <div class="clearfix"></div>
               <div class="featured-products">
                  <h3 class="title"><strong>Featured </strong> Products</h3>
                  <div class="control"><a id="prev_featured" class="prev" href="#">&lt;</a><a id="next_featured" class="next" href="#">&gt;</a></div>
                  <ul id="featured">
                     <li>
                        <div class="row">
                              <?php
                                             foreach ($spview1 as  $value) :
                                             extract ($value);
                                            
                                             $hinh =  $img_path_products.$value['product_image'];      
                                          
                                             ?>
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <!-- <div class="offer">- %20</div> -->
                                 <?php
                                       if(isset($hinh)){
                                 ?>                                                                               
                                 <div class="thumbnail"><a href="index.php?act=chitietsp&idsp=<?= $value['product_id'] ?>"><img src="<?php echo $hinh; ?>" alt="" width='150px' height='180px'></a></div>
                                 <?php }else{?>
                                    <div class="thumbnail"><a href="index.php?act=chitietsp&idsp=<?= $id ?>"></a></div>
                                 <?php }?>
                                 <div class="productname"><?= $value['product_name']?></div>
                                 <h4 class="price">$<?=$price?></h4>
                                 <h4 class="productname">view:<?=$value['product_views']?></h4>
                                 <!-- <h4 class="productname">view:<?=$value['size_list']?></h4> -->
                                 <!-- <h4 class="productname">view:<?=$value['variation_list']?></h4> -->
                                 <form action="index.php?act=addtocart" method="post" style="display-flex">
                                    <select name="color" id="colorSelect" required style="margin:0 0 5px 35px" >
                                       <option value="" selected>Chọn màu</option>
                                       <?php 
                                       $colors = explode(",", $value['color_list']);                     
                                       foreach ($colors as $color)  :
                                          list($color_id, $color_name) = explode(':', $color);
                                       ?>                  
                                       <option value="<?= $color_name?>"><?=$color_name //. $color_id?></option>                                      
                                       <?php endforeach?>                    
                                    </select>
                                    <select name="size"  id="sizeSelect"required >
                                       <option value="" selected>Chọn size</option>
                                       <?php 
                                       $sizes = explode(",", $value['size_list']);                      
                                       foreach ($sizes as $size)  :
                                          list($size_id, $size_name) = explode(':', $size);
                                       ?>                   
                                       <option value="<?= $size_name?>"><?=$size_name?></option>                                    
                                       <?php endforeach?>                    
                                    </select>
                           <div class="button_group">                          
                              <label for="">Qty</label>
                              <input type="number" name="sl" min=1 max=10 value="1">
                              <input type="hidden" name="id" value="<?= $value['product_id'] ?>">
                              <input type="hidden" name="name" value="<?= $value['product_name'] ?>">
                              <input type="hidden" name="img" value="<?= $hinh ?>">
                              <input type="hidden" name="price" value="<?= $price ?>">
                              <!-- <input type="hidden" name="size" value="<?= $value['size_list'] ?>">
                              <input type="hidden" name="color" value="<?= $value['color_list'] ?>"> -->
                              <input type="hidden" name="selectedColor" id="selectedColorInput">
                              <input type="hidden" name="selectedSize" id="selectedSizeInput">
                              <button class="button add-cart"  type="submit">Add To Cart</button>
                              <!-- <button class="button compare" type="button"><i class="fa fa-exchange"></i></button>
                              <button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button> -->
                           </form>
                           </div>
                              </div>
                           </div>
                           <!-- <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <div class="thumbnail"><a href="details.html"><img src="images/products/small/products-06.png" alt="Product Name"></a></div>
                                 <div class="productname">Iphone 5s Gold 32 Gb 2013</div>
                                 <h4 class="price">$451.00</h4>
                                 <div class="button_group"><button class="button add-cart" type="button">Add To Cart</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                              </div>
                           </div>
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <div class="offer">New</div>
                                 <div class="thumbnail"><a href="details.html"><img src="images/products/small/products-07.png" alt="Product Name"></a></div>
                                 <div class="productname">Iphone 5s Gold 32 Gb 2013</div>
                                 <h4 class="price">$451.00</h4>
                                 <div class="button_group"><button class="button add-cart" type="button">Add To Cart</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                              </div>
                           </div>
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <div class="thumbnail"><a href="details.html"><img src="images/products/small/products-04.png" alt="Product Name"></a></div>
                                 <div class="productname">Iphone 5s Gold 32 Gb 2013</div>
                                 <h4 class="price">$451.00</h4>
                                 <div class="button_group"><button class="button add-cart" type="button">Add To Cart</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                              </div>
                           </div> -->
                           <?php endforeach ?>
                        </div>
                     </li>
                     <li>
                        <div class="row">
                              <?php
                                                   foreach ($spview2 as  $value) :
                                                   extract ($value);
                                                   // $hinhpath="images/products/ao_polo/".$value['product_image'];
                                                   //                            if(is_file($hinhpath)){
                                                   //                               $hinh="<img src= '".$hinhpath."' width='150px' height='180px'>";
                                                   //                            }else{
                                                   //                               $hinhpath="No file img!";
                                                   //                            } 
                                 $hinh =  $img_path_products.$value['product_image'];             
                                                
                              ?>
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <!-- <div class="offer">- %20</div> -->
                                 <?php
                                       if(isset($hinh)){
                                 ?>                                                                               
                                 <div class="thumbnail"><a href="index.php?act=chitietsp&idsp=<?= $value['product_id'] ?>"><img src="<?php echo $hinh; ?>" alt="" width='150px' height='180px'></a></div>
                                 <?php }else{?>
                                    <div class="thumbnail"><a href="index.php?act=chitietsp&idsp=<?= $id ?>"></a></div>
                                 <?php }?>
                                 <div class="productname"><?= $value['product_name']?></div>
                                 <h4 class="price">$<?=$price?></h4>
                                 <h4 class="productname">view:<?=$value['product_views']?></h4>
                                 <!-- <h4 class="productname">view:<?=$value['size_list']?></h4> -->
                                 <!-- <h4 class="productname">view:<?=$value['variation_list']?></h4> -->
                                 <form action="index.php?act=addtocart" method="post" style="display-flex">
                                    <select name="color" id="colorSelect" required style="margin:0 0 5px 35px" >
                                       <option value="" selected>Chọn màu</option>
                                       <?php 
                                       $colors = explode(",", $value['color_list']);                     
                                       foreach ($colors as $color)  :
                                          list($color_id, $color_name) = explode(':', $color);
                                       ?>                  
                                       <option value="<?= $color_id?>"><?=$color_name //. $color_id?></option>                                      
                                       <?php endforeach?>                    
                                    </select>
                                    <select name="size"  id="sizeSelect"required >
                                       <option value="" selected>Chọn size</option>
                                       <?php 
                                       $sizes = explode(",", $value['size_list']);                      
                                       foreach ($sizes as $size)  :
                                          list($size_id, $size_name) = explode(':', $size);
                                       ?>                   
                                       <option value="<?= $size_name?>"><?=$size_name?></option>                                    
                                       <?php endforeach?>                    
                                    </select>
                           <div class="button_group">                          
                              <label for="">Qty</label>
                              <input type="number" name="sl" min=1 max=10 value="1">
                              <input type="hidden" name="id" value="<?= $value['product_id'] ?>">
                              <input type="hidden" name="name" value="<?= $value['product_name'] ?>">
                              <input type="hidden" name="img" value="<?= $hinh ?>">
                              <input type="hidden" name="price" value="<?= $price ?>">
                              <!-- <input type="hidden" name="size" value="<?= $value['size_list'] ?>">
                              <input type="hidden" name="color" value="<?= $value['color_list'] ?>"> -->
                              <input type="hidden" name="selectedColor" id="selectedColorInput">
                              <input type="hidden" name="selectedSize" id="selectedSizeInput">
                              <button class="button add-cart"  type="submit">Add To Cart</button>
                              
                           </form>
                           </div>
                              </div>
                           </div>
                           <!-- <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <div class="thumbnail"><a href="details.html"><img src="images/products/small/products-02.png" alt="Product Name"></a></div>
                                 <div class="productname">Iphone 5s Gold 32 Gb 2013</div>
                                 <h4 class="price">$451.00</h4>
                                 <div class="button_group"><button class="button add-cart" type="button">Add To Cart</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                              </div>
                           </div>
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <div class="thumbnail"><a href="details.html"><img src="images/products/small/products-03.png" alt="Product Name"></a></div>
                                 <div class="productname">Iphone 5s Gold 32 Gb 2013</div>
                                 <h4 class="price">$451.00</h4>
                                 <div class="button_group"><button class="button add-cart" type="button">Add To Cart</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                              </div>
                           </div>
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <div class="thumbnail"><a href="details.html"><img src="images/products/small/products-04.png" alt="Product Name"></a></div>
                                 <div class="productname">Iphone 5s Gold 32 Gb 2013</div>
                                 <h4 class="price">$451.00</h4>
                                 <div class="button_group"><button class="button add-cart" type="button">Add To Cart</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                              </div>
                           </div> -->
                           <?php endforeach ?>
                        </div>
                     </li>
                  </ul>
               </div>
               <div class="clearfix"></div>
               <div class="our-brand">
                  <h3 class="title"><strong>Our </strong> Brands</h3>
                  <div class="control"><a id="prev_brand" class="prev" href="#">&lt;</a><a id="next_brand" class="next" href="#">&gt;</a></div>
                  <ul id="braldLogo">
                     <li>
                        <ul class="brand_item">
                           <li>
                              <a href="#">
                                 <div class="brand-logo"><img src="images/envato.png" alt=""></div>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                                 <div class="brand-logo"><img src="images/themeforest.png" alt=""></div>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                                 <div class="brand-logo"><img src="images/photodune.png" alt=""></div>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                                 <div class="brand-logo"><img src="images/activeden.png" alt=""></div>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                                 <div class="brand-logo"><img src="images/envato.png" alt=""></div>
                              </a>
                           </li>
                        </ul>
                     </li>
                     <li>
                        <ul class="brand_item">
                           <li>
                              <a href="#">
                                 <div class="brand-logo"><img src="images/envato.png" alt=""></div>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                                 <div class="brand-logo"><img src="images/themeforest.png" alt=""></div>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                                 <div class="brand-logo"><img src="images/photodune.png" alt=""></div>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                                 <div class="brand-logo"><img src="images/activeden.png" alt=""></div>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                                 <div class="brand-logo"><img src="images/envato.png" alt=""></div>
                              </a>
                           </li>
                        </ul>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
<script>
    // Sử dụng jQuery để bắt sự kiện thay đổi của select
    $(document).ready(function () {
        $('#colorSelect, #sizeSelect').change(function () {
            // Lấy giá trị của option đã chọn
            var selectedColor = $('#colorSelect').val();
            var selectedSize = $('#sizeSelect').val();

            // Gán giá trị cho input hidden
            $('#selectedColorInput').val(selectedColor);
            $('#selectedSizeInput').val(selectedSize);
        });
    });
</script>