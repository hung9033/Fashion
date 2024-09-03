
<div class="clearfix">
</div>
<div class="container_fullwidth">
  <div class="container shopping-cart">
    <div class="row">
      <div class="col-md-12">
        <h3 class="title">
          Shopping Cart
        </h3>
        <div class="clearfix">
        </div>      
        <table class="shop-table">
        <form action="index.php?act=bill" method="post">
          <thead>
            <tr>
              <th>
                Image
              </th>
              <th>
                Dtails
              </th>
              <th>
                Quantity
              </th>
              <th>
                Color
              </th>
              <th>
                Size
              </th>
              <th>
                Price
              </th>
              <th>
                Delete
              </th>
            </tr>
          </thead>
          <tbody>         
            <?php
            //  var_dump($_SESSION['mycart']);
                $tong=0;
                $i=0;                
                    foreach ($_SESSION['mycart'] as $key ) :
                        // $hinh =$img_path.$key[2];
                        // $hinhpath="../images/products/ao_polo/".$key[2];
                        //         if(is_file($hinhpath)){
                        //           $hinh="<img src= '".$hinhpath."'>";
                        //         }else{
                        //           $hinhpath="No file img!";
                        //         } 
                        $hinh =  $img_path_products.$key[2];  
                        $thanhtien=$key[3]*$key[4];
                        $tong=$tong+$thanhtien;
                        $xoa= '<a href="index.php?act=delcart&idcart='.$i.'">Delete</a>';
                ?>
                <tr>
                <td>
                  <img src="<?=$key[2]?>" alt=""> 
                </td>
                <td>
                  <div class="shop-details">
                    <div class="productname">
                    <?=$key[1]?>
                    </div>
                    <p>
                      <img alt="" src="images/star.png">
                      <a class="review_num" href="#">
                        02 Review(s)
                      </a>
                    </p>
                    <div class="color-choser">
                      <span class="text">
                        Product Color :
                      </span>
                      <ul>
                        <li>
                          <a class="black-bg " href="#">
                            black
                          </a>
                        </li>
                        <li>
                          <a class="red-bg" href="#">
                            light red
                          </a>
                        </li>
                      </ul>
                    </div>
                    <p>
                      Product Code :
                      <strong class="pcode">
                        Dress 120
                      </strong>
                    </p>
                  </div>
                </td>                                
                <td>
                  <h5>
                    <?=$key[4]?>
                  </h5>
                </td>                                 
                <td>
                <!-- <select name="color" required >
                  <option value="" selected>Chọn màu</option>
                  <?php 
                    $colors = explode(",", $key[6]);                     
                    foreach ($colors as $color)  :
                      list($color_id, $color_name) = explode(':', $color);
                    ?>                  
                    <option value="<?= $color_name?>"><?=$color_name?></option>                                      
                  <?php endforeach?>                    
                </select> -->
                <?php 
                    //  if(isset($color1) && ($color1 != '')){
                    //      echo $color1;               
                    //   }    
                    echo $key[6];                          
                ?>      
                </td>
                <td>
                <!-- <select name="size" required >
                  <option value="" selected>Chọn size</option>
                  <?php 
                    $sizes = explode(",", $key[7]);                      
                    foreach ($sizes as $size)  :
                      list($size_id, $size_name) = explode(':', $size);
                    ?>                   
                    <option value="<?= $size_name?>"><?=$size_name?></option>                                    
                    <?php endforeach?>                    
                  </select> -->
                  <?php 
                    //  if(isset($size1) && ($size1 != '')){
                    //      echo $size1;               
                    //   }        
                    echo $key[7];                     
                ?>      
                </td>
                
                <td>
                  <h5>
                    <strong class="red">
                      $<?=$key[3]?>
                    </strong>
                  </h5>
                </td>
                <td>
                <?=$xoa?>                    
                  </a>
                </td>
              </tr>                                                                  
              <?php $i+=1;endforeach ?>                            
          </tbody>
          <tfoot>          
            <tr>
              <td colspan="6">
                <a style="font-size:17px"href="index.php"  class="pull-left">
                Continue Shopping
                </a>
                <?php if (isset($_SESSION['mycart']) && !empty($_SESSION['mycart'])) {
                  echo '
                <button class=" pull-right">
                Update Shopping Cart</a> 
                </button>';
                }else{
                    echo'<h4 style="text-align:center;color:red">There are no products in the cart</h4>';
                }?>
              </td>
            </tr>
            
          </tfoot>
        </form>
        </table>     
        <div class="clearfix">
        </div>
        <div class="row">         
          <div class="col-md-4 col-sm-6">
            <div class="shippingbox">
              <h5>
                Discount Codes
              </h5>
              <form>
                <label>
                  Enter your coupon code if you have one
                </label>
                <input type="text" name="">
                <div class="clearfix">
                </div>
                <button>
                  Get A Qoute
                </button>
              </form>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="shippingbox">
              
              <div class="grandtotal">
                <h5>
                  GRAND TOTAL
                </h5>
                <span>
                  $<?=$tong?>
                </span>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="clearfix">
    </div>
    <div class="our-brand">
      <h3 class="title">
        <strong>
          Our
        </strong>
        Brands
      </h3>
      <div class="control">
        <a id="prev_brand" class="prev" href="#">
          &lt;
        </a>
        <a id="next_brand" class="next" href="#">
          &gt;
        </a>
      </div>
      <ul id="braldLogo">
        <li>
          <ul class="brand_item">
            <li>
              <a href="#">
                <div class="brand-logo">
                  <img src="images/envato.png" alt="">
                </div>
              </a>
            </li>
            <li>
              <a href="#">
                <div class="brand-logo">
                  <img src="images/themeforest.png" alt="">
                </div>
              </a>
            </li>
            <li>
              <a href="#">
                <div class="brand-logo">
                  <img src="images/photodune.png" alt="">
                </div>
              </a>
            </li>
            <li>
              <a href="#">
                <div class="brand-logo">
                  <img src="images/activeden.png" alt="">
                </div>
              </a>
            </li>
            <li>
              <a href="#">
                <div class="brand-logo">
                  <img src="images/envato.png" alt="">
                </div>
              </a>
            </li>
          </ul>
        </li>
        <li>
          <ul class="brand_item">
            <li>
              <a href="#">
                <div class="brand-logo">
                  <img src="images/envato.png" alt="">
                </div>
              </a>
            </li>
            <li>
              <a href="#">
                <div class="brand-logo">
                  <img src="images/themeforest.png" alt="">
                </div>
              </a>
            </li>
            <li>
              <a href="#">
                <div class="brand-logo">
                  <img src="images/photodune.png" alt="">
                </div>
              </a>
            </li>
            <li>
              <a href="#">
                <div class="brand-logo">
                  <img src="images/activeden.png" alt="">
                </div>
              </a>
            </li>
            <li>
              <a href="#">
                <div class="brand-logo">
                  <img src="images/envato.png" alt="">
                </div>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</div>
<div class="clearfix">
</div>