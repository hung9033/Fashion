
<div class="clearfix">
</div>
<div class="container_fullwidth">
  <div class="container shopping-cart">
    <div class="row">
      <div class="col-md-12">
      <div class="step-description">
        
              <form action="index.php?act=bill" method="post">
                <input type="hidden" name="tongdh" value="<?= $tdh?>">
                <div class="row">
                  <div class="col-md-6 col-sm-6">
                    <div class="your-details">
                      <h5>
                      Information line : 
                      </h5>
                      <div class="form-row">
                        <h6>Name :</h6>
                
                      </div>
                      <div class="form-row">
                      <h6>Email :</h6>
                    
                      </div>
                      <div class="form-row">
                      <h6>Telephone :</h6>
                        
                      </div>
                      <label for="" >
                        <strong><h5>Payment Methods</h5></strong>
                      </label>
                      <div class="form-row">
                      <h6> pttt</h6>
                        
                      </div>
                      

                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6">
                    <div class="your-details">
                      <h5>
                        Your Address
                      </h5>
                      <div class="form-row">
                      <h6>Address :</h6>
                      </div>
                      <div class="form-row">
                      <h6>Total :</h6>
                        
                      </div>
                      
                      
                    </div>
                  </div>
                </div>
              </form>
            </div>
        <h3 class="title">
          Dơn Hàng
        </h3>
        <div class="clearfix">
        </div>
        <table class="shop-table">
          <thead>
            <tr>
              <th>
                Image
              </th>
              <th>
                Dtails
              </th>
              <th>
                Price
              </th>
              <th>
                Color
              </th>
              <th>
                Quantity
              </th>
              <th>
                Size
              </th>
              <th>
                Delete
              </th>
            </tr>
          </thead>
          <tbody>
            <?php
               
                $tong=0;
                $i=0;
                
                    foreach ($_SESSION['mycart'] as $key ) :
                        // $hinh =$img_path.$key[2];
                        $hinhpath="../images/products/ao_polo/".$key[2];
                                if(is_file($hinhpath)){
                                  $hinh="<img src= '".$hinhpath."'>";
                                }else{
                                  $hinhpath="No file img!";
                                } 
                        $thanhtien=$key[3]*$key[4];
                        $tong=$tong+$thanhtien;
                        $xoa= '<a href="index.php?act=delcart&idcart='.$i.'"><input style="width:15px;" type="image" src="images/remove.png" alt="">';
                ?>
                <tr>
                <td>
                   <?=$key[2]?>
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
                    $<?=$key[3]?>
                  </h5>
                </td>
                <td>
                  <h5>
                    <?=$key[4]?>
                  </h5>
                </td>
                
                  
                
                <td>
                  <select name="">
                    <?php 
                      $color= getColors();
                    foreach ($color as $value) :
                      extract($value);
                    ?>
                    <option >
                    <?=$color?>
                    </option>
                    <?php endforeach?>
                  </select>
                </td>
                <td>
                  <select name="">
                  <?php 
                  $size= getSizes();
                  foreach ($size as $value) :
                      extract($value)
                    ?>
                    <option >
                    <?=$size?>
                    </option>
                    <?php endforeach?>
                    
                  </select>
                </td>
                
                <td>
                <?=$xoa?>
                    
                  </a>
                </td>
              </tr>
               
                 
                  
                

              <?php $i+=1;endforeach ?>  
            

          </tbody>
          
        </table>
        <div class="clearfix">
        </div>
        <div class="row">
          
          
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